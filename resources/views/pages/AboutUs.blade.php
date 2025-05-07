@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="bg-[#E3EED4] min-h-screen pt-24">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 md:px-8">
        <!-- About Us Page -->
        <div class="py-8">
            <h1 class="text-[32px] sm:text-[42px] font-semibold text-airbnb-darkest mb-8">
                AirBnBreeze: A Smarter, Smoother Way to Book and Stay
            </h1>
            
            <p class="text-airbnb-dark text-base sm:text-lg mb-12 leading-relaxed">
                AirBnBreeze is a student-built booking system for a single Airbnb property. We make 
                travel feel more personal and local by helping guests book rooms easily and giving
                hosts a simple way to manage their space. It's all about safe, easy, and friendly stays.
            </p>
            
            <h2 class="text-2xl sm:text-3xl font-semibold text-airbnb-darkest mb-6">
                Vision and Mision
            </h2>
            
            <p class="text-airbnb-dark text-base sm:text-lg mb-4 leading-relaxed">
                To create a trusted community where local hosts and travelers connect through safe,
                simple, and meaningful stays.
            </p>
            
            <p class="text-airbnb-dark text-base sm:text-lg mb-12 leading-relaxed">
                Our mission is to empower local property owners by making hosting easy and
                accessible, while offering guests a comfortable and affordable way to explore new
                places—one stay at a time.
            </p>
            
            <h2 class="text-2xl sm:text-3xl font-semibold text-airbnb-darkest mb-6">
                Contact Us
            </h2>
            
            <div class="flex flex-col space-y-4 mb-16">
                <div class="flex items-center gap-3">
                    <i class="w-6 h-6 text-airbnb-dark" data-lucide="facebook"></i>
                    <span class="text-airbnb-dark">@airbnbreeze.fb.com</span>
                </div>
                
                <div class="flex items-center gap-3">
                    <i class="w-6 h-6 text-airbnb-dark" data-lucide="github"></i>
                    <span class="text-airbnb-dark">@airbnbreeze.github.com</span>
                </div>
                
                <div class="flex items-center gap-3">
                    <i class="w-6 h-6 text-airbnb-dark" data-lucide="instagram"></i>
                    <span class="text-airbnb-dark">@airbnbreeze.ig.com</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection