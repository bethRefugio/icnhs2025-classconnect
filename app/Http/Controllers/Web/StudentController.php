<?php

namespace App\Http\Controllers\Web;

use App\Models\Department;
use App\Models\Building;
use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Store;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Student $model)
    {
        $students = $model->with('classrooms')->paginate(20);
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buildings = Building::get();
        $departments = Department::get();
        $classrooms = Classroom::get();
        $teachers = Teacher::get();
        return view('students.create', compact('buildings', 'departments', 'classrooms', 'teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
      //$request['user_id'] = auth()->user()->id;
      $student = Student::create($request->all());
      return \Redirect::to('student')->withStatus(__('Student successfully added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return Student::where('room_id',$room_id)->get();
        return Student::where('department_id',$department_id)->get();
        return Student::where('building_id',$building_id)->get();
        return Student::where('adviser_id',$adviser_id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', ['student' => $student, 'buildings' => Building::get(), 'classrooms' => Classroom::get(), 'departments' => Department::get(), 'teachers' => Teacher::get()]);
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
        $student->update($request->all());
        return \Redirect::to('student')->withStatus(__('Student successfully updated.'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return back()->withStatus(__('Student successfully removed.'));
    }
}
