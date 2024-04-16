<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\StoreSubscriberRequest;
use App\Models\Message;
use App\Models\Service;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index' , get_defined_vars());
    }

    public function about()
    {
        return view('front.about' , get_defined_vars());
    }

    public function contact()
    {
        return view('front.contact' , get_defined_vars());
    }

    public function services()
    {
        return view('front.services' , get_defined_vars());
    }
    public function subscriber(StoreSubscriberRequest $request)
    {
        $data = $request->validated();
        Subscriber::create($data);
        return back()->with('submessage' , 'Subscriber Successfuly');
    }
    function store(StoreMessageRequest $reqyest)
    {
        $data = $reqyest->validated();
        Message::create($data);
        return back()->with('mes' , 'Your message is sent suceessfult');
    }
}
