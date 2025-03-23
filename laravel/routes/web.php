<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\SuperadminController;
// use App\Http\Controllers\TaskController;
use App\Livewire\Superadmin\CreateUser;
//use App\Livewire\Hod\CrudAcd;
use App\Livewire\Superadmin\UserList;
//use App\Livewire\Student\PersonalDetails;
use App\Livewire\Hod\ViewStudents;
use App\Livewire\Admin\AddRegistration;
use App\Livewire\Admin\ApproveStudents;
use App\Livewire\Student\Register;
use App\Livewire\Admin\GenerateStudentId;
// use App\Livewire\Student\StudentDashboard;
// use App\Livewire\Student\StudentLogin;


//use Illuminate\Routing\Route as RoutingRoute;
//use Route as GlobalRoute;

Route::get('/', function () {
    return view('home');
})->name('home');

//Route::get('/student/details', PersonalDetails::class)->name('student.details');
Route::get('/student/Registration', Register::class)->name('student.registration');
//Route::get('/student/login', StudentLogin::class)->name(student.login);

/*
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
 */

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('/dashboard', [DashboardController::class, 'redirectToDashboard'])
    ->middleware(['auth', 'verified'])->name('dashboard');

 // Route::get('/tasks', [TaskController::class, 'redirectToTask'])
 //     ->middleware(['auth', 'verified'])->name('task');



// superadmin
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/superadmin/dashboard', [DashboardController::class, 'superadmin'])->name('superadmin.dashboard');
    Route::get('/superadmin/tasks', CreateUser::class)->name('sup_task');
    Route::get('/superadmin/users', UserList::class)->name('superadmin.users');
    
});

// Route::post('/superadmin/create-user', [SuperadminController::class, 'createUser'])
//     ->name('sup_admin.createUser')
//     ->middleware(['auth', 'role:superadmin']);

 // Route::middleware(['auth', 'role:superadmin'])->group(function () {
 //     Route::get('/superadmin/tasks', [TaskController::class, 'superadminT'])->name('superadmin.task');
 // });

// Route::get('/superadmin/task/view', [SuperadminController::class, 'index'])
//     ->name('sup_task')
//     ->middleware(['auth', 'role:superadmin']);

// superadmin




Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::get('/admin/add-registration', AddRegistration::class)->name('admin.add-registration');
    Route::get('/admin/approve-students', ApproveStudents::class)->name('admin.approve-students');
    Route::get('/admin/generate-id-cards', GenerateStudentId::class)->name('admin.generate-id');
});

Route::middleware(['auth', 'role:hod', 'dept'])->group(function () {
    Route::get('/hod/dashboard', [DashboardController::class, 'hod'])->name('hod.dashboard');
    //  Route::get('/hod/tasks', CrudAcd::class)->name('hod_task');
    Route::get('/hod/students', ViewStudents::class)->name('hod.students');
});

Route::middleware(['auth', 'role:teacher'])->group(function () {
    Route::get('/teacher/dashboard', [DashboardController::class, 'teacher'])->name('teacher.dashboard');
});

Route::middleware(['auth', 'role:ac_council'])->group(function () {
    Route::get('/ac_council/dashboard', [DashboardController::class, 'ac_council'])->name('ac_council.dashboard');
});

Route::middleware(['auth', 'role:tpo'])->group(function () {
    Route::get('/tpo/dashboard', [DashboardController::class, 'tpo'])->name('tpo.dashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [DashboardController::class, 'user'])->name('user.dashboard');
});

// Route::middleware('auth:student')->group(function () {
//        Route::get('/student/dashboard', StudentDashboard::class)->name('student.dashboard');
//     Route::post('/student/logout', function () {
//         Auth::guard('student')->logout();
//         return redirect()->route('student.login');
//     })->name('student.logout');
// });

// Route::middleware(['auth', 'role:student'])->group(function () {
//     Route::get('/student/dashboard', [DashboardController::class, 'student'])->name('student.dashboard');
// });

require __DIR__.'/auth.php';
