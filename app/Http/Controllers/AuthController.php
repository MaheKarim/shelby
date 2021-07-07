<?php


namespace App\Http\Controllers;


use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string'
        ]);

        $user = User::where('email', $request->get('email'))->where('status', UserStatus::ACTIVE)->first();

        if (!$user) {
            return redirect()->back()->with(['_status' => 'fails', '_msg' => 'No user found for this credentials']);
        }

        if (!Auth::attempt(['email' => $request->get('email'), 'password' => $request->input('password')], true)) {
            return redirect()->back()->with(['_status' => 'fails', '_msg' => 'Wrong credentials, please try again!']);
        }

        if (!Auth::check()) {
            return redirect()->back()->with(['_status' => 'fails', '_msg' => 'Something went wrong, please try again!']);
        }

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth.login');
    }
}
