<?php

namespace App\Http\Controllers;

use App\answer;
use App\question;
use Illuminate\Http\Request;

class answers_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($questions)
    {
        $question = question::find($questions);
        $answers = answer::where('question_id', $questions)->get();
        // dd($question);
        // $answers = answer::all();
        return view('AdminLTE.Pages.formAnswer', compact('question', 'answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        answer::create($request->all());
        return redirect('/questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(answer $answer)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(answer $answer)
    {
        //
    }
}
