<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\PayementGeteway\Payment;
use App\Http\Controllers\MailController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExportpdfController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;


use App\Http\Controllers\TestController;
use App\Http\Controllers\ZipController;
use App\Http\Controllers\AuthController;

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

//Route::get('/{lang}', function ($lang) {
  //App::setlocale($lang);
    //return view('welcome');
//});
 Route::get('/home/{name?}',[ App\Http\Controllers\HomeController::class,'index'])->name('home.index');
 Route::get('/user',[ App\Http\Controllers\UserController::class,'index'])->name('user.index');
 Route::get('/',[ProductController::class,'index'])->name('product.index');
 Route::get('/posts',[ClientController::class,'getAllPost'])->name('posts.getallpost');
 Route::get('/add-posts',[ClientController::class,'addPost'])->name('posts.addpost');
 Route::get('/update-posts',[ClientController::class,'updatePost'])->name('posts.updatepost');
 Route::get('/delete-posts/{id}',[ClientController::class,'deletePost'])->name('posts.deletepost');
 Route::get('/fluentstring',[FluentController::class,'index'])->name('fluentstring.index');
 Route::get('/login',[LoginController::class,'index'])->name('login.index');
 Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');
 Route::get('session/get',[SessionController::class,'gatSessionData'])->name('get.data');
 Route::get('session/add',[SessionController::class,'storeSessionData'])->name('add.data');
 Route::get('session/remove',[SessionController::class,'deleteSessionData'])->name('remove.data');
 Route::get('allpost',[PostController::class,'getAllPost'])->name('get.posts');
 Route::get('add-post',[PostController::class,'addPost'])->name('add.post');
 Route::post('add-post-sub',[PostController::class,'addPostSubmite'])->name('add.postsubmit');
 Route::get('singlepost/{id}',[PostController::class,'getPostById'])->name('single.post');
 Route::get('deletepost/{id}',[PostController::class,'deletePost'])->name('delete.post');
 Route::get('editepost/{id}',[PostController::class,'editPost'])->name('edit.post');
 Route::post('update-post',[PostController::class,'updeatePost'])->name('updeate.post');
 Route::get('inerr',[PostController::class,'inerrJoinCaluse'])->name('joun.caluse');
Route::get('right',[PostController::class,'rightJoinCaluse'])->name('right.caluse');
Route::get('leftj',[PostController::class,'leftJoinCaluse'])->name('left.caluse');
Route::get('getallpostmodel',[PostController::class,'getAllPostsModel'])->name('get.model');
Route::get('allusers',[PaginationController::class,'allUser'])->name('get.users');
Route::get('/upload',[UploadController::class,'uploadForm'])->name('get.upload');
Route::post('/upload',[UploadController::class,'uploadFile'])->name('file.upload');
Route::get('/sendmail',[MailController::class,'sendMail']);
Route::get('/isertuser',[UserController::class,'insertRecord']);
Route::get('/getphone/{id}',[UserController::class,'getUserPhone']);
Route::get('/addpostscoment',[PostController::class,'adddPost']);
Route::get('/comment/{id}',[PostController::class,'addComment']);
Route::get('/getCommentByPost/{id}',[PostController::class,'getCommentByPost']);
Route::get('/addRole',[RoleController::class,'addRole']);
Route::get('/addUsersrole',[RoleController::class,'addUsers']);
Route::get('/getAllRolesByUser/{id}',[RoleController::class,'getAllRolesByUser']);
Route::get('/getAllUserByRole/{id}',[RoleController::class,'getAllUserByRole']);

Route::get('test', function () {
  return view('test');
});
Route::get('about', function () {
  return view('about');
});
Route::get('contact', function () {
  return view('contact');
});
Route::get('index', function () {
  return view('index');
});
Route::get('/payment', function () {
  return Payment::process();
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('add-employee',[EmployeeController::class,'addEmployee']);
Route::get('exportexcel',[EmployeeController::class,'exportExcel']);
Route::get('exportcsv',[EmployeeController::class,'exportCsv']);
Route::get('exportpdf',[ExportpdfController::class,'pdf']);
Route::get('importform',[EmployeeController::class,'importForm']);
Route::post('import',[EmployeeController::class,'import'])->name('add.import');
Route::get('resizeimage',[ImageController::class,'resizeImage']);
Route::post('add-image',[ImageController::class,'resizeImageSubmite'])->name('add.image');

Route::get('dropzone',[DropzoneController::class,'dorpzone']);
Route::post('add-dropzone',[DropzoneController::class,'dorpzoneSubmit'])->name('add.dropzone');
Route::get('gallery',[GalleryController::class,'gallery']);
Route::get('editor',[EditorController::class,'editor']);
Route::get('addStudent',[StudentController::class,'addStudent']);
Route::post('storestudent',[StudentController::class,'storeStudent'])->name('store.student');
Route::get('search',[StudentController::class,'search']);
Route::get('allstudent',[StudentController::class,'student']);
Route::get('/editstudent/{id}',[StudentController::class,'editStudent']);
Route::post('updatestudent',[StudentController::class,'updateStudent'])->name('update.student');
Route::get('/deletestudent/{id}',[StudentController::class,'deleteStudent']);
Route::get('/contact-us',[ContactController::class,'contact']);
Route::post('contact',[ContactController::class,'sendEmail'])->name('contact.us');

Route::get('/getName',[TestController::class,'getFirstLastName']);
Route::get('/autocomplete',[StudentController::class,'autocomplete'])->name('autocomplete');
Route::get('/zipfile',[ZipController::class,'zipFile'])->name('zipFile');
Route::get('/sttable',[StudentController::class,'index'])->name('sttable');
Route::get('/register',[AuthController::class,'index'])->name('register');
Route::post('/register-new',[AuthController::class,'register'])->name('register.new');
