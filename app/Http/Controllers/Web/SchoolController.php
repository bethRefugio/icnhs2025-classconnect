<?php

namespace App\Http\Controllers\Web;

use App\Models\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\School\Store;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(School $model)
    {
        $schools = $model::paginate(20);
        return view('schools.index', ['schools' => $schools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $request['user_id'] = auth()->user()->id;
        $school = School::create($request->all());
        return \Redirect::to('school')->withStatus(__('School successfully added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        return view('schools.edit', ['school' => $school]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Store $request, $id)
    {
        $school = School::findOrFail($id);
        $school->update($request->all());
        return \Redirect::to('school')->withStatus(__('School successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $school->delete();
        return back()->withStatus(__('School successfully removed.'));
    }
}
