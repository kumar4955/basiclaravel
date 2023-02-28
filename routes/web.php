<?php
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserDetailsController;



//return view('test');
//});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hi', function () {
  return view('hi');
});
//Route::get('User-details/create', 'UserDetailsController@create');
Route::get('User-details/create', [UserDetailsController::class, 'create']);
Route::POST('User-details', [UserDetailsController::class, 'datasubmit']);






Route::get('user', [UserController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::post('/upload-image', [UploadImageController::class, 'upload']);
