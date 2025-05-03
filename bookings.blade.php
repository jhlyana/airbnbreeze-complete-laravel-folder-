@extends('layouts.app')

@section('title', 'Your Bookings')

@section('content')
<x-layout.bookings-header />

    <div class="bg-[#E3EED4] min-h-screen pt-24">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 md:px-8">
            <!-- Bookings Title -->
            <h1 class="text-[32px] font-semibold text-airbnb-darkest mb-5">Bookings</h1>
            
            <!-- Booking Tabs -->
            <div class="flex flex-wrap gap-3 mb-8">
                <button class="bg-[#375534] text-[#E3EED4] py-2 px-5 rounded-full text-sm font-medium">Upcoming</button>
                <button class="bg-[#E3EED4] text-airbnb-darkest py-2 px-5 rounded-full border border-airbnb-darkest text-sm font-medium">Pending Request</button>
                <button class="bg-[#E3EED4] text-airbnb-darkest py-2 px-5 rounded-full border border-airbnb-darkest text-sm font-medium">Pending Approval</button>
                <button class="bg-[#E3EED4] text-airbnb-darkest py-2 px-5 rounded-full border border-airbnb-darkest text-sm font-medium">Recent</button>
                <button class="bg-[#E3EED4] text-airbnb-darkest py-2 px-5 rounded-full border border-airbnb-darkest text-sm font-medium">Cancelled</button>
            </div>
            
<!-- Booking Cards -->
<div class="space-y-4 mb-8">
    @foreach($bookings as $booking)
        <div class="bg-[#E3EED4] rounded-xl border border-airbnb-darkest overflow-hidden shadow-sm">
            <div class="flex flex-col sm:flex-row">
                <!-- Property Image -->
                <div class="w-full sm:w-[300px] h-[200px] sm:h-auto">
                    <img src="{{ asset($booking['image']) }}" alt="{{ $booking['property_name'] }}" class="w-full h-full object-cover">
                </div>
                
                <!-- Booking Details -->
                <div class="flex-1 p-5 bg-[#E3EED4] relative">
                    <div>
                    <div class="text-xs text-airbnb-dark mb-0 italic">Property Name</div>
                    <div class="text-lg font-semibold text-airbnb-darkest mb-2">{{ $booking['property_name'] }}</div>
                   
                    <div class="text-xs text-airbnb-dark mb-0 italic">Schedule</div>
                    <div class="text-base font-semibold text-airbnb-darkest mb-2">April 24 - 30, 2025</div>
                   
                    <div class="text-xs text-airbnb-dark mb-0 italic">Costs</div>
                    <div class="text-base font-semibold text-airbnb-darkest mb-2">₱ 1900</div>
                   
                    <div class="text-xs text-airbnb-dark mb-0 italic">{{ isset($booking['guests']) ? 'Guests' : 'Notes' }}</div>
                    <div class="text-base font-medium text-airbnb-darkest mb-1">10 adult, 3 child</div>
                   
                    <a href="#" class="text-xs text-airbnb-darkest italic underline mt-2">View details</a>
                </div>
                    
                    <!-- Action Buttons -->
                    <div class="absolute bottom-5 right-5 flex space-x-3">
                        <button class="bg-[#E3EED4] border border-airbnb-darkest text-airbnb-darkest py-2 px-8 rounded-full text-sm hover:bg-[#d4e0c5] transition-colors">
                            Edit
                        </button>
                        <button class="bg-[#375534] text-[#E3EED4] py-2 px-4 rounded-full text-sm hover:bg-opacity-90 transition-colors">
                            Cancel Booking
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
            
            <!-- Add More Bookings -->
            <div class="text-center py-6">
                <p class="text-airbnb-darkest italic mb-4">Add more booking trips?</p>
                <a href="{{ route('home') }}" class="inline-block bg-[#375534] text-[#E3EED4] py-2.5 px-10 rounded-full hover:bg-opacity-90">
                    Browse
                </a>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #E3EED4;
        }
    </style>
@endsection