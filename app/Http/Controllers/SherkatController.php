<?php

namespace App\Http\Controllers;

use App\Kala;
use App\Sherkat;
use Illuminate\Http\Request;

class SherkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Sherkat[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $sherkat = Sherkat::all();// array
        return view('sherkat.index', compact('sherkat'));

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sherkat $sherkat
     * @return Sherkat
     */
    public function show(Sherkat $sherkat, Kala $kala)
    {
//        $json = $sherkat->kalas()->find($kala->sherkat_id == $sherkat->id);
//        $findkala = array($json);

        return view('sherkat.show', compact('sherkat'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sherkat $sherkat
     * @return \Illuminate\Http\Response
     */
    public function edit(Sherkat $sherkat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Sherkat $sherkat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sherkat $sherkat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sherkat $sherkat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sherkat $sherkat)
    {
        //
    }
}
