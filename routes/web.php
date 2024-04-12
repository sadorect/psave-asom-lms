<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SettingsController;

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

Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/about', [UserController::class, 'index'])->name('about.page');
Route::get('/outreach', [UserController::class, 'index'])->name('outreach.page');
Route::get('/devotional', [UserController::class, 'index'])->name('devotional.page');
Route::get('/faq', [UserController::class, 'index'])->name('faq.page');
Route::get('/events', [UserController::class, 'index'])->name('events');
Route::get('/contact', [UserController::class, 'index'])->name('contact');

Route::get('/asom', [UserController::class, 'asomHome'])->name('asom');

Route::get('/dashboard', function () {
    return view('frontend.dashboard.index');
})->name('dashboard');//->middleware(['auth','roles'])->name('dashboard');

Route::middleware('auth', 'roles:student')->group(function () {
    Route::get('/user/logout', [UserController::class, 'userLogout'])->name('user.logout');

    Route::get('/show/user/profile', [UserController::class, 'showProfile'])->name('show.user.profile');
    Route::post('/update/user/profile', [UserController::class, 'updateUserProfile'])->name('update.user.profile');
    Route::post('/update/user/password', [UserController::class, 'updateUserPassword'])->name('update.user.password');
    Route::get('/show/courses', [UserController::class, 'showCourses'])->name('show.courses');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

///Admin Middleware Group

Route::middleware(['auth', 'roles:admin'])->group(function(){

Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');

Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');

Route::get('/admin/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');

Route::post('/admin/profile/store', [AdminController::class, 'adminProfileStore'])->name('admin.profile.store');

Route::get('/admin/change/password', [AdminController::class, 'adminChangePassword'])->name('admin.change.password');

Route::post('/admin/update/password', [AdminController::class, 'adminUpdatePassword'])->name('admin.update.password');



Route::controller(CategoryController::class)->group(function(){

    Route::get('/all/category', 'AllCategory')->name('all.category');

});

Route::controller(HomepageController::class)->group(function(){
    Route::get('/admin/homepage','showHome')->name('show.home');
    Route::get('/edit/homepage','editHome')->name('edit.home');
    Route::post('/update/homepage','storeHomepage')->name('update.home');
});



//Instructor Management Segment //

Route::controller(AdminController::class)->group(function(){

    Route::get('/all/instructors', 'AllInstructors')->name('all.instructors');
    Route::post('/update/user/status', 'updateUserStatus')->name('update.user.status');

    Route::get('/all/students', 'AllStudents')->name('all.students');

});

Route::controller(SettingsController::class)->group(function(){
    Route::get('/settings/smtp','smtpSettings')->name('settings.smtp');
    Route::post('/update/smtp','smtpUpdate')->name('update.smtp');
});

Route::controller(BlogController::class)->group(function(){
    Route::get('/blog/category','AllBlogCategory')->name('blog.category');  
    Route::post('/blog/category/store','StoreBlogCategory')->name('blog.category.store'); 
    Route::get('/edit/blog/category/{id}','EditBlogCategory')->name('edit.blog.category'); 
    Route::post('/blog/category/update','UpdateBlogCategory')->name('blog.category.update'); 
    Route::get('/delete/blog/category/{id}','DeleteBlogCategory')->name('delete.blog.category'); 

    Route::get('/blog/devotional','allDevotionals')->name('blog.devotional');
    Route::get('/add/devotional','addDevotional')->name('add.devotional'); 
    Route::post('/store/devotional','storeDevotional')->name('store.devotional');
    Route::get('/edit/post/{id}','editDevotional')->name('edit.post');  
    Route::post('/update/blog/post','updateDevotional')->name('update.devotional');
    Route::post('/delete/blog/post','deleteDevotional')->name('delete.devotional');

});


}); // admin middleware


Route::get('/become/instructor', [AdminController::class, 'becomeInstructor'])->name('become.instructor');
Route::post('/become/instructor', [AdminController::class, 'instructorRegister'])->name('instructor.register');


Route::get('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');//display admin login page
Route::get('/admin/login', [AdminController::class, 'adminLogin'])->name('admin');//display admin login page

///Instructor Middleware Group

Route::middleware(['auth', 'roles:instructor'])->group(function(){

Route::get('/instructor/dashboard', [InstructorController::class, 'instructorDashboard'])->name('instructor.dashboard');


Route::get('/instructor/logout', [InstructorController::class, 'instructorLogout'])->name('instructor.logout');

Route::get('/instructor/profile', [InstructorController::class, 'instructorProfile'])->name('instructor.profile');

Route::post('/instructor/profile/store', [InstructorController::class, 'instructorProfileStore'])->name('instructor.profile.store');

Route::get('/instructor/change/password', [InstructorController::class, 'instructorChangePassword'])->name('instructor.change.password');

Route::post('/instructor/update/password', [InstructorController::class, 'instructorUpdatePassword'])->name('instructor.update.password');
}); // instructor middleware

Route::get('/instructor/login', [InstructorController::class, 'instructorLogin'])->name('instructor.login');//display instructor login page



