<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Concert;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

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
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:100',
            'artiste' => 'required|string|max:100',
            'lieu' => 'required|string|max:100',
            'description' => 'required|string|max:500',
        ]);
        $request->user()->concert()->create($validated);
 
        return redirect(route('home'));
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
    public function edit(Concert $concert): View
    {
        $this->authorize('update', $concert);

        return view('editConcert', [
            'concert' => $concert,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Concert $concert)
    {
        $this->authorize('update', $concert);

        $validated = $request->validate([
            'titre' => 'required|string|max:100',
            'artiste' => 'required|string|max:100',
            'lieu' => 'required|string|max:100',
            'description' => 'required|string|max:500',
        ]);
        $concert->update($validated);
 
        return redirect(route('home'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Concert $concert)
    {
        $this->authorize('delete', $$concert);
 
        $$concert->delete();
 
        return redirect(route('home'));
    }
}
