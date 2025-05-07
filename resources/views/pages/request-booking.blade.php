@extends('layouts.app')

@section('title', 'Request Booking')

@section('content')
<x-layout.bookings-header />

<div class="min-h-screen bg-[#E3EED4] pt-[4rem] md:pt-[7.5rem] pb-[1.5rem] sm:pb-[2rem] px-[1rem] sm:px-[1.5rem] md:px-[2rem] lg:px-[4rem] xl:px-[8rem]">
    <div class="max-w-[1750px] mx-auto">
        <!-- Back Button and Title -->
        <div class="flex items-center gap-[0.75rem] mb-[1rem] sm:mb-[1.25rem]">
            <a href="{{ route('property.show', $property['id']) }}" class="bg-[#375534] text-white rounded-full p-[0.5rem] hover:bg-opacity-90 flex items-center justify-center">
                <i class="w-[1.25rem] sm:w-[1.5rem] h-[1.25rem] sm:h-[1.5rem]" data-lucide="arrow-left"></i>
            </a>
            <h1 class="text-[1.5rem] sm:text-[1.75rem] font-semibold text-[#375534]">Request Booking</h1>
        </div>
        
        <!-- Property Preview -->
        <div class="flex flex-col sm:flex-row mb-[1rem] sm:mb-[1.25rem] bg-airbnb-light p-[1rem] sm:p-[1.5rem] rounded-xl shadow-sm">
            <img src="{{ asset($property['images']['main']) }}" alt="{{ $property['name'] }}" class="w-full sm:w-[180px] md:w-[240px] h-[120px] sm:h-[150px] object-cover rounded-xl sm:mr-[1rem] md:mr-[1.5rem] mb-[1rem] sm:mb-0">
            
            <div class="w-full">
                <div class="text-[0.75rem] text-[#375534] mb-[0.25rem]">Property Name</div>
                <div class="text-[1rem] sm:text-[1.125rem] md:text-[1.25rem] font-semibold text-[#375534]">Limosnero's Private House</div>
                
                <div class="grid grid-cols-2 gap-x-[1rem] gap-y-[0.5rem] mt-[0.75rem]">
                    <div>
                        <div class="text-[0.75rem] text-[#375534] mb-[0.25rem]">Location</div>
                        <div class="text-[0.875rem] sm:text-[1rem] md:text-[1.125rem] text-[#375534]">Minglanilla, Cebu</div>
                    </div>
                    <div>
                        <div class="text-[0.75rem] text-[#375534] mb-[0.25rem]">Cost per night</div>
                        <div class="text-[0.875rem] sm:text-[1rem] md:text-[1.125rem] text-[#375534]">₱ 1900</div>
                    </div>
                    <div>
                        <div class="text-[0.75rem] text-[#375534] mb-[0.25rem]">Ratings</div>
                        <div class="flex items-center">
                            <span class="text-yellow-400">★</span>
                            <span class="text-[0.875rem] sm:text-[1rem] md:text-[1.125rem] text-[#375534] ml-[0.25rem]">4.9</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Booking Details Form -->
        <div class="bg-airbnb-light p-[1rem] sm:p-[1.5rem] rounded-xl border border-[#375534] border-opacity-20 shadow-sm">
            <h2 class="text-[1rem] sm:text-[1.125rem] md:text-[1.25rem] font-semibold text-[#375534] mb-[1rem] sm:mb-[1.25rem]">Details</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-[1rem] sm:gap-[1.5rem] mb-[1.5rem] sm:mb-[2rem]">
                <!-- Guests -->
                <div>
                    <div class="text-[0.75rem] sm:text-[0.875rem] text-[#375534] mb-[0.25rem]">Guests</div>
                    <div class="text-[0.875rem] sm:text-[1rem] text-[#375534] mb-[0.5rem]">2 adult, 1 child</div>
                    
                    <div class="relative">
                        <select class="appearance-none w-full border border-[#375534] border-opacity-30 rounded-md py-[0.5rem] px-[0.75rem] text-[#375534] pr-[2rem] bg-transparent focus:outline-none text-[0.75rem] sm:text-[0.875rem]">
                            <option>3 Guests</option>
                            <option>4 Guests</option>
                            <option>5 Guests</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-[0.5rem] text-[#375534]">
                            <i class="w-[1rem] h-[1rem]" data-lucide="chevron-down"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Schedule -->
                <div>
                    <div class="text-[0.75rem] sm:text-[0.875rem] text-[#375534] mb-[0.25rem]">Schedule</div>
                    <div class="text-[0.875rem] sm:text-[1rem] text-[#375534] mb-[0.5rem]">April 24 - May 5</div>
                    
                    <div class="flex gap-[0.5rem]">
                        <div class="relative flex-1">
                            <input type="text" value="05/05/25" class="w-full bg-airbnb-light border border-[#375534] border-opacity-30 rounded-md py-[0.5rem] px-[0.75rem] text-[#375534] focus:outline-none text-[0.75rem] sm:text-[0.875rem]">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-[0.5rem] text-[#375534]">
                                <i class="w-[1rem] h-[1rem]" data-lucide="calendar"></i>
                            </div>
                        </div>
                        <div class="relative flex-1">
                            <input type="text" value="05/05/25" class="w-full bg-airbnb-light border border-[#375534] border-opacity-30 rounded-md py-[0.5rem] px-[0.75rem] text-[#375534] focus:outline-none text-[0.75rem] sm:text-[0.875rem]">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-[0.5rem] text-[#375534]">
                                <i class="w-[1rem] h-[1rem]" data-lucide="calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Costs -->
                <div class="mt-[1rem] md:mt-0">
                    <div class="text-[0.75rem] sm:text-[0.875rem] text-[#375534] mb-[0.25rem]">Costs</div>
                    <div class="flex justify-between">
                        <div class="text-[0.875rem] sm:text-[1rem] text-[#375534]">₱ 1900 x 10</div>
                        <div class="text-[0.875rem] sm:text-[1rem] text-[#375534]">₱ 19000.00</div>
                    </div>
                    <div class="flex justify-between text-[0.75rem] sm:text-[0.875rem]">
                        <div class="text-[#375534] opacity-80">First booking discount (10%)</div>
                        <div class="text-[#375534]">₱ 1900.00</div>
                    </div>
                    <div class="flex justify-between mt-[0.5rem] border-t pt-[0.5rem] font-semibold">
                        <div class="text-[#375534] text-[0.75rem] sm:text-[0.875rem]">Total:</div>
                        <div class="text-[#375534] text-[0.75rem] sm:text-[0.875rem]">₱ 17100.00</div>
                    </div>
                </div>
            </div>
            
            <!-- Notes to Owner -->
            <div class="mb-[1.5rem] sm:mb-[2rem]">
                <div class="text-[0.75rem] sm:text-[0.875rem] text-[#375534] mb-[0.25rem]">Notes to the owner</div>
                <textarea 
                    id="notes_textarea"
                    class="w-full h-[5rem] border border-[#375534] border-opacity-30 rounded-md py-[0.5rem] px-[0.75rem] text-[#375534] bg-airbnb-light focus:outline-none text-[0.75rem] sm:text-[0.875rem]" 
                    placeholder="Your message"
                ></textarea>
            </div>
            
            <!-- Cancellation Policy -->
            <div class="text-[0.75rem] sm:text-[0.875rem] text-[#375534] mb-[1.5rem] sm:mb-[2rem]">
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
            <div class="text-center text-[0.75rem] sm:text-[0.875rem] text-[#375534] mb-[1.5rem] sm:mb-[2rem]">
                Ensure all details are correct before booking. Cancellations may be subject to fees depending on timing.
            </div>
            
            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row justify-end gap-[0.75rem]">
                <a href="{{ route('bookings.cancel-request', $property['id']) }}" class="border border-[#375534] text-[#375534] bg-transparent py-[0.5rem] px-[1.5rem] sm:px-[2.5rem] rounded-full hover:bg-gray-100 text-center text-[0.75rem] sm:text-[0.875rem]">
                    CANCEL
                </a>
                <form action="{{ route('bookings.process', $property['id']) }}" method="POST" class="w-full sm:w-auto">
                    @csrf
                    <input type="hidden" name="guest_count" value="3">
                    <input type="hidden" name="start_date" value="05/05/25">
                    <input type="hidden" name="end_date" value="05/15/25">
                    <input type="hidden" name="total_cost" value="17100.00">
                    <input type="hidden" name="notes" id="booking_notes" value="">
                    <button type="submit" class="w-full bg-[#375534] text-white py-[0.5rem] px-[1.5rem] sm:px-[2.5rem] rounded-full hover:bg-opacity-90 text-[0.75rem] sm:text-[0.875rem]">
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
