<?php

namespace App\Http\Controllers;

use App\Userban;
use Illuminate\Http\Request;

class userbancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userban = \App\Userban::all();

        return view('userban', compact('userban'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unban.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userban = new Userban();

        $userban->firstname = request('firstname');
        $userban->lastname = request('lastname');
        $userban->description = request('description');

        $userban->save();

        return redirect('/unban');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Userban  $userban
     * @return \Illuminate\Http\Response
     */
    public function show(Userban $userban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Userban  $userban
     * @return \Illuminate\Http\Response
     */
    public function edit(Userban $userban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Userban  $userban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userban $userban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Userban  $userban
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userban $userban)
    {
        //
    }
}
