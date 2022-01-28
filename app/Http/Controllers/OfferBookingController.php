<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfferBooking;

class OfferBookingController extends Controller
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
        $booking = new OfferBooking();
        $booking->product_id = request('product_id');
        $booking->name = request('name');
        $booking->dob = request('dob');
        $booking->mobile = request('mobile');
        $booking->emirates = request('emirates');
        $booking->occupation = request('occupation');
        $booking->insurance = request('insurance');
        $booking->email = request('email');
        $booking->nationality = request('nationality');
        $booking->address = request('address');
        $booking->reason = request('reason');
        $booking->emergency_name = request('emergency_name');
        $booking->emergency_num1 = request('emergency_num1');
        $booking->emergency_num2 = request('emergency_num2');
        $booking->relation = request('relation');
        $booking->timedate = request('timedate');
        $booking->save();
        
        return back()->with('message', 'Your Booking Has Been Done');
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
