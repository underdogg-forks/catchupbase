<?php
/**
 * Controller generated using LaraAdmin
 * Help: http://laraadmin.com
 * LaraAdmin is open-sourced software licensed under the MIT license.
 * Developed by: Dwij IT Solutions
 * Developer Website: http://dwijitsolutions.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Validator;
use Datatables;
use Collective\Html\FormFacade as Form;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;

use App\Models\Ticket;

class TicketsController extends Controller
{
    public $show_action = true;

    /**
     * Display a listing of the Organizations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $module = Module::get('Tickets');

        if (Module::hasAccess($module->id)) {
            return View('la.tickets.index', [
                'show_actions' => $this->show_action,
                'listing_cols' => Module::getListingColumns('Tickets'),
                'module' => $module
            ]);
        } else {
            return redirect(config('laraadmin.adminRoute') . "/");
        }
    }

    /**
     * Show the form for creating a new organization.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created organization in database.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Module::hasAccess("Tickets", "create")) {

            $rules = Module::validateRules("Tickets", $request);

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $insert_id = Module::insert("Tickets", $request);

            return redirect()->route(config('laraadmin.adminRoute') . '.tickets.index');

        } else {
            return redirect(config('laraadmin.adminRoute') . "/");
        }
    }

    /**
     * Display the specified organization.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Module::hasAccess("Tickets", "view")) {

            $ticket = Ticket::find($id);
            if (isset($ticket->id)) {
                $module = Module::get('Tickets');
                $module->row = $ticket;

                return view('la.tickets.show', [
                    'module' => $module,
                    'view_col' => $module->view_col,
                    'no_header' => true,
                    'no_padding' => "no-padding"
                ])->with('ticket', $ticket);
            } else {
                return view('errors.404', [
                    'record_id' => $id,
                    'record_name' => ucfirst("ticket"),
                ]);
            }
        } else {
            return redirect(config('laraadmin.adminRoute') . "/");
        }
    }

    /**
     * Show the form for editing the specified organization.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Module::hasAccess("Tickets", "edit")) {
            $ticket = Ticket::find($id);
            if (isset($ticket->id)) {
                $module = Module::get('Tickets');

                $module->row = $ticket;

                return view('la.organizations.edit', [
                    'module' => $module,
                    'view_col' => $module->view_col,
                ])->with('ticket', $ticket);
            } else {
                return view('errors.404', [
                    'record_id' => $id,
                    'record_name' => ucfirst("organization"),
                ]);
            }
        } else {
            return redirect(config('laraadmin.adminRoute') . "/");
        }
    }

    /**
     * Update the specified organization in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Module::hasAccess("Tickets", "edit")) {

            $rules = Module::validateRules("Tickets", $request, true);

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();;
            }

            $insert_id = Module::updateRow("Tickets", $request, $id);

            return redirect()->route(config('laraadmin.adminRoute') . '.tickets.index');

        } else {
            return redirect(config('laraadmin.adminRoute') . "/");
        }
    }

    /**
     * Remove the specified organization from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Module::hasAccess("Tickets", "delete")) {
            Organization::find($id)->delete();

            // Redirecting to index() method
            return redirect()->route(config('laraadmin.adminRoute') . '.tickets.index');
        } else {
            return redirect(config('laraadmin.adminRoute') . "/");
        }
    }

    /**
     * Datatable Ajax fetch
     *
     * @return
     */
    public function dtajax(Request $request)
    {
        $module = Module::get('Tickets');
        $listing_cols = Module::getListingColumns('Tickets');

        $values = DB::table('tickets')->select($listing_cols)->whereNull('deleted_at');
        $out = Datatables::of($values)->make();
        $data = $out->getData();

        $fields_popup = ModuleFields::getModuleFields('Tickets');

        for ($i = 0; $i < count($data->data); $i++) {
            for ($j = 0; $j < count($listing_cols); $j++) {
                $col = $listing_cols[$j];
                if ($fields_popup[$col] != null && $fields_popup[$col]->field_type_str == "Image") {
                    if ($data->data[$i][$j] != 0) {
                        $img = \App\Models\Upload::find($data->data[$i][$j]);
                        if (isset($img->name)) {
                            $data->data[$i][$j] = '<img src="' . $img->path() . '?s=50">';
                        } else {
                            $data->data[$i][$j] = "";
                        }
                    } else {
                        $data->data[$i][$j] = "";
                    }
                }
                if ($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
                    $data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
                }
                if ($col == $module->view_col) {
                    $data->data[$i][$j] = '<a href="' . url(config('laraadmin.adminRoute') . '/organizations/' . $data->data[$i][0]) . '">' . $data->data[$i][$j] . '</a>';
                }
                // else if($col == "author") {
                //    $data->data[$i][$j];
                // }
            }

            if ($this->show_action) {
                $output = '';
                if (Module::hasAccess("Tickets", "edit")) {
                    $output .= '<a href="' . url(config('laraadmin.adminRoute') . '/tickets/' . $data->data[$i][0] . '/edit') . '" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
                }

                if (Module::hasAccess("Organizations", "delete")) {
                    $output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.tickets.destroy', $data->data[$i][0]], 'method' => 'delete', 'style' => 'display:inline']);
                    $output .= ' <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-times"></i></button>';
                    $output .= Form::close();
                }
                $data->data[$i][] = (string)$output;
            }
        }
        $out->setData($data);
        return $out;
    }
}
