<header class="bg-airbnb-dark text-white py-3 px-4 sm:px-6 md:px-8 flex justify-between items-center fixed top-0 left-0 right-0 z-50 h-16 sm:h-20 w-full">
    <!-- Logo -->
    <a href="{{ route('home') }}" class="flex items-center gap-2">
        <img src="{{ asset('assets/images/air-logo.png') }}" alt="AirBnBreeze Logo" class="h-8 w-8 sm:h-[50px] sm:w-[50px] border border-airbnb-light rounded-full object-cover">
        <span class="font-righteous text-xl sm:text-[28px] font-normal text-airbnb-light">AirBnBreeze</span>
    </a>
   
    <!-- Menu with Alpine.js -->
    <div x-data="{ open: false }" class="relative">
        <button 
            @click="open = !open" 
            @click.away="open = false"
            class="flex items-center gap-2 bg-airbnb-dark border border-airbnb-light rounded-full px-2 py-1 sm:px-[10px] sm:py-[5px] hover:bg-opacity-90 shadow-[0_6px_16px_-2px_rgba(0,0,0,0.3)]"
        >
            <i class="w-5 h-5 sm:w-[25px] sm:h-[25px] text-airbnb-light" data-lucide="menu"></i>
            <i class="w-5 h-5 sm:w-[25px] sm:h-[25px] text-airbnb-light" data-lucide="user-circle"></i>
        </button>
       
        <div 
            x-show="open" 
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute top-10 sm:top-12 right-0 bg-airbnb-light text-airbnb-dark rounded-xl shadow-lg min-w-[180px] sm:min-w-[230px] p-2 z-10"
            style="display: none;"
        >
            <a href="#" class="block py-[0.35rem] px-2 text-gray-800 hover:bg-[#FBFFF6] rounded font-medium text-sm sm:text-base">Log in</a>
            <a href="#" class="block py-[0.35rem] px-2 text-gray-800 hover:bg-[#FBFFF6] rounded font-medium text-sm sm:text-base">Sign up</a>
            <a href="#" class="block py-[0.35rem] px-2 text-gray-800 hover:bg-[#FBFFF6] rounded font-medium text-sm sm:text-base">AirBnB your house</a>
            <a href="{{ route('about') }}" class="block py-[0.35rem] px-2 text-gray-800 hover:bg-[#FBFFF6] rounded font-medium text-sm sm:text-base">About us</a>
            <a href="{{ route('help') }}" class="block py-[0.35rem] px-2 text-gray-800 hover:bg-[#FBFFF6] rounded font-medium text-sm sm:text-base">Help Center</a>
        </div>
    </div>
</header>