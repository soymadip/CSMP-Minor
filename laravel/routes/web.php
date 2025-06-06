<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Livewire\Superadmin\CreateUser;
use App\Livewire\Superadmin\UserList;
use App\Livewire\Hod\ViewStudents;
use App\Livewire\Admin\AddRegistration;
use App\Livewire\Admin\ApproveStudents;
use App\Livewire\Student\Register;
use App\Livewire\Admin\GenerateStudentId;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/student/Registration', Register::class)->name('student.registration');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    
    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::get('/dashboard', [DashboardController::class, 'redirectToDashboard'])
    ->middleware(['auth', 'verified'])->name('dashboard');

// superadmin
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/superadmin/dashboard', [DashboardController::class, 'superadmin'])->name('superadmin.dashboard');
    Route::get('/superadmin/tasks', CreateUser::class)->name('sup_task');
    Route::get('/superadmin/users', UserList::class)->name('superadmin.users');
    
});

// admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::get('/admin/add-registration', AddRegistration::class)->name('admin.add-registration');
    Route::get('/admin/approve-students', ApproveStudents::class)->name('admin.approve-students');
    Route::get('/admin/generate-id-cards', GenerateStudentId::class)->name('admin.generate-id');
});

// hod
Route::middleware(['auth', 'role:hod', 'dept'])->group(function () {
    Route::get('/hod/dashboard', [DashboardController::class, 'hod'])->name('hod.dashboard');
    Route::get('/hod/students', ViewStudents::class)->name('hod.students');
});

// teacher
Route::middleware(['auth', 'role:teacher'])->group(function () {
    Route::get('/teacher/dashboard', [DashboardController::class, 'teacher'])->name('teacher.dashboard');
});

// ac_council
Route::middleware(['auth', 'role:ac_council'])->group(function () {
    Route::get('/ac_council/dashboard', [DashboardController::class, 'ac_council'])->name('ac_council.dashboard');
});

// tpo
Route::middleware(['auth', 'role:tpo'])->group(function () {
    Route::get('/tpo/dashboard', [DashboardController::class, 'tpo'])->name('tpo.dashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [DashboardController::class, 'user'])->name('user.dashboard');
});

require __DIR__.'/auth.php';
