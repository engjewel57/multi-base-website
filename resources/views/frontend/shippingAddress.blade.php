@extends('frontend.layouts.master')
@section('title', 'About Us')
@section('content')
 
<section class="max-w-5xl mx-auto mt-10 mb-40 grid grid-cols-1 md:grid-cols-2 gap-8 ">
            <!-- Shipping Address Form -->
           <form>
             <div class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center gap-2">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/>
                        <circle cx="12" cy="9" r="2.5"/>
                    </svg>
                    Shipping Address
                </h2>
                <form class="space-y-5">
                    <div>
                        <label class="block text-gray-700 font-medium mb-1" for="fullname">Full Name</label>
                        <input id="fullname" type="text" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Email" required>
                    </div>
                     <div>
                        <label class="block text-gray-700 font-medium mb-1" for="fullname">Email</label>
                        <input id="Email" type="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Your Name" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-1" for="address">Address</label>
                        <input id="address" type="text" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Street address" required>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 font-medium mb-1" for="city">City</label>
                            <input id="city" type="text" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="City" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-1" for="zip">ZIP / Postal</label>
                            <input id="zip" type="text" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="ZIP Code" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 font-medium mb-1" for="country">Country</label>
                            <select id="country" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>Australia</option>
                                <option>United Kingdom</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="mb-10">
                            <label class="block text-gray-700 font-medium mb-1" for="phone">Phone</label>
                            <input id="phone" type="tel" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Phone Number" required>
                        </div>
                    </div>
 <button class="mt-6 w-full bg-orange-500 text-white py-3 rounded-lg font-semibold hover:bg-orange-600 transition text-lg shadow">Proceed to Payment</button>                </form>
            </div>
            <!-- Order Summary Card -->
            <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col">
                <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center gap-2">
                    <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect x="3" y="7" width="18" height="13" rx="2" />
                        <path d="M16 3v4M8 3v4M3 11h18"/>
                    </svg>
                    Order Summary
                </h2>
                <div class="divide-y divide-gray-200 mb-4">
                    <div class="flex justify-between py-3">
                        <span class="text-gray-700">Product 1</span>
                        <span class="font-semibold text-gray-800">$19.99</span>
                    </div>
                    <div class="flex justify-between py-3">
                        <span class="text-gray-700">Product 2</span>
                        <span class="font-semibold text-gray-800">$14.99</span>
                    </div>
                </div>
                <div class="flex justify-between py-3 border-t border-gray-200 font-semibold text-lg">
                    <span>Total</span>
                    <span class="text-blue-600">$34.98</span>
                </div>
               
                <div class="mt-4 text-sm text-gray-500 text-center">
                    <span>Need help? <a href="#" class="text-blue-500 hover:underline">Contact Support</a></span>
                </div>
            </div>
           </form>
        </section>

    @endsection