<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LectureController extends Controller
{
    public function show_list_lecture(){
        $data = DB::table('lectures')->paginate(12);
        Paginator::useBootstrap();
        return view('lecture.list_lecture',compact('data'));
    }
}
