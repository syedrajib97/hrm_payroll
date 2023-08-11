<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// });



Route::get('/', 'home@index');




Route::get('/employee','employee@index')->name('employee_list');
Route::get('/add_employee', 'employee@add_employee')->name('employee_add');
Route::post('/add_employee_action', 'employee@store')->name('employee_add_action');
Route::get('/edit_employee/{id}', 'employee@edit_employee')->name('edit_employee');
Route::get('/view_employee/{id}', 'employee@view_employee')->name('view_employee');
Route::post('/update_employee', 'employee@update')->name('update_employee');
Route::get('/employee_delete/{id}', 'employee@destroy')->name('employee_delete');


//Company
Route::get('/company','company@index')->name('company_list');
Route::get('/add_company', 'company@add_company')->name('company_add');
Route::post('/add_company_action', 'company@store')->name('company_add_action');
Route::get('/edit_company/{id}', 'company@edit_company')->name('edit_company');
Route::get('/view_company/{id}', 'company@view_company')->name('view_company');
Route::post('/update_company', 'company@update')->name('update_company');
Route::get('/company_delete/{id}', 'company@destroy')->name('company_delete');

//designation
Route::get('/designation','designation@index')->name('designation_list');
Route::get('/add_designation', 'designation@add_designation')->name('designation_add');
Route::post('/add_designation_action', 'designation@store')->name('designation_add_action');
Route::get('/view_designation/{id}', 'designation@view_designation')->name('view_designation');
Route::get('/edit_designation/{id}', 'designation@edit_designation')->name('edit_designation');
Route::post('/update_designation', 'designation@update')->name('update_designation');
Route::get('/designation_delete/{id}', 'designation@destroy')->name('designation_delete');

//department
Route::get('/department','department@index')->name('department_list');
Route::get('/add_department', 'department@add_department')->name('department_add');
Route::post('/add_department_action', 'department@store')->name('department_add_action');
Route::get('/edit_department/{id}', 'department@edit_department')->name('edit_department');
Route::post('/update_department', 'department@update')->name('update_department');
Route::get('/view_department/{id}', 'department@view_department')->name('view_department');
Route::get('/department_delete/{id}', 'department@destroy')->name('department_delete');

//bank
Route::get('/bank','bank@index')->name('bank_list');
Route::get('/bank_delete/{id}', 'bank@destroy')->name('bank_delete');
Route::get('/add_bank', 'bank@add_bank')->name('bank_add');
Route::post('/add_bank_action', 'bank@store')->name('bank_add_action');
Route::get('/view_bank/{id}', 'bank@view_bank')->name('view_bank');
Route::get('/edit_bank/{id}', 'bank@edit_bank')->name('edit_bank');
Route::post('/update_bank', 'bank@update')->name('update_bank');

//shift
Route::get('/shift','shift@index')->name('shift_list');
Route::get('/shift_delete/{id}', 'shift@destroy')->name('shift_delete');
Route::get('/add_shift', 'shift@add_shift')->name('shift_add');
Route::post('/add_section_shift', 'shift@store')->name('shift_add_section');
Route::get('/view_shift/{id}', 'shift@view_shift')->name('view_shift');
Route::get('/edit_shift/{id}', 'shift@edit_shift')->name('edit_shift');
Route::post('/update_shift', 'shift@update')->name('update_shift');

//leavetype
Route::get('/leave type','leavetype@index')->name('leavetype_list');
Route::get('/leave_delete/{id}', 'leavetype@destroy')->name('leave_delete');
Route::get('/add_leavetype', 'leavetype@add_leavetype')->name('leavetype_add');
Route::post('/add_section_leavetype', 'leavetype@store')->name('leavetype_add_action');
Route::get('/view_leavetype/{id}', 'leavetype@view_leavetype')->name('view_leavetype');
Route::get('/edit_leavetype/{id}', 'leavetype@edit_leavetype')->name('edit_leavetype');
Route::post('/update_leavetype', 'leavetype@update')->name('update_leavetype');


//halfLeave_list halfLeave_delete view_halfLeave halfLeave_add halfLeave_add_action edit_halfLeave update_halfLeave
Route::get('/half_leave','halfLeave@index')->name('halfLeave_list');
Route::get('/halfLeave_delete/{id}', 'halfLeave@destroy')->name('halfLeave_delete');
Route::get('/view_halfLeave/{id}', 'halfLeave@view_halfLeave')->name('view_halfLeave');
Route::get('/add_halfLeave', 'halfLeave@add_halfLeave')->name('halfLeave_add');
Route::post('/add_section_halfLeave', 'halfLeave@store')->name('halfLeave_add_action');
Route::get('/edit_halfLeave/{id}', 'halfLeave@edit_halfLeave')->name('edit_halfLeave');
Route::post('/update_halfLeave', 'halfLeave@update')->name('update_halfLeave');

//subsection_list subsection_delete view_subsection subsection_add subsection_add_action edit_subsection update_subsection
Route::get('/subsection','subsection@index')->name('subsection_list');
Route::get('/subsection_delete/{id}', 'subsection@destroy')->name('subsection_delete');
Route::get('/view_subsection/{id}', 'subsection@view_subsection')->name('view_subsection');
Route::get('/add_subsection', 'subsection@add_subsection')->name('subsection_add');
Route::post('/add_subsection', 'subsection@store')->name('subsection_add_action');
Route::get('/edit_subsection/{id}', 'subsection@edit_subsection')->name('edit_subsection');
Route::post('/update_subsection', 'subsection@update')->name('update_subsection');

//increment_list increment_delete view_increment increment_add increment_add_action edit_increment update_increment
Route::get('/increment','increment@index')->name('increment_list');
Route::get('/increment_delete/{id}', 'increment@destroy')->name('increment_delete');


Route::get('/view_increment/{id}', 'increment@view_increment')->name('view_increment');
Route::get('/increment_add', 'increment@add_increment')->name('increment_add');
Route::post('/add_increment', 'increment@store')->name('increment_add_action');
Route::get('/edit_increment/{id}', 'increment@edit_increment')->name('edit_increment');
Route::post('/update_increment', 'increment@update')->name('update_increment');


//employeeReport_list
Route::any('/employeeReport_list','employeeReport@index')->name('employeeReport_list');

// employeeReport2_list employeeReport3_list
Route::any('/ActiveemployeeReport_list','activeEmployeeReport@index')->name('employeeReport2_list');

Route::any('/TerminatedemployeeReport_list','terminatedEmployeeReport@index')->name('employeeReport3_list');
Route::any('/masterSalaryReport_list','masterSalaryReport@index')->name('masterSalaryReport_list');
