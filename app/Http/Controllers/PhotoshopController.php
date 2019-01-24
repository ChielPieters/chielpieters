<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Models\Image;


class PhotoshopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('photoshop');
    }

    public function upload(Request $request)
    {

        $image = new Image();

        $image->name = $request->get('name');
        $image->title = $request->get('title');

        $image->save();

        return redirect()->route('photoshop');

    }
}
