<?php

namespace App\Http\Controllers;

use App\Party;
use Illuminate\Http\Request;

class PartiesController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $parties = Party::all();
        return view('parties.index')->with('parties', $parties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'party_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required'
        ]);

        //Create Party
        $party = new Party;
        $party->party_name = $request->input('party_name');
        $party->phone_number = $request->input('phone_number');
        $party->email = $request->input('email');
        $party->save();
        
        return redirect('/parties')->with('success', 'New Party Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $party = Party::find($id);
        return view('parties.show')->with('party', $party);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $party = Party::find($id);
        return view('parties.edit')->with('party', $party);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'party_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required'
        ]);

        //Update Party
        $party = Party::find($id);
        $party->party_name = $request->input('party_name');
        $party->phone_number = $request->input('phone_number');
        $party->email = $request->input('email');
        $party->save();
        
        return redirect('/parties')->with('success', 'Party Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $party = Party::find($id);
        $party->delete();
        
        return redirect('/parties')->with('success', 'Party Removed');
    }
}
