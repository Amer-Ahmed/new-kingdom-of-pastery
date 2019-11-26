<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\City;
use App\Models\Area;
use App\Models\Address;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customer.index' , compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $areas = Area::all();
        return view('admin.customer.create' , compact('cities' , 'areas'));
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
            'first_name' => 'required|min:3|max:20',
            'middle_name' => 'nullable|min:3|max:20',
            'last_name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:4',
            'first_phone' => 'required',
            'second_phone' => 'nullable',
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
            $image = $request->file('image')->store('customers', 'public');
        }
        else
        {
            $image = null;
        }
        $customer = Customer::create([
            'name' => $name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'first_phone' => $request->first_phone,
            'second_phone' => $request->second_phone,
            'image' => $image,
            'password' => Hash::make($request->password)
        ]);

        if($request->has('Address'))
        {
            $addresses = $request->get('Address');
            foreach ($addresses as $customer_address) {
                Address::create([
                    'customer_id' => $customer->id,
                    'name' => 'address of ' .$customer->name,
                    'city_id' => $customer_address['city_id'],
                    'area_id' => $customer_address['area_id'],
                    'street' => $customer_address['street'],
                    'building_number' => $customer_address['building_number'],
                    'floor_number' => $customer_address['floor_number'],
                    'special_marque' => $customer_address['special_marque'], 
                ]);
            }
        }

        return redirect('/customer')->with([
            'type' => 'success',
            'message' => 'Customer insert successfuly'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $addresses = $customer->addresses()->get();
        return view('admin.customer.show', compact('customer' , 'addresses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $cities = City::all();
        $areas = Area::all();
        $addresses = $customer->addresses()->get();
        return view('admin.customer.edit', compact('customer', 'cities' , 'areas' , 'addresses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'first_name' => 'required|min:3|max:20',
            'middle_name' => 'nullable|min:3|max:20',
            'last_name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'first_phone' => 'required',
            'second_phone' => 'nullable',
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
            if (File::exists(storage_path('app/public/' . $customer->image))) {
                File::delete(storage_path('app/public/' . $customer->image));
            }
            $image = $request->file('image')->store('customers', 'public');
        }
        else
        {
            $image = null;
        }
        $customer->update([
            'name' => $name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'first_phone' => $request->first_phone,
            'second_phone' => $request->second_phone,
            'image' => $image,
        ]);
        if($request->has('Address'))
        {   
            $address_customer = Address::where(['customer_id' => $customer->id])->get();
            $address_customer->each->delete();
            $addresses = $request->get('Address');
            foreach ($addresses as $customer_address) {
                Address::create([
                    'customer_id' => $customer->id,
                    'name' => 'address of ' .$customer->name,
                    'city_id' => $customer_address['city_id'],
                    'area_id' => $customer_address['area_id'],
                    'street' => $customer_address['street'],
                    'building_number' => $customer_address['building_number'],
                    'floor_number' => $customer_address['floor_number'],
                    'special_marque' => $customer_address['special_marque'], 
                ]);
            }
        }

        return redirect('/customer')->with([
            'type' => 'success',
            'message' => 'Customer update successfuly'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('/customer')->with([
            'type' => 'error',
            'message' => 'Customer deleted successfuly'
        ]);
    }
}
