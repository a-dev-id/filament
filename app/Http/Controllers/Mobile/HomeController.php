<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Offer;
use App\Models\Page;
use App\Models\PopUp;
use App\Models\Review;
use App\Models\Villa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Page::where('is_active', '1')->where('id', '1')->first();
        $villa = Page::where('is_active', '1')->where('id', '2')->first();
        $experience = Page::where('is_active', '1')->where('id', '3')->first();
        $dining = Page::where('is_active', '1')->where('id', '4')->first();
        $offer = Page::where('is_active', '1')->where('id', '16')->first();
        $spa = Page::where('is_active', '1')->where('id', '5')->first();
        return view('mobile.home')->with(compact('setting', 'villa', 'experience', 'dining', 'offer', 'spa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
