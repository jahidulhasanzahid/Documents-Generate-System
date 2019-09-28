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

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/profile','HomeController@profile')->name('profile');
Route::get('/convert','HomeController@convert')->name('convert');
Route::get('/message','HomeController@message')->name('message');

Route::get('/proposal','DesignController@proposal')->name('proposal');
Route::get('/lab','DesignController@lab')->name('lab');
Route::get('/assignment','DesignController@assignment')->name('assignment');

Route::post('/profile/update', 'UserMaintainController@profileUpdate')->name('student.profile.update');
Route::post('/user-messages-send','UserMaintainController@usermessages')->name('user-messages');


Route::post('/assignment-create','DocumentController@create')->name('assignment-create');
Route::post('/lab-report-create','DocumentController@labcreate')->name('lab-report-create');
Route::post('/project-proposal-create','DocumentController@proposalcreate')->name('project-proposal-create');
Route::post('/user-document-delete/{id}','UserMaintainController@userDeletePostNow')->name('user.document.delete');


Route::get('/lab-report-create','DocumentController@labcreate')->name('lab-report-create');
Route::get('/project-proposal-create','DocumentController@proposalcreate')->name('project-proposal-create');
Route::get('/assignment-create','DocumentController@create')->name('assignment-create');


Route::post('/lab-report-update','DocumentEditController@labupdate')->name('lab-report-update');
Route::post('/project-proposal-update','DocumentEditController@proposalupdate')->name('project-proposal-update');
Route::post('/assignment-update','DocumentEditController@update')->name('assignment-update');


/*
/*
|Design PDF
|
*/

/*
|edit
|
*/
Route::get('/assignment/edit/{id}/{data}','DocumentEditController@assignmentEdit')->name('assignment.edit');

/*
|admin controller
|admin route diclear
|admin url define
*/
Route::group(['prefix' => 'backend'], function(){
	Route::get('/welcome', 'admin\AdminController@index')->name('backend.index');
	Route::get('/user-post','admin\AdminController@userPost')->name('backend.userpost');
	Route::get('/user','admin\AdminController@user')->name('backend.user');
	Route::get('/contact','admin\AdminController@contact')->name('backend.contact');
	Route::post('/user-delete/{id}','admin\AdminController@userdelete')->name('user.delete');
	Route::post('/user-post-delete/{id}','admin\AdminController@userpostdelete')->name('user.post.delete');

	Route::get('/', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/adminlogin-submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
	Route::post('/adminlogout-submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');
});
