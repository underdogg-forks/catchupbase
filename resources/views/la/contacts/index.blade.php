@extends("la.layouts.app")

@section("contentheader_title", "Contacts")
@section("contentheader_description", "Contacts listing")
@section("section", "Contacts")
@section("sub_section", "Listing")
@section("htmlheader_title", "Contacts Listing")

@section("headerElems")
    @la_access("Contacts", "create")
    <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">Add Contact</button>
    @endla_access
@endsection

@section("main-content")

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="box box-success">
        <!--<div class="box-header"></div>-->
        <div class="box-body">
            <table id="example1" class="table table-bordered">
                <thead>
                <tr class="success">
                    @foreach( $listing_cols as $col )
                        <th>{{ $module->fields[$col]['label'] or ucfirst($col) }}</th>
                    @endforeach
                    @if($show_actions)
                        <th>Actions</th>
                    @endif
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

    @la_access("Contacts", "create")
    <div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Contact</h4>
                </div>
                {!! Form::open(['action' => 'LA\ContactsController@store', 'id' => 'contact-add-form']) !!}
                <div class="modal-body">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">@la_input($module, 'designation')</div>
                            <div class="col-md-4">@la_input($module, 'first_name')</div>
                            <div class="col-md-4">@la_input($module, 'last_name')</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">@la_input($module, 'title')</div>
                            <div class="col-md-6">@la_input($module, 'organization')</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">@la_input($module, 'phone_primary')</div>
                            <div class="col-md-6">@la_input($module, 'phone_secondary')</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">@la_input($module, 'home_phone')</div>
                            <div class="col-md-6">@la_input($module, 'lead_source')</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">@la_input($module, 'department')</div>
                            <div class="col-md-6">@la_input($module, 'email')</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">@la_input($module, 'email2')</div>
                            <div class="col-md-6">@la_input($module, 'dob')</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">@la_input($module, 'assistant')</div>
                            <div class="col-md-6">@la_input($module, 'assistant_phone')</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">@la_input($module, 'assigned_to')</div>
                            <div class="col-md-6">@la_input($module, 'city')</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">@la_input($module, 'address')</div>
                            <div class="col-md-6">@la_input($module, 'description')</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">@la_input($module, 'profile_picture')</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {!! Form::submit( 'Submit', ['class'=>'btn btn-success']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @endla_access

@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('la-assets/plugins/datatables/datatables.min.css') }}"/>
@endpush

@push('scripts')
<script src="{{ asset('la-assets/plugins/datatables/datatables.min.js') }}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url(config('laraadmin.adminRoute') . '/contact_dt_ajax') }}",
            language: {
                lengthMenu: "_MENU_",
                search: "_INPUT_",
                searchPlaceholder: "Search"
            },
            @if($show_actions)
            columnDefs: [{orderable: false, targets: [-1]}],
            @endif
        });
        $("#contact-add-form").validate({});
    });
</script>
@endpush
