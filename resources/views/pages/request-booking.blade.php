@extends('layouts.app')

@section('title', 'Request Booking')

@section('content')
<x-layout.bookings-header />

<div class="min-h-screen bg-[#E3EED4] pt-24 pb-12 px-4 md:px-8">
    <div class="max-w-5xl mx-auto">
        <!-- Back Button and Title -->
        <div class="flex items-center gap-4 mb-8">
            <a href="{{ route('property.show', $property['id']) }}" class="bg-[#375534] text-white rounded-full p-2 hover:bg-opacity-90 flex items-center justify-center">
                <i class="w-6 h-6" data-lucide="arrow-left"></i>
            </a>
            <h1 class="text-[28px] font-semibold text-[#375534]">Request Booking</h1>
        </div>
        
        <!-- Property Preview -->
        <div class="flex mb-6 bg-airbnb-light p-6 rounded-xl shadow-sm">
            <img src="{{ asset($property['images']['main']) }}" alt="{{ $property['name'] }}" class="w-[240px] h-[150px] object-cover rounded-xl mr-6">
            
            <div>
                <div class="text-xs text-[#375534] mb-1">Property Name</div>
                <div class="text-xl font-semibold text-[#375534]">Limosnero's Private House</div>
                
                <div class="text-xs text-[#375534] mb-1 mt-2">Location</div>
                <div class="text-lg text-[#375534]">Minglanilla, Cebu</div>
                
                <div class="text-xs text-[#375534] mb-1 mt-2">Cost per night</div>
                <div class="text-lg text-[#375534]">₱ 1900</div>
                
                <div class="text-xs text-[#375534] mb-1 mt-2">Ratings</div>
                <div class="flex items-center">
                    <span class="text-yellow-400">★</span>
                    <span class="text-lg text-[#375534] ml-1">4.9</span>
                </div>
            </div>
        </div>
        
        <!-- Booking Details Form -->
        <div class="bg-airbnb-light p-6 rounded-xl border border-[#375534] border-opacity-20 shadow-sm">
            <h2 class="text-xl font-semibold text-[#375534] mb-5">Details</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <!-- Guests -->
                <div>
                    <div class="text-sm text-[#375534] mb-1">Guests</div>
                    <div class="text-lg text-[#375534] mb-2">2 adult, 1 child</div>
                    
                    <div class="relative">
                        <select class="appearance-none w-full border border-[#375534] border-opacity-30 rounded-md py-2 px-3 text-[#375534] pr-8 bg-transparent focus:outline-none">
                            <option>3 Guests</option>
                            <option>4 Guests</option>
                            <option>5 Guests</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-[#375534]">
                            <i class="w-4 h-4" data-lucide="chevron-down"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Schedule -->
                <div>
                    <div class="text-sm text-[#375534] mb-1">Schedule</div>
                    <div class="text-lg text-[#375534] mb-2">April 24 - May 5</div>
                    
                    <div class="flex gap-2">
                        <div class="relative flex-1">
                            <input type="text" value="05/05/25" class="w-full bg-airbnb-light border border-[#375534] border-opacity-30 rounded-md py-2 px-3 text-[#375534] focus:outline-none">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-[#375534]">
                                <i class="w-4 h-4" data-lucide="calendar"></i>
                            </div>
                        </div>
                        <div class="relative flex-1">
                            <input type="text" value="05/05/25" class="w-full bg-airbnb-light border border-[#375534] border-opacity-30 rounded-md py-2 px-3 text-[#375534] focus:outline-none">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-[#375534]">
                                <i class="w-4 h-4" data-lucide="calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Costs -->
                <div>
                    <div class="text-sm text-[#375534] mb-1">Costs</div>
                    <div class="flex justify-between">
                        <div class="text-lg text-[#375534]">₱ 1900 x 10 nights</div>
                        <div class="text-lg text-[#375534]">₱ 19000.00</div>
                    </div>
                    <div class="flex justify-between text-sm">
                        <div class="text-[#375534] opacity-80">First booking discount (10%)</div>
                        <div class="text-[#375534]">₱ 1900.00</div>
                    </div>
                    <div class="flex justify-between mt-2 border-t pt-2 font-semibold">
                        <div class="text-[#375534]">Total:</div>
                        <div class="text-[#375534]">₱ 17100.00</div>
                    </div>
                </div>
            </div>
            
            <!-- Notes to Owner -->
            <div class="mb-6">
                <div class="text-sm text-[#375534] mb-1">Notes to the owner</div>
                <textarea 
                    id="notes_textarea"
                    class="w-full h-[80px] border border-[#375534] border-opacity-30 rounded-md py-2 px-3 text-[#375534] bg-airbnb-light focus:outline-none" 
                    placeholder="Your message"
                ></textarea>
            </div>
            
            <!-- Cancellation Policy -->
            <div class="text-sm text-[#375534] mb-6">
                Cancellation fees may apply for cancelling the reservation after request has been approved.
                <a 
                    href="#" 
                    onclick="document.getElementById('cancellationPolicyModal').classList.remove('hidden'); return false;" 
                    class="text-[#375534] underline hover:text-opacity-80"
                >
                    View cancellation policy
                </a>
            </div>
            
            <!-- Final Warning -->
            <div class="text-center text-sm text-[#375534] mb-6">
                Ensure all details are correct before booking. Cancellations may be subject to fees depending on timing.
            </div>
            
            <!-- Buttons -->
            <div class="flex justify-end gap-4">
                <a href="{{ route('bookings.cancel-request', $property['id']) }}" class="border border-[#375534] text-[#375534] bg-transparent py-2 px-10 rounded-full hover:bg-gray-100 text-center">
                    CANCEL
                </a>
                <form action="{{ route('bookings.process', $property['id']) }}" method="POST">
                    @csrf
                    <input type="hidden" name="guest_count" value="3">
                    <input type="hidden" name="start_date" value="05/05/25">
                    <input type="hidden" name="end_date" value="05/15/25">
                    <input type="hidden" name="total_cost" value="17100.00">
                    <input type="hidden" name="notes" id="booking_notes" value="">
                    <button type="submit" class="bg-[#375534] text-white py-2 px-10 rounded-full hover:bg-opacity-90">
                        REQUEST
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const textarea = document.getElementById('notes_textarea');
    const notesInput = document.getElementById('booking_notes');
    
    if (textarea && notesInput) {
        textarea.addEventListener('input', function() {
            notesInput.value = this.value;
        });
    }
});
</script>

@include('components.view-cancellationPolicy')

@endsection