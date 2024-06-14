<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseRegistration;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{


    public function index()
    {
        $courses = Course::where('is_published', true)->get();
        return view('course_registration', compact('courses'));
    }
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    public function register(Request $request, Course $course)
    {
        $course->students()->attach(auth()->user()->id);
        return redirect()->back()->with('success', 'Course registered successfully');
    }
    public function dashboard()
    {
        $user = auth()->user();
        $courses = Course::where('is_published', true)->get();
        return view('coursepage', compact('courses'));
    }
    public function viewcor()
    {
        $courses = Course::all();
        return view('view2', compact('courses'));
    }
    public function registerCourse(Request $request)
    {
        $courseId = $request->input('course_id');
        $userId = auth()->id();

        // Register the user for the course
        CourseRegistration::create([
            'user_id' => $userId,
            'course_id' => $courseId,
        ]);

        // Redirect the user back to the course page
        return redirect()->back();
    }

    // Create
    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $course = Course::create($request->all());
        return redirect()->route('courses.show', $course);
    }

    // Update


// CourseController.php


public function tableViewer()
{
        $user = auth()->user();
    $courses = DB::table('courses')->get(); // Change 'course' to 'courses'

    return view('coursepage', ['courses' => $courses]);
}

    // Delete
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('/admin');
    }
    public function new_one(Request $request)
    {
        $course = new Course;
        $course->title = $request->title;
        $course->duration = $request->duration;
        $course->save();

        return redirect('/admin');
    }

    public function edit(Course $course)
    {
        return view('edit', compact('course'));
    }





    public function delete($courseId)
    {
        $userId = auth()->id();

        DB::table('course_registrations')
            ->where('user_id', $userId)
            ->where('course_id', $courseId)
            ->delete();

        return redirect()->back()->with('message', 'Course removed successfully');
    }
    public function update(Request $request, Course $course)
    {
        \Log::info('Request data: ', $request->all());

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'duration' => 'required',
            // Add validation rules for other course attributes here...
        ]);

        \Log::info('Validated data: ', $validatedData);

        $course->update($validatedData);

        return redirect()->route('view.admin');
    }










    public function displayAfterFourth() {
        $remainingCourses = Course::where('status', 'remaining')->get();

        if($remainingCourses->isEmpty()) {
            $remainingCourses = null;
        }
        $user = auth()->user();
        return view('coursepage', ['remainingCourses' => $remainingCourses]);
    }
}
