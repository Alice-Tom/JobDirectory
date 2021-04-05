<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
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

Auth::routes();

//login
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

// registration
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register.index');
Route::get('/register/{$query::company}', [App\Http\Controllers\RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])->name('register.store');

// company dashboard
Route::get('/company/dashboard', [App\Http\Controllers\PagesController::class, 'companydash'])->name('company.dashboard');

Route::get('/company/postjob', [App\Http\Controllers\JobsController::class, 'postjob']);
Route::post('/company/postjob', [App\Http\Controllers\JobsController::class, 'store'])->name('postjob');

Route::get('/company/posttender', [App\Http\Controllers\PostTenderController::class, 'posttender']);
Route::post('/company/posttender', [App\Http\Controllers\PostTenderController::class, 'store'])->name('posttender');

Route::get('/company/managejobs', [App\Http\Controllers\ManageJobController::class, 'index']);
Route::get('/company/managejobs', [App\Http\Controllers\ManageJobController::class, 'getAllJobs'])->name('managejobs');
Route::get('/company/editjob/{id}', [App\Http\Controllers\ManageJobController::class, 'jobs'])->name('getid');
Route::get('/company/deletejobs/{id}', [App\Http\Controllers\ManageJobController::class, 'deletepost'])->name('delete');
Route::post('/company/updatejobs', [App\Http\Controllers\ManageJobController::class, 'update'])->name('updatepost');

Route::get('/company/managetenders', [App\Http\Controllers\ManageTenderController::class, 'index']);
Route::get('/company/managetenders', [App\Http\Controllers\ManageTenderController::class, 'getAllTenders'])->name('managetenders');
Route::get('/company/edittender/{id}', [App\Http\Controllers\ManageTenderController::class, 'tender'])->name('getbyid');
Route::get('/company/deletetender/{id}', [App\Http\Controllers\ManageTenderController::class, 'deletepost'])->name('delete');
Route::post('/company/updatetenders', [App\Http\Controllers\ManageTenderController::class, 'update'])->name('updatetender');


Route::get('/company/viewconsultants', [App\Http\Controllers\ViewConsultantController::class, 'index']);
Route::get('/company/viewconsultants', [App\Http\Controllers\ViewConsultantController::class, 'getAllConsultants'])->name('viewconsultants');
Route::get('/company/viewconsultant', [App\Http\Controllers\ViewConsultantController::class, 'getAllConsultant'])->name('viewconsultants');

Route::get('/company/job_applicants', [App\Http\Controllers\JobApplicationController::class, 'getAllApplicants'])->name('job_applicants');
Route::get('/company/tender_applicants', [App\Http\Controllers\TenderApplicationController::class, 'getAllApplicants'])->name('tender_applicants');

Route::get('/company/companyprofile', [App\Http\Controllers\CompanyprofController::class, 'companyprofile']);
// Route::post('/company/companyprof', [App\Http\Controllers\CompanyprofController::class, 'store'])->name('register.store');
// Route::post('/companyprof', [App\Http\Controllers\CompanyprofController::class, 'store'])->name('companyprofile');



// index page
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\PagesController::class, 'about']);

Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);

Route::post('/', [App\Http\Controllers\PagesController::class, 'getAllJob'])->name('/');

Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact']);

// jobseeker dashboard

Route::get('/singlejob/{id}', [App\Http\Controllers\JobApplicationController::class, 'index']);
Route::post('/singlejob/{id}/apply', [App\Http\Controllers\JobApplicationController::class, 'store'])->name('postjobs');

Route::get('/uploadcv', [App\Http\Controllers\PagesController::class, 'uploadcv']);

Route::get('/jobseekerdash', [App\Http\Controllers\PagesController::class, 'jobseekerdash'])->name('jobseeker.dashboard');

Route::get('/viewjobs', [App\Http\Controllers\ViewJobController::class, 'index']);

Route::get('/jobseekprofile', [App\Http\Controllers\JobSeekprofController::class, 'jobseekprof']);
Route::post('/jobseekprofile', [App\Http\Controllers\JobSeekprofController::class, 'store'])->name('postprofile');

Route::get('/viewjobs', [App\Http\Controllers\ViewJobController::class, 'index']);

Route::get('/singlejob', [App\Http\Controllers\ViewJobController::class, 'job']);
Route::get('/viewjobs', [App\Http\Controllers\ViewJobController::class, 'getAllJobs'])->name('viewjobs');
Route::get('/singlejob/{id}', [App\Http\Controllers\ViewJobController::class, 'singlejob'])->name('getid');

// tenderseeker dashboard
Route::get('/tenderseekerdash', [App\Http\Controllers\PagesController::class, 'tenderseekerdash'])->name('tenderseeker.dashboard');

Route::get('/singletender', [App\Http\Controllers\ViewTenderController::class, 'tender']);
Route::get('/tenderseekerprof', [App\Http\Controllers\TenderProfController::class, 'tenderprof']);
Route::post('/tenderseekerprof', [App\Http\Controllers\TenderProfController::class, 'store'])->name('tenderseekerprof');
Route::get('/tenderseekerprof/{id}', [App\Http\Controllers\TenderProfController::class, 'post'])->name('getbyid');
// Route::get('/tenderseekeersidebar', [App\Http\Controllers\TenderProfController::class, 'sidebar'])->name('getbyid');

Route::get('/viewtenders', [App\Http\Controllers\ViewTenderController::class, 'index']);
Route::get('/viewtenders', [App\Http\Controllers\ViewTenderController::class, 'getAllTenders'])->name('viewtenders');
Route::get('/singletender/{id}', [App\Http\Controllers\ViewTenderController::class, 'singletender'])->name('getid');


Route::post('/singletender/{id}/apply', [App\Http\Controllers\TenderApplicationController::class, 'store'])->name('tenderapplication');

// consultants dashboard
Route::get('/consultantdash', [App\Http\Controllers\ConsultantController::class, 'consultantdash'])->name('consultant.dashboard');
Route::post('/consultantdash', [App\Http\Controllers\ConsultantController::class, 'store'])->name('consultantdash');


// extra pages
Route::get('/dashboard', [App\Http\Controllers\PagesController::class, 'dashboard']);

Route::post('/users', [App\Http\Controllers\UsersController::class, 'store'])->name('users');
Route::get('/users', [App\Http\Controllers\UsersController::class, 'getAllUsers'])->name('getallusers');
Route::get('/user/{id}', [App\Http\Controllers\UsersController::class, 'user'])->name('getid');