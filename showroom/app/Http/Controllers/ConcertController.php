<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Concert;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function liste(){
        return view("home", ["concert" => Concert::all()]);
    }

    public function reservation(){
        $concert = DB::table('concerts')->where('id', 1)->get();
        // DD($titre = [Concert::all('titre')->where('id', 1)->first()]);
        return view("reservation", ['concert' => $concert[0] ]);
        

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Concert $concert)
    {
        return view('reservation', [
            'concert' =>$concert,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Concert $concert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Concert $concert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Concert $concert)
    {
        //
    }
}
