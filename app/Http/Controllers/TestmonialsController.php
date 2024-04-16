<?php

namespace App\Http\Controllers;

use App\Models\Testmonials;
use App\Http\Requests\StoreTestmonialsRequest;
use App\Http\Requests\UpdateTestmonialsRequest;
use Illuminate\Support\Facades\Storage;

class TestmonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $testmonials = Testmonials::paginate(config('paginate.pagination'));
        return view ('admin.testmonials.index' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('admin.testmonials.create' , get_defined_vars());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestmonialsRequest $request)
    {

       $data = $request->validated();
       //get image
        //get the image first
        $image = $request->image; // اسم الصوره هنا معتمد علي اسمها في الفورم الي انت عملتها
        //change name of image to be unquie
        $newImageName = time() . '-' . $image->getClientOriginalName(); // this is the name of image
        //move to my projecr

        //dd($data);

        $image->storeAs('testmonials' , $newImageName , 'public');
        //save new name to database
        $data['image'] = $newImageName;

       Testmonials::create($data);
       return to_route('admin.testmonials.index')->with('success' , __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testmonials $testmonials)
    {
        //
        return view ('admin.testmonials.show' , get_defined_vars());

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testmonials $testmonials)
    {
        //
        return view ('admin.testmonials.edit' , get_defined_vars());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestmonialsRequest $request, Testmonials $testmonials)
    {
        $data = $request->validated();


        if($request->hasFile('image')){
            Storage::delete("public/testmonials/$testmonials->image");
            $image = $request->image; // اسم الصوره هنا معتمد علي اسمها في الفورم الي انت عملتها
            //change name of image to be unquie
            $newImageName = time() . '-' . $image->getClientOriginalName(); // this is the name of image
            //move to my projecr

            //dd($data);

            $image->storeAs('testmonials' , $newImageName , 'public');
            //save new name to database
            $data['image'] = $newImageName;
        }
        $testmonials->update($data);
        return to_route('admin.testmonials.index')->with('success' , __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testmonials $testmonials)
    {
        //
       $testmonials->delete();
        return to_route('admin.testmonials.index')->with('success' , __('keywords.deleted_successfully'));
    }
}
