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
        $courses = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('course.index', compact('courses'));
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function course(Course $course) {
        return view('courses.course', compact('course'));
    }
    /**
     * Список постов блога выбранной категории
     */
    public function category(Category $category) {
        $courses = $category->courses()
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return view('courses.category', compact('category', 'courses'));
    }

    /**
     * Список постов блога выбранного автора
     */
    public function author(User $user) {
        $courses = $user->courses()
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return view('courses.author', compact('user', 'courses'));
    }
}
