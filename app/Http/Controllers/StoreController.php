<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pack;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $drumPacks = SamplePack::where->
        //use scopes? to reduce repetition - https://laravel.com/docs/5.8/eloquent#query-scopes
        // $drumPacks = DB::table('sample_packs')->inRandomOrder()->take(5)->get();
        // $bassPacks = DB::table('sample_packs')->inRandomOrder()->take(5)->get();
        // $collections = DB::table('sample_packs')->inRandomOrder()->take(5)->get();

        // $drumPacks = DB::table('packs')->where()->
        // $drumPacks = Pack::has('tags')->where('name', 'drums')->get()->take(5);
        $drumPacks = Pack::whereHas('tags', function($q){
            $q->where('name', 'drums');
        })->get()->take(5);
        
        // dd($drumPacks);

        return view('store.index', compact('drumPacks'));
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
