<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ambulance;

class AmbulanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ambulance = new Ambulance();
        $ambulance->name = request('name');
        $ambulance->address = request('address');
        $ambulance->googlemap = request('googlemap');
        
        
        $ambulance->emirates = request('emirates');
        // Store Image Code
        $EmiratesImage = time().'.'.request()->emirates_image->getClientOriginalExtension();
        request()->emirates_image->move(public_path('images/Card'), $EmiratesImage);
        $ambulance->emirates_image = $EmiratesImage;
        // Store Image Code 
        // Store Image Code
        $PassportImage = time().'.'.request()->passport_image->getClientOriginalExtension();
        request()->passport_image->move(public_path('images/Card'), $PassportImage);
        $ambulance->passport_image = $PassportImage;
        // Store Image Code 
        // Store Image Code
        $VisaImage = time().'.'.request()->visa_image->getClientOriginalExtension();
        request()->visa_image->move(public_path('images/Card'), $VisaImage);
        $ambulance->visa_image = $VisaImage;
        // Store Image Code 
        // Store Image Code
        $InsuranceImage = time().'.'.request()->insurance_image->getClientOriginalExtension();
        request()->insurance_image->move(public_path('images/Card'), $InsuranceImage);
        $ambulance->insurance_image = $InsuranceImage;
        // Store Image Code
        $ambulance->save();
        
        return back()->withErrors(['Your Request Has Been Submitted']);
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
