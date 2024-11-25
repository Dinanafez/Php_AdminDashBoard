<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Support\Facades\Validator;
use Illuminate\Validation\Factory as ValidationFactory;
use App\Models\User;

class AdminloginController extends Controller
{    
    public function index(){
        $users=User::get();
        return view('admin.login');

    }
    public function dashborad(){
        return view('admin.dashborad');
    }

        // Create a validator instance using the injected factory
        public function authenticate(Request $request, ValidationFactory $validatorFactory)
        { 

            
            $validator = $validatorFactory->make($request->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);
        
            if ($validator->fails()) {
                return redirect()->route('admin.login')
                    ->withErrors($validator)
                    ->withInput($request->only('email'));

        
            }
        
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->boolean('remember'))) {
                return redirect()->intended(route('admin.dashboard')); // Redirect to the intended URL or a default dashboard
            }
        
            return redirect()->route('admin.login')->with('error', 'Invalid credentials');
        }
}
