<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\ExamTypeController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\PerformingRoleController;
use App\Http\Controllers\ExamPerformingRoleController;
use App\Http\Controllers\PaymentController;


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

Route::get('/', function () {
    return view('layout/home');
});

/*Route::get('/dashboard', function () {
    return view('layout/admin');
});*/

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/roles',[RoleController::class,'index']);
//Display Create New Role
Route::get('/createroles',[RoleController::class,'create']);
//Save new Role
Route::post('/storeroles',[RoleController::class,'store']);
// Display edit Role page
Route::get('/editroles/{id}',[RoleController::class,'edit'])->name('editroles');
//Update existing Role by id
Route::patch('/updateroles/{id}',[RoleController::class,'update'])->name('updateroles');
// Delete unwanted Role
Route::delete('/deleteroles/{id}',[RoleController::class,'destroy'])->name('deleteroles');


Route::get('/usertypes',[UserTypeController::class,'index']);
//Display Create New Usertype
Route::get('/createusertypes',[UserTypeController::class,'create']);
//Save new Usertype
Route::post('/storeusertypes',[UserTypeController::class,'store']);
// Display edit Usertype page
Route::get('/editusertypes/{id}',[UserTypeController::class,'edit'])->name('editusertypes');
//Update existing Usertype by id
Route::patch('/updateusertypes/{id}',[UserTypeController::class,'update'])->name('updateusertypes');
// Delete unwanted Usertype
Route::delete('/deleteusertypes/{id}',[UserTypeController::class,'destroy'])->name('deleteusertypes');


Route::get('/examtypes',[ExamTypeController::class,'index']);
//Display Create New ExamType
Route::get('/createexamtypes',[ExamTypeController::class,'create']);
//Save new ExamType
Route::post('/storeexamtypes',[ExamTypeController::class,'store']);
// Display edit ExamType page
Route::get('/editexamtypes/{id}',[ExamTypeController::class,'edit'])->name('editexamtypes');
//Update existing ExamType by id
Route::patch('/updateexamtypes/{id}',[ExamTypeController::class,'update'])->name('updateexamtypes');
// Delete unwanted ExamType
Route::delete('/deleteexamtypes/{id}',[ExamTypeController::class,'destroy'])->name('deleteexamtypes');


Route::get('/actions',[ActionController::class,'index']);
//Display Create New Action
Route::get('/createactions',[ActionController::class,'create']);
//Save new Action
Route::post('/storeactions',[ActionController::class,'store']);
// Display edit Action page
Route::get('/editactions/{id}',[ActionController::class,'edit'])->name('editactions');
//Update existing Action by id
Route::patch('/updateactions/{id}',[ActionController::class,'update'])->name('updateactions');
// Delete unwanted Action
Route::delete('/deleteactions/{id}',[ActionController::class,'destroy'])->name('deleteactions');


Route::get('/courses',[CourseController::class,'index']);
//Display Create New Course
Route::get('/createcourses',[CourseController::class,'create']);
//Save new Course
Route::post('/storecourses',[CourseController::class,'store']);
// Display edit Course page
Route::get('/editcourses/{id}',[CourseController::class,'edit'])->name('editcourses');
//Update existing Course by id
Route::patch('/updatecourses/{id}',[CourseController::class,'update'])->name('updatecourses');
// Delete unwanted Course
Route::delete('/deletecourses/{id}',[CourseController::class,'destroy'])->name('deletecourses');


Route::get('/users',[UserController::class,'index']);
//Display Create New User
Route::get('/createusers',[UserController::class,'create']);
//Save new User
Route::post('/storeusers',[UserController::class,'store']);
// Display edit User page
Route::get('/editusers/{id}',[UserController::class,'edit'])->name('editusers');
//Update existing User by id
Route::patch('/updateusers/{id}',[UserController::class,'update'])->name('updateusers');
// Delete unwanted User
Route::delete('/deleteusers/{id}',[UserController::class,'destroy'])->name('deleteusers');


Route::get('/exams',[ExamController::class,'index']);
//Display Create New Exam
Route::get('/createexams',[ExamController::class,'create']);
//Save new Exam
Route::post('/storeexams',[ExamController::class,'store']);
// Display edit Exam page
Route::get('/editexams/{id}',[ExamController::class,'edit'])->name('editexams');
//Update existing Exam by id
Route::patch('/updateexams/{id}',[ExamController::class,'update'])->name('updateexams');
// Delete unwanted Exam
Route::delete('/deleteexams/{id}',[ExamController::class,'destroy'])->name('deleteexams');


Route::get('/prices',[PriceController::class,'index']);
//Display Create New Price
Route::get('/createprices',[PriceController::class,'create']);
//Save new Price
Route::post('/storeprices',[PriceController::class,'store']);
// Display edit Price page
Route::get('/editprices/{id}',[PriceController::class,'edit'])->name('editprices');
//Update existing Price by id
Route::patch('/updateprices/{id}',[PriceController::class,'update'])->name('updateprices');
// Delete unwanted Price
Route::delete('/deleteprices/{id}',[PriceController::class,'destroy'])->name('deleteprices');


Route::get('/userroles',[UserRoleController::class,'index']);
//Display Create New UserRole
Route::get('/createuserroles',[UserRoleController::class,'create']);
//Save new UserRole
Route::post('/storeuserroles',[UserRoleController::class,'store']);
// Display edit UserRole page
Route::get('/edituserroles/{id}',[UserRoleController::class,'edit'])->name('edituserroles');
//Update existing UserRole by id
Route::patch('/updateuserroles/{id}',[UserRoleController::class,'update'])->name('updateuserroles');
// Delete unwanted UserRole
Route::delete('/deleteuserroles/{id}',[UserRoleController::class,'destroy'])->name('deleteuserroles');


Route::get('/performingroles',[PerformingRoleController::class,'index']);
//Display Create New PerformingRole
Route::get('/createperformingroles',[PerformingRoleController::class,'create']);
//Save new PerformingRole
Route::post('/storeperformingroles',[PerformingRoleController::class,'store']);
// Display edit PerformingRole page
Route::get('/editperformingroles/{id}',[PerformingRoleController::class,'edit'])->name('editperformingroles');
//Update existing PerformingRole by id
Route::patch('/updateperformingroles/{id}',[PerformingRoleController::class,'update'])->name('updateperformingroles');
// Delete unwanted PerformingRole
Route::delete('/deleteperformingroles/{id}',[PerformingRoleController::class,'destroy'])->name('deleteperformingroles');


Route::get('/examperformingroles',[ExamPerformingRoleController::class,'index']);
//Display Create New ExamPerformingRole
Route::get('/createexamperformingroles',[ExamPerformingRoleController::class,'create']);
//Save new ExamPerformingRole
Route::post('/storeexamperformingroles',[ExamPerformingRoleController::class,'store']);
// Display edit ExamPerformingRole page
Route::get('/editexamperformingroles/{id}',[ExamPerformingRoleController::class,'edit'])->name('editexamperformingroles');
//Update existing ExamPerformingRole by id
Route::patch('/updateexamperformingroles/{id}',[ExamPerformingRoleController::class,'update'])->name('updateexamperformingroles');
// Delete unwanted ExamPerformingRole
Route::delete('/deleteexamperformingroles/{id}',[ExamPerformingRoleController::class,'destroy'])->name('deleteexamperformingroles');


Route::get('/payments',[PaymentController::class,'index']);
//Display Create New Payment
Route::get('/createpayments',[PaymentController::class,'create']);
//Save new Payment
Route::post('/storepayments',[PaymentController::class,'store']);
// Display edit Payment page
Route::get('/editpayments/{id}',[PaymentController::class,'edit'])->name('editpayments');
//Update existing Payment by id
Route::patch('/updatepayments/{id}',[PaymentController::class,'update'])->name('updatepayments');
// Delete unwanted Payment
Route::delete('/deletepayments/{id}',[PaymentController::class,'destroy'])->name('deletepayments');




Route::get('/summary2', function () {
    return view('layout/summary2');
});

Route::get('/summary1', function () {
    return view('layout/summary1');
});

Route::get('/summary3', function () {
    return view('layout/summary3');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
