<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function check_validate(Request $request){
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10',
            'username' => 'required|string|min:1|max:30',
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password'=>'required|min:6',
            'role'=>'required'
        ]);
        return $request->input();
    }
    public function post_register(Request $request)
    {
        $this->check_validate($request);
        $check_email_exit = DB::table('users')
            ->where('email',$request->email)
            ->exists();
        $check_acount_exit = DB::table('users')
            ->where('username',$request->username)
            ->exists();
        if($check_email_exit == true){
            return redirect()->back()->with('error','Email đã tồn tại, vui lòng nhập email khác.');
        }
        if ($check_acount_exit == true){
            return redirect()->back()->with('error','Tên tài khoản đã được sử dụng, vui lòng nhập lại.');
        }
        if($request['role']==2){
            $value ="lecture";
            User::create([
                'email'=>$request['email'],
                'phone'=>$request['phone'],
                'username'=>$request['username'],
                'password'=>bcrypt($request['password']),
                'role'=>$value,
            ]);
            Lecture::create([
                'email'=>$request['email'],
                'phone'=>$request['phone']
            ]);

        }
        else{
            $value = "student";
            User::create([
                'email'=>$request['email'],
                'phone'=>$request['phone'],
                'username'=>$request['username'],
                'password'=>bcrypt($request['password']),
                'role'=>$value,
            ]);
            Student::create([
                'email'=>$request['email'],
                'phone'=>$request['phone'],
            ]);
        }
        return redirect()->back()->with('success','Bạn đã đăng ký thành công. Đăng nhập để sử dụng.');
    }
    public function login(){
        return view('auth.login');
    }
    public function postAuthLogin(Request $request){
        $arr = [
            'username' =>$request['username'],
            'password' => $request['password']
        ];
        if(Auth::attempt($arr)){
            $data = $request->input();
            $request->session()->put('username',$data['username']);
            if($request->session()->has('username')){
                return redirect()->route('home');
            }
            return redirect()->route('home');
        }
        else{
            return redirect()->back()->with('message','Đăng nhập thất bại !');
        }
    }
    public function logout(){
        Auth::logout();
        return view('home');
    }
    public function change_password(){
        return view('profile.change_password');
    }
    public function update_password(Request $request){
        $request->validate([
            'old_password' => ['required','min:6'],
            'new_password' => 'required|min:6',
            'confirm_password' => 'min:6|required_with:new_password|same:new_password',
        ]);
        $current_user = auth()->user();
        if (Hash::check($request->old_password,$current_user->password)){
            $current_user->update([
                'password'=>bcrypt($request->new_password)
            ]);
            return redirect()->back()->with('success','Password successfully changed');
        }
        else{
            return redirect()->back()->with('error','old password does not matched.');
        }
    }
}
