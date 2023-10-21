<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
{
    $quizzes = \App\Models\Quiz::all();
    return view('quizzes.index', compact('quizzes'));
}
}


