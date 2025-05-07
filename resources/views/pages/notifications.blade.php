@extends('layouts.app')

@section('title', 'Notifications')

@section('content')
<x-layout.bookings-header />

<div class="bg-[#E3EED4] min-h-screen pt-24 pb-12">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 md:px-8">
        <!-- Showing all notifications text and Mark all as read button -->
        <div class="flex justify-between items-center mb-6">
            <div class="text-sm text-airbnb-darkest font-montserrat">
                Showing all notifications
            </div>
            <div class="flex space-x-2">
                <form action="{{ route('notifications.markAllAsRead') }}" method="POST">
                    @csrf
                    <button type="submit" class="border border-airbnb-darkest text-airbnb-darkest bg-white py-1 px-3 rounded-full text-sm hover:bg-airbnb-dark hover:text-airbnb-light hover:border-airbnb-dark transition-colors duration-200 font-montserrat">                        
                        Mark all as read
                    </button>
                </form>
            </div>
        </div>
       
        <!-- Notification List -->
        <div class="space-y-3">
            <!-- First notification - Limosnero's Private House (white background) -->
            <div class="flex items-center bg-white border border-gray-200 p-4 rounded-xl shadow-sm hover:shadow-md transition-all duration-200 cursor-pointer font-montserrat">
                <img src="{{ asset('assets/images/MD.png') }}" alt="User" class="w-12 h-12 rounded-full mr-4">
                <div class="flex-1">
                    <div class="font-semibold text-base text-airbnb-darkest">Limosnero's Private House</div>
                    <div class="text-sm text-airbnb-darkest">Donesla Pacquio</div>
                    <div class="text-xs text-airbnb-dark mt-1">New booking request</div>
                </div>
                <div class="text-xs text-airbnb-dark">9:41 AM</div>
                <form action="{{ route('notifications.delete', 1) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="ml-4 text-airbnb-dark hover:text-airbnb-darkest">
                        <i class="w-5 h-5" data-lucide="x"></i>
                    </button>
                </form>
            </div>
            
            <!-- Second notification - Cancelled Booking (white background) -->
            <div class="flex items-center bg-white border border-gray-200 p-4 rounded-xl shadow-sm hover:shadow-md transition-all duration-200 cursor-pointer font-montserrat">
                <img src="{{ asset('assets/images/MD.png') }}" alt="User" class="w-12 h-12 rounded-full mr-4">
                <div class="flex-1">
                    <div class="font-semibold text-base text-airbnb-darkest">Cancelled Booking for Limosnero's Private House</div>
                    <div class="text-sm text-airbnb-darkest">Donesla Pacquio</div>
                    <div class="text-xs text-airbnb-dark mt-1">Booking was cancelled</div>
                </div>
                <div class="text-xs text-airbnb-dark">Yesterday</div>
                <form action="{{ route('notifications.delete', 2) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="ml-4 text-airbnb-dark hover:text-airbnb-darkest">
                        <i class="w-5 h-5" data-lucide="x"></i>
                    </button>
                </form>
            </div>
            
            <!-- Third notification - Completed Booking (green background) -->
            <div class="flex items-center bg-white border border-gray-200 p-4 rounded-xl shadow-sm hover:shadow-md transition-all duration-200 cursor-pointer font-montserrat">
                <img src="{{ asset('assets/images/MD.png') }}" alt="User" class="w-12 h-12 rounded-full mr-4">
                <div class="flex-1">
                    <div class="font-semibold text-base text-airbnb-darkest">Completed Booking for Limosnero's Private House</div>
                    <div class="text-sm text-airbnb-darkest">Donesla Pacquio</div>
                    <div class="text-xs text-airbnb-dark mt-1">Booking completed successfully</div>
                </div>
                <div class="text-xs text-airbnb-dark">2 days ago</div>
                <form action="{{ route('notifications.delete', 3) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="ml-4 text-airbnb-dark hover:text-airbnb-darkest">
                        <i class="w-5 h-5" data-lucide="x"></i>
                    </button>
                </form>
            </div>

            <!-- Older Notifications Section -->
            <div class="pt-4 mt-4">
                <h3 class="text-sm font-semibold text-airbnb-darkest mb-3">Older Notifications</h3>
                
                <!-- First older notification -->
                <div class="flex items-center bg-[#E3EED4] bg-opacity-50 p-4 rounded-xl mb-3 hover:shadow-md transition-all duration-200 cursor-pointer font-montserrat">
                    <img src="{{ asset('assets/images/MD.png') }}" alt="User" class="w-12 h-12 rounded-full mr-3">
                    <div class="flex-1">
                        <div class="font-semibold text-airbnb-darkest">New Review for Limosnero's Private House</div>
                        <div class="text-sm text-airbnb-darkest">Donesla Pacquio</div>
                    </div>
                    <div class="text-xs text-airbnb-dark">1 week ago</div>
                    <form action="{{ route('notifications.delete', 4) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ml-4 text-airbnb-dark hover:text-airbnb-darkest">
                            <i class="w-5 h-5" data-lucide="x"></i>
                        </button>
                    </form>
                </div>
                
                <!-- Second older notification -->
                <div class="flex items-center bg-[#E3EED4] bg-opacity-50 p-4 rounded-xl mb-3 hover:shadow-md transition-all duration-200 cursor-pointer font-montserrat">
                    <img src="{{ asset('assets/images/MD.png') }}" alt="User" class="w-12 h-12 rounded-full mr-3">
                    <div class="flex-1">
                        <div class="font-semibold text-airbnb-darkest">New Review for Limosnero's Private House</div>
                        <div class="text-sm text-airbnb-darkest">Donesla Pacquio</div>
                    </div>
                    <div class="text-xs text-airbnb-dark">2 weeks ago</div>
                    <form action="{{ route('notifications.delete', 5) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ml-4 text-airbnb-dark hover:text-airbnb-darkest">
                            <i class="w-5 h-5" data-lucide="x"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection