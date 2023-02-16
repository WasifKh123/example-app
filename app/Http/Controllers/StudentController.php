<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\StudentCourse;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

use function GuzzleHttp\Promise\all;

class StudentController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
        return view("create_student")->with("courses",Course::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new Student;
        $res->name = $request->input('name');
        $res->address = $request->input('address');
        $res->mobile = $request->input('mobile');
        $res->save();
                 
        $newc= new StudentCourse;
        $newc->course_id = $request->input('courses');
        $newc->student_id = $res->id;
        $newc->save();
        $request->session()->flash("msg","data submitted");
        return redirect("student");       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $res = array(Student::all(),Course::all());
        return view("test")->with("dataArr",$res);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student,$id)
    {   
        return view("edit")->with("student",Student::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
        $res = Student::find($request->id);
        $res->name = $request->input('name');
        $res->address = $request->input('address');
        $res->mobile = $request->input('mobile');
        $res->save();
        $request->session()->flash("msg","data updated");
        return redirect("student");    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student,$id)
    {    print_r($id);
        Student::destroy($id);
        return redirect("student");
    }
}
