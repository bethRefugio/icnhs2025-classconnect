<?php

namespace App\Http\Controllers\Web;

use App\Models\School;
use App\Models\Department;
use App\Models\Building;
use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Store;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Teacher $model)
    {
        $teachers = $model->paginate(20);
        return view('teachers.index', ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create', [
                      //'schools' => School::get(),
                      'buildings' => Building::get(),
                      'departments' => Department::get(),
                      'classrooms' => Classroom::get(),
                    ]);
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
      $teacher = Teacher::create($request->all());
      return \Redirect::to('teacher')->withStatus(__('Teacher successfully added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return Teacher::where('room_id',$room_id)->get();
        return Teacher::where('department_id',$department_id)->get();
        return Teacher::where('building_id',$building_id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', ['teacher' => $teacher, 'buildings' => Building::get(), 'classrooms' => Classroom::get(), 'departments' => Department::get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->all());
        return \Redirect::to('teacher')->withStatus(__('Teacher successfully updated.'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return back()->withStatus(__('Teacher successfully removed.'));
    }
}
