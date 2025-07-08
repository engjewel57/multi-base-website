@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
  <main>
            <section
                class="max-w-[1140px] mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Main Banner -->
                <div class="md:col-span-2 relative">
                    <img src="{{asset('assets/eimage/crypgo (4).jpg')}}">
                    <div
                        class="absolute inset-0 bg-black/40 flex flex-col justify-center px-6 text-white">
                        <div class="absolute bottom-6 left-6">
                            <p class="text-sm mb-1">Late Summer Edition</p>
                            <h2 class="text-3xl md:text-4xl font-bold mb-2">New
                                Summer Arrivals</h2>
                            <p class="text-lg mb-4">Get <span
                                    class="text-orange-400 font-bold">40%
                                    Off</span></p>
                            <button
                                class="bg-orange-500 text-white py-2 px-4 rounded hover:bg-orange-600 transition">Shop
                                Now</button>
                        </div>
                    </div>
                </div>

                <!-- Skinny Fit Blazer -->


                <div class="relative flex flex-col gap-6 h-full">
                    <div class="relative flex-1">
                        <img src="{{asset('assets/eimage/crypgo (18).jpg')}}"
                            class="w-full h-48 object-cover rounded-lg">
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center">
                            <div
                                class="bg-black text-white text-sm px-2 py-1 rounded mb-2">30%
                                Off</div>
                            <div
                                class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow-lg font-semibold">Skinny
                                Fit Blazer</div>
                        </div>
                    </div>
                    <!-- Family Sweater (Bottom) -->
                    <div
                        class="relative flex-1 flex items-center justify-center">
                        <img src="{{asset('assets/eimage/crypgo (20).jpg')}}"
                            class="w-full h-48 object-cover rounded-lg">
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center">
                            <div
                                class="bg-black text-white text-sm px-2 py-1 rounded mb-2">30%
                                Off</div>
                            <div
                                class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow-lg font-semibold">Family
                                Sweater</div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- Featured Products Section -->
            <section>
                <div class="max-w-[1140px] mx-auto px-4 py-8">
                    <h2 class="text-2xl font-bold mb-4">Featured Products</h2>
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Product Card 1 -->
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden relative group hover:shadow-lg transition">
                            <div
                                class="relative w-full aspect-square overflow-hidden">
                                <img src="{{asset('assets/eimage/crypgo (13).jpg')}}"
                                    alt="Product Image"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90" />
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-orange-500/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute top-3 right-3 flex flex-col space-y-2 z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <!-- Love Icon -->
                                    <button
                                        class="bg-white p-2 rounded-full shadow hover:bg-red-100 transition">
                                        <svg class="w-5 h-5 text-red-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 21C12 21 4 13.5 4 8.5C4 5.42 6.42 3 9.5 3C11.24 3 12.91 3.81 14 5.08C15.09 3.81 16.76 3 18.5 3C21.58 3 24 5.42 24 8.5C24 13.5 16 21 16 21H12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <!-- View Icon -->
                                    <button
                                        class="bg-white p-2 rounded-full shadow hover:bg-blue-100 transition">
                                        <svg class="w-5 h-5 text-blue-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="3" />
                                            <path
                                                d="M2.05 12C3.81 7.61 7.92 4.5 12 4.5C16.08 4.5 20.19 7.61 21.95 12C20.19 16.39 16.08 19.5 12 19.5C7.92 19.5 3.81 16.39 2.05 12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <!-- Add to Cart Button (Right Bottom, show on hover) -->
                                <div
                                    class="absolute bottom-3 right-2 flex gap-3 group-hover:opacity-100 opacity-0 transition">
                                    <a href="{{route('fn.detail')}}"
                                        class="bg-orange-500 text-white px-2 py-2 rounded shadow hover:bg-orange-600 flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <circle cx="9" cy="21" r="1" />
                                            <circle cx="20" cy="21" r="1" />
                                        </svg>
                                        Add to Cart
                                    </a>
                                    <a href="./detail.html"
                                        class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700">
                                        Quick View
                                    </a>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Oversized
                                    Shirt Jacket</h3>
                                <p class="text-red-500">$49.99</p>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden relative group hover:shadow-lg transition">
                            <div
                                class="relative w-full aspect-square overflow-hidden">
                                <img src="{{asset('assets/eimage/crypgo (12).jpg')}}"
                                    alt="Product Image"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90" />
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-orange-500/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute top-3 right-3 flex flex-col space-y-2 z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <!-- Love Icon -->
                                    <button
                                        class="bg-white p-2 rounded-full shadow hover:bg-red-100 transition">
                                        <svg class="w-5 h-5 text-red-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 21C12 21 4 13.5 4 8.5C4 5.42 6.42 3 9.5 3C11.24 3 12.91 3.81 14 5.08C15.09 3.81 16.76 3 18.5 3C21.58 3 24 5.42 24 8.5C24 13.5 16 21 16 21H12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <!-- View Icon -->
                                    <a href="./detail.html"
                                        class="bg-white p-2 rounded-full shadow hover:bg-blue-100 transition">
                                        <svg class="w-5 h-5 text-blue-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="3" />
                                            <path
                                                d="M2.05 12C3.81 7.61 7.92 4.5 12 4.5C16.08 4.5 20.19 7.61 21.95 12C20.19 16.39 16.08 19.5 12 19.5C7.92 19.5 3.81 16.39 2.05 12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <!-- Add to Cart Button (Right Bottom, show on hover) -->
                                <div
                                    class="absolute bottom-3 right-2 flex gap-3 group-hover:opacity-100 opacity-0 transition">
                                    <a href="{{route('fn.detail')}}"
                                        class="bg-orange-500 text-white px-2 py-2 rounded shadow hover:bg-orange-600 flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <circle cx="9" cy="21" r="1" />
                                            <circle cx="20" cy="21" r="1" />
                                        </svg>
                                        Add to Cart
                                    </a>
                                    <a href="./detail.html"
                                        class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700">
                                        Quick View
                                    </a>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Oversized
                                    Shirt Jacket</h3>
                                <p class="text-red-500">$49.99</p>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden relative group hover:shadow-lg transition">
                            <div
                                class="relative w-full aspect-square overflow-hidden">
                                <img src="{{asset('assets/eimage/crypgo (11).jpg')}}"
                                    alt="Product Image"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90" />
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-orange-500/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute top-3 right-3 flex flex-col space-y-2 z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <!-- Love Icon -->
                                    <button
                                        class="bg-white p-2 rounded-full shadow hover:bg-red-100 transition">
                                        <svg class="w-5 h-5 text-red-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 21C12 21 4 13.5 4 8.5C4 5.42 6.42 3 9.5 3C11.24 3 12.91 3.81 14 5.08C15.09 3.81 16.76 3 18.5 3C21.58 3 24 5.42 24 8.5C24 13.5 16 21 16 21H12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <!-- View Icon -->
                                    <a href="./detail.html"
                                        class="bg-white p-2 rounded-full shadow hover:bg-blue-100 transition">
                                        <svg class="w-5 h-5 text-blue-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="3" />
                                            <path
                                                d="M2.05 12C3.81 7.61 7.92 4.5 12 4.5C16.08 4.5 20.19 7.61 21.95 12C20.19 16.39 16.08 19.5 12 19.5C7.92 19.5 3.81 16.39 2.05 12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <!-- Add to Cart Button (Right Bottom, show on hover) -->
                                <div
                                    class="absolute bottom-3 right-2 flex gap-3 group-hover:opacity-100 opacity-0 transition">
                                    <a href="{{route('fn.detail')}}"
                                        class="bg-orange-500 text-white px-2 py-2 rounded shadow hover:bg-orange-600 flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <circle cx="9" cy="21" r="1" />
                                            <circle cx="20" cy="21" r="1" />
                                        </svg>
                                        Add to Cart
                                    </a>
                                    <a href="./detail.html"
                                        class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700">
                                        Quick View
                                    </a>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Skinny
                                    Fit</h3>
                                <p class="text-red-500">$49.99</p>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden relative group hover:shadow-lg transition">
                            <div
                                class="relative w-full aspect-square overflow-hidden">
                                <img src="{{asset('assets/eimage/crypgo (10).jpg')}}"
                                    alt="Product Image"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90" />
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-orange-500/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute top-3 right-3 flex flex-col space-y-2 z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <!-- Love Icon -->
                                    <button
                                        class="bg-white p-2 rounded-full shadow hover:bg-red-100 transition">
                                        <svg class="w-5 h-5 text-red-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 21C12 21 4 13.5 4 8.5C4 5.42 6.42 3 9.5 3C11.24 3 12.91 3.81 14 5.08C15.09 3.81 16.76 3 18.5 3C21.58 3 24 5.42 24 8.5C24 13.5 16 21 16 21H12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <!-- View Icon -->
                                    <button
                                        class="bg-white p-2 rounded-full shadow hover:bg-blue-100 transition">
                                        <svg class="w-5 h-5 text-blue-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="3" />
                                            <path
                                                d="M2.05 12C3.81 7.61 7.92 4.5 12 4.5C16.08 4.5 20.19 7.61 21.95 12C20.19 16.39 16.08 19.5 12 19.5C7.92 19.5 3.81 16.39 2.05 12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <!-- Add to Cart Button (Right Bottom, show on hover) -->
                                <div
                                    class="absolute bottom-3 right-2 flex gap-3 group-hover:opacity-100 opacity-0 transition">
                                    <a href="{{route('fn.detail')}}"
                                        class="bg-orange-500 text-white px-2 py-2 rounded shadow hover:bg-orange-600 flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <circle cx="9" cy="21" r="1" />
                                            <circle cx="20" cy="21" r="1" />
                                        </svg>
                                        Add to Cart
                                    </a>
                                    <a href="./detail.html"
                                        class="bg-blue-600 text-white px-2 py-2 rounded shadow hover:bg-blue-700">
                                        Quick View
                                    </a>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Super Slim Fit
                                    Pants</h3>
                                <p class="text-red-500">$49.99</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--New Arrivals-->
            <section>
                <div class="max-w-[1140px] mx-auto px-4 py-8">
                    <h2 class="text-2xl font-bold mb-4">New Arrivals</h2>
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Product Card 1 -->
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden relative group hover:shadow-lg transition">
                            <div
                                class="relative aspect-w-1 aspect-h-1 w-full overflow-hidden ">
                                <img src="{{asset('assets/eimage/crypgo (12).jpg')}}"
                                    alt="Product Image"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90">
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-orange-500/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute top-3 right-3 flex flex-col space-y-2 z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <!-- Love Icon -->
                                    <button
                                        class="bg-white p-2 rounded-full shadow hover:bg-red-100 transition">
                                        <svg class="w-5 h-5 text-red-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 21C12 21 4 13.5 4 8.5C4 5.42 6.42 3 9.5 3C11.24 3 12.91 3.81 14 5.08C15.09 3.81 16.76 3 18.5 3C21.58 3 24 5.42 24 8.5C24 13.5 16 21 16 21H12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <!-- View Icon -->
                                    <button
                                        class="bg-white p-2 rounded-full shadow hover:bg-blue-100 transition">
                                        <svg class="w-5 h-5 text-blue-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="3" />
                                            <path
                                                d="M2.05 12C3.81 7.61 7.92 4.5 12 4.5C16.08 4.5 20.19 7.61 21.95 12C20.19 16.39 16.08 19.5 12 19.5C7.92 19.5 3.81 16.39 2.05 12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <!-- Add to Cart Button (Right Bottom, show on hover) -->
                                <div
                                    class="absolute bottom-3 right-2 flex gap-3 group-hover:opacity-100 opacity-0 transition">
                                    <a href="./detail.html"
                                        class="bg-orange-500 text-white px-2
                                         py-2 rounded shadow hover:bg-orange-600 flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <circle cx="9" cy="21" r="1" />
                                            <circle cx="20" cy="21" r="1" />
                                        </svg>
                                        Add to Cart
                                    </a>

                                    <button
                                        class="bg-blue-600 text-white px-2
                                         py-2 rounded shadow hover:bg-blue-700">
                                        Quick View
                                    </button>
                                </div>

                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Oversized
                                    Shirt Jacket</h3>
                                <p class="text-red-500">$49.99</p>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden relative group hover:shadow-lg transition">
                            <div
                                class="relative aspect-w-1 aspect-h-1 w-full overflow-hidden">
                                <img src="{{asset('assets/eimage/crypgo (13).jpg')}}"
                                    alt="Product Image"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90">
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-orange-500/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute top-3 right-3 flex flex-col space-y-2 z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <!-- Love Icon -->
                                    <button
                                        class="bg-white p-2 rounded-full shadow hover:bg-red-100 transition">
                                        <svg class="w-5 h-5 text-red-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 21C12 21 4 13.5 4 8.5C4 5.42 6.42 3 9.5 3C11.24 3 12.91 3.81 14 5.08C15.09 3.81 16.76 3 18.5 3C21.58 3 24 5.42 24 8.5C24 13.5 16 21 16 21H12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <!-- View Icon -->
                                    <a href="./detail.html"
                                        class="bg-white p-2 rounded-full shadow hover:bg-blue-100 transition">
                                        <svg class="w-5 h-5 text-blue-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="3" />
                                            <path
                                                d="M2.05 12C3.81 7.61 7.92 4.5 12 4.5C16.08 4.5 20.19 7.61 21.95 12C20.19 16.39 16.08 19.5 12 19.5C7.92 19.5 3.81 16.39 2.05 12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <!-- Add to Cart Button (Right Bottom, show on hover) -->
                                <div
                                    class="absolute bottom-3 right-2 flex gap-3 group-hover:opacity-100 opacity-0 transition">
                                    <button
                                        class="bg-orange-500 text-white px-2
                                         py-2 rounded shadow hover:bg-orange-600 flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <circle cx="9" cy="21" r="1" />
                                            <circle cx="20" cy="21" r="1" />
                                        </svg>
                                        Add to Cart
                                    </button>

                                    <button
                                        class="bg-blue-600 text-white px-2
                                         py-2 rounded shadow hover:bg-blue-700">
                                        Quick View
                                    </button>
                                </div>

                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Oversized
                                    Shirt Jacket</h3>
                                <p class="text-red-500">$49.99</p>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden relative group hover:shadow-lg transition">
                            <div
                                class="relative aspect-w-1 aspect-h-1 w-full overflow-hidden">
                                <img src="{{asset('assets/eimage/crypgo (8).jpg')}}"
                                    alt="Product Image"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90">
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-orange-500/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute top-3 right-3 flex flex-col space-y-2 z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <!-- Love Icon -->
                                    <button
                                        class="bg-white p-2 rounded-full shadow hover:bg-red-100 transition">
                                        <svg class="w-5 h-5 text-red-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 21C12 21 4 13.5 4 8.5C4 5.42 6.42 3 9.5 3C11.24 3 12.91 3.81 14 5.08C15.09 3.81 16.76 3 18.5 3C21.58 3 24 5.42 24 8.5C24 13.5 16 21 16 21H12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <!-- View Icon -->
                                    <a href="./detail.html"
                                        class="bg-white p-2 rounded-full shadow hover:bg-blue-100 transition">
                                        <svg class="w-5 h-5 text-blue-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="3" />
                                            <path
                                                d="M2.05 12C3.81 7.61 7.92 4.5 12 4.5C16.08 4.5 20.19 7.61 21.95 12C20.19 16.39 16.08 19.5 12 19.5C7.92 19.5 3.81 16.39 2.05 12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <!-- Add to Cart Button (Right Bottom, show on hover) -->
                                <div
                                    class="absolute bottom-3 right-2 flex gap-3 group-hover:opacity-100 opacity-0 transition">
                                    <button
                                        class="bg-orange-500 text-white px-2
                                         py-2 rounded shadow hover:bg-orange-600 flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <circle cx="9" cy="21" r="1" />
                                            <circle cx="20" cy="21" r="1" />
                                        </svg>
                                        Add to Cart
                                    </button>

                                    <button
                                        class="bg-blue-600 text-white px-2
                                         py-2 rounded shadow hover:bg-blue-700">
                                        Quick View
                                    </button>
                                </div>

                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Double
                                    Breasted Jacket</h3>
                                <p class="text-red-500">$49.99</p>
                            </div>
                        </div>
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden relative group hover:shadow-lg transition">
                            <div
                                class="relative aspect-w-1 aspect-h-1 w-full overflow-hidden ">
                                <img src="{{asset('assets/eimage/crypgo (8).jpg')}}"
                                    alt="Product Image"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90">
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-orange-500/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute top-3 right-3 flex flex-col space-y-2 z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <!-- Love Icon -->
                                    <button
                                        class="bg-white p-2 rounded-full shadow hover:bg-red-100 transition">
                                        <svg class="w-5 h-5 text-red-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 21C12 21 4 13.5 4 8.5C4 5.42 6.42 3 9.5 3C11.24 3 12.91 3.81 14 5.08C15.09 3.81 16.76 3 18.5 3C21.58 3 24 5.42 24 8.5C24 13.5 16 21 16 21H12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <!-- View Icon -->
                                    <a href="./detail.html"
                                        class="bg-white p-2 rounded-full shadow hover:bg-blue-100 transition">
                                        <svg class="w-5 h-5 text-blue-500"
                                            fill="none" stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="3" />
                                            <path
                                                d="M2.05 12C3.81 7.61 7.92 4.5 12 4.5C16.08 4.5 20.19 7.61 21.95 12C20.19 16.39 16.08 19.5 12 19.5C7.92 19.5 3.81 16.39 2.05 12Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                                <!-- Add to Cart Button (Right Bottom, show on hover) -->
                                <div
                                    class="absolute bottom-3 right-2 flex gap-3 group-hover:opacity-100 opacity-0 transition">
                                    <button
                                        class="bg-orange-500 text-white px-2
                                         py-2 rounded shadow hover:bg-orange-600 flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <circle cx="9" cy="21" r="1" />
                                            <circle cx="20" cy="21" r="1" />
                                        </svg>
                                        Add to Cart
                                    </button>

                                    <button
                                        class="bg-blue-600 text-white px-2
                                         py-2 rounded shadow hover:bg-blue-700">
                                        Quick View
                                    </button>
                                </div>

                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Double
                                    Breasted Jacket</h3>
                                <p class="text-red-500">$49.99</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!----Special Layout Section-->
            <section>
                <div class="max-w-[1140px] mx-auto px-4 py-8">
                    <h2 class="text-2xl font-bold mb-4">Special Layout
                        Section</h2>
                    <div class="flex flex-wrap gap-6">
                        <!-- First Div: 25% width -->
                        <div
                            class="rounded-lg overflow-hidden flex-1 min-w-[220px] max-w-[25%] flex-grow-0 flex-shrink-0">
                            <div
                                class="relative aspect-square w-full overflow-hidden group">
                                <img src="{{asset('assets/eimage/crypgo (7).jpg')}}"
                                    alt="Product 1"
                                    class="object-cover transition-transform duration-300 hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-orange-500/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                                <!-- Add to Cart Icon Button (shows on hover) -->
                                <button
                                    class="absolute bottom-3 right-3 bg-orange-500 text-white p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-orange-600 flex items-center justify-center">
                                    <!-- Cart SVG Icon -->
                                    <svg class="w-5 h-5" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4"
                                            stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <circle cx="9" cy="21" r="1" />
                                        <circle cx="20" cy="21" r="1" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Oversized
                                    Shirt Jacket</h3>
                                <p class="text-red-500">$49.99</p>
                            </div>
                        </div>
                        <!-- Second Div: 50% width -->
                        <div
                            class=" rounded-lg  overflow-hidden flex-1 min-w-[620px] max-w-[50%] flex-grow-0 flex-shrink-0 relative">
                            <div
                                class="relative aspect-[2/1] w-full overflow-hidden flex items-center justify-center">
                                <img src="{{asset('assets/eimage/crypgo (18).jpg')}}"
                                    alt="Product 2"
                                    class="w-full h-full object-cover transition-transform duration-300 hover:scale-105" />
                                <!-- Overlay for content -->
                                <div
                                    class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
                                    <p
                                        class="text-white text-lg md:text-xl font-medium mb-2 drop-shadow">Find
                                        the best Blazer Collection</p>
                                    <h3
                                        class="text-4xl md:text-5xl font-bold text-white mb-2 drop-shadow-lg tracking-wider">BLAZER</h3>
                                </div>
                                <!-- Shop Now link at bottom center -->
                                <a href="#"
                                    class="absolute bottom-6 left-1/2 -translate-x-1/2 bg-orange-500 text-white px-6 py-2 rounded-full font-semibold shadow hover:bg-orange-600 transition">Shop
                                    Now</a>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-blue-500/60 via-transparent to-transparent opacity-0 hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                            </div>
                            <div class="p-4">
                                <!-- Optionally keep or remove this text block -->
                                <!--
                                <h3 class="text-lg font-semibold">50% Width Card</h3>
                                <p class="text-gray-500">This is the center card.</p>
                                -->
                            </div>
                        </div>
                        <!-- Third Div: 25% width -->
                        <div
                            class="rounded-lg overflow-hidden flex-1 min-w-[220px] max-w-[25%] flex-grow-0 flex-shrink-0">
                            <div
                                class="relative aspect-square w-full overflow-hidden group">
                                <img src="{{asset('assets/eimage/crypgo (7).jpg')}}"
                                    alt="Product 1"
                                    class="object-cover transition-transform duration-300 hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-orange-500/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                                <!-- Add to Cart Icon Button (shows on hover) -->
                                <button
                                    class="absolute bottom-3 right-3 bg-orange-500 text-white p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-orange-600 flex items-center justify-center">
                                    <!-- Cart SVG Icon -->
                                    <svg class="w-5 h-5" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4"
                                            stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <circle cx="9" cy="21" r="1" />
                                        <circle cx="20" cy="21" r="1" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Oversized
                                    Shirt Jacket</h3>
                                <p class="text-red-500">$49.99</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-------in-->
            <section>
                <div class="max-w-[1140px] mx-auto px-4 py-8">
                    <h2 class="text-2xl font-bold mb-6">Special Layout
                        Section</h2>

                    <div class="flex flex-wrap gap-6">

                        <!-- FIRST Div: 2 stacked images with space -->
                        <div
                            class="flex-1 min-w-[300px] md:min-w-[620px] max-w-full md:max-w-[50%] flex-grow-0 flex-shrink-0 space-y-4">
                            <!-- Image 1 -->
                            <div class="relative rounded-xl overflow-hidden">
                                <img src="{{asset('assets/eimage/crypgo (5).jpg')}}"
                                    alt="Accessories"
                                    class="w-full h-60 object-cover">
                                <div
                                    class="absolute inset-0 bg-black/30 flex flex-col justify-between p-4">
                                    <h2
                                        class="text-white text-xl font-semibold">Accessories</h2>
                                    <a href="#"
                                        class="text-white text-sm self-end">Shop
                                        Now &gt;</a>
                                </div>
                            </div>
                            <!-- Image 2 -->
                            <div class="relative rounded-xl overflow-hidden">
                                <img src="{{asset('assets/eimage/image_2.jpg')}}"
                                    alt="Accessories"
                                    class="w-full h-60 object-cover">
                                <div
                                    class="absolute inset-0 bg-black/30 flex flex-col justify-between p-4">
                                    <h2
                                        class="text-white text-xl font-semibold">Accessories</h2>
                                    <a href="#"
                                        class="text-white text-sm self-end">Shop
                                        Now &gt;</a>
                                </div>
                            </div>
                        </div>

                        <!-- SECOND Div: Tall Product -->
                        <div
                            class="flex-1 min-w-[220px] max-w-full md:max-w-[25%] flex-grow-0 flex-shrink-0 rounded-xl overflow-hidden">
                            <div
                                class="relative h-[400px] w-full overflow-hidden rounded-xl">
                                <img src="{{asset('assets/eimage/crypgo (9).jpg')}}"
                                    alt="Product 1"
                                    class="w-full h-full object-cover transition-transform duration-300 hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-orange-500/60 via-transparent to-transparent opacity-0 hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Oversized
                                    Shirt Jacket</h3>
                                <p class="text-red-500">$49.99</p>
                            </div>
                        </div>

                        <!-- THIRD Div: Tall Product -->
                        <div
                            class="flex-1 min-w-[220px] max-w-full md:max-w-[25%] flex-grow-0 flex-shrink-0 rounded-xl overflow-hidden">
                            <div
                                class="relative h-[400px] w-full overflow-hidden rounded-xl">
                                <img src="{{asset('assets/eimage/crypgo (10).jpg')}}"
                                    alt="Product 2"
                                    class="w-full h-full object-cover transition-transform duration-300 hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-orange-500/60 via-transparent to-transparent opacity-0 hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Oversized
                                    Shirt Jacket</h3>
                                <p class="text-red-500">$49.99</p>
                            </div>
                        </div>

                    </div>

                    <!-- View All Button -->
                    <div class="flex justify-center mt-10">
                        <a href="#"
                            class="bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-6 rounded-md transition">View
                            All</a>
                    </div>
                </div>
            </section>

            <!-----online shop section-->
            <section class="relative bg-cover bg-center bg-no-repeat py-20"
                style="background-image: url('assets/eimage/crypgo (20).jpg');">
                <div class="absolute inset-0 bg-black/60"></div>
                <div
                    class="relative z-10 max-w-2xl mx-auto text-center text-white px-4">
                    <p class="mb-6 text-lg opacity-80">Lorem ipsum dolor sit
                        ammet</p>
                    <h2 class="text-3xl md:text-5xl font-bold mb-4">Online Shop
                        Up To <span class="text-orange-400">50% Off</span>
                        Design</h2>

                </div>
            </section>

            <section>
                <div class="max-w-[1140px] mx-auto px-4 py-8">
                    <div class="text-center mb-8">
                        <h1 class="text-2xl font-bold">Our Latest News</h1>
                    </div>
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- News Item 1 -->
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden">
                            <a href="#"><img src="{{asset('assets/eimage/image_2.jpg')}}"
                                    alt="News 1"
                                    class="w-full h-60 object-cover" /></a>
                            <div class="p-4">
                                <a href="#"
                                    class="text-lg font-semibold hover:text-underline">7
                                    Factors for Choosing Between Two Jobs</a>
                                <p class="text-gray-600">April 15, 2019 | <a
                                        href><span class="text-red-400">2
                                            Comments</span></a></p>
                            </div>
                        </div>
                        <!-- News Item 2 -->
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden">
                            <a href="#"><img src="{{asset('assets/eimage/crypgo (6).jpg')}}"
                                    alt="News 2"
                                    class="w-full h-60 object-cover" /></a>
                            <div class="p-4">
                                <a href="#"
                                    class="text-lg font-semibold hover:text-underline">7
                                    Factors for Choosing Between Two Jobs</a>
                                <p class="text-gray-600">April 15, 2019 | <a
                                        href><span class="text-red-400">2
                                            Comments</span></a></p>
                            </div>
                        </div>
                        <!-- News Item 3 -->
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden">
                            <a href="#"><img src="{{asset('assets/eimage/crypgo (5).jpg')}}"
                                    alt="News 3"
                                    class="w-full h-60 object-cover" /></a>
                            <div class="p-4">
                                <a href="#"
                                    class="text-lg font-semibold hover:text-underline">7
                                    Factors for Choosing Between Two Jobs</a>
                                <p class="text-gray-600">April 15, 2019 | <a
                                        href><span class="text-red-400">2
                                            Comments</span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-36">
                <div class="max-w-[1440px] mx-auto px-4 py-8">
                    <div
                        class="grid grid-cols-1 md:grid-cols-3 gap-0 bg-gray-200 rounded-lg p-6">
                        <!-- Card 1 -->
                        <div
                            class="flex flex-col items-center justify-center text-center px-4">
                            <div class="flex items-center justify-center mb-4">
                                <img src="{{asset('assets/eimage/crypgo (03).svg')}}"
                                    alt="Image 1"
                                    class="w-24 h-24 object-contain rounded-lg" />
                            </div>
                            <h1 class="text-lg font-semibold mb-1">100% Secure
                                Payments</h1>
                            <p>We offer competitive prices on<br> our 100
                                million plus product range.</p>
                        </div>
                        <!-- Card 2 -->
                        <div
                            class="flex flex-col items-center justify-center text-center px-4">
                            <div class="flex items-center justify-center mb-4">
                                <img src="{{asset('assets/eimage/crypgo (02).svg')}}"
                                    alt="Image 2"
                                    class="w-24 h-24 object-contain rounded-lg" />
                            </div>
                            <h1 class="text-lg font-semibold mb-1">World Wide
                                Delivery</h1>
                            <p>We offer competitive prices on<br> our 100
                                million plus product range.</p>
                        </div>
                        <!-- Card 3 -->
                        <div
                            class="flex flex-col items-center justify-center text-center px-4">
                            <div class="flex items-center justify-center mb-4">
                                <img src="{{asset('assets/eimage/crypgo (01).svg')}}"
                                    alt="Image 3"
                                    class="w-24 h-24 object-contain rounded-lg" />
                            </div>
                            <h1 class="text-lg font-semibold mb-1">24/7 Help
                                Center</h1>
                            <p>We offer competitive prices on<br> our 100
                                million plus product range.</p>
                        </div>
                    </div>
                </div>
            </section>

        </main>

    @endsection