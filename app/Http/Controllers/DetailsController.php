<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Detail;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('details.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('details.dashboard');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'Title' => 'required',
            'City' => 'required',
            // 'Short_Bio' => 'required',
            'Country' => 'required',
            'Your_Website' => 'required',
            'Facebook_Profile' => 'required',
            'Twitter_Profile' => 'required',
            'LinkedIn_Profile' => 'required',
            'Date_of_Birth' => 'required',
            'Industry' => 'required'
        ]);

        $detail = new Detail;
        $detail->First_Name = $request->input('First_Name');
        $detail->Last_Name = $request->input('Last_Name');
        $detail->Title = $request->input('Title');
        $detail->City = $request->input('City');
        $detail->Short_Bio = $request->input('Short_Bio');
        $detail->Country = $request->input('Country');
        $detail->Your_Website = $request->input('Your_Website');
        $detail->Facebook_Profile = $request->input('Facebook_Profile');
        $detail->Twitter_Profile = $request->input('Twitter_Profile');
        $detail->LinkedIn_Profile = $request->input('LinkedIn_Profile');
        $detail->Date_of_Birth = $request->input('Date_of_Birth');
        $detail->Industry = $request->input('Industry');
        $detail->save();

        return redirect('/details')->with('success', 'Profile Saved Successfully');
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
