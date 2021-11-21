<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseTestsController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LessonTestsController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',function () {
    return view('home');
});
Route::get('/home',[HomeController::class, 'index'])->name('home');


Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/login',[UserController::class, 'postAuthLogin']);
Route::get('/register',[UserController::class, 'register'])->name('register');
Route::post('/register',[UserController::class, 'post_register']);
Route::get('',[UserController::class, 'logout'])->name('logout');

Route::group(['prefix'=>'/BK-E-learning/Profile','middleware'=>'auth'],function (){
    Route::get('',[ProfileController::class, 'index'])->name('profile');
    Route::get('/update-profile',[ProfileController::class, 'update_profile'])->name('update_profile');
    Route::post('/update-profile',[ProfileController::class, 'change_profile'])->name('change_profile');
    Route::get('/change-password', [UserController::class, 'change_password'])->name('change_password');
    Route::post('/update-password', [UserController::class, 'update_password'])->name('update_password');
    Route::get('/history', [HistoryController::class, 'getAll'])->name('history');
});

Route::group(['prefix'=>'/BK-E-learning/Course','middleware'=>'auth'],function (){
    Route::get('/list-course',[CourseController::class, 'list_course'])->name('list_course');
    Route::get('/course-views-detail/{is}',[CourseController::class, 'course_views_detail'])->name('course_views_detail');

    Route::get('/upload-course',[CourseController::class, 'upload_course'])->name('upload_course');
    Route::post('/upload-course',[CourseController::class, 'post_upload_course'])->name('post_upload_course');

    Route::get('/update-course/{id}',[CourseController::class, 'update_course'])->name('update_course');
    Route::post('/update-course',[CourseController::class, 'post_update_course'])->name('post_update_course');
    Route::get('/view/{is}',[CourseController::class,'shows'])->name('views_course');

    Route::get('/{id}/Final-test',[CourseController::class, 'course_final_test'])->name('course_final_test');

});

Route::group(['prefix'=>'/BK-E-learning/Course','middleware'=>'auth'], function (){
    Route::get('/{id}/List-question', [CourseTestsController::class, 'list_question'])->name('list_question');
    Route::get('/{id}/Create-question', [CourseTestsController::class, 'create_question'])->name('create_question');
    Route::post('/Create-question',[CourseTestsController::class, 'post_create_question'])->name('post_create_question');

    Route::get('/{id}/Update-question/{is}', [CourseTestsController::class ,'update_question'])->name('update_question');
    Route::post('/Update-question', [CourseTestsController::class , 'post_update_question'])->name('post_update_question');
    Route::get('/{id}/Views-question-detail/{is}', [CourseTestsController::class, 'views_question_detail'])->name('views_question_detail');


});

Route::group(['prefix'=>'/BK-E-learning/Lesson','middleware'=>'auth'], function (){
    Route::get('/{is}/Lesson-{id}/List-question', [LessonTestsController::class, 'lesson_list_question'])->name('lesson_list_question');
    Route::get('/{is}/Lesson-{id}/Create-question', [LessonTestsController::class, 'lesson_create_question'])->name('lesson_create_question');
    Route::post('/Create-question',[LessonTestsController::class, 'post_create_question'])->name('lesson_post_create_question');

    Route::get('/{is}/Lesson-{id}/Update-question/{are}', [LessonTestsController::class ,'update_question'])->name('lesson_update_question');
    Route::post('/Update-question', [LessonTestsController::class , 'post_update_question'])->name('lesson_post_update_question');
    Route::get('/{is}/Lesson-{id}/Views-question-detail/{are}', [LessonTestsController::class, 'views_question_detail'])->name('lesson_views_question_detail');

});

Route::group(['prefix'=>'/BK-E-learning/Lesson','middleware'=>'auth'], function (){
    Route::get('/list-lesson',[LessonController::class, 'list_lesson'])->name('list_lesson');

    Route::get('/lesson-views-detail/{is}',[LessonController::class, 'lesson_views_detail'])->name('lesson_views_detail');

    Route::get('/upload-lesson',[LessonController::class, 'upload_lesson'])->name('upload_lesson');
    Route::post('/upload-lesson',[LessonController::class, 'post_upload_lesson'])->name('post_upload_lesson');

    Route::get('/update-lesson/{id}',[LessonController::class, 'update_lesson'])->name('update_lesson');
    Route::post('/update-lesson',[LessonController::class, 'post_update_lesson'])->name('post_update_lesson');
    Route::get('/views/{is}',[LessonController::class, 'lesson_views'])->name('lesson_views');
});

Route::get('/BK-E-learning/lecture/list-lecture',[LectureController::class, 'show_list_lecture'])->name('list_lecture');

Route::group(['prefix'=>'/BK-E-learning/Library'], function (){

    Route::get('/',[LibraryController::class, 'show'])->name('show_library');
    Route::get('/list-documents',[LibraryController::class, 'list_documents'])->name('list_documents');
    Route::get('/views-detail/{is}',[LibraryController::class, 'views_detail'])->name('documents_views_detail');
    Route::get('/upload-documents',[LibraryController::class, 'upload_documents'])->name('upload_documents');
    Route::post('/upload-documents',[LibraryController::class, 'post_upload_documents'])->name('post_upload_documents');
    Route::get('/update-documents/{is}',[LibraryController::class, 'update_documents'])->name('update_documents');
    Route::post('/update-documents',[LibraryController::class, 'post_update_documents'])->name('post_update_documents');

    Route::get('/view/{is}',[LibraryController::class,'views'])->name('views');
    Route::get('/views-all/{is}',[LibraryController::class,'views_all'])->name('views_all');
    Route::get('/views-grade/{id}/{is}',[LibraryController::class,'views_grade_all'])->name('views_grade_all');
    Route::get('/grade-12',[LibraryController::class,'view_grade_12'])->name('view_grade_12');
    Route::get('/grade-11',[LibraryController::class,'view_grade_11'])->name('view_grade_11');
    Route::get('/grade-10',[LibraryController::class,'view_grade_10'])->name('view_grade_10');
    Route::get('/grade-9',[LibraryController::class,'view_grade_9'])->name('view_grade_9');
    Route::get('/grade-8',[LibraryController::class,'view_grade_8'])->name('view_grade_8');
    Route::get('/grade-7',[LibraryController::class,'view_grade_7'])->name('view_grade_7');
    Route::get('/grade-6',[LibraryController::class,'view_grade_6'])->name('view_grade_6');
    Route::get('/grade-5',[LibraryController::class,'view_grade_5'])->name('view_grade_5');
    Route::get('/grade-4',[LibraryController::class,'view_grade_4'])->name('view_grade_4');
    Route::get('/grade-3',[LibraryController::class,'view_grade_3'])->name('view_grade_3');
    Route::get('/grade-2',[LibraryController::class,'view_grade_2'])->name('view_grade_2');
    Route::get('/grade-1',[LibraryController::class,'view_grade_1'])->name('view_grade_1');
});


Route::post('history',[HistoryController::class, 'create'])->middleware('auth')->name('history_create');

