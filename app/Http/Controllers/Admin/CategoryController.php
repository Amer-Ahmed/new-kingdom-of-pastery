<?php

namespace App\Http\Controllers\Admin;

use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Extra;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('items')->get();
        return view('admin.category.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'name_ar' => 'required|min:3|max:20',
            'name_en' => 'required|min:3|max:20',
            'description_ar' => 'nullable',
            'description_en' => 'nullable',
            'image' => 'required|image|max:5000',
        ]);
        if ($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('categories', 'public');
        }
        $category = Category::create($attributes);
        if($request->has('Item'))
        {
            $items = $request->get('Item');
            foreach ($items as $item) {
                $item['image'] = $request->file('image')->store('items', 'public');
                $item = Item::create([
                            'category_id' => $category->id,
                            'name_ar' => $item['name_ar'],
                            'name_en' => $item['name_en'],
                            'description_ar' => $item['description_ar'],
                            'description_en' => $item['description_en'],
                            'price' => $item['price'],
                            'calories' => $item['calories'], 
                            'image' => $item['image'], 
                        ]);
            }
        }
        if($request->has('Extra'))
        {
            $extras = $request->get('Extra');
            foreach ($extras as $extra) {
                Extra::create([
                    'item_id' => $item->id,
                    'name_ar' => $extra['name_ar'],
                    'name_en' => $extra['name_en'],
                    'description_ar' => $extra['description_ar'],
                    'description_en' => $extra['description_en'],
                    'price' => $extra['price'],
                    'calories' => $extra['calories'], 
                ]);
            }
        }

        return redirect('/category')->with([
            'type' => 'success',
            'message' => 'Menu insert successfuly'
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $items = $category->items()->get();
        $extras = Extra::whereIn('item_id',$items)->get();

        return view('admin.category.edit' , compact('category' , 'items' , 'extras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $attributes = $request->validate([
            'name_ar' => 'required|min:3|max:20',
            'name_en' => 'required|min:3|max:20',
            'description_ar' => 'nullable',
            'description_en' => 'nullable',
            'image' => 'required|image|max:5000',
        ]);

        if ($request->hasFile('image')) {
            if (File::exists(storage_path('app/public/' . $category->image))) {
                File::delete(storage_path('app/public/' . $category->image));
            }
            $attributes['image'] = $request->file('image')->store('categories', 'public');
        }

        $category->update($attributes);
        if($request->has('Item'))
        {   
            $items = Item::where(['category_id' => $category->id])->get();
            $items->each->delete();
            $new_items = $request->get('Item');
            foreach ($new_items as $item) {
                $item['image'] = $request->file('image')->store('items', 'public');
                $item = Item::create([
                    'category_id' => $category->id,
                    'name_ar' => $item['name_ar'],
                    'name_en' => $item['name_en'],
                    'description_ar' => $item['description_ar'],
                    'description_en' => $item['description_en'],
                    'price' => $item['price'],
                    'calories' => $item['calories'], 
                    'image' => $item['image'], 
                ]);
            }
        }
        if($request->has('Extra'))
        {   
            $extras = Extra::where(['item_id' => $item->id])->get();
            $extras->each->delete();
            $new_extras = $request->get('Extra');
            foreach ($new_extras as $extra) {
                Extra::create([
                    'item_id' => $item->id,
                    'name_ar' => $extra['name_ar'],
                    'name_en' => $extra['name_en'],
                    'description_ar' => $extra['description_ar'],
                    'description_en' => $extra['description_en'],
                    'price' => $extra['price'],
                    'calories' => $extra['calories'], 
                ]);
            }
        }

        return redirect('/category')->with([
            'type' => 'success',
            'message' => 'Menu Update successfuly'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/category')->with([
            'type' => 'error',
            'message' => 'Menu deleted successfuly'
        ]);
    }
}
