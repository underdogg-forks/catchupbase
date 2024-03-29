<?php

/* ================== Homepage ================== */
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::auth();

/* ================== Access Uploaded Files ================== */
Route::get('files/{hash}/{name}', 'LA\UploadsController@get_file');

/*
|--------------------------------------------------------------------------
| Admin Application Routes
|--------------------------------------------------------------------------
*/

$as = "";
if (\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
    $as = config('laraadmin.adminRoute') . '.';

    // Routes for Laravel 5.3
    Route::get('/logout', 'Auth\LoginController@logout');
}

Route::group(['as' => $as, 'middleware' => ['auth', 'permission:ADMIN_PANEL']], function () {

    /* ================== Dashboard ================== */
    Route::get(config('laraadmin.adminRoute'), 'LA\DashboardController@index');
    Route::get(config('laraadmin.adminRoute') . '/dashboard', 'LA\DashboardController@index');

    /* ================== Users ================== */
    Route::resource(config('laraadmin.adminRoute') . '/users', 'LA\UsersController');
    Route::get(config('laraadmin.adminRoute') . '/user_dt_ajax', 'LA\UsersController@dtajax');

    /* ================== Uploads ================== */
    Route::resource(config('laraadmin.adminRoute') . '/uploads', 'LA\UploadsController');
    Route::post(config('laraadmin.adminRoute') . '/upload_files', 'LA\UploadsController@upload_files');
    Route::get(config('laraadmin.adminRoute') . '/uploaded_files', 'LA\UploadsController@uploaded_files');
    Route::post(config('laraadmin.adminRoute') . '/uploads_update_caption', 'LA\UploadsController@update_caption');
    Route::post(config('laraadmin.adminRoute') . '/uploads_update_filename', 'LA\UploadsController@update_filename');
    Route::post(config('laraadmin.adminRoute') . '/uploads_update_public', 'LA\UploadsController@update_public');
    Route::post(config('laraadmin.adminRoute') . '/uploads_delete_file', 'LA\UploadsController@delete_file');

    /* ================== Tickets ================== */
    Route::resource(config('laraadmin.adminRoute') . '/tickets', 'LA\TicketsController');
    Route::get(config('laraadmin.adminRoute') . '/ticket_dt_ajax', 'LA\TicketsController@dtajax');

    /* ================== Leads ================== */
    Route::resource(config('laraadmin.adminRoute') . '/leads', 'LA\LeadsController');
    Route::get(config('laraadmin.adminRoute') . '/lead_dt_ajax', 'LA\LeadsController@dtajax');

    /* ================== Opportunities ================== */
    Route::resource(config('laraadmin.adminRoute') . '/opportunities', 'LA\OpportunitiesController');
    Route::get(config('laraadmin.adminRoute') . '/opportunity_dt_ajax', 'LA\OpportunitiesController@dtajax');

    /* ================== Roles ================== */
    Route::resource(config('laraadmin.adminRoute') . '/roles', 'LA\RolesController');
    Route::get(config('laraadmin.adminRoute') . '/role_dt_ajax', 'LA\RolesController@dtajax');
    Route::post(config('laraadmin.adminRoute') . '/save_module_role_permissions/{id}', 'LA\RolesController@save_module_role_permissions');

    /* ================== Permissions ================== */
    Route::resource(config('laraadmin.adminRoute') . '/permissions', 'LA\PermissionsController');
    Route::get(config('laraadmin.adminRoute') . '/permission_dt_ajax', 'LA\PermissionsController@dtajax');
    Route::post(config('laraadmin.adminRoute') . '/save_permissions/{id}', 'LA\PermissionsController@save_permissions');

    /* ================== Departments ================== */
    Route::resource(config('laraadmin.adminRoute') . '/departments', 'LA\DepartmentsController');
    Route::get(config('laraadmin.adminRoute') . '/department_dt_ajax', 'LA\DepartmentsController@dtajax');

    /* ================== Employees ================== */
    Route::resource(config('laraadmin.adminRoute') . '/employees', 'LA\EmployeesController');
    Route::get(config('laraadmin.adminRoute') . '/employee_dt_ajax', 'LA\EmployeesController@dtajax');
    Route::post(config('laraadmin.adminRoute') . '/change_password/{id}', 'LA\EmployeesController@change_password');

    /* ================== Relations ================== */
    Route::resource(config('laraadmin.adminRoute') . '/relations', 'LA\RelationsController');
    Route::get(config('laraadmin.adminRoute') . '/relation_dt_ajax', 'LA\RelationsController@dtajax');

    /* ================== Contacts ================== */
    Route::resource(config('laraadmin.adminRoute') . '/contacts', 'LA\ContactsController');
    Route::get(config('laraadmin.adminRoute') . '/contact_dt_ajax', 'LA\ContactsController@dtajax');

    /* ================== Relations ================== */
    Route::resource(config('laraadmin.adminRoute') . '/projects', 'LA\ProjectsController');
    Route::get(config('laraadmin.adminRoute') . '/project_dt_ajax', 'LA\ProjectsController@dtajax');

    /* ================== Backups ================== */
    Route::resource(config('laraadmin.adminRoute') . '/backups', 'LA\BackupsController');
    Route::get(config('laraadmin.adminRoute') . '/backup_dt_ajax', 'LA\BackupsController@dtajax');
    Route::post(config('laraadmin.adminRoute') . '/create_backup_ajax', 'LA\BackupsController@create_backup_ajax');
    Route::get(config('laraadmin.adminRoute') . '/downloadBackup/{id}', 'LA\BackupsController@downloadBackup');
});
