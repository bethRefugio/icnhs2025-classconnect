<?php

namespace App\Http\Controllers\Web;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\Parent\Store;
use App\Http\Requests\Parent\Update;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(User $model)
     {
         $parents = $model::with('account')->where('account_id',3)->paginate(20);
         return view('parent.index', ['parents' => $parents]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parent.create', ['roles' => Account::where('name','Parent')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $request['password'] = Hash::make($request['password']);
        $parent = User::create($request->all());
        return \Redirect::to('parent')->withStatus(__('Parent successfully added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $parent
     * @return \Illuminate\Http\Response
     */
    public function edit(User $parent)
    {
        return view('parent.edit', ['parent' => $parent, 'roles' => Account::where('name','Parent')->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, $id)
    {
          $parent = User::findOrFail($id);

          $request['password'] = Hash::make($request['password']);
          //$parent->update($request->all());
          $parent->update($request->except(['email','password']));
          return \Redirect::to('parent')->withStatus(__('Parent successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $parent
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $parent)
    {
        $parent->delete();
        return back()->withStatus(__('Parent successfully removed.'));
    }
}
