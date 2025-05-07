@extends('layouts.app')

@section('title', 'Help Center')

@section('content')
<div class="bg-[#E3EED4] min-h-screen pt-24">
    <div class="max-w-[900px] mx-auto px-4 sm:px-6 md:px-8">
        <!-- Help Center Page -->
        <div class="py-8">
            <h1 class="text-[32px] sm:text-[38px] font-semibold text-airbnb-darkest mb-12">
                FAQ
            </h1>
            
            <!-- FAQ Item -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-airbnb-darkest mb-1">
                    How to cancel a booking?
                </h2>
                <p class="text-airbnb-dark mb-2">
                    Go to your Reservations, click on the booking, and select 'Cancel'. Review cancellation policy before confirming.
                </p>
            </div>
            
            <!-- FAQ Item -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-airbnb-darkest mb-1">
                    How to become a host?
                </h2>
                <p class="text-airbnb-dark mb-2">
                    Click "airbnb your house" in the menu, fill out your property details, and submit for approval.
                </p>
            </div>
            
            <!-- FAQ Item -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-airbnb-darkest mb-1">
                    How to reset password?
                </h2>
                <p class="text-airbnb-dark mb-2">
                    Go to the login screen, click "Forgot Password", and follow the instructions sent to your email.
                </p>
            </div>
            
            <!-- Contact Support -->
            <div class="mt-12 text-center">
                <p class="text-airbnb-dark mb-4">Having a hard time?</p>
                <a href="#" class="inline-block bg-[#375534] text-[#E3EED4] py-2.5 px-8 rounded-full hover:bg-opacity-90 transition-colors">
                    Contact Support
                </a>
            </div>
        </div>
    </div>
</div>
@endsection