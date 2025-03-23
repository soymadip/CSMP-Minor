<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class TaskController extends Controller
// {
//     //
// }


namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\View\View;
use App\Models\User;
use App\Models\UserProfile;
use Spatie\Permission\Models\Role;

class TaskController extends Controller
{
	//
	public function redirectToTask()
	{
		$user = Auth::user();

		if ($user->hasRole('superadmin')) {
			return redirect()->route('superadmin.task');
		} elseif ($user->hasRole('admin')) {
			return redirect()->route('admin.dashboard');
		} elseif ($user->hasRole('hod')) {
			return redirect()->route('hod.task');
		} elseif ($user->hasRole('teacher')) {
			return redirect()->route('teacher.task');
		} elseif ($user->hasRole('ac_council')) {
			return redirect()->route('ac_council.task');
		} elseif ($user->hasRole('tpo')) {
			return redirect()->route('tpo.task');
		} elseif ($user->hasRole('user')) {
			return redirect()->route('user.task');
		} elseif ($user->hasRole('student')) {
			return redirect()->route('student.task');
		}

		return abort(403, 'Unauthorized');
	}

	public function superadminT()
	{
                      
        // $users = User::with(['roles', 'profile'])->get();
        // $roles = Role::all();

        // $departments = [
        //     'DCST',
        //     'DEE',
        //     'DME',
        //     'DCE',
        //     'OFFICE',
        //     'AC_COUNCIL',
        //     'TPO',
        // ];
		// return view('dashboards.sup_task', compact('roles', 'users', 'departments'));

        return view('dashboards.sup_task');
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
