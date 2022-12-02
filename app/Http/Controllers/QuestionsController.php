<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questions;

class QuestionsController extends Controller
{
    public function store(Request $request)
    {
        $requestdata = $request->toArray();

        $question = new Questions();
        $question->name = $requestdata['name'];
        $question->email = $requestdata['email'];
        $question->age = $requestdata['age'];
        $question->q1 = $requestdata['VIH1'];
        $question->q2 = $requestdata['VIH2'];
        $question->q3 = $requestdata['VIH3'];
        $question->q4 = $requestdata['VIH4'];
        $question->q5 = $requestdata['VIH5'];
        $question->save();

        return redirect()->route('yoursafe');
    }
}
