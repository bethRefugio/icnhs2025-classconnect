<?php

namespace App\Http\Controllers\Web;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\Staff\Store;
use App\Http\Requests\Staff\Update;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(User $model)
     {
         $staffs = $model::with('account')
                    ->where('account_id','<>',1)
                    ->where('account_id','<>',3)
                    ->paginate(20);
         return view('staff.index', ['staffs' => $staffs]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create', ['roles' => Account::where('name','<>','Parent')->get()]);
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
        $staff = User::create($request->all());
        return \Redirect::to('staff')->withStatus(__('Staff successfully added.'));
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
     * @param  \App\Models\User  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(User $staff)
    {
        return view('staff.edit', ['staff' => $staff, 'roles' => Account::where('name','<>','Parent')->get()]);
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
          $staff = User::findOrFail($id);

          $request['password'] = Hash::make($request['password']);
          //$staff->update($request->all());
          $staff->update($request->except(['email','password']));
          return \Redirect::to('staff')->withStatus(__('Staff successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $staff)
    {
        $staff->delete();
        return back()->withStatus(__('Staff successfully removed.'));
    }
}
