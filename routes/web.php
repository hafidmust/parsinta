<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;



Route::get('/',[HomeController::class, 'index']);
Route::get('/blog', function () {
    return view('blog');
});

//contact
Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);

//profile
Route::get('profile/{identifier}', [ProfileInformationController::class, '__invoke']);

//task
Route::middleware('auth')->group(function(){
    Route::resource('tasks', TaskController::class);
    Route::post('logout', LogoutController::class)->name('logout');
});

// Route::get('tasks', [TaskController::class, 'index']);
// Route::post('tasks', [TaskController::class, 'store']);
// Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
// Route::put('tasks/{id}', [TaskController::class, 'update']);
// Route::delete('tasks/{id}', [TaskController::class, 'destroy']);




Route::get('users', [UserController::class, 'index']);
Route::get('users/{user}',[UserController::class, 'detail']);

Route::middleware('guest')->group(function(){
//register
Route::get('register',[RegistrationController::class, 'create'])->name('register');
Route::post('register',[RegistrationController::class, 'store'])->name('register');
//login
Route::get('login', [LoginController::class,'create'])->name('login');
Route::post('login', [LoginController::class,'store'])->name('login');
});

//google auth
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
// Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
// Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
// Route::get('auth/redirect', function(){
//     return Socialite::driver('google')->redirect();
// });


// Route::get('/auth/callback', function () {
//     $user = Socialite::driver('google')->user();
 
//     // $user->token
//     dd($user);
// });

// Route::get('profile', function (Request $request){
//     $name = $request->get('name');
//     // return "My Name is {$name}";
//     return view('profile',[
//         'name' => $name
//     ]);
// });
/**
 * Bisa juga menggunakan wildcard misal profile/hafidalim -> tidak membutuhkan Request langsung panggil variabel
 */

//passing data to view
// Route::get('profile', function(){
//     $fullname = 'hafid';
//     return view('profile',[
//         'fullname' => $fullname
//     ]);
// });