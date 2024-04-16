<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $subscribers = Subscriber::paginate(config('paginate.pagination'));
        return view ('admin.subscribers.index' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(Subscriber $subscriber)
    {
        //
        return view ('admin.subscribers.show' , get_defined_vars());

    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        //
       $subscriber->delete();
        return to_route('admin.subscribers.index')->with('success' , __('keywords.deleted_successfully'));
    }
}
