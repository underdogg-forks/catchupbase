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

use App\Models\Relation;

class RelationsController extends Controller
{
    public $show_action = true;

    /**
     * Display a listing of the Relations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $module = Module::get('Relations');

        if (Module::hasAccess($module->id)) {
            return View('la.relations.index', [
                'show_actions' => $this->show_action,
                'listing_cols' => Module::getListingColumns('Relations'),
                'module' => $module
            ]);
        } else {
            return redirect(config('laraadmin.adminRoute') . "/");
        }
    }

    /**
     * Show the form for creating a new relation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created relation in database.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Module::hasAccess("Relations", "create")) {

            $rules = Module::validateRules("Relations", $request);

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $insert_id = Module::insert("Relations", $request);

            return redirect()->route(config('laraadmin.adminRoute') . '.relations.index');

        } else {
            return redirect(config('laraadmin.adminRoute') . "/");
        }
    }

    /**
     * Display the specified relation.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Module::hasAccess("Relations", "view")) {

            $relation = Relation::find($id);
            if (isset($relation->id)) {
                $module = Module::get('Relations');
                $module->row = $relation;

                return view('la.relations.show', [
                    'module' => $module,
                    'view_col' => $module->view_col,
                    'no_header' => true,
                    'no_padding' => "no-padding"
                ])->with('relation', $relation);
            } else {
                return view('errors.404', [
                    'record_id' => $id,
                    'record_name' => ucfirst("relation"),
                ]);
            }
        } else {
            return redirect(config('laraadmin.adminRoute') . "/");
        }
    }

    /**
     * Show the form for editing the specified relation.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Module::hasAccess("Relations", "edit")) {
            $relation = Relation::find($id);
            if (isset($relation->id)) {
                $module = Module::get('Relations');

                $module->row = $relation;

                return view('la.relations.edit', [
                    'module' => $module,
                    'view_col' => $module->view_col,
                ])->with('relation', $relation);
            } else {
                return view('errors.404', [
                    'record_id' => $id,
                    'record_name' => ucfirst("relation"),
                ]);
            }
        } else {
            return redirect(config('laraadmin.adminRoute') . "/");
        }
    }

    /**
     * Update the specified relation in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Module::hasAccess("Relations", "edit")) {

            $rules = Module::validateRules("Relations", $request, true);

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();;
            }

            $insert_id = Module::updateRow("Relations", $request, $id);

            return redirect()->route(config('laraadmin.adminRoute') . '.relations.index');

        } else {
            return redirect(config('laraadmin.adminRoute') . "/");
        }
    }

    /**
     * Remove the specified relation from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Module::hasAccess("Relations", "delete")) {
            Relation::find($id)->delete();

            // Redirecting to index() method
            return redirect()->route(config('laraadmin.adminRoute') . '.relations.index');
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
        $module = Module::get('Relations');
        $listing_cols = Module::getListingColumns('Relations');

        $values = DB::table('relations')->select($listing_cols)->whereNull('deleted_at');
        $out = Datatables::of($values)->make();
        $data = $out->getData();

        $fields_popup = ModuleFields::getModuleFields('Relations');

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
                    $data->data[$i][$j] = '<a href="' . url(config('laraadmin.adminRoute') . '/relations/' . $data->data[$i][0]) . '">' . $data->data[$i][$j] . '</a>';
                }
                // else if($col == "author") {
                //    $data->data[$i][$j];
                // }
            }

            if ($this->show_action) {
                $output = '';
                if (Module::hasAccess("Relations", "edit")) {
                    $output .= '<a href="' . url(config('laraadmin.adminRoute') . '/relations/' . $data->data[$i][0] . '/edit') . '" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
                }

                if (Module::hasAccess("Relations", "delete")) {
                    $output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.relations.destroy', $data->data[$i][0]], 'method' => 'delete', 'style' => 'display:inline']);
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
