<?php

namespace App\Http\Controllers;

use App\Models\CourseTests;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseTestsController extends Controller
{
    public function list_question($course_id){
        $list_question = DB::table('course_tests')
            ->where('course_id', '=', $course_id)
            ->paginate(10);
        Paginator::useBootstrap();
        return view('course.tests.list_question',compact('list_question','course_id'));
    }
    public function create_question($course_id){
        if (Auth::user()->role== "lecture"){
            return view('course.tests.create_question',compact('course_id'));
        }
        else{
            return redirect()->with('error','error')->route('login');
        }
    }
    public function views_question_detail($course_id, $id){
        if (Auth::user()->role== "lecture"){
            $result = DB::table('course_tests')->where( 'course_id','=',$course_id)
                ->where('id','=',$id)
                ->get()->first();
            return view('course.tests.views_question_detail',compact('result'));
        }
        else{
            return redirect()->with('error','error')->route('login');
        }
    }
    public function update_question($course_id, $id){
        if (Auth::user()->role== "lecture"){
            $result = DB::table('course_tests')->where( 'course_id','=',$course_id)
            ->where('id','=',$id)
                ->get()->first();
            return view('course.tests.update_question',compact('result'));
        }
        else{
            return redirect()->with('error','error')->route('login');
        }
    }
    public function check_validate_question(Request $request){
        $request->validate([
            'course_id'=>'required|string',
            'id'=>'required|numeric',
            'question'=>'required|string',
            'choose_1'=>'required',
            'choose_2'=>'required',
            'choose_3'=>'required',
            'choose_4'=>'required',
            'answer'=>'required|string',
            'point'=>'required|numeric'
        ]);
    }
    public function post_create_question(Request $request)
    {
        $this->check_validate_question($request);
        if(CourseTests::where('course_id',$request->course_id)
            ->where('id',$request->id)
            ->exists()){
            return redirect()->back()->with('error','Tải lên thất bại, id câu hỏi đã tồn tại!');
        }
        $username = Auth::user()->username;
        CourseTests::create([
            'username'=>$username,
            'course_id'=>$request->course_id,
            'id'=>$request->id,
            'question'=>$request->question,
            'choose_1'=>$request->choose_1,
            'choose_2'=>$request->choose_2,
            'choose_3'=>$request->choose_3,
            'choose_4'=>$request->choose_4,
            'answer'=>$request->answer,
            'point'=>$request->point
        ]);
        return redirect()->back()->with('success','Tải lên thành công!');
    }
    public function post_update_question(Request $request){
        $this->check_validate_question($request);
        $username = Auth::user()->username;
        $user_check = DB::table('course_tests')
            ->where('course_id','=',$request->course_id)
            ->where('id','=',$request->id)
            ->get('username')->first();
        if($username == $user_check->username){
            DB::table('course_tests')
                ->where('course_id','=',$request->course_id)
                ->where('id','=',$request->id)
                ->update([
                    'course_id'=>$request->course_id,
                    'id'=>$request->id,
                    'question'=>$request->question,
                    'choose_1'=>$request->choose_1,
                    'choose_2'=>$request->choose_2,
                    'choose_3'=>$request->choose_3,
                    'choose_4'=>$request->choose_4,
                    'answer'=>$request->answer,
                    'point'=>$request->point
                ]);
            return redirect()->back()->with('success','Cập nhật thành công!');
        }
        else{
            return redirect()->back()->with('error','Bạn không thể thay đổi nội dung này, Vui lòng kiểm tra lại!');
        }
    }
//    public function delete_question($course_id, $id){
//        DB::table('course_tests')
//            ->where('course_id','=',$course_id)
//            ->where('id','=',$id)
//            ->delete();
//        return redirect()->back()->with('success','Xóa thành công !');
//    }
}
