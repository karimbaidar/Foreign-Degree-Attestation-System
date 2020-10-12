<?php
use App\PersonalDetail;
use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Auth::routes();

Route::post('/locale', function () {
    session(['my_locale' => Request::Input('locale')]);
    return redirect()->back();
});

Route::any('/search', function () {
    $q = Input::get('q');
    $user = PersonalDetail::where('reg_no', 'LIKE', '%' . $q . '%')->where('status', 'Approved')->get();
    if (count($user) > 0) {
        return view('/admin/setup/doctors/list')->withDetails($user)->withQuery($q);
    } else {
        return view('/admin/setup/doctors/list')->withMessage('No Details found. Try to search again !');
    }

});





Route::group(['middleware' => 'revalidate'], function () {
    Route::get('/', function () {return view('auth.login');});
            
  
Auth::routes();

    Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {

        Route::match(['get', 'post', 'resource'], '/personal_detail/', 'Personal_detailsController@index');

        Route::resource('personal_detail', 'Personal_detailsController');
        



    });

});

//Route::resource('personal_detailMaster', 'Personal_detailsController@createMaster');
//Route::resource('personal_detailPHD', 'Personal_detailsController@createPHD');

//Route::resource('personal_detail', 'Personal_detailsController');

Route::group(['middleware' => 'revalidate'], function()
{


    Route::post("personal_detail", "Personal_detailsController@store")->name('personal_detail');



Route::resource('checklist', 'checklistController');
Route::get('/checklist/{id}', 'checklistController@update');
Route::resource('checklist1', 'checklistController1');
Route::resource('checklist1', 'checklistController1');
Route::resource('pending', 'PendingController');
Route::resource('approval', 'ApprovalController');
Route::resource('rejection', 'RejectionController');
Route::resource('reportgenerate', 'ReportGeneratorController');
Route::resource('reportgenerate1', 'ReportGeneratorController@hello');
Route::resource('certificate2', 'ReportGeneratorController@print_certificate2');
Route::resource('certificate3', 'ReportGeneratorController@print_certificate3');
Route::resource('certificate4', 'ReportGeneratorController@print_certificate4');
Route::resource('certificate6', 'ReportGeneratorController@print_certificate6');

Route::resource('type', 'typeController');

Route::resource('dentalmedical', 'dentalmedicalController');
Route::resource('practitioner', 'practitionerController');
Route::resource('non_practitioner', 'non_practitionerController');
Route::resource('both', 'bothController');

Route::resource('doctor', 'doctorController');
Route::resource('type_of_registration', 'type_of_registrationController');

Route::resource('provisional_qualification', 'provisional_qualificationController');
Route::resource('full_registration', 'Full_RegistrationController');
Route::resource('post_graduate_registration', 'Post_Graduate_RegistrationController');
Route::resource('temporary_registration', 'Temporary_Permission_RegistrationController');
Route::resource('homeopathic_registration', 'Homeopathic_RegistrationController');
Route::resource('non_practitioner_registration', 'Non_Practitioner_RegistrationController');
Route::resource('non_practitioner_registration', 'Non_Practitioner_RegistrationController');
Route::resource('prac_nonprac_registration', 'Prac_Non_PracController');
Route::resource('education_qualification', 'education_qualificationController');
Route::resource('admin_doctor', 'admin_doctorController');



Route::resource('logs', 'LogsController');



Route::resource('reports', 'ReportsController');

Route::resource('nationality', 'nationalityController');
Route::resource('medical_degree', 'medical_degreeController');
Route::resource('university', 'universityController');
Route::resource('usertable', 'userTableController');
Route::resource('hospital', 'hospitalController');
Route::resource('profession', 'professionController');



Route::resource('createPersonal', 'createPersonalController');
Route::resource('createEducational', 'createEducationalController');
Route::resource('createUniversityDetails', 'createUniversityDetailsController');
  

//End of resource routes list




Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/chat', 'ChatController@index')->name('chat');

Route::get('/message', 'MessageController@index')->name('message');
Route::post('/message', 'MessageController@store')->name('message.store');

Route::get('/doctor/{userid}/details', 'doctorController@doctor_details');

Route::get('/doctor/{userid}/index', 'doctorController@index');

//Route::get('/printcertificate/{reg_no}/certificate', 'Personal_detailsController@print_certificate');
//Route::get('/admin_doctor/{reg_no}/details', 'admin_doctorController@doctor_details');

Route::get('/admin_doctor/{userid}/index', 'admin_doctorController@index');
Route::get('/admin_doctor/{userid}/details', 'admin_doctorController@doctor_details');
Route::get('/admin_doctor/{userid}/edit_1', 'admin_doctorController@edit_1');
Route::get('/admin_doctor/{userid}/edit', 'admin_doctorController@edit');
Route::get('/printcertificate/{userid}/certificate', 'admin_doctorController@print_certificate');
Route::get('/printcertificate/{userid}/certificate1', 'admin_doctorController@print_certificate1');
Route::get('/printcertificate/{userid}/certificate3', 'admin_doctorController@print_certificate3');
Route::get('/printcertificate/{userid}/certificate4', 'admin_doctorController@print_certificate4');
Route::get('/printcertificate/{userid}/certificate6', 'admin_doctorController@print_certificate6');
Route::get('/printcertificate/{userid}/maktoob2years', 'admin_doctorController@maktoob2years');
Route::get('/printcertificate/{userid}/maktoobTemporary', 'admin_doctorController@maktoobTemporary');
Route::get('/printcertificate/{userid}/maktoobGherHuzoory', 'admin_doctorController@maktoobGherHuzoory');
Route::get('/{userid}/certificate2', 'ReportGeneratorController@print_certificate2');
Route::get('/{userid}/certificate3', 'ReportGeneratorController@print_certificate3');
Route::get('/{userid}/certificate4', 'ReportGeneratorController@print_certificate4');


//Route::get('/createPersonal/', 'createPersonal@index');
//Route::get('/createEducational/', 'createEducational@index');
//Route::get('/createUniversityDetails/', 'createUniversityDetails@index');

Route::get('/personal_detailMaster/', 'Personal_detailsController@createMaster');
Route::get('/personal_detailPHD/', 'Personal_detailsController@createPHD');

Route::get('/checklist/{id}/create', 'checklistController@show_check_list');
Route::get('/checklist1/{id}/create', 'checklistController1@show_check_list');
Route::get('/checklist2/{id}/create', 'checklistController2@show_check_list');
Route::get('/checklist3/{id}/create', 'checklistController3@show_check_list');
Route::get('/checklist4/{id}/create', 'checklistController4@show_check_list');
Route::get('/checklist5/{id}/create', 'checklistController5@show_check_list');

Route::get('/checklist', 'checklistController@send_email');
Route::get('/reportgenerate/', 'ReportGeneratorController@update_status');
Route::get('/search', 'searchController@index');

Route::get('/search/{doctor_id}', 'searchController@search_by_id');
Route::get('/delete/{id}', 'admin_doctorController@destroy');
Route::get('/notification', 'admin_doctorController@notify');

Route::get('/verify/{token}', 'verifycontroller@verify')->name('verify');
Route::post('/check_list/', 'checklistController@update_status');
Route::post('/check_list1/', 'checklistController1@update_status');
Route::post('/check_list2/', 'checklistController2@update_status');
Route::post('/check_list3/', 'checklistController3@update_status');
Route::post('/check_list4/', 'checklistController4@update_status');
Route::post('/check_list5/', 'checklistController5@update_status');
Route::post('/report_generate/', 'ReportGeneratorController@index');

Route::get('/changePassword', ['as' => 'changePassword', function () {return view('auth.changepassword');}]);
Route::post('/changePassword', 'HomeController@changePassword')->name('changePassword');

Route::get('/changePassword', 'HomeController@showChangePasswordForm');
Route::get('/printcertificate1/{userid}', 'admin_doctorController@print_certificate5');

Route::get('/home', 'HomeController@index')->name('home')->middleware('locale');

Route::get('/report', 'HomeController@report');
Route::get('/chart', 'HomeController@chart');



});

Route::get('/import_excel', 'ImportExcelController@index');
Route::post('/import_excel/import', 'ImportExcelController@import');




Route::get('test', function () {
    event(new App\Events\StatusLiked('Someone'));
    return "Event has been sent!";
});




//Route::get('/home', 'notificationController@notification');
