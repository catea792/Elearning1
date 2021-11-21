<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CourseController extends Controller
{
    public function shows($slug){
        $course = Course::find($slug);
        $lessons = DB::table('lessons')
            ->where('lessons.course_id','=',$course->course_id)
            ->get()->sortBy('lesson_name')->all();
        return view('course.course_views',compact('course','lessons'));
    }
    public function list_course(){
        if (Auth::user()->role== "lecture"){
            $list_course = DB::table('courses')
                ->join('lectures', 'courses.lecture_email', '=', 'lectures.email')
                ->get(['course_id','course_name','subject_id','slug'])->all();
            return view('course.list_course',['list_course'=>$list_course]);
        }
        else{
            return redirect()->with('error','error')->route('login');
        }
    }
    public function course_views_detail($slug){
        $course = Course::find($slug);
        return view('course.course_views_detail',compact('course'));
    }
    public function course_final_test($course_id){
        $count = DB::table('course_tests')
            ->select('*')
            ->selectRaw('COUNT(id) as number')
            ->where('course_id','=',$course_id)
            ->groupBy('course_id','username')
            ->get();
        $result = DB::table('course_tests')
            ->where('course_id','=',$course_id)
            ->orderBy('id')
            ->paginate(8);
        Paginator::useBootstrap();
        return view('course.show_test',compact('result','count'));
    }
    public function upload_course(){
        if (Auth::user()->role== "lecture"){
            return view('course.upload_course');
        }
        else{
            return redirect()->with('error','error')->route('login');
        }
    }
    public function check_validate_upload(Request $request){
        $request->validate([
            'course_id'=>'required|string',
            'course_name'=>'required|string',
            'subject_id'=>'required|string',
            'slug'=>'required'
        ]);
    }
    public function post_upload_course(Request $request)
    {
        $this->check_validate_upload($request);
        $check_course_id = DB::table('courses')
            ->where('course_id',$request->course_id)
            ->exists();
        $check_slug = DB::table('courses')
            ->where('slug',$request->slug)
            ->exists();
        if($check_course_id == true){
            return redirect()->back()->with('error','Tải lên thất bại, mã khóa học đã tồn tại!');
        }
        if($check_slug == true){
            return redirect()->back()->with('error','Tải lên thất bại, đường dẫn đã tồn tại!');
        }
        $video_name = $request->video->getClientOriginalName();
        $request->video->move('movie',$video_name);
        $image_name = $request->des_image->getClientOriginalName();
        $request->des_image->move('image',$image_name);
        Course::create([
            'lecture_email'=>$request->lecture_email,
            'course_id'=>$request->course_id,
            'course_name'=>$request->course_name,
            'subject_id'=>$request->subject_id,
            'grade'=>$request->grade,
            'video'=>$video_name,
            'description'=>$request->description,
            'requirements'=>$request->requirements,
            'outcomes'=>$request->outcomes,
            'des_image'=>$image_name,
            'slug'=>$request->slug,
        ]);
        return redirect()->back()->with('success','Tải lên thành công!');
    }
    public function update_course($slug){
        if (Auth::user()->role== "lecture"){
            $course = Course::find($slug);
            return view('course.update_course',compact('course'));
        }
        else{
            return redirect()->with('error','error')->route('login');
        }
    }

    public function check_update_course(Request $request){
        $request->validate([
            'course_name'=>'required|string',
            'grade'=>'required|numeric',
            'description'=>'required',
            'requirements'=>'required',
            'outcomes'=>'required',
            'slug'=>'required'
        ]);
        if($request->update_video == null){
            $request->validate([
                'current_video'=>'required',
            ]);
        }
        else{
            $request->validate([
                'update_video'=>'required',
            ]);
        }
        if($request->update_des_image == null){
            $request->validate([
                'current_des_image'=>'required',
            ]);
        }
        else{
            $request->validate([
                'update_des_image'=>'required',
            ]);
        }
    }
    public function post_update_course(Request $request){
        $this->check_update_course($request);
        if($request->update_des_image == null && $request->update_video != null){
            if($request->current_video != $request->update_video && $request->current_video != null){
                $file_path = public_path()."/movie/".$request->current_video;
                if($file_path != null){
                    unlink($file_path);
                }
            }
            $video_name = $request->update_video->getClientOriginalName();
            $request->update_video->move('movie',$video_name);
            DB::table('courses')
                ->where('subject_id','=',$request->subject_id)
                ->where('course_id','=',$request->course_id)
                ->update([
                    'course_name'=>$request->course_name,
                    'grade'=>$request->grade,
                    'video'=>$video_name,
                    'description'=>$request->description,
                    'requirements'=>$request->requirements,
                    'outcomes'=>$request->outcomes,
                    'slug'=>$request->slug,
                ]);
            return redirect()->back()->with('success','Cập nhật thành công!');
        }
        if ($request->update_des_image != null && $request->update_video == null){
            if($request->current_des_image != $request->update_des_image && $request->current_des_image != null){
                $file_path = public_path()."/image/".$request->current_des_image;
                if($file_path != null){
                    unlink($file_path);
                }
            }
            $image_name = $request->update_des_image->getClientOriginalName();
            $request->update_des_image->move('image',$image_name);
            DB::table('courses')
                ->where('subject_id','=',$request->subject_id)
                ->where('course_id','=',$request->course_id)
                ->update([
                    'course_name'=>$request->course_name,
                    'grade'=>$request->grade,
                    'description'=>$request->description,
                    'requirements'=>$request->requirements,
                    'outcomes'=>$request->outcomes,
                    'des_image'=>$image_name,
                    'slug'=>$request->slug,
                ]);
            return redirect()->back()->with('success','Cập nhật thành công!');
        }
        if($request->update_des_image != null && $request->update_video != null){
            if($request->current_des_image != $request->update_des_image && $request->current_des_image != null){
                $file_path = public_path()."/image/".$request->current_des_image;
                if($file_path != null){
                    unlink($file_path);
                }
            }
            if($request->current_video != $request->update_video && $request->current_video != null){
                $file_path = public_path()."/movie/".$request->current_video;
                if($file_path != null){
                    unlink($file_path);
                }
            }
            $video_name = $request->update_video->getClientOriginalName();
            $request->update_video->move('movie',$video_name);
            $image_name = $request->update_des_image->getClientOriginalName();
            $request->update_des_image->move('image',$image_name);
            DB::table('courses')
                ->where('subject_id','=',$request->subject_id)
                ->where('course_id','=',$request->course_id)
                ->update([
                    'course_name'=>$request->course_name,
                    'grade'=>$request->grade,
                    'video'=>$video_name,
                    'description'=>$request->description,
                    'requirements'=>$request->requirements,
                    'outcomes'=>$request->outcomes,
                    'des_image'=>$image_name,
                    'slug'=>$request->slug,
                ]);
            return redirect()->back()->with('success','Cập nhật thành công!');
        }
    }
}
