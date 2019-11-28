<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\WorkingDay;
use App\Models\BranchDeliveryArea;
use App\Models\City;
use App\Models\Area;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::get();
        return view('admin.branch.index' , compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::get();
        $areas = Area::get();
        return view('admin.branch.create' , compact('cities' , 'areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->get('WorkingDay');
        $attributes = $request->validate([
            'name_ar' => 'required|min:3|max:30',
            'name_en' => 'required|min:3|max:30',
            'city_id' => 'required|numeric',
            'area_id' => 'required|numeric',
            'address_description' => 'required',
            'first_phone' => 'required|numeric',
            'second_phone' => 'nullable|numeric',
            'email' => 'required|email',
            'service_type' => 'required|array',
        ]);
        $attributes['service_type'] = implode(",", $request->get('service_type'));
        $branch = Branch::create($attributes);

        if($request->has('WorkingDay'))
        {
            $working_days = $request->get('WorkingDay');
            foreach ($working_days as $working_day) {
                WorkingDay::create([
                    'branch_id' => $branch->id,
                    'day' => $working_day['day'],
                    'time_from' => $working_day['time_from'],
                    'time_to' => $working_day['time_to'],
                ]);
            }
        }
        return redirect('/branch')->with([
            'type' => 'success',
            'message' => 'Branch insert successfuly'
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        $cities = City::all();
        $areas = Area::all();
        return view('admin.branch.edit' , compact('cities' , 'areas' , 'branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        $attributes = $request->validate([
            'name_ar' => 'required|min:3|max:30',
            'name_en' => 'required|min:3|max:30',
            'city_id' => 'required|numeric',
            'area_id' => 'required|numeric',
            'address_description' => 'required',
            'first_phone' => 'required|numeric',
            'second_phone' => 'nullable|numeric',
            'email' => 'required|email',
            'service_type' => 'required|array',
        ]);
        $attributes['service_type'] = implode(",", $request->get('service_type'));
        $branch->update($attributes);

        return redirect('/branch')->with([
            'type' => 'success',
            'message' => 'Branch update successfuly'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();

        return redirect('/branch')->with([
            'type' => 'error',
            'message' => 'Branch deleted successfuly'
        ]);
    }
}
