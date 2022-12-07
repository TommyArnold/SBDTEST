<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\FlexibilityOption;
use App\Models\VehicleSizeOption;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
class BookingController extends Controller
{
    /**
     * Instantiate booking controller.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['create', 'store']); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::orderBy('created_at','DESC')->paginate(10);
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $flexibility_options = FlexibilityOption::orderBy('id','ASC')->get();
        $vehicle_size_options = VehicleSizeOption::orderBy('id','ASC')->get();

        return view('bookings.create-edit', compact('flexibility_options','vehicle_size_options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'booking_date' => 'required|date_format:Y-m-d',
            'flexibility_option_id' => 'required',
            'vehicle_size_option_id' => 'required',
            'contact_number' => 'required',
            'email' => 'required|email'
        ]);
        
        $user = User::updateOrCreate(
            ['email' => $request->input('email')],
            [
            'role' => 'customer',
            'name' => $request->input('name'),
            'password' => Hash::make(substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 1) . substr(str_shuffle('aBcEeFgHiJkLmNoPqRstUvWxYz0123456789'),0, 31)),
            'contact_number' => $request->input('contact_number')
        ]);

        Booking::create([
            'user_id' => $user->id, 
            'booking_date' => $request->input('booking_date'),
            'flexibility_option_id' => $request->input('flexibility_option_id'),
            'vehicle_size_option_id' => $request->input('vehicle_size_option_id'),
        ]);

        if(Auth::user()){
            return redirect('/bookings');
        }else{
            return view('bookings.thanks');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
