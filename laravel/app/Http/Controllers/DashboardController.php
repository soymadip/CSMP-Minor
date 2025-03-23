<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\View\View;
//use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
	//
	public function redirectToDashboard()
	{
		$user = Auth::user();

		if ($user->hasRole('superadmin')) {
			return redirect()->route('superadmin.dashboard');
		} elseif ($user->hasRole('admin')) {
			return redirect()->route('admin.dashboard');
		} elseif ($user->hasRole('hod')) {
			return redirect()->route('hod.dashboard', ['department' => $user->profile->department]);
		} elseif ($user->hasRole('teacher')) {
			return redirect()->route('teacher.dashboard', ['department' => $user->profile->department]);
		} elseif ($user->hasRole('ac_council')) {
			return redirect()->route('ac_council.dashboard', ['department' => $user->profile->department]);
		} elseif ($user->hasRole('tpo')) {
			return redirect()->route('tpo.dashboard');
		} elseif ($user->hasRole('user')) {
			return redirect()->route('user.dashboard');
		} elseif ($user->hasRole('student')) {
			return redirect()->route('student.dashboard', ['department' => $user->profile->department]);
		}

		return abort(403, 'Unauthorized');
	}

	public function superadmin()
	{
		return view('dashboards.superadmin');
	}
	public function admin()
	{
		return view('dashboards.admin');
	}
	public function hod()
	{
		return view('dashboards.hod');
	}
	public function teacher()
	{
		return view('dashboards.teacher');
	}
	public function ac_council()
	{
		return view('dashboards.ac_council');
	}
	public function tpo()
	{
		return view('dashboards.tpo');
	}
	public function user()
	{
		return view('dashboards.user');
	}
	public function student()
	{
		return view('dashboards.student');
	}
    
}
