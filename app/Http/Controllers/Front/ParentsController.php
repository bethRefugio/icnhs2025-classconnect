<?php

namespace App\Http\Controllers\Front;

use App\Models\Account;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function searchTeacher(Request $request)
     {
         $teachers = Teacher::with('building', 'department', 'classroom')
                    ->join('buildings', 'buildings.id', '=', 'teachers.building_id')
                    ->join('schools', 'schools.id', '=', 'teachers.school_id')
                    ->join('classrooms', 'classrooms.id', '=', 'teachers.classroom_id')
                    ->join('departments', 'departments.id', '=', 'teachers.department_id')
                    ->where('first_name','like', '%'.$request['search'].'%')
                    ->orWhere('last_name','like', '%'.$request['search'].'%')
                    ->orWhere('position','like', '%'.$request['search'].'%')
                    ->orWhere('grade','like', '%'.$request['search'].'%')
                    ->orWhere('section','like', '%'.$request['search'].'%')
                    ->orWhere('buildings.name','like', '%'.$request['search'].'%')
                    ->orWhere('schools.name','like', '%'.$request['search'].'%')
                    ->orWhere('classrooms.name','like', '%'.$request['search'].'%')
                    ->orWhere('departments.abbrv','like', '%'.$request['search'].'%')
                    ->orWhere('departments.name','like', '%'.$request['search'].'%')
                    ->select('*','teachers.id as teacher_id')
         ->paginate(20);
         return view('search.index', ['teachers' => $teachers]);
     }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        //return $teacher;
        return view('search.info', ['teacher' => $teacher]);
    }
}
