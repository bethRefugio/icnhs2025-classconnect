<?php

namespace App\Http\Controllers\Web;

use App\Models\Building;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Classroom\Store;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Classroom $model)
    {
      $classrooms = $model::with('building.school')->paginate(20);
      return view('classrooms.index', ['classrooms' => $classrooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classrooms.create', ['buildings' => Building::get() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $classroom = Classroom::create($request->all());
        return \Redirect::to('classroom')->withStatus(__('Classroom successfully added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  $building_id
     * @return \Illuminate\Http\Response
     */
    public function show($building_id)
    {
        return Classroom::where('building_id',$building_id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        return view('classrooms.edit', ['classroom' => $classroom, 'buildings' => Building::get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Store $request, $id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->update($request->all());
        return \Redirect::to('classroom')->withStatus(__('Classroom successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return back()->withStatus(__('Classroom successfully removed.'));
    }
}
