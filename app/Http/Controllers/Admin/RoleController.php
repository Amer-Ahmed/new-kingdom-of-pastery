<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index' , compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3|max:50',
            'display_name' => 'nullable|min:3|max:50',
            'description' => 'nullable|min:3',
        ]);

        Role::create($attributes);

        return redirect('/role')->with([
            'type' => 'success',
            'message' => 'Role insert successfuly'
        ]);
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
     * @param \App\Models\Role $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('admin.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\Role $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3|max:50',
            'display_name' => 'nullable|min:3|max:50',
            'description' => 'nullable|min:3',
        ]);


        $role->update($attributes);

        return redirect('/role')->with([
            'type' => 'success',
            'message' => 'Role updated successfuly'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Role $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect('/role')->with([
            'type' => 'error',
            'message' => 'Role deleted successfuly'
        ]);
    }
}
