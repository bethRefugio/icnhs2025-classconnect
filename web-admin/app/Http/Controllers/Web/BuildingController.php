<?php

namespace App\Http\Controllers\Web;

use App\Models\School;
use App\Models\Building;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Building\Store;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Building $model)
    {
      $buildings = $model::with('classroom')->paginate(20);
      return view('buildings.index', ['buildings' => $buildings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buildings.create', ['schools' => School::get() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $building = Building::create($request->all());
        return \Redirect::to('building')->withStatus(__('Building successfully added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    //public function show(Building $building)
    public function show($school_id)
    {
        return Building::where('school_id',$school_id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function edit(Building $building)
    {
        return view('buildings.edit', ['building' => $building]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function update(Store $request, $id)
    {
        $building = Building::findOrFail($id);
        $building->update($request->all());
        return \Redirect::to('building')->withStatus(__('Building successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building)
    {
      $building->delete();
      return back()->withStatus(__('Building successfully removed.'));
    }
}
