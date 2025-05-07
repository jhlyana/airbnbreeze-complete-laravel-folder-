<div 
    id="reviewsModal" 
    class="fixed inset-0 z-50 overflow-y-auto hidden"
    x-data="{ 
        currentReview: 0,
        reviews: {{ json_encode($reviews) }},
        nextReview() {
            this.currentReview = (this.currentReview + 1) % this.reviews.length;
        },
        prevReview() {
            this.currentReview = (this.currentReview - 1 + this.reviews.length) % this.reviews.length;
        }
    }"
>
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-black bg-opacity-75"></div>
        </div>

        <!-- Modal panel -->
        <div class="inline-block align-bottom bg-[#C7D1B9] rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl md:max-w-2xl lg:max-w-4xl w-full">
            <!-- Close button -->
            <button 
                onclick="document.getElementById('reviewsModal').classList.add('hidden')"
                class="absolute top-4 right-4 text-gray-600 hover:text-gray-900"
            >
                <i class="w-6 h-6" data-lucide="x"></i>
            </button>
            
            <!-- Modal content -->
            <div class="p-6 md:p-8">
                <h2 class="text-2xl md:text-3xl font-semibold text-center text-airbnb-darkest mb-4">Customer Reviews</h2>
                
                <!-- Property info -->
                <div class="text-center mb-6">
                    <h3 class="text-xl font-semibold text-airbnb-darkest">{{ $property['name'] }} <span class="font-normal text-sm">({{ $property['location'] }})</span></h3>
                </div>
                
                <!-- Review carousel -->
                <div class="flex items-center">
                    <!-- Previous button -->
                    <button 
                        @click="prevReview()"
                        class="flex-shrink-0 bg-none bg-opacity-50 rounded-full p-2 mr-2 hover:bg-opacity-70 transition-colors"
                    >
                        <i class="w-6 h-6 text-airbnb-darkest" data-lucide="circle-arrow-left"></i>
                    </button>
                    
                    <!-- Review content -->
                    <div class="flex-grow flex flex-col md:flex-row items-center md:items-start gap-6 py-4">
                        <!-- Profile image -->
                        <div class="flex-shrink-0 w-32 h-32 md:w-48 md:h-48 rounded-full overflow-hidden border-2 border-airbnb-darkest">
                            <img 
                                x-bind:src="asset(reviews[currentReview].image)" 
                                class="w-full h-full object-cover"
                                alt="Property view"
                            >
                        </div>
                        
                        <!-- Review details -->
                        <div class="flex-grow text-center md:text-left">
<!-- Rating - FIXED STAR ALIGNMENT -->
<div class="flex flex-col items-start mb-3">
    <div class="flex items-center gap-1.5">
        <div class="flex">
            <template x-for="i in 5">
                <i class="w-5 h-5 text-yellow-400" 
                   x-bind:class="{ 'fill-yellow-400': i <= reviews[currentReview].rating }"
                   data-lucide="star"></i>
            </template>
        </div>
        <span class="ml-2 text-lg font-semibold leading-none" 
              x-text="reviews[currentReview].rating.toFixed(1)"></span>
    </div>
</div>
                            
                            <!-- Review text -->
                            <p class="text-airbnb-darkest text-lg mb-4 leading-relaxed" x-text="reviews[currentReview].text"></p>
                            
                            <!-- Reviewer name and date -->
                            <div class="mt-4 space-y-1">
                                <p class="font-semibold text-airbnb-darkest text-lg" x-text="reviews[currentReview].reviewer"></p>
                                <p class="text-airbnb-dark text-sm" x-text="reviews[currentReview].date"></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Next button -->
                    <button 
                        @click="nextReview()"
                        class="flex-shrink-0 bg-none bg-opacity-50 rounded-full p-2 ml-2 hover:bg-opacity-70 transition-colors"
                    >
                        <i class="w-6 h-6 text-airbnb-darkest" data-lucide="circle-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>