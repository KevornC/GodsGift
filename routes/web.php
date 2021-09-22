<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HeartDormMailController;
use App\Http\Controllers\ResidentMailController;
use App\Mail\HeartDormMail;

use App\Http\Controllers\MainController;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
use App\Http\Controllers\PasswordReset;
use App\Http\Controllers\RPasswordReset;
use App\Http\Controllers\ChangeDormName;
use App\Http\Controllers\ChangeMotto;
use App\Http\Controllers\ChangeProfile;
use App\Http\Controllers\ChangeProfileImage;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServic
eProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[MainController::class,'home']);
Route::get('/Mission',[MainController::class,'Mission']);
Route::get('/Vision',[MainController::class,'Vision']);
Route::get('/Contact',[MainController::class,'Contact']);

Route::get('/Register',[Register::class,'viewsignup']);
Route::get('/Login',[Login::class,'Login1']);

Route::POST('/Register',[Register::class,'Register'])->middleware('protectedRegister');
Route::POST('/Login',[Login::class,'Login'])->middleware('protectedLogin');

Route::get('/LoginPasswordReset',[PasswordReset::class,'viewPasswordReset']);
Route::get('/RPasswordReset',[RPasswordReset::class,'viewPasswordReset']);

Route::POST('/LoginPasswordReset',[PasswordReset::class,'PasswordReset'])->middleware('protectedPasswordReset');
Route::POST('/RPasswordReset',[RPasswordReset::class,'PasswordReset'])->middleware('protectedPasswordReset');

Route::get('/DormFull',[MainController::class,'DormFull']);
Route::get('/AlertMessage',[MainController::class,'Dorm']);
Route::get('/AlertRegistration',[MainController::class,'AlertRegistration']);

Route::get('/Dashboard',[Login::class,'Dashboard']);

Route::get('/ViewAllDormRoom',[MainController::class,'ViewAllDormRoom']);
Route::get('/ViewDormRoom',[MainController::class,'ViewDormRoom']);
Route::get('/ViewDormMembers',[MainController::class,'ViewDormmembers']);
Route::get('/ViewProfile',[MainController::class,'ViewProfile']);

Route::get('/ChangeProfile',[ChangeProfile::class,'viewChangeProfile']);
Route::get('/ChangeProfileImage',[ChangeProfileImage::class,'viewChangeProfileImage']);
Route::get('/ChangeDormName',[ChangeDormName::class,'viewChangeDormName']);
Route::get('/ChangeMotto',[ChangeMotto::class,'viewChangeMotto']);

Route::POST('/ChangeProfile',[ChangeProfile::class,'ChangeProfile'])->middleware('protectedChangeProfile');
Route::POST('/ChangeProfileImage',[ChangeProfileImage::class,'ChangeProfileImage'])->middleware('protectedChangeProfileImage');
Route::POST('/ChangeDormName',[ChangeDormName::class,'ChangeDormName'])->middleware('protectedChangeDormName');
Route::POST('/ChangeMotto',[ChangeMotto::class,'ChangeMotto'])->middleware('protectedChangeDormMotto');

Route::get('/Send-Email-To-Members/{Email?}',[HeartDormMailController::class,'viewSendEmail']);

Route::POST('/Send-Email-To-Members',[ResidentMailController::class,'sendEmail'])->middleware('protectedResidentEmail');
Route::POST('/Send-to-Dorm-Email',[HeartDormMailController::class,'sendEmail'])->middleware('protectedSendEmail');

Route::get('/logout',[Login::class,'logout']);
