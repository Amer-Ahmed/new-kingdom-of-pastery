<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', '!=', auth()->id())->with('roles')->get();
        return view('admin.user.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('name', '!=', 'customer')->get();
        return view('admin.user.create' , compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3|max:20',
            'middle_name' => 'nullable|min:3|max:20',
            'last_name' => 'required|min:3|max:20',
            'roles' => 'required|array',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:4',
            'image' => 'nullable|image|max:5000',
        ]);
        if($request->filled('middle_name'))
        {
            $name = $request->first_name.' '.$request->middle_name.' '.$request->last_name;
        }
        else
        {
            $name = $request->first_name.' '.$request->last_name;
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('users', 'public');
        }
        else
        {
            $image = null;
        }
        $user = User::create([
            'name' => $name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'first_phone' => $request->first_phone,
            'second_phone' => $request->second_phone,
            'image' => $image,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $user->attachRoles($request->roles);

        return redirect('/user')->with([
            'type' => 'success',
            'message' => 'User insert successfuly'
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
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user->load('roles');
        $roles = Role::all();
        return view('admin.user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $attributes = $request->validate([
            'first_name' => 'required|min:3|max:20',
            'middle_name' => 'nullable',
            'last_name' => 'required|min:3|max:20',
            'roles' => 'required|array',
            'email' => 'required|email',
            'first_phone' => 'nullable',
            'second_phone' => 'nullable',
            'image' => 'nullable|image|max:5000'
        ]);
        if ($request->hasFile('image')) {
            if (File::exists(storage_path('app/public/' . $user->image))) {
                File::delete(storage_path('app/public/' . $user->image));
            }
            $attributes['image'] = $request->file('image')->store('users', 'public');
        }
        $user->update($attributes);
        $user->attachRoles($request->roles);

        return redirect('/user')->with([
            'type' => 'success',
            'message' => 'User updated successfuly'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/user')->with([
            'type' => 'error',
            'message' => 'Role deleted successfuly'
        ]);
    }
}
