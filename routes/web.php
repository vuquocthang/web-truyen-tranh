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
    return view('home');
});

#the loai
Route::get('/the-loai/{category}.html', function (\App\Category $category) {
    return view('category', ['category' => $category]);
});

#truyen
Route::get('/truyen/{story}.html', function (\App\Story $story) {

    return view('story', ['story' => $story]);
});

#chuong
Route::get('/truyen/{story}/{chapterSlug}.html', function (\App\Story $story, $chapterSlug) {

    return view('chapter', ['story' => $story, 'chapterSlug' => $chapterSlug]);
});

#danh sach truyen
Route::get('/danh-sach-truyen.html', function () {
    return view('list');
});

#danh sach the loai
Route::get('/danh-sach-the-loai.html', function () {
    return view('category-list');
});

#test
Route::get('/testUpload', function (){
    return view('test.upload2');
});

Route::get('/testCarbon', 'TestController@carbon');

Route::post('/testUpload', 'TestController@upload');
#end test


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/login', 'LoginController@showLoginForm');

    Route::post('/login', 'LoginController@login');

    Route::get('/logout', 'LoginController@logout');

    Route::group(['middleware' => 'auth.admin'], function (){

        Route::get('/', 'HomeController@index');

        Route::get('/doi-mat-khau', function (){
            return view('admin.change-password');
        });

        Route::post('/doi-mat-khau', 'HomeController@changePassword');

        #category
        Route::get('/the-loai/them', 'CategoryController@showAddForm');

        Route::post('/the-loai/them', 'CategoryController@add');

        Route::get('/the-loai/danh-sach', 'CategoryController@index');

        Route::get('/the-loai/sua/{id}', 'CategoryController@showEditForm');

        Route::post('/the-loai/sua/{id}', 'CategoryController@edit');

        Route::get('/the-loai/xoa/{id}', 'CategoryController@delete');

        Route::get('/the-loai/trang-thai/{id}', 'CategoryController@status');

        #story
        Route::get('/truyen/danh-sach', 'StoryController@index');

        Route::get('/truyen/them', 'StoryController@showAddForm');

        Route::post('/truyen/them', 'StoryController@add');

        Route::get('/truyen/sua/{id}', 'StoryController@showEditForm');

        Route::post('/truyen/sua/{id}', 'StoryController@edit');

        Route::get('/truyen/xoa/{id}', 'StoryController@delete');

        Route::get('/truyen/trang-thai/{id}', 'StoryController@status');


        #chapter
        Route::get('/chuong/danh-sach', 'ChapterController@index');

        Route::get('/chuong/them', 'ChapterController@showAddForm');

        Route::post('/chuong/them', 'ChapterController@add');

        Route::get('/chuong/sua/{id}', 'ChapterController@showEditForm');

        Route::post('/chuong/sua/{id}', 'ChapterController@edit');

        Route::get('/chuong/xoa/{id}', 'ChapterController@delete');

        Route::get('/chuong/trang-thai/{id}', 'ChapterController@status');


        #ads

        Route::get('/quang-cao/sua', 'AdsController@editForm');

        Route::post('/quang-cao/sua', 'AdsController@edit');

        #slide
        Route::get('/slide/danh-sach', 'SlideController@index');

        Route::get('/slide/them', 'SlideController@showAddForm');

        Route::post('/slide/them', 'SlideController@add');

        Route::get('/slide/xoa/{id}', 'SlideController@delete');




    });
});
