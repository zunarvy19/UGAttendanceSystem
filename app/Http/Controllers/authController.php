<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class authController extends Controller
{
    public function index(){
        return view('auth.login',[
            "title" => 'Login'
        ]);
    }

    public function login(request $request){
        $request -> validate([
            'username'=> 'required',
            'password'=> 'required'
        ],[
            'username.required'=> 'username wajib di isi',
            'password.required'=> 'Password wajib di isi'
        ]);
        $infoLogin = [
            'username'=> $request -> username, 
            'password'=> $request -> password,
        ];

        if (Auth::attempt($infoLogin, $request->remember)) {
            $request->session()->regenerate();
            return redirect('/dashboard')->with('success', 'Anda berhasil Login');
        } else {
            return redirect('/login')
                ->withErrors(['error' => 'Gagal Login'])
                ->withInput();
        }
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();
        return redirect('/login');
    }
    
    public function changePassword(Request $request){
        $request -> validate ([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8']
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->new_password)]);
            
            // Gunakan session flash untuk memberi tahu view bahwa kata sandi telah diubah
            session()->flash('success', 'Kata sandi berhasil diubah');
            
            return view('main.profile',[
                "title"=>'profile'
            ]);
        }

        throw ValidationException::withMessages([
            'current_password' => 'Password lama Anda tidak sesuai',
        ]);
    }
}
