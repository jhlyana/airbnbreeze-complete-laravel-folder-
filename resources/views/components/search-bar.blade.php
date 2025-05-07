<div class="w-full max-w-[1400px] mx-auto px-4 z-10 relative">
  <div style="filter: drop-shadow(0px 8px 10px rgba(0, 0, 0, 0.3));" class="overflow-visible">
    <!-- horizontal scroll on mobile -->
    <div class="bg-airbnb-light flex items-center w-full rounded-full overflow-x-auto md:overflow-hidden min-w-[300px] md:min-w-[600px] scrollbar-hide">
      <!-- Place Location -->
      <div class="flex-shrink-0 flex-1 border-r border-gray-900 py-1 px-2 mx-3 my-2 min-h-[50px] min-w-[180px]">
        <div class="text-sm text-[#6e7672] mb-1">Place Location</div>
        <div class="flex items-center gap-1">
          <i class="w-6 h-6 text-airbnb-dark" data-lucide="map-pin"></i>
          <span class="text-2xl font-semibold text-airbnb-darkest">Cebu City, Cebu</span>
        </div>
      </div>
      
      <!-- Arrival Date -->
      <div class="flex-shrink-0 flex-1 border-r border-gray-900 py-1 px-2 min-h-[50px] min-w-[150px]">
        <div class="text-sm text-[#6e7672] mb-1">Arrival Date</div>
        <div class="flex items-center gap-2">
          <i class="w-6 h-6 text-airbnb-dark" data-lucide="calendar"></i>
          <span class="text-2xl font-semibold text-airbnb-darkest">24/06/25</span>
        </div>
      </div>
      
      <!-- Departure Date -->
      <div class="flex-shrink-0 flex-1 border-r border-gray-900 py-1 px-2 min-h-[50px] min-w-[150px]">
        <div class="text-sm text-[#6e7672] mb-1">Departure Date</div>
        <div class="flex items-center gap-2">
          <i class="w-6 h-6 text-airbnb-dark" data-lucide="calendar"></i>
          <span class="text-2xl font-semibold text-airbnb-darkest">24/06/25</span>
        </div>
      </div>
      
      <!-- Room & Guest -->
      <div class="flex-shrink-0 flex-1 border-r border-gray-900 py-1 px-2 min-h-[50px] min-w-[150px]">
        <div class="text-sm text-[#6e7672] mb-1">Room & Guest</div>
        <div class="flex items-center gap-3">
          <i class="w-6 h-6 text-airbnb-dark" data-lucide="door-open"></i>
          <span class="text-2xl font-semibold text-airbnb-darkest mr-1">2</span>
          <i class="w-6 h-6 text-airbnb-dark" data-lucide="users"></i>
          <span class="text-2xl font-semibold text-airbnb-darkest">5</span>
        </div>
      </div>
      
      <!-- Search Button -->
      <div class="flex-shrink-0 bg-airbnb-darkest flex items-center justify-center py-1 px-6 md:px-12 rounded-full mx-3 my-2 min-h-[50px]">
        <button class="text-airbnb-light text-base font-medium w-full h-full whitespace-nowrap">
          Search
        </button>
      </div>
    </div>
  </div>
</div>

@push('styles')
<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
@endpush