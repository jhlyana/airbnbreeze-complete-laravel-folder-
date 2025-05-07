@extends('layouts.app')

@section('title', 'Your Bookings')

@section('content')
<x-layout.bookings-header />

    <div class="bg-[#E3EED4] min-h-screen pt-24 pb-12">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 md:px-8">
            <!-- Bookings Title -->
            <h1 class="text-2xl sm:text-[32px] font-semibold text-airbnb-darkest mb-5">Bookings</h1>
           
            <!-- Booking Tabs -->
            <div class="flex flex-wrap gap-2 sm:gap-3 mb-6 sm:mb-8">
                <button onclick="changeTab('upcoming')" id="tab-upcoming" class="cursor-pointer transition-colors duration-200 ease-in-out bg-airbnb-light text-airbnb-darkest py-2 px-4 sm:px-5 rounded-full border border-airbnb-darkest text-xs sm:text-sm font-medium hover:bg-airbnb-dark hover:text-airbnb-light">Upcoming</button>
                <button onclick="changeTab('pending-request')" id="tab-pending-request" class="cursor-pointer transition-colors duration-200 ease-in-out bg-airbnb-light text-airbnb-darkest py-2 px-4 sm:px-5 rounded-full border border-airbnb-darkest text-xs sm:text-sm font-medium hover:bg-airbnb-dark hover:text-airbnb-light">Pending Request</button>
                <button onclick="changeTab('pending-approval')" id="tab-pending-approval" class="cursor-pointer transition-colors duration-200 ease-in-out bg-airbnb-light text-airbnb-darkest py-2 px-4 sm:px-5 rounded-full border border-airbnb-darkest text-xs sm:text-sm font-medium hover:bg-airbnb-dark hover:text-airbnb-light">Pending Approval</button>
                <button onclick="changeTab('recent')" id="tab-recent" class="cursor-pointer transition-colors duration-200 ease-in-out bg-airbnb-light text-airbnb-darkest py-2 px-4 sm:px-5 rounded-full border border-airbnb-darkest text-xs sm:text-sm font-medium hover:bg-airbnb-dark hover:text-airbnb-light">Recent</button>
                <button onclick="changeTab('cancelled')" id="tab-cancelled" class="cursor-pointer transition-colors duration-200 ease-in-out bg-airbnb-light text-airbnb-darkest py-2 px-4 sm:px-5 rounded-full border border-airbnb-darkest text-xs sm:text-sm font-medium hover:bg-airbnb-dark hover:text-airbnb-light">Cancelled</button>
            </div>
           
            <!-- Booking Cards -->
            <div class="space-y-4 mb-8">
                @foreach($bookings as $booking)
                    <div class="bg-[#E3EED4] rounded-xl border border-airbnb-darkest overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="flex flex-col sm:flex-row">
                            <!-- Property Image -->
                            <div class="w-full sm:w-[250px] md:w-[300px] h-[180px] sm:h-auto">
                                <img src="{{ asset($booking['image']) }}" alt="{{ $booking['property_name'] }}" class="w-full h-full object-cover">
                            </div>
                           
                            <!-- Booking Details -->
                            <div class="flex-1 p-4 sm:p-5 bg-[#E3EED4] relative">
                                <div class="mb-10 sm:mb-0">
                                    <div class="text-xs text-airbnb-dark mb-0 italic">Property Name</div>
                                    <div class="text-lg font-semibold text-airbnb-darkest mb-2 sm:mb-3">{{ $booking['property_name'] }}</div>
                                   
                                    <div class="text-xs text-airbnb-dark mb-0 italic">Schedule</div>
                                    <div class="text-base font-semibold text-airbnb-darkest mb-2 sm:mb-3">April 24 - 30, 2025</div>
                                   
                                    <div class="text-xs text-airbnb-dark mb-0 italic">Costs</div>
                                    <div class="text-base font-semibold text-airbnb-darkest mb-2 sm:mb-3">₱ 1900</div>
                                   
                                    <div class="text-xs text-airbnb-dark mb-0 italic">{{ isset($booking['guests']) ? 'Guests' : 'Notes' }}</div>
                                    <div class="text-base font-medium text-airbnb-darkest mb-2 sm:mb-3">10 adult, 3 child</div>
                                   
                                    <a href="#" class="text-xs text-airbnb-darkest italic underline mt-2 hover:text-[#375534] transition-colors">View details</a>
                                </div>
                               
                                <!-- Action Buttons - Different for each tab -->
                                <div class="absolute bottom-3 sm:bottom-5 right-3 sm:right-5 flex flex-col sm:flex-row gap-2 sm:gap-3">
                                    <!-- Upcoming Tab Buttons -->
                                    <div class="tab-buttons upcoming-buttons">
                                        <button onclick="document.getElementById('cancellationModal').classList.remove('hidden')"
                                            class="bg-[#375534] text-[#E3EED4] py-1.5 sm:py-2 px-3 sm:px-5 rounded-full text-xs sm:text-sm font-medium hover:bg-opacity-90 transition-colors">
                                            Cancel Booking
                                        </button>
                                    </div>
                                    
                                    <!-- Pending Request Tab Buttons -->
                                    <div class="tab-buttons pending-request-buttons hidden">
                                        <button class="bg-[#E3EED4] border border-airbnb-darkest text-airbnb-darkest py-1.5 sm:py-2 px-4 sm:px-8 rounded-full text-xs sm:text-sm font-medium hover:bg-[#d4e0c5] transition-colors">
                                            Edit
                                        </button>
                                        <button onclick="document.getElementById('cancellationModal').classList.remove('hidden')"
                                            class="bg-[#375534] text-[#E3EED4] py-1.5 sm:py-2 px-3 sm:px-5 rounded-full text-xs sm:text-sm font-medium hover:bg-opacity-90 transition-colors">
                                            Cancel Booking
                                        </button>
                                    </div>
                                    
                                    <!-- Pending Approval Tab Buttons -->
                                    <div class="tab-buttons pending-approval-buttons hidden">
                                        <button class="bg-[#375534] text-[#E3EED4] py-1.5 sm:py-2 px-3 sm:px-5 rounded-full text-xs sm:text-sm font-medium hover:bg-opacity-90 transition-colors">
                                            Book Now
                                        </button>
                                    </div>
                                    
                                    <!-- Recent Tab Buttons -->
                                    <div class="tab-buttons recent-buttons hidden">
                                        <button class="bg-[#375534] text-[#E3EED4] py-1.5 sm:py-2 px-3 sm:px-5 rounded-full text-xs sm:text-sm font-medium hover:bg-opacity-90 transition-colors">
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
            <div class="text-center py-6">
                <p class="text-airbnb-darkest italic mb-4">Add more booking trips?</p>
                <a href="{{ route('home') }}" class="inline-block bg-[#375534] text-[#E3EED4] py-2 px-8 sm:py-2.5 sm:px-10 rounded-full hover:bg-opacity-90 transition-colors">
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