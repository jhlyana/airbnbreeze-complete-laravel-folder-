<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // Display the homepage with property listings
     
    public function index()
    {
        // hardcoded data for design
        // In a real app, fetch properties from a database
        
        $properties = [
            [
                'id' => 1,
                'name' => 'Limosnero\'s Private House',
                'location' => 'Minglanilla, Cebu',
                'price' => 1900,
                'rating' => 4.9,
                'image' => 'assets/images/HOUSE (1).png',
                'is_favorite' => true
            ],
            [
                'id' => 2,
                'name' => 'Limosnero\'s Private House',
                'location' => 'Mactan, Cebu',
                'price' => 2500,
                'rating' => 4.7,
                'image' => 'assets/images/HOUSE (2).png',
                'is_favorite' => false
            ],
            [
                'id' => 3,
                'name' => 'Limosnero\'s Private House',
                'location' => 'Busay, Cebu',
                'price' => 1750,
                'rating' => 4.8,
                'image' => 'assets/images/HOUSE (3).png',
                'is_favorite' => false
            ],
            [
                'id' => 4,
                'name' => 'Downtown Apartment',
                'location' => 'Cebu City, Cebu',
                'price' => 1550,
                'rating' => 4.6,
                'image' => 'assets/images/HOUSE (4).png',
                'is_favorite' => true
            ],
            [
                'id' => 5,
                'name' => 'Garden Cottage',
                'location' => 'Liloan, Cebu',
                'price' => 1800,
                'rating' => 4.9,
                'image' => 'assets/images/HOUSE (6).png',
                'is_favorite' => false
            ],
            [
                'id' => 6,
                'name' => 'Modern Condo',
                'location' => 'IT Park, Cebu',
                'price' => 2200,
                'rating' => 4.8,
                'image' => 'assets/images/HOUSE (7).png',
                'is_favorite' => false
            ],
        ];
        
        return view('pages.home', compact('properties'));
    }

    // Display the property details page
     
    public function show($id)
    {
        // hardcoded data for design
        // In a real app, fetch property by ID from a database
        
        $property = [
            'id' => $id,
            'name' => 'Limosnero\'s Private House',
            'location' => 'Minglanilla, Cebu, Philippines',
            'guests' => 5,
            'rooms' => 2,
            'bathrooms' => 1,
            'rating' => 4.9,
            'reviews' => 33,
            'price' => 1900,
            'description' => 'Fully functional One bedroom with up to 100 mbps Internet connection. Located in Amala Steps Mandale is A modern, clean and bright space which is close to the Mactan International Airport, Masyo Hotel and Medical Clinic and Public transportation to and from the city and northern province.',
            'host' => [
                'name' => 'Donesia Pacquio',
                'role' => 'Property Handler',
                'image' => 'assets/images/MD.png',
                'contact' => '+63 912 345 6789',
                'joined_date' => 'March 2020',
                'properties_managed' => 12,
                'response_rate' => '98%',
                'response_time' => 'within an hour'
            ],
            'images' => [
                'main' => 'assets/images/HOUSE (7).png',
                'gallery' => [
                    'assets/images/HOUSE (6).png',
                    'assets/images/HOUSE (1).png',
                    'assets/images/HOUSE (3).png',
                    'assets/images/HOUSE (7).png'
                ]
            ],
            'amenities' => [
                ['name' => 'Wifi', 'icon' => 'wifi', 'available' => true],
                ['name' => 'Workspace', 'icon' => 'monitor', 'available' => true],
                ['name' => 'Kitchen', 'icon' => 'utensils', 'available' => true],
                ['name' => 'Pool', 'icon' => 'droplets', 'available' => true],
                ['name' => 'Television', 'icon' => 'tv', 'available' => true],
                ['name' => 'Beach Area', 'icon' => 'waves', 'available' => true],
                ['name' => 'Air Conditioning', 'icon' => 'snowflake', 'available' => true],
                ['name' => 'First Aid Kit', 'icon' => 'briefcase-medical', 'available' => true],
                ['name' => 'Gym', 'icon' => 'dumbbell', 'available' => false],
                ['name' => 'Shower', 'icon' => 'shower-head', 'available' => true],
                ['name' => 'Fire Extinguisher', 'icon' => 'flame', 'available' => true],
                ['name' => 'Parking', 'icon' => 'car', 'available' => true],
                ['name' => 'Washer', 'icon' => 'washing-machine', 'available' => false],
                ['name' => 'Dryer', 'icon' => 'washing-machine', 'available' => false]
            ],
            'rules' => [
                'Check-in: After 2:00 PM',
                'Checkout: 11:00 AM',
                'No smoking',
                'No pets allowed',
                'No parties or events',
                'Quiet hours: 10PM-7AM',
                'Maximum guests: 5',
                'No unregistered guests'
            ],
            'safety' => [
                'Security camera/recording device',
                'Carbon monoxide alarm',
                'Smoke alarm',
                'Must climb stairs',
                'Weapon/firearm on property',
                'Dangerous animals on property'
            ],
            'cancellation' => [
                'Free cancellation before May 15',
                'Review the full policy',
                '50% refund up to 7 days before check-in',
                'No refund within 48 hours of check-in'
            ],
            'nearby_places' => [
                ['name' => 'Mactan International Airport', 'distance' => '15 min drive'],
                ['name' => 'Mall', 'distance' => '10 min walk'],
                ['name' => 'Beach', 'distance' => '5 min walk'],
                ['name' => 'Supermarket', 'distance' => '8 min walk'],
                ['name' => 'Restaurants', 'distance' => '3 min walk']
            ],
            // Add reviews data
            'reviews_data' => [
                [
                    'reviewer' => 'Jayson Gabriel',
                    'date' => 'April 24, 2025',
                    'rating' => 5.0,
                    'text' => 'Cozy space to stay with stuning view. Great pool. Very clean. A bit noisy from city traffic.',
                    'image' => 'assets/images/HOUSE (1).png',
                ],
                [
                    'reviewer' => 'Maria Sanchez',
                    'date' => 'March 15, 2025',
                    'rating' => 4.5,
                    'text' => 'Beautiful property with amazing amenities. The host was very responsive and accommodating. Would definitely stay here again!',
                    'image' => 'assets/images/HOUSE (2).png',
                ],
                [
                    'reviewer' => 'John Doe',
                    'date' => 'February 10, 2025',
                    'rating' => 5.0,
                    'text' => 'Perfect location and excellent value for money. The swimming pool was fantastic and the house was spotless.',
                    'image' => 'assets/images/HOUSE (3).png',
                ],
                [
                    'reviewer' => 'Sarah Johnson',
                    'date' => 'January 5, 2025',
                    'rating' => 4.8,
                    'text' => 'Great experience overall. The place was clean and had everything we needed. The host was very helpful with local recommendations.',
                    'image' => 'assets/images/HOUSE (4).png',
                ]
            ],
            'booking_options' => [
                'minimum_stay' => 2,
                'maximum_stay' => 30,
                'instant_book' => true,
                'advance_notice' => '24 hours'
            ]
        ];
        
        return view('pages.property-details', [
            'property' => $property,
            'reviews' => $property['reviews_data'],
            'similar_properties' => [
                [
                    'id' => 2,
                    'name' => 'Limosnero\'s Private House',
                    'location' => 'Mactan, Cebu',
                    'price' => 2500,
                    'rating' => 4.7,
                    'image' => 'assets/images/HOUSE (2).png'
                ],
                [
                    'id' => 3,
                    'name' => 'Limosnero\'s Private House',
                    'location' => 'Busay, Cebu',
                    'price' => 1750,
                    'rating' => 4.8,
                    'image' => 'assets/images/HOUSE (3).png'
                ],
                [
                    'id' => 5,
                    'name' => 'Garden Cottage',
                    'location' => 'Liloan, Cebu',
                    'price' => 1800,
                    'rating' => 4.9,
                    'image' => 'assets/images/HOUSE (6).png'
                ]
            ]
        ]);
    }
}
