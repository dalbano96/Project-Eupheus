<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\Employee;
use App\Models\Student;
use App\Role;
use Validator;
use Eloquent;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use DB;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }
    
    public function showRegistrationForm()
    {
     /*   $roleCount = Role::count();
		if($roleCount != 0) {
			$userCount = User::count();
			if($userCount == 0) {
				return view('auth.register');
			} else {
				return redirect('login');
			}
		} else {
			return view('errors.error', [
				'title' => 'Migration not completed',
				'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
			]); 
		} */
		
			$programs = DB::table('programs')->get();
			return view('auth.register', ['programs' => $programs]);
    }
    
    public function showLoginForm()
    {
		$roleCount = Role::count();
		if($roleCount != 0) {
			$userCount = User::count();
			if($userCount == 0) {
				$requirements = DB::table('requirements')->get();
				return redirect('register',['requirements' => $requirements]);
			} else {
				return view('auth.login');
			}
		} else {
			return view('errors.error', [
				'title' => 'Migration not completed',
				'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
			]);
		}
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        // TODO: This is Not Standard. Need to find alternative
        Eloquent::unguard();
        
				$student = Student::create([
					'name' => $data['name'],
					'email' => $data['email'],
					'gender' => $data['gender'],
					'date_birth' => $data['date'],
					'program' => $data['program_id'],
					'address' => $data['address'],
					'city' => $data['city'],
					'state' => $data['state'],
				]);
        
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'context_id' => $student->id,
            'type' => "Student",
        ]);
        $role = Role::where('name', 'STUDENT')->first();
        $user->attachRole($role);
    
        return $user;
    }
}
