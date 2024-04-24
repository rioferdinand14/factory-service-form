<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HistoryController;
use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS\Root;

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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::middleware(['auth'])->group(function(){
    Route::get('table', [HomeController::class, 'index'])->name('table');

    Route::get('history', [HistoryController::class, 'index'])->middleware('admin')->name('history');
    Route::put('/projects/{id}/restore', [HistoryController::class, 'restoreProject'])->name('projects.restore');
    Route::delete('projects/permanent-delete/{id}', [HistoryController::class, 'permanentDelete'])->name('projects.permanent-delete');


    Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

    Route::get('/get-latest-projects', [HomeController::class, 'getLatestProjects'])->name('get-latest-projects');
    Route::post('/projects/create-data', [HomeController::class, 'store'])->name('projects.create-data');

    Route::get('/get-project-data/{projectId}', [HomeController::class, 'getProjectData'])->name('get-project-data');
    Route::put('/update-project/{projectId}', [HomeController::class, 'updateProject'])->name('update-data');

    Route::delete('/delete-project/{projectId}', [HomeController::class, 'destroy'])->name('delete-project');

    Route::get('/search', [HomeController::class, 'search'])->name('search');
    Route::get('/project-export', [HomeController::class, 'export'])->name('project-export');
});