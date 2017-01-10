<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//----------Rough Controller
Route::get('rough', 'RoughController@rough');
//Route::get('bld-rough', 'PeopleController@bld_rough');

Route::get('', 'LoginController@index');
Route::get('signup', 'LoginController@signup');
Route::get('dboard', 'HomeController@dashboard');

//-------------------- Begin Pages history ----------------------------------
//----------People Controller
Route::get('info-owner', 'PeopleController@owner_info');
Route::get('info-emp', 'PeopleController@emp_info');

Route::get('info-owner-details/{rental_details_id}', 'PeopleController@details_owner_info');
Route::get('info-emp-details/{emp_details_id}', 'PeopleController@details_emp_info');

Route::get('info-owner-invoice', 'InvoiceController@invoice_owner_info');
Route::get('info-rental', 'PeopleController@rental_info');
Route::get('info-driver', 'PeopleController@driver_info');
Route::get('info-housekeeping', 'PeopleController@housekeeping_info');
Route::get('info-visiting', 'PeopleController@visiting_info');
Route::get('info-service', 'PeopleController@service_info');

//----------People Edit Controller
Route::get('info-rental-edit/{rental_id}', 'EditController@edit_rental_info');
Route::get('info-emp-edit/{emp_details_id}', 'EditController@edit_emp_info');
//----------People Update Controller
Route::post('info-rental-update', 'EditController@update_rental_info');
Route::post('info-emp-update', 'EditController@update_emp_info');

//----------Begin Regi Controller------------------
Route::get('regi-info', 'RegiController@regi_info');
Route::get('regi-rental', 'RegiController@rental_regi');
Route::get('regi-driver', 'RegiController@driver_regi');
Route::get('regi-s-people', 'RegiController@s_people_regi');
Route::get('regi-emp', 'RegiController@emp_regi');
Route::get('regi-visitor', 'RegiController@visitor_regi');
//----------Regi Save
Route::get('regi-rental-save', 'RegiController@save_rental_regi');
Route::post('regi-emp-save', 'RegiController@save_emp_regi');
//----------End Regi Controller--------------------
//
//----------Regi Save
Route::get('info-service', 'ServiceController@service_info');
Route::get('info-service-details/{service_person_id}', 'ServiceController@details_service_info');
Route::post('service-add', 'ServiceController@add_service');
Route::post('service-add-name', 'ServiceController@name_add_service');
Route::get('info-service-edit/{service_person_id}', 'ServiceController@edit_service_info');
Route::post('info-service-update', 'ServiceController@update_service_info');
Route::get('info-service-status/{service_id}/{status}', 'ServiceController@status_service_info');




//----------Regi Service Assigned
Route::post('service-assigned-add', 'ServiceAssignedController@add_assigned_service_info');





//----------BroadCasting Controller
Route::get('broadcasting-sms', 'BroadCastingController@sms');
Route::get('broadcasting-sms-add', 'BroadCastingController@sms_add');

Route::get('broadcasting-notice', 'BroadCastingController@notice');
Route::get('broadcasting-notice-add', 'BroadCastingController@notice_add');

Route::get('broadcasting-email-inbox', 'EmailController@inbox_email');
Route::get('broadcasting-email-compose', 'EmailController@compose_email');
Route::get('broadcasting-email-details', 'EmailController@details_email');
//----------Payment Controller
Route::get('payment-all', 'PaymentController@all_payment');
Route::get('payment-hand-cash', 'PaymentController@hand_cash_payment');
Route::get('payment-hand-cash-add', 'PaymentController@add_hand_cash_payment');
Route::get('payment-hand-cash-edit', 'PaymentController@edit_hand_cash_payment');
Route::get('payment-bkash', 'PaymentController@bkash_payment');
Route::get('payment-bank', 'PaymentController@bank_payment');
//----------Inventory Controller
Route::get('inventory-ataglance', 'InventoryController@ataglance_inventory');
Route::get('inventory-grant-total', 'InventoryController@grant_total_inventory');
Route::get('inventory-utilities', 'InventoryController@utilities_inventory');
Route::get('inventory-utilities-add', 'InventoryController@utilities_add_inventory');
Route::get('inventory-utilities-edit', 'InventoryController@utilities_edit_inventory');
Route::get('inventory-utilities-details', 'InventoryController@utilities_details_inventory');
Route::get('inventory-utilities-grant-total', 'InventoryController@utilities_grant_inventory');
Route::get('inventory-income', 'InventoryController@income_inventory');
Route::get('bld-rough', 'InventoryController@bld_rough');
//----------Profile Controller
Route::get('profile-admin', 'ProfileController@admin_profile');


//----------Salary Controller
Route::post('add-salary', 'SalaryController@save_salary_add');
Route::post('update-salary', 'SalaryController@salary_update');

Route::get('salary-statement-publish/{emp_id}', 'SalaryController@publish_statement_salary');
Route::get('salary-statement-unpublish/{emp_id}', 'SalaryController@unpublish_statement_salary');

//----------SalaryMake Controller
Route::get('make-salary', 'SalaryMakeController@salary_make');
Route::post('make-salary-invoice', 'SalaryMakeController@invoice_salary_make');
Route::get('give-salary/{emp_invoice_id}', 'SalaryMakeController@salary_give');
Route::post('salary-due', 'SalaryMakeController@due_salary');
//-------------------- End Pages history ----------------------------------




//Route::get('/', function () {
//    return view('welcome');
//});