<?php

namespace App\Http\Controllers;

use App\Models\Date;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $dates = Date::latest()->get();
        return view('index', ['dates' => $dates ] ); //el index es la vista que se va a renderizar  //asi se llama el archivo en views/index
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Date $date)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Date $date)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Date $date)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Date $date)
    {
        //
    }
}
