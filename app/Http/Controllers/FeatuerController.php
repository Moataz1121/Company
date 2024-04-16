<?php

namespace App\Http\Controllers;

use App\Models\Featuer;
use App\Http\Requests\StoreFeatuerRequest;
use App\Http\Requests\UpdateFeatuerRequest;

class FeatuerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $featuers = Featuer::paginate(config('paginate.pagination'));
        return view ('admin.featuers.index' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('admin.featuers.create' , get_defined_vars());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeatuerRequest $request)
    {
        //
       $data = $request->validated();
       Featuer::create($data);
       return to_route('admin.featuers.index')->with('success' , __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Featuer $featuer)
    {
        //
        return view ('admin.featuers.show' , get_defined_vars());

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Featuer $featuer)
    {
        //
        return view ('admin.featuers.edit' , get_defined_vars());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeatuerRequest $request, Featuer $featuer)
    {
        //
        $data = $request->validated();
        $featuer->update($data);
        return to_route('admin.featuers.index')->with('success' , __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Featuer $featuer)
    {
        //
       $featuer->delete();
        return to_route('admin.featuers.index')->with('success' , __('keywords.deleted_successfully'));
    }
}
