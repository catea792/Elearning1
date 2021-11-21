<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index(){
        return view('profile.profile');
    }
    public function check_student_validate(Request $request){
        $request->validate([
            'phone' => 'required|numeric|min:10',
            'first_name'=>'required|string|min:1|max:30',
            'last_name'=>'required|string|min:1|max:15',
            'age'=>'required|numeric',
            'level'=>'required',
        ]);
        return $request->input();
    }
    public function check_lecture_validate(Request $request){
        $request->validate([
            'phone' => 'required|numeric',
            'first_name'=>'required|string|min:1|max:30',
            'last_name'=>'required|string|min:1|max:15',
            'age'=>'required|numeric',
            'degree'=>'required',
            'level_name'=>'required',
            'work_address'=>'required',
            'avatar'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'university'=>'string'
        ]);
        return $request->input();
    }
    public function update_profile(){
        return view('profile.update_profile');
    }
    public function change_profile(Request $request)
    {
        if($request->work == "student"){
            $this->check_student_validate($request);
            Student::find(Auth::user()->email)->update([
                'phone'=>$request->phone,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'age'=>$request->age,
                'level'=>$request->level,
            ]);
        }
        if($request->work == "lecture"){
            $this->check_lecture_validate($request);
            $avatar = $request->avatar;
            $avatar_name = time().'.'.$avatar->getClientOriginaleXtension();
            $request->avatar->move('lecture',$avatar_name);

            Lecture::find(Auth::user()->email)->update([
                'phone'=>$request->phone,
                'avatar'=>$avatar_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'age'=>$request->age,
                'degree'=>$request->degree,
                'level_name'=>$request->level_name,
                'university'=>$request->university,
                'work_address'=>$request->work_address,
            ]);
        }
        return redirect()->back()->with('success','Cập nhật thành công');
    }

}
