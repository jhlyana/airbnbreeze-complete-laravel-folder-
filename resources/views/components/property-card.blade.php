@props(['property'])

<div class="card relative rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300 font-montserrat">
    <!-- Guest Favorite Badge (responsive) -->
    @if($property['is_favorite'])
        <div class="absolute top-3 left-3 bg-airbnb-light py-1 px-2 md:py-1 md:px-3 rounded-lg md:rounded-xl text-xs md:text-sm font-semibold z-10 text-airbnb-darkest">
            Guest Favorite
        </div>
    @endif
    
    <!-- Favorite Heart Button -->
    <button 
        class="absolute top-3 right-3 bg-transparent border-none text-white text-xl md:text-2xl cursor-pointer z-10 drop-shadow-md hover:[&>i]:opacity-50"
        x-data="{ isFavorite: false }"
        @click.stop="isFavorite = !isFavorite"
    >
        <i 
            data-lucide="heart" 
            x-bind:class="isFavorite ? 'fill-gray-500 stroke-white' : 'fill-transparent stroke-white'"
            class="transition-colors duration-200"
        ></i>
    </button>
    
    <!-- Property Content -->
    <a href="{{ route('property.show', $property['id']) }}" class="block">
        <!-- Responsive Image -->
        <img 
            src="{{ asset($property['image']) }}" 
            alt="{{ $property['name'] }}" 
            class="w-full h-[200px] sm:h-[250px] md:h-[290px] object-cover"
        >
        
        <!-- Responsive Content -->
        <div class="p-3 md:p-4">
            <h3 class="text-sm md:text-base font-bold mb-1">{{ $property['name'] }}</h3>
            <p class="text-airbnb-darkest text-xs md:text-sm mb-2">{{ $property['location'] }}</p>
            
            <div class="flex justify-between items-center mt-2">
                <p class="text-xs md:text-sm">
                    <span class="font-normal">₱</span> 
                    <strong>{{ $property['price'] }}</strong> / night
                </p>
                
                <!-- Rating Badge (responsive) -->
                <div class="flex items-center gap-1 bg-airbnb-darkest text-airbnb-light px-2 py-1 rounded-lg md:rounded-xl text-xs font-semibold">
                    <i data-lucide="star" class="w-3 h-3 text-gold fill-gold"></i> 
                    {{ $property['rating'] }}
                </div>
            </div>
        </div>
    </a>
</div>