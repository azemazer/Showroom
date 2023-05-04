<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Concert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ConcertController extends Controller
{
    public function liste(){
        // $admin = DB::table('users')->where('name', 'admin')->get();
        $admin = User::where("name","admin")->get();
        return view("home", ["concert" => Concert::all(), "admin"=>$admin[0]]);
    }

    public function storeview(){
        return view("admin.addconcert");
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
        // $validated = $request->validate([
        //     'titre' => 'required|string|max:100',
        //     'artiste' => 'required|string|max:100',
        //     'lieu' => 'required|string|max:100',
        //     'description' => 'required|string|max:500',
        // ]);

        // $request->user()->concert()->create($validated);

        $titre=$request->input('titre');
        if($titre){
            $concert=new Concert();
            $concert->titre=$titre;
            $concert->artiste=$request->input('artiste');
            $concert->description=$request->input('description');
            $concert->genre=$request->input('genre');
            $concert->lieu=$request->input('lieu');
            $concert->date=$request->input('date');
            $concert->organisateur=$request->input('organisateur');
            $concert->imgartiste=$request->input('imgartiste');
            $concert->imglieu=$request->input('imglieu');
            $concert->reservations=$request->input('reservations');
            $concert->reservationsmax=$request->input('reservationsmax');
            $concert->full=$request->input('full');
            $concert->save();
        }
        return redirect(route('concert.list'));
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
        $this->authorize('delete', $concert);
 
        $$concert->delete();
 
        return redirect(route('home'));
    }
}
