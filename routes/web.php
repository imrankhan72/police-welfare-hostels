<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ProfileController;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::view('/','website.index')->name('home');
Route::view('/about-us','website.about-us')->name('about-us');
Route::view('/management-committee','website.management-committee')->name('management-committee');
Route::view('/hostels','website.hostels')->name('hostels');
Route::view('/facilities','website.facilities')->name('facilities');
Route::view('/eligibility','website.eligibility')->name('eligibility');
Route::view('/rules-regulations','website.rules-regulations')->name('rules-regulations');
Route::view('/gallery','website.gallery')->name('gallery');
Route::view('/faqs','website.faqs')->name('faqs');
Route::view('/contact-us','website.contact-us')->name('contact-us');
Route::view('/apply-now','website.apply-now')->name('apply-now');

Route::post('/applicants/store', function (Request $request){
//return $request->all();
$applicant = new Applicant();
$applicant->name = $request->get('name');
$applicant->father_name = $request->get('father_name');
$applicant->mother_name = $request->get('mother_name');
$applicant->gender = $request->get('gender');
$applicant->caste = $request->get('caste');
$applicant->aadhar_no = $request->get('aadhar_no');
$applicant->mobile_no = $request->get('mobile_no');
$applicant->education = $request->get('education');
$applicant->dob = $request->get('dob');
$applicant->institute_name = $request->get('institute_name');
$applicant->in_police_service_name = $request->get('in_police_service_name');
$applicant->designation = $request->get('designation');
$applicant->inservice_contact = $request->get('inservice_contact');
$applicant->deployment_unit_district= $request->get('deployment_unit_district');
$applicant->posted_police_station = $request->get('posted_police_station');
$applicant->local_guardian_name= $request->get('local_guardian_name');
$applicant->guardian_designation = $request->get('guardian_designation');
$applicant->guardian_contact_no = $request->get('guardian_contact_no');
//    $applicant->coloured_photo_file_url= $request->get('coloured_photo_file_url');
//    $applicant->aadhar_copy_file_url= $request->get('aadhar_copy_file_url');
//    $applicant->police_id_letter_file_url = $request->get('police_id_letter_file_url');
//    $applicant->police_service_cert_file_url = $request->get('police_service_cert_file_url');
//    $applicant->college_id_card_file_url = $request->get('college_id_card_file_url');
$applicant->coloured_photo_file_url= '123';
$applicant->aadhar_copy_file_url= '456';
$applicant->police_id_letter_file_url ='678';
$applicant->police_service_cert_file_url = '911';
$applicant->college_id_card_file_url = '7777';
$applicant->save();
return redirect('apply-now')->with('success','Application submitted successfully');
})->name('applicants-store');


//Admin Routes

Route::resource('applicants', ApplicantController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
