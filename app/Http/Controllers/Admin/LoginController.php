<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginPage(){
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request){

        
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
           // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('admin.dashboard');
        }
       // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }

}


// make superAdmin user with tinker:

// $admin = new App\Models\Admin();
// $admin -> name = "Marwan Sallum";
// $admin -> email ="masalloum2091@gmail.com";
// $admin -> password = bcrypt('mero1064');
// $admin -> save();

