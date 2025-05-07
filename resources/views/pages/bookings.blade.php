@extends('layouts.app')

@section('title', 'Your Bookings')

@section('content')
<x-layout.bookings-header />

<div class="bg-[#E3EED4] min-h-screen pt-[4rem] md:pt-[7.5rem] pb-[1.5rem] sm:pb-[2rem]">
    <div class="max-w-[1750px] mx-auto px-[1rem] sm:px-[1.5rem] md:px-[2rem] lg:px-[4rem] xl:px-[8rem]">
        <!-- Bookings Title -->
        <h1 class="text-[1.5rem] sm:text-[1.75rem] font-semibold text-airbnb-darkest mb-[1rem] sm:mb-[1.25rem]">Bookings</h1>
       
        <!-- Booking Tabs -->
        <div class="flex flex-wrap gap-[0.5rem] sm:gap-[0.75rem] mb-[1rem] sm:mb-[1.25rem]">
            <button onclick="changeTab('upcoming')" id="tab-upcoming" class="cursor-pointer transition-colors duration-200 ease-in-out bg-airbnb-light text-airbnb-darkest py-[0.5rem] px-[1rem] rounded-full border border-airbnb-darkest text-[0.75rem] sm:text-[0.875rem] font-medium hover:bg-airbnb-dark hover:text-airbnb-light">Upcoming</button>
            <button onclick="changeTab('pending-request')" id="tab-pending-request" class="cursor-pointer transition-colors duration-200 ease-in-out bg-airbnb-light text-airbnb-darkest py-[0.5rem] px-[1rem] rounded-full border border-airbnb-darkest text-[0.75rem] sm:text-[0.875rem] font-medium hover:bg-airbnb-dark hover:text-airbnb-light">Pending Request</button>
            <button onclick="changeTab('pending-approval')" id="tab-pending-approval" class="cursor-pointer transition-colors duration-200 ease-in-out bg-airbnb-light text-airbnb-darkest py-[0.5rem] px-[1rem] rounded-full border border-airbnb-darkest text-[0.75rem] sm:text-[0.875rem] font-medium hover:bg-airbnb-dark hover:text-airbnb-light">Pending Approval</button>
            <button onclick="changeTab('recent')" id="tab-recent" class="cursor-pointer transition-colors duration-200 ease-in-out bg-airbnb-light text-airbnb-darkest py-[0.5rem] px-[1rem] rounded-full border border-airbnb-darkest text-[0.75rem] sm:text-[0.875rem] font-medium hover:bg-airbnb-dark hover:text-airbnb-light">Recent</button>
            <button onclick="changeTab('cancelled')" id="tab-cancelled" class="cursor-pointer transition-colors duration-200 ease-in-out bg-airbnb-light text-airbnb-darkest py-[0.5rem] px-[1rem] rounded-full border border-airbnb-darkest text-[0.75rem] sm:text-[0.875rem] font-medium hover:bg-airbnb-dark hover:text-airbnb-light">Cancelled</button>
        </div>
       
        <!-- Booking Cards -->
        <div class="space-y-[1rem] mb-[1.5rem] sm:mb-[2rem]">
            @foreach($bookings as $booking)
                <div class="bg-[#E3EED4] rounded-xl border border-airbnb-darkest overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="flex flex-col sm:flex-row">
                        <!-- Property Image -->
                        <div class="w-full sm:w-[250px] md:w-[300px] h-[180px] sm:h-auto">
                            <img src="{{ asset($booking['image']) }}" alt="{{ $booking['property_name'] }}" class="w-full h-full object-cover">
                        </div>
                       
                        <!-- Booking Details -->
                        <div class="flex-1 p-[1rem] sm:p-[1.25rem] bg-[#E3EED4] relative">
                            <div class="mb-[2.5rem] sm:mb-0">
                                <div class="text-[0.75rem] text-airbnb-dark mb-[0.25rem] italic">Property Name</div>
                                <div class="text-[1rem] sm:text-[1.125rem] font-semibold text-airbnb-darkest mb-[0.5rem] sm:mb-[0.75rem]">{{ $booking['property_name'] }}</div>
                               
                                <div class="text-[0.75rem] text-airbnb-dark mb-[0.25rem] italic">Schedule</div>
                                <div class="text-[0.875rem] sm:text-[1rem] font-semibold text-airbnb-darkest mb-[0.5rem] sm:mb-[0.75rem]">April 24 - 30, 2025</div>
                               
                                <div class="text-[0.75rem] text-airbnb-dark mb-[0.25rem] italic">Costs</div>
                                <div class="text-[0.875rem] sm:text-[1rem] font-semibold text-airbnb-darkest mb-[0.5rem] sm:mb-[0.75rem]">₱ 1900</div>
                               
                                <div class="text-[0.75rem] text-airbnb-dark mb-[0.25rem] italic">{{ isset($booking['guests']) ? 'Guests' : 'Notes' }}</div>
                                <div class="text-[0.875rem] sm:text-[1rem] font-medium text-airbnb-darkest mb-[0.5rem] sm:mb-[0.75rem]">10 adult, 3 child</div>
                               
                                <a href="#" class="text-[0.75rem] text-airbnb-darkest italic underline mt-[0.5rem] hover:text-[#375534] transition-colors">View details</a>
                            </div>
                           
                            <!-- Action Buttons -->
                            <div class="absolute bottom-[0.75rem] sm:bottom-[1.25rem] right-[0.75rem] sm:right-[1.25rem] flex flex-col sm:flex-row gap-[0.5rem] sm:gap-[0.75rem]">
                                <!-- Upcoming Tab Buttons -->
                                <div class="tab-buttons upcoming-buttons">
                                    <button onclick="document.getElementById('cancellationModal').classList.remove('hidden')"
                                        class="bg-[#375534] text-[#E3EED4] py-[0.375rem] sm:py-[0.5rem] px-[0.75rem] sm:px-[1.25rem] rounded-full text-[0.75rem] sm:text-[0.875rem] font-medium hover:bg-opacity-90 transition-colors">
                                        Cancel Booking
                                    </button>
                                </div>
                                
                                <!-- Pending Request Tab Buttons -->
                                <div class="tab-buttons pending-request-buttons hidden">
                                    <button class="bg-[#E3EED4] border border-airbnb-darkest text-airbnb-darkest py-[0.375rem] sm:py-[0.5rem] px-[1rem] sm:px-[2rem] rounded-full text-[0.75rem] sm:text-[0.875rem] font-medium hover:bg-[#d4e0c5] transition-colors">
                                        Edit
                                    </button>
                                    <button onclick="document.getElementById('cancellationModal').classList.remove('hidden')"
                                        class="bg-[#375534] text-[#E3EED4] py-[0.375rem] sm:py-[0.5rem] px-[0.75rem] sm:px-[1.25rem] rounded-full text-[0.75rem] sm:text-[0.875rem] font-medium hover:bg-opacity-90 transition-colors">
                                        Cancel Booking
                                    </button>
                                </div>
                                
                                <!-- Pending Approval Tab Buttons -->
                                <div class="tab-buttons pending-approval-buttons hidden">
                                    <button class="bg-[#375534] text-[#E3EED4] py-[0.375rem] sm:py-[0.5rem] px-[0.75rem] sm:px-[1.25rem] rounded-full text-[0.75rem] sm:text-[0.875rem] font-medium hover:bg-opacity-90 transition-colors">
                                        Book Now
                                    </button>
                                </div>
                                
                                <!-- Recent Tab Buttons -->
                                <div class="tab-buttons recent-buttons hidden">
                                    <button class="bg-[#375534] text-[#E3EED4] py-[0.375rem] sm:py-[0.5rem] px-[0.75rem] sm:px-[1.25rem] rounded-full text-[0.75rem] sm:text-[0.875rem] font-medium hover:bg-opacity-90 transition-colors">
                                        Book Again
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
       
        <!-- Add More Bookings -->
        <div class="text-center py-[1.5rem]">
            <p class="text-airbnb-darkest italic mb-[1rem]">Add more booking trips?</p>
            <a href="{{ route('home') }}" class="inline-block bg-[#375534] text-[#E3EED4] py-[0.5rem] px-[2rem] sm:py-[0.625rem] sm:px-[2.5rem] rounded-full hover:bg-opacity-90 transition-colors">
                Browse
            </a>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #E3EED4;
    }
    .hidden {
        display: none;
    }
</style>

<script>
    // Initialize with upcoming tab active
    document.addEventListener('DOMContentLoaded', function() {
        changeTab('upcoming');
    });

    function changeTab(tabName) {
        // Reset all tabs
        document.querySelectorAll('[id^="tab-"]').forEach(tab => {
            tab.classList.remove('bg-airbnb-dark', 'text-airbnb-light');
            tab.classList.add('bg-airbnb-light', 'text-airbnb-darkest', 'border', 'border-airbnb-darkest');
        });
        
        // Set active tab
        const activeTab = document.getElementById('tab-' + tabName);
        activeTab.classList.remove('bg-airbnb-light', 'text-airbnb-darkest');
        activeTab.classList.add('bg-airbnb-dark', 'text-airbnb-light');
        
        // Hide all button groups
        document.querySelectorAll('.tab-buttons').forEach(buttons => {
            buttons.classList.add('hidden');
        });
        
        // Show active tab buttons
        document.querySelectorAll('.' + tabName + '-buttons').forEach(buttons => {
            buttons.classList.remove('hidden');
        });
    }
</script>

@include('components.view-cancellationNotice')

@endsection
