<?php

namespace App\Http\Controllers;

use App\Contribution;
use App\Member;
use Illuminate\Http\Request;

class ContributionsController extends Controller
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
        $contributions = Contribution::orderBy('id', 'asc')->paginate(10);
        return view('contributions.index')->with('contributions', $contributions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::pluck('f_name', 'id');
        return view('contributions.create')->with('members', $members);
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
            'payment_code' => 'required',
            'amount' => 'required',
            'member_id' => 'required'
        ]);

        //Create Party
        $contribution = new Contribution;
        $contribution->payment_code = $request->input('payment_code');
        $contribution->amount = $request->input('amount');
        $contribution->member_id = $request->input('member_id');
        $contribution->save();
        
        return redirect('/contributions')->with('success', 'New Contribution Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contribution  $contribution
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contribution = Contribution::find($id);
        return view('contributions.show')->with('contribution', $contribution);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contribution  $contribution
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contribution = Contribution::find($id);
        $members = Member::pluck('f_name','id');
        return view('contributions.edit')
        ->with('members', $members)
        ->with('contribution', $contribution);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contribution  $contribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'payment_code' => 'required',
            'amount' => 'required',
            'member_id' => 'required'
        ]);

        //Create Party
        $contribution = Contribution::find($id);
        $contribution->payment_code = $request->input('payment_code');
        $contribution->amount = $request->input('amount');
        $contribution->member_id = $request->input('member_id');
        $contribution->save();
        
        return redirect('/contributions')->with('success', 'Contribution Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contribution  $contribution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contribution $contribution)
    {
        //
    }
}
