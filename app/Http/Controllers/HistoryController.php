<?php

namespace App\Http\Controllers;

use App\Http\Requests\HistoryCreateRequest;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function create(HistoryCreateRequest $request)
    {
        $user = Auth::user();
        $data = $request->validated();
        $history = History::updateOrCreate(
            [
                'username' => $user->username,
                'course_id' => $data['course_id'],
            ],
            $data
        );
        return response()->json($history, 200);
    }

    public function getAll()
    {
        $user = Auth::user();
        $histories = History::with(['course', 'lesson'])->where('username', $user->username)->paginate(10);
        return view('profile.history', ['histories' => $histories]);
    }
}
