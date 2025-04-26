<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

class BookingController extends Controller
{
    //Display the user's bookings
     
    public function index()
    {
        // Mock bookings data (in a real app, you would fetch this from a database)
        $bookings = [
            [
                'id' => 1,
                'property_id' => 3,
                'property_name' => 'Limosnero\'s Private House',
                'status' => 'upcoming',
                'image' => 'assets/images/HOUSE (3).png',
                'schedule' => [
                    'start_date' => 'April 24',
                    'end_date' => '30, 2025',
                ],
                'cost' => 1900,
                'notes' => '2 rooms, 10 guests, additional 3 beds',
            ],
            [
                'id' => 2,
                'property_id' => 2,
                'property_name' => 'Limosnero\'s Private House',
                'status' => 'upcoming',
                'image' => 'assets/images/HOUSE (2).png',
                'schedule' => [
                    'start_date' => 'April 24',
                    'end_date' => '30, 2025',
                ],
                'cost' => 1900,
                'notes' => '2 rooms, 10 guests',
            ],
        ];
        
        return view('pages.bookings', compact('bookings'));
    }
    
    //Create a new booking from a property
     
    public function book($property_id)
    {
        // In a real app, you would create a booking in the database
        // For now, we'll just redirect to the bookings page
        return redirect()->route('bookings.index')->with('success', 'Booking created successfully!');
    }
    
    // Show booking details
    
    public function show($id)
    {
        // In a real app, you would fetch a specific booking
        return redirect()->route('bookings.index');
    }
    
    // Cancel a booking
    
    public function cancel($id)
    {
        // In a real app, you would cancel the booking in the database
        return redirect()->route('bookings.index')->with('success', 'Booking cancelled successfully!');
    }
}