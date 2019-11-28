<?php

namespace App\Http\Controllers\Admin;

use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\OfferBuyGet;
use App\Models\OfferDiscount;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::with('buyGet')->with('discount')->get();
        return view('admin.offer.index' , compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offer.create');
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
            'title' => 'required|min:3|max:20',
            'service_type' => 'required',
            'date_from' => 'required|date',
            'date_to' => 'required|date',
            'branches' => 'required|array',
            'description' => 'nullable',
            'image' => 'nullable|image|max:5000',
            'offer_type' => 'required',
        ]);
        $branches = implode(",", $request->get('branches'));
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('offers', 'public');
        }
        $offer = Offer::create([
            'title' => $request->title,
            'service_type' => $request->service_type,
            'date_from' => $request->date_from,
            'date_to' => $request->date_to,
            'branches' => $branches,
            'description' => $request->description,
            'image' => $image,
            'offer_type' => $request->offer_type,
            'created_by' => auth()->id()
        ]);

        if($request->has('buy_quantity') && $request->buy_quantity != null)
        {
            $buy_items = implode(",", $request->get('buy_items'));
            $get_items = implode(",", $request->get('get_items'));
            OfferBuyGet::create([
                'offer_id' => $offer->id,
                'buy_quantity' => $request->buy_quantity,
                'buy_category_id' => $request->buy_category_id,
                'buy_items' => $buy_items,
                'get_quantity' => $request->get_quantity,
                'get_category_id' => $request->get_category_id,
                'get_items' => $get_items,
                'offer_price' => $request->offer_price,
            ]);
        }
        if($request->has('discount_quantity') && $request->discount_quantity != null)
        {
            $items = implode(",", $request->get('items'));
            OfferDiscount::create([
                'offer_id' => $offer->id,
                'quantity' => $request->discount_quantity,
                'category_id' => $request->category_id,
                'items' => $items,
                'discount_type' => $request->discount_type,
                'discount_value' => $request->discount_value,
            ]);
        }

        return redirect('/offer')->with([
            'type' => 'success',
            'message' => 'Offer insert successfuly'
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
    public function edit(Offer $offer)
    {
        return view('admin.offer.edit' , compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $attributes = $request->validate([
            'title' => 'required|min:3|max:20',
            'service_type' => 'required',
            'date_from' => 'required|date',
            'date_to' => 'required|date',
            'branches' => 'required|array',
            'description' => 'nullable',
            'image' => 'nullable|image|max:5000',
            'offer_type' => 'required',
        ]);
        $branches = implode(",", $request->get('branches'));

        if ($request->hasFile('image')) {
            if (File::exists(storage_path('app/public/' . $offer->image))) {
                File::delete(storage_path('app/public/' . $offer->image));
            }
            $image = $request->file('image')->store('offers', 'public');
        }
        else
        {
            $image = null;
        }
        $offer->update([
            'title' => $request->title,
            'service_type' => $request->service_type,
            'date_from' => $request->date_from,
            'date_to' => $request->date_to,
            'branches' => $branches,
            'description' => $request->description,
            'image' => $image,
            'offer_type' => $request->offer_type,
            'updated_by' => auth()->id()
        ]);
        if($request->has('buy_quantity') && $request->buy_quantity != null)
        {
            $offer_buy_get = OfferBuyGet::where(['offer_id' => $offer->id])->first();
            $buy_items = implode(",", $request->get('buy_items'));
            $get_items = implode(",", $request->get('get_items'));
            $offer_buy_get->update([
                'offer_id' => $offer->id,
                'buy_quantity' => $request->buy_quantity,
                'buy_category_id' => $request->buy_category_id,
                'buy_items' => $buy_items,
                'get_quantity' => $request->get_quantity,
                'get_category_id' => $request->get_category_id,
                'get_items' => $get_items,
                'offer_price' => $request->offer_price,
            ]);
        }

        if($request->has('discount_quantity') && $request->discount_quantity != null)
        {
            $offer_discount = OfferDiscount::where(['offer_id' => $offer->id])->first();
            $items = implode(",", $request->get('items'));
            $offer_discount->update([
                'offer_id' => $offer->id,
                'quantity' => $request->discount_quantity,
                'category_id' => $request->category_id,
                'items' => $items,
                'discount_type' => $request->discount_type,
                'discount_value' => $request->discount_value,
            ]);
        }

        return redirect('/offer')->with([
            'type' => 'success',
            'message' => 'Offer updated successfuly'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();

        return redirect('/offer')->with([
            'type' => 'error',
            'message' => 'Offer deleted successfuly'
        ]);
    }
}
