<div
    id="contactModal"
    class="fixed inset-0 z-50 overflow-y-auto hidden"
    x-data="{
        host: {{ json_encode($property['host'] ?? []) }},
        contactDetails: {
            number: '8-700',
            email: 'dionesia@gmail.com',
            preferredContact: 'Email'
        }
    }"
>
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-black bg-opacity-75"></div>
        </div>

        <!-- Modal panel -->
        <div class="inline-block align-bottom bg-[#C7D1B9] rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-md w-full">
            <!-- Close button -->
            <button
                onclick="document.getElementById('contactModal').classList.add('hidden')"
                class="absolute top-4 right-4 text-gray-600 hover:text-gray-900"
            >
                <i class="w-6 h-6" data-lucide="x"></i>
            </button>
            
            <!-- Modal content -->
            <div class="p-6 md:p-8">
                <h2 class="text-2xl md:text-3xl font-semibold text-center text-airbnb-darkest mb-6">Contact Details</h2>
                
                <!-- Contact info -->
                <div class="space-y-6">
                    <!-- Name -->
                    <div class="flex items-start">
                        <div class="w-1/3 sm:w-1/4 font-semibold text-airbnb-darkest">Name</div>
                        <div class="flex-1 text-airbnb-darkest" x-text="host.name"></div>
                    </div>
                    
                    <!-- Number -->
                    <div class="flex items-start">
                        <div class="w-1/3 sm:w-1/4 font-semibold text-airbnb-darkest">Number</div>
                        <div class="flex-1 text-airbnb-darkest" x-text="contactDetails.number"></div>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex items-start">
                        <div class="w-1/3 sm:w-1/4 font-semibold text-airbnb-darkest">Email</div>
                        <div class="flex-1 text-airbnb-darkest" x-text="contactDetails.email"></div>
                    </div>

                
                <!-- Contact Button (dynamic based on preferred method) -->
                <div class="mt-8 text-center">
                    <template x-if="contactDetails.preferredContact === 'Email'">
                        <a 
                            x-bind:href="'mailto:' + contactDetails.email"
                            class="inline-block bg-airbnb-darkest text-airbnb-light py-3 px-8 rounded-full text-sm font-medium hover:bg-opacity-90 transition-colors"
                        >
                            Send Email
                        </a>
                    </template>
                    <template x-if="contactDetails.preferredContact === 'Phone'">
                        <a 
                            x-bind:href="'tel:' + contactDetails.number.replace(/-/g, '')"
                            class="inline-block bg-airbnb-darkest text-airbnb-light py-3 px-8 rounded-full text-sm font-medium hover:bg-opacity-90 transition-colors"
                        >
                            Call Now
                        </a>
                    </template>
                </div>
            </div>
        </div>
    </div>
</div>