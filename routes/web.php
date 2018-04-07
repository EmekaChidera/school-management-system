<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/teachers',"Admin\AdminController@TeacherIndex");
Route::get('/admin/teachers/create',"Admin\AdminController@TeacherCreate");
//students
Route::get('/admin/students',"Admin\AdminController@StudentIndex");
Route::get('/admin/students/create',"Admin\AdminController@StudentCreate");
Route::post('/admin/students/create',"Admin\AdminController@StudentStore");
Route::get('student/login','ManualLoginController@showLoginForm')->name('student.login');
Route::post('student/login','ManualLoginController@login')->name('student.login.submit');
Route::get('student/logout','ManualLoginController@logout')->name('student.logout');
Route::get('/student','ManualAuthController@index')->name('student.index');

//faculty
Route::get('/admin/faculty',"FacultyController@index");
Route::get('/admin/faculty/create',"FacultyController@create");
Route::post('/admin/faculty/create',"FacultyController@store");

//departments
Route::get('/admin/departments',"DepartmentController@index");
Route::get('/admin/departments/create',"DepartmentController@create");
Route::post('/admin/departments/create',"DepartmentController@store");


//courses
Route::get('/admin/courses',"CourseController@index");
Route::get('/admin/courses/create',"CourseController@create");
Route::post('/admin/courses/create',"CourseController@store");