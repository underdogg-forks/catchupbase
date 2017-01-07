@extends("la.layouts.app")

@section("contentheader_title")
    <a href="{{ url(config('laraadmin.adminRoute') . '/relations') }}">Relation</a> :
@endsection
@section("contentheader_description", $relation->$view_col)
@section("section", "Relations")
@section("section_url", url(config('laraadmin.adminRoute') . '/relations'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Relations Edit : ".$relation->$view_col)

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

    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::model($relation, ['route' => [config('laraadmin.adminRoute') . '.relations.update', $relation->id ], 'method'=>'PUT', 'id' => 'relation-edit-form']) !!}
                    @la_form($module)

                    {{--
                    @la_input($module, 'name')
                    @la_input($module, 'email')
                    @la_input($module, 'phone')
                    @la_input($module, 'website')
                    @la_input($module, 'assigned_to')
                    @la_input($module, 'connected_since')
                    @la_input($module, 'address')
                    @la_input($module, 'city')
                    @la_input($module, 'description')
                    @la_input($module, 'profile_image')
                    @la_input($module, 'profile')
                    --}}
                    <br>
                    <div class="form-group">
                        {!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <a
                                href="{{ url(config('laraadmin.adminRoute') . '/relations') }}"
                                class="btn btn-default pull-right">Cancel</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(function () {
        $("#relation-edit-form").validate({});
    });
</script>
@endpush