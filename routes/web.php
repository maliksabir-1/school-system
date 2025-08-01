<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FeepaymentController;
use App\Http\Controllers\FeestructureController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\TimetableController;
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

// Auth Routes
Route::get('register',[RegisterController::class,'create'])->name('register');
Route::post('registerstore',[RegisterController::class,'register'])->name('registerpost');

Route::get('login',[LoginController::class,'create'])->name('login');
Route::post('loginstore',[LoginController::class,'login'])->name('loginpost');
Route::get('dashboard',[LoginController::class,'index'])->name('dashboard');
Route::get('logout',[LoginController::class,'logout'])->name('logout');

// Profile Routes
Route::get('profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile');
Route::post('profile/{id}/update', [ProfileController::class, 'update'])->name('profile.update');


Route::get('dashboard',[HomeController::class,'create'])->name('dashboard');


// Students Routes
Route::get('students/create',[StudentController::class,'create'])->name('students.create');
Route::post('student/post',[StudentController::class,'store'])->name('student.post');
Route::get('student/index',[StudentController::class,'index'])->name('students.index');
Route::get('students/edit/{id}',[StudentController::class,'edit'])->name('students.edit');
Route::post('students/update/{id}',[StudentController::class,'update'])->name('students.update');
Route::get('students/delete/{id}',[StudentController::class,'destroy'])->name('students.delete');
Route::get('students/show',[StudentController::class,'show'])->name('students.show');

// Teachers Routes
Route::get('teachers/create',[TeacherController::class,'create'])->name('teachers.create');
Route::post('teachers/post',[TeacherController::class,'store'])->name('teachers.post');
Route::get('teachers/index',[TeacherController::class,'index'])->name('teachers.index');
Route::get('teachers/edit/{id}',[TeacherController::class,'edit'])->name('teachers.edit');
Route::post('teachers/update/{id}',[TeacherController::class,'update'])->name('teachers.update');
Route::get('teachers/delete/{id}',[TeacherController::class,'destroy'])->name('teachers.delete');


Route::get('attendance/create',[AttendanceController::class,'create'])->name('attendance.create');
Route::post('attendance/post',[AttendanceController::class,'store'])->name('attendance.post');
Route::get('attendance/index',[AttendanceController::class,'index'])->name('attendance.index');
Route::get('attendance/edit/{id}',[AttendanceController::class,'edit'])->name('attendance.edit');
Route::post('attendance/update/{id}',[AttendanceController::class,'update'])->name('attendance.update');
Route::get('attendance/delete/{id}',[AttendanceController::class,'destroy'])->name('attendance.delete');


Route::get('class/create',[ClassController::class,'create'])->name('class.create');
Route::post('class/post',[ClassController::class,'store'])->name('class.post');
Route::get('class/index',[ClassController::class,'index'])->name('class.index');
Route::get('class/edit/{id}',[ClassController::class,'edit'])->name('class.edit');
Route::post('class/update/{id}',[ClassController::class,'update'])->name('class.update');
Route::get('class/delete/{id}',[ClassController::class,'destroy'])->name('class.delete');


Route::get('parent/create',[ParentController::class,'create'])->name('parent.create');
Route::post('parent/post',[ParentController::class,'store'])->name('parent.post');
Route::get('parent/index',[ParentController::class,'index'])->name('parent.index');
Route::get('parent/edit/{id}',[ParentController::class,'edit'])->name('parent.edit');
Route::post('parent/update/{id}',[ParentController::class,'update'])->name('parent.update');
Route::get('parent/delete/{id}',[ParentController::class,'destroy'])->name('parent.delete');


Route::get('subject/create',[SubjectController::class,'create'])->name('subject.create');
Route::post('subject/post',[SubjectController::class,'store'])->name('subject.post');
Route::get('subject/index',[SubjectController::class,'index'])->name('subject.index');
Route::get('subject/edit/{id}',[SubjectController::class,'edit'])->name('subject.edit');
Route::post('subject/update/{id}',[SubjectController::class,'update'])->name('subject.update');
Route::get('subject/delete/{id}',[SubjectController::class,'destroy'])->name('subject.delete');

Route::get('section/create',[SectionController::class,'create'])->name('section.create');
Route::post('section/post',[SectionController::class,'store'])->name('section.post');
Route::get('section/index',[SectionController::class,'index'])->name('section.index');
Route::get('section/edit/{id}',[SectionController::class,'edit'])->name('section.edit');
Route::post('section/update/{id}',[SectionController::class,'update'])->name('section.update');
Route::get('section/delete/{id}',[SectionController::class,'destroy'])->name('section.delete');

Route::get('setting/create',[SettingController::class,'create'])->name('setting.create');
Route::post('setting/post',[SettingController::class,'store'])->name('setting.post');
Route::get('setting/index',[SettingController::class,'index'])->name('setting.index');
Route::get('setting/edit/{id}',[SettingController::class,'edit'])->name('setting.edit');
Route::post('setting/update/{id}',[SettingController::class,'update'])->name('setting.update');
Route::get('setting/delete/{id}',[SettingController::class,'destroy'])->name('setting.delete');

Route::get('exam/create',[ExamController::class,'create'])->name('exam.create');
Route::post('exam/post',[ExamController::class,'store'])->name('exam.post');
Route::get('exam/index',[ExamController::class,'index'])->name('exam.index');
Route::get('exam/edit/{id}',[ExamController::class,'edit'])->name('exam.edit');
Route::post('exam/update/{id}',[ExamController::class,'update'])->name('exam.update');
Route::get('exam/delete/{id}',[ExamController::class,'destroy'])->name('exam.delete');

Route::get('book/create',[BookController::class,'create'])->name('book.create');
Route::post('book/post',[BookController::class,'store'])->name('book.post');
Route::get('book/index',[BookController::class,'index'])->name('book.index');
Route::get('book/edit/{id}',[BookController::class,'edit'])->name('book.edit');
Route::post('book/update/{id}',[BookController::class,'update'])->name('book.update');
Route::get('book/delete/{id}',[BookController::class,'destroy'])->name('book.delete');

Route::get('feepayment/create',[FeepaymentController::class,'create'])->name('feepayment.create');
Route::post('feepayment/post',[FeepaymentController::class,'store'])->name('feepayment.post');
Route::get('feepayment/index',[FeepaymentController::class,'index'])->name('feepayment.index');
Route::get('feepayment/edit/{id}',[FeepaymentController::class,'edit'])->name('feepayment.edit');
Route::post('feepayment/update/{id}',[FeepaymentController::class,'update'])->name('feepayment.update');
Route::get('feepayment/delete/{id}',[FeepaymentController::class,'destroy'])->name('feepayment.delete');

Route::get('feestructure/create',[FeestructureController::class,'create'])->name('feestructure.create');
Route::post('feestructure/post',[FeestructureController::class,'store'])->name('feestructure.post');
Route::get('feestructure/index',[FeestructureController::class,'index'])->name('feestructure.index');
Route::get('feestructure/edit/{id}',[FeestructureController::class,'edit'])->name('feestructure.edit');
Route::post('feestructure/update/{id}',[FeestructureController::class,'update'])->name('feestructure.update');
Route::get('feestructure/delete/{id}',[FeestructureController::class,'destroy'])->name('feestructure.delete');

Route::get('mark/create',[MarkController::class,'create'])->name('mark.create');
Route::post('mark/post',[MarkController::class,'store'])->name('mark.post');
Route::get('mark/index',[MarkController::class,'index'])->name('mark.index');
Route::get('mark/edit/{id}',[MarkController::class,'edit'])->name('mark.edit');
Route::post('mark/update/{id}',[MarkController::class,'update'])->name('mark.update');
Route::get('mark/delete/{id}',[MarkController::class,'destroy'])->name('mark.delete');

Route::get('timetable/create',[TimetableController::class,'create'])->name('timetable.create');
Route::post('timetable/post',[TimetableController::class,'store'])->name('timetable.post');
Route::get('timetable/index',[TimetableController::class,'index'])->name('timetable.index');
Route::get('timetable/edit/{id}',[TimetableController::class,'edit'])->name('timetable.edit');
Route::post('timetable/update/{id}',[TimetableController::class,'update'])->name('timetable.update');
Route::get('timetable/delete/{id}',[TimetableController::class,'destroy'])->name('timetable.delete');
