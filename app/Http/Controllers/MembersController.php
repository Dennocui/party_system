<?php

namespace App\Http\Controllers;

use App\Member;
use App\Party;
use Illuminate\Http\Request;

class MembersController extends Controller
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
        $members = Member::all();
        return view('members.index')->with('members', $members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $parties = Party::pluck('party_name', 'id');
        return view('members.create')->with('parties', $parties);
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
            'f_name' => 'required',
            'l_name' => 'required',
            'location' => 'required',
            'phone_number' => 'required'
            
            
        ]);

        //Create Member
        $member = new Member;
        $member->f_name = $request->input('f_name');
        $member->l_name = $request->input('l_name');
        $member->gender = $request->input('gender');
        $member->location = $request->input('location');
        $member->phone_number = $request->input('phone_number');
        
        $member->save();
        
        return redirect('/members')->with('success', 'New Member Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::find($id);
        return view('members.show')->with('member', $member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parties = Party::pluck('party_name', 'id');
        $member = Member::find($id);
        return view('members.edit')
                                ->with('member', $member)
                                ->with('parties', $parties);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'f_name' => 'required',
            'l_name' => 'required',
            'location' => 'required',
            'phone_number' => 'required'
            
            
        ]);

        //Create Member
        $member = Member::find($id);
        $member->f_name = $request->input('f_name');
        $member->l_name = $request->input('l_name');
        $member->gender = $request->input('gender');
        $member->location = $request->input('location');
        $member->phone_number = $request->input('phone_number');
        
        $member->save();
        
        return redirect('/members')->with('success', 'Member Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member = Member::find($id);
        $member->delete();
        
        return redirect('/members')->with('success', 'Member Removed');
    }
}
