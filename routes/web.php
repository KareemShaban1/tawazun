<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeCookieRedirect', 'localizationRedirect', 'localeViewPath' ]

],function(){

    Route::group(
        ['prefix'=>'/backend',
        'as'=>'backend.',
        'namespace'=>'App\Http\Controllers\Backend',
        // 'middleware'=>['auth:sanctum',config('jetstream.auth_session'),'verified']
        ], 
        function(){

            Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

            Route::group([
                'prefix'=>'/admins',
                'as'=>'admins.',
                'controller'=>'AdminController',], 
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{admin_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{admin_id}','edit')->name('edit');
                Route::post('/update/{admin_id}','update')->name('update');
                Route::delete('/delete/{admin_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{admin_id}','restore')->name('restore');
                Route::delete('/force_delete/{admin_id}','forceDelete')->name('forceDelete');
            });


            Route::group([
                'prefix'=>'/supervisors',
                'as'=>'supervisors.',
                'controller'=>'SupervisorController',], 
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{supervisor_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{supervisor_id}','edit')->name('edit');
                Route::post('/update/{supervisor_id}','update')->name('update');
                Route::delete('/delete/{supervisor_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{supervisor_id}','restore')->name('restore');
                Route::delete('/force_delete/{supervisor_id}','forceDelete')->name('forceDelete');
            });

            Route::group([
                'prefix'=>'/doctors',
                'as'=>'doctors.',
                'controller'=>'DoctorController',], 
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{doctor_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{doctor_id}','edit')->name('edit');
                Route::post('/update/{doctor_id}','update')->name('update');
                Route::delete('/delete/{doctor_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{doctor_id}','restore')->name('restore');
                Route::delete('/force_delete/{doctor_id}','forceDelete')->name('forceDelete');
            });


            Route::group([
                'prefix'=>'/schedules',
                'as'=>'schedules.',
                'controller'=>'ScheduleController',], 
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{schedule_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{schedule_id}','edit')->name('edit');
                Route::post('/update/{schedule_id}','update')->name('update');
                Route::delete('/delete/{schedule_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{schedule_id}','restore')->name('restore');
                Route::delete('/force_delete/{schedule_id}','forceDelete')->name('forceDelete');
            });

            Route::group([
                'prefix'=>'/patients',
                'as'=>'patients.',
                'controller'=>'PatientController',], 
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{patient_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{patient_id}','edit')->name('edit');
                Route::post('/update/{patient_id}','update')->name('update');
                Route::delete('/delete/{patient_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{patient_id}','restore')->name('restore');
                Route::delete('/force_delete/{patient_id}','forceDelete')->name('forceDelete');
            });

            

            Route::group([
                'prefix'=>'/appointments',
                'as'=>'appointments.',
                'controller'=>'AppointmentController',], 
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{appointment_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{appointment_id}','edit')->name('edit');
                Route::post('/update/{appointment_id}','update')->name('update');
                Route::delete('/delete/{appointment_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{appointment_id}','restore')->name('restore');
                Route::delete('/force_delete/{appointment_id}','forceDelete')->name('forceDelete');
            });

            Route::group([
                'prefix'=>'/medical_centers',
                'as'=>'medical_centers.',
                'controller'=>'MedicalCenterController',], 
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{medical_center_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{medical_center_id}','edit')->name('edit');
                Route::post('/update/{medical_center_id}','update')->name('update');
                Route::delete('/delete/{medical_center_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{medical_center_id}','restore')->name('restore');
                Route::delete('/force_delete/{medical_center_id}','forceDelete')->name('forceDelete');
            });


            
            Route::group([
                'prefix'=>'/labs',
                'as'=>'labs.',
                'controller'=>'LabController',], 
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{lab_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{lab_id}','edit')->name('edit');
                Route::post('/update/{lab_id}','update')->name('update');
                Route::delete('/delete/{lab_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{lab_id}','restore')->name('restore');
                Route::delete('/force_delete/{lab_id}','forceDelete')->name('forceDelete');
            });

            
            Route::group([
                'prefix'=>'/reports',
                'as'=>'reports.',
                'controller'=>'ReportController',], 
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{report_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{report_id}','edit')->name('edit');
                Route::post('/update/{report_id}','update')->name('update');
                Route::delete('/delete/{report_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{report_id}','restore')->name('restore');
                Route::delete('/force_delete/{report_id}','forceDelete')->name('forceDelete');
            });


        }); 
    });