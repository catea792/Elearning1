<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    public function show(){
        return view('library.library_store');
    }
    public function list_documents(){
        if (Auth::user()->role== "lecture"){
            $list_documents = DB::table('libraries')
                ->join('lectures', 'libraries.lecture_email', '=', 'lectures.email')
                ->paginate(10);
            Paginator::useBootstrap();
            return view('library.list_documents',['list_documents'=>$list_documents]);
        }
        else{
            return redirect()->with('error','error')->route('login');
        }
    }
    public function views_detail($slug){
        $result = DB::table('libraries')
            ->where('slug','=',$slug)
            ->get()->first();

        return view('library.views_detail',compact('result'));
    }
    public function upload_documents(){
        if (Auth::user()->role== "lecture"){
            return view('library.upload_documents');
        }
        else{
            return redirect()->with('error','error')->route('login');
        }
    }
    public function check_upload_documents(Request $request){
        $request->validate([
            'subject_name'=>'required|string',
            'document_id'=>'required',
            'grade'=>'required|numeric',
            'title'=>'required|string',
            'content'=>'required',
            'author'=>'required|string',
            'slug'=>'required'
        ]);
    }
    public function post_upload_documents(Request $request){
        $this->check_upload_documents($request);
        $content = $request->contents;
        $file_name = time().'.'.$content->getClientOriginaleXtension();
        $request->contents->move('assets',$file_name);
        $result =Library::create([
            'lecture_email'=>auth()->user()->email,
            'subject_name'=>$request->subject_name,
            'document_id'=>$request->document_id,
            'grade'=>$request->grade,
            'title'=>$request->title,
            'content'=>$file_name,
            'author'=>$request->author,
            'slug'=>$request->slug,
        ]);
        if($result == 1){
            return redirect()->back()->with('success', 'Tải lên thành công!');
        }
        else{
            return redirect()->back()->with('error', 'Tải lên thất bại! Vui lòng thử lại');
        }
    }
    public function update_documents($document_id){
        if (Auth::user()->role== "lecture"){
            $result = DB::table('libraries')
                ->where('document_id','=',$document_id)
                ->get()->first();
            return view('library.update_documents',compact('result'));
        }
        else{
            return redirect()->with('error','error')->route('login');
        }
    }
    public function check_update_documents(Request $request){
        $request->validate([
            'subject_name'=>'required|string',
            'document_id'=>'required',
            'grade'=>'required|numeric',
            'title'=>'required|string',
            'author'=>'required|string',
            'slug'=>'required'
        ]);
        if($request->upload_content == null){
            $request->validate([
                'current_content'=>'required',
            ]);
        }
        else{
            $request->validate([
                'upload_content'=>'required',
            ]);
        }
    }
    public function post_update_documents(Request $request)
    {
        $this->check_update_documents($request);
        if ($request->upload_content == null) {
            $result = DB::table('libraries')
                ->where('subject_name', '=', $request->subject_name)
                ->where('document_id', '=', $request->document_id)
                ->update([
                    'grade' => $request->grade,
                    'title' => $request->title,
                    'author' => $request->author,
                    'slug' => $request->slug,
                ]);
            if($result == 1){
                return redirect()->back()->with('success', 'Cập nhật thành công!');
            }
            else{
                return redirect()->back()->with('error', 'Cập nhật thất bại! Vui lòng thử lại');
            }
        }
        if ($request->upload_content != null) {
            if($request->current_content != null){
                $file_path = public_path()."/assets/".$request->current_content;
                if($file_path != null){
                    unlink($file_path);
                }
            }
            $file_name = $request->upload_content->getClientOriginalName();
            $request->upload_content->move('assets', $file_name);
            $result = DB::table('libraries')
                ->where('subject_name', '=', $request->subject_name)
                ->where('document_id', '=', $request->document_id)
                ->update([
                    'grade' => $request->grade,
                    'title' => $request->title,
                    'content'=>$file_name,
                    'author' => $request->author,
                    'slug' => $request->slug,
                ]);
            if($result == 1){
                return redirect()->back()->with('success', 'Cập nhật thành công!');
            }
            else{
                return redirect()->back()->with('error', 'Cập nhật thất bại! Vui lòng thử lại');
            }
        }
    }

    public function views($slug){
        $data = Library::find($slug);
        return view('library.library_views',compact('data'));
    }
    public function view_grade_12(){
        return view('library.grade.grade_12');
    }
    public function view_grade_11(){
        return view('library.grade.grade_11');
    }
    public function view_grade_10(){
        return view('library.grade.grade_10');
    }
    public function view_grade_9(){
        return view('library.grade.grade_9');
    }
    public function view_grade_8(){
        return view('library.grade.grade_8');
    }
    public function view_grade_7(){
        return view('library.grade.grade_7');
    }
    public function view_grade_6(){
        return view('library.grade.grade_6');
    }
    public function view_grade_5(){
        return view('library.grade.grade_5');
    }
    public function view_grade_4(){
        return view('library.grade.grade_4');
    }
    public function view_grade_3(){
        return view('library.grade.grade_3');
    }
    public function view_grade_2(){
        return view('library.grade.grade_2');
    }
    public function view_grade_1(){
        return view('library.grade.grade_1');
    }
    public function views_all($subject_name){
        $data = DB::table('libraries')
            ->where('subject_name','=',$subject_name)
            ->paginate(12);
        Paginator::useBootstrap();
        return view('library.views_all',compact('data'));
    }
    public function views_grade_all($subject_name, $grade){
        $data = DB::table('libraries')
            ->where('subject_name','=',$subject_name)
            ->where('grade', '=', $grade)
            ->paginate(12);
        Paginator::useBootstrap();
        return view('library.views_all',compact('data'));
    }
}
