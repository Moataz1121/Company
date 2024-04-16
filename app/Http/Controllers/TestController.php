<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $tests = Test::paginate(config('paginate.pagination'));
        return view ('admin.tests.index' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('admin.tests.create' , get_defined_vars());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestRequest $request)
    {
        //
        $data = $request->validated();
        //get image
         //get the image first
         $image = $request->image; // اسم الصوره هنا معتمد علي اسمها في الفورم الي انت عملتها
         //change name of image to be unquie
         $newImageName = time() . '-' . $image->getClientOriginalName(); // this is the name of image
         //move to my projecr

         //dd($data);

         $image->storeAs('test' , $newImageName , 'public');
         //save new name to database
         $data['image'] = $newImageName;
       Test::create($data);
       return to_route('admin.tests.index')->with('success' , __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        //
        return view ('admin.tests.show' , get_defined_vars());

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
        return view ('admin.tests.edit' , get_defined_vars());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestRequest $request, Test $test)
    {
        //
        $data = $request->validated();


        if($request->hasFile('image')){
            Storage::delete("public/testmonials/$test->image");
            $image = $request->image; // اسم الصوره هنا معتمد علي اسمها في الفورم الي انت عملتها
            //change name of image to be unquie
            $newImageName = time() . '-' . $image->getClientOriginalName(); // this is the name of image
            //move to my projecr

            //dd($data);

            $image->storeAs('testmonials' , $newImageName , 'public');
            //save new name to database
            $data['image'] = $newImageName;
        }
        $test->update($data);
        return to_route('admin.tests.index')->with('success' , __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
       $test->delete();
        return to_route('admin.tests.index')->with('success' , __('keywords.deleted_successfully'));
    }
}
