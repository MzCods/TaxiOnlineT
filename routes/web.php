<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProfileController;
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

Route::get('/cmt', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages/CmtMarche');
});

Route::get('/infoClient', [ProfileController::class, 'infoClient'])->name('infoClient');

Route::get('/infoChauffeur', [ProfileController::class, 'infoChauffeur'])->name('infoChauffeur');


Route::get('/taketaxi', [ProfileController::class, 'taketaxi'])->name('taketaxi');

Route::get('/takeCourses', [ProfileController::class, 'takeCourses'])->name('takeCourses');




Route::get('/delect', [ProfileController::class, 'delectuser'])->name('delect');

Route::get('/delectCourse', [CoursesController::class, 'delect'])->name('delectCourse');



Route::get('registerCourses', [CoursesController::class, 'create'])
->name('registerCourses');
        
Route::post('registerCourses', [CoursesController::class, 'store']);
        

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','IsAdmin'])->group(function (){

    Route::get('/admin/home', [ProfileController::class, 'index'])->name('admin.home');

});

Route::middleware(['auth','IsAdmin'])->group(function (){
    
    Route::get('/user/home', [CoursesController::class, 'index'])->name('user.home');

});
Route::middleware(['auth','IsAdmin'])->group(function (){
    
    Route::get('/chauffeur/home', [ProfileController::class, 'indexChauffeur'])->name('chauffeur.home');

});





require __DIR__.'/auth.php';
