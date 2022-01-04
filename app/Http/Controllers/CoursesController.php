<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{
    public function submit(CoursesRequest $req){

        $courses = new Courses();
        $courses->courses_title = $req->input('courses_title');
        $courses->courses_discription = $req->input('courses_discription');
        $courses->save();
        return redirect()->route('home');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses =DB::select('select * from courses');
        return view('admin.courses',['courses'=>$courses]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(courses $courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, courses $courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(courses $courses)
    {
        //
    }
}
