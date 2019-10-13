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
    return view('contact');
})->middleware('web');
Route::group(['middleware' => ['web']], function() {
    echo 'web';
});
Route::get('/helloworld/{year}/{month?}', function($year,$month=NULL) {
    $hello_string = "";
    if ($month == NULL) {
        $hello_string = "Nam nay la nam $year";
    }
    else
    {
        $hello_string = "Nam nay la nam $year thang $month";
    }
    return view('hello-world')->with('hello_str',$hello_string);
});
Route::get('/dashboard', function() {
    //
})->middleware('auth','CheckAge');
Route::get('/role', [
    'middleware' => 'role:superadmin',// truyền vào middleware và truyền biến role bằng superadmin
    'uses' => 'MainController@checkRole',// truyền vào controller và gọi đến hàm checkRole
]);
Route::get('/testcontroller', 'UserController@store');
Route::get('/contact','ContactController@showContactForm');
Route::post('contact','ContactController@insertMessage');
