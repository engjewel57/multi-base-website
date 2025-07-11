@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
  <main>
            <section
                class="max-w-[1140px] mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Main Banner -->
                <div class="relative md:col-span-2">
                    <img src="{{asset('assets/eimage/crypgo (4).jpg')}}">
                    <div
                        class="absolute inset-0 flex flex-col justify-center px-6 text-white bg-black/40 dark:text-white">
                        <div class="absolute bottom-6 left-6">
                            <p class="mb-1 text-sm">Late Summer Edition</p>
                            <h2 class="mb-2 text-3xl font-bold md:text-4xl">New
                                Summer Arrivals</h2>
                            <p class="mb-4 text-lg">Get <span
                                    class="font-bold text-orange-400">40%
                                    Off</span></p>
                            <button
                                class="px-4 py-2 text-white transition bg-orange-500 rounded dark:text-white hover:bg-orange-600">Shop
                                Now</button>
                        </div>
                    </div>
                </div>

                <!-- Skinny Fit Blazer -->


                <div class="relative flex flex-col h-full gap-6">
                    <div class="relative flex-1">
                        <img src="{{asset('assets/eimage/crypgo (18).jpg')}}"
                            class="object-cover w-full h-48 rounded-lg">
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center">
                            <div
                                class="px-2 py-1 mb-2 text-sm text-white bg-black rounded dark:text-white">30%
                                Off</div>
                            <div
                                class="px-4 py-2 font-semibold text-white bg-orange-500 rounded-lg shadow-lg dark:text-white">Skinny
                                Fit Blazer</div>
                        </div>
                    </div>
                    <!-- Family Sweater (Bottom) -->
                    <div
                        class="relative flex items-center justify-center flex-1">
                        <img src="{{asset('assets/eimage/crypgo (20).jpg')}}"
                            class="object-cover w-full h-48 rounded-lg">
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center">
                            <div
                                class="px-2 py-1 mb-2 text-sm text-white bg-black rounded dark:text-white">30%
                                Off</div>
                            <div
                                class="px-4 py-2 font-semibold text-white bg-orange-500 rounded-lg shadow-lg dark:text-white">Family
                                Sweater</div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- Featured Products Section -->
            <section>
                <div class="max-w-[1140px] mx-auto px-4 py-8">
                    <h2 class="mb-4 text-2xl font-bold dark:text-white">Featured Products</h2>
                    <div
                        class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                        <!-- Product Card 1 -->
                        <div
                            class="relative overflow-hidden transition bg-white rounded-lg shadow-md dark:text-white group hover:shadow-lg">
                            <div
                                class="relative w-full overflow-hidden aspect-square">
                                <img src="{{asset('assets/eimage/crypgo (13).jpg')}}"
                                    alt="Product Image"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90" />
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none bg-gradient-to-t from-orange-500/60 via-transparent to-transparent group-hover:opacity-100"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute z-10 flex flex-col space-y-2 transition-opacity duration-300 opacity-0 top-3 right-3 group-hover:opacity-100">
                                    <!-- Love Icon -->
                                    <button
                                        class="p-2 transition bg-white rounded-full shadow dark:text-white hover:bg-red-100">
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
                                        class="p-2 transition bg-white rounded-full shadow dark:text-white hover:bg-blue-100">
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
                                    class="absolute flex gap-3 transition opacity-0 bottom-3 right-2 group-hover:opacity-100">
                                    <a href="{{route('fn.detail')}}"
                                        class="flex items-center gap-2 px-2 py-2 text-white bg-orange-500 rounded shadow dark:text-white hover:bg-orange-600">
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
                                        class="px-2 py-2 text-white bg-blue-600 rounded shadow dark:text-white hover:bg-blue-700">
                                        Quick View
                                    </a>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold dark:text-white">Oversized
                                    Shirt Jacket</h3>
                                <p class="text-red-500 dark:text-white">$49.99</p>
                            </div>
                        </div>
                        <div
                            class="relative overflow-hidden transition bg-white rounded-lg shadow-md dark:text-white group hover:shadow-lg">
                            <div
                                class="relative w-full overflow-hidden aspect-square">
                                <img src="{{asset('assets/eimage/crypgo (12).jpg')}}"
                                    alt="Product Image"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90" />
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none bg-gradient-to-t from-orange-500/60 via-transparent to-transparent group-hover:opacity-100"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute z-10 flex flex-col space-y-2 transition-opacity duration-300 opacity-0 top-3 right-3 group-hover:opacity-100">
                                    <!-- Love Icon -->
                                    <button
                                        class="p-2 transition bg-white rounded-full shadow dark:text-white hover:bg-red-100">
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
                                        class="p-2 transition bg-white rounded-full shadow dark:text-white hover:bg-blue-100">
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
                                    class="absolute flex gap-3 transition opacity-0 bottom-3 right-2 group-hover:opacity-100">
                                    <a href="{{route('fn.detail')}}"
                                        class="flex items-center gap-2 px-2 py-2 text-white bg-orange-500 rounded shadow dark:text-white hover:bg-orange-600">
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
                                        class="px-2 py-2 text-white bg-blue-600 rounded shadow dark:text-white hover:bg-blue-700">
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
                            class="relative overflow-hidden transition bg-white rounded-lg shadow-md dark:text-white group hover:shadow-lg">
                            <div
                                class="relative w-full overflow-hidden aspect-square">
                                <img src="{{asset('assets/eimage/crypgo (11).jpg')}}"
                                    alt="Product Image"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90" />
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none bg-gradient-to-t from-orange-500/60 via-transparent to-transparent group-hover:opacity-100"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute z-10 flex flex-col space-y-2 transition-opacity duration-300 opacity-0 top-3 right-3 group-hover:opacity-100">
                                    <!-- Love Icon -->
                                    <button
                                        class="p-2 transition bg-white rounded-full shadow dark:text-white hover:bg-red-100">
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
                                        class="p-2 transition bg-white rounded-full shadow dark:text-white hover:bg-blue-100">
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
                                    class="absolute flex gap-3 transition opacity-0 bottom-3 right-2 group-hover:opacity-100">
                                    <a href="{{route('fn.detail')}}"
                                        class="flex items-center gap-2 px-2 py-2 text-white bg-orange-500 rounded shadow dark:text-white hover:bg-orange-600">
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
                                        class="px-2 py-2 text-white bg-blue-600 rounded shadow dark:text-white hover:bg-blue-700">
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
                            class="relative overflow-hidden transition bg-white rounded-lg shadow-md dark:text-white group hover:shadow-lg">
                            <div
                                class="relative w-full overflow-hidden aspect-square">
                                <img src="{{asset('assets/eimage/crypgo (10).jpg')}}"
                                    alt="Product Image"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90" />
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none bg-gradient-to-t from-orange-500/60 via-transparent to-transparent group-hover:opacity-100"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute z-10 flex flex-col space-y-2 transition-opacity duration-300 opacity-0 top-3 right-3 group-hover:opacity-100">
                                    <!-- Love Icon -->
                                    <button
                                        class="p-2 transition bg-white rounded-full shadow hover:bg-red-100">
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
                                        class="p-2 transition bg-white rounded-full shadow hover:bg-blue-100">
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
                                    class="absolute flex gap-3 transition opacity-0 bottom-3 right-2 group-hover:opacity-100">
                                    <a href="{{route('fn.detail')}}"
                                        class="flex items-center gap-2 px-2 py-2 text-white bg-orange-500 rounded shadow dark:text-white hover:bg-orange-600">
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
                                        class="px-2 py-2 text-white bg-blue-600 rounded shadow dark:text-white hover:bg-blue-700">
                                        Quick View 
                                    </a>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold dark:text-white">Super Slim Fit
                                    Pants</h3>
                                <p class="text-red-500 dark:text-white">$49.99</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--New Arrivals-->
            <section>
                <div class="max-w-[1140px] mx-auto px-4 py-8">
                    <h2 class="mb-4 text-2xl font-bold dark:text-white">New Arrivals</h2>
                    <div
                        class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                        <!-- Product Card 1 -->
                        <div
                            class="relative overflow-hidden transition bg-white rounded-lg shadow-md group hover:shadow-lg">
                            <div
                                class="relative w-full overflow-hidden aspect-w-1 aspect-h-1 ">
                                <img src="{{asset('assets/eimage/crypgo (12).jpg')}}"
                                    alt="Product Image"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90">
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none bg-gradient-to-t from-orange-500/60 via-transparent to-transparent group-hover:opacity-100"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute z-10 flex flex-col space-y-2 transition-opacity duration-300 opacity-0 top-3 right-3 group-hover:opacity-100">
                                    <!-- Love Icon -->
                                    <button
                                        class="p-2 transition bg-white rounded-full shadow hover:bg-red-100">
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
                                        class="p-2 transition bg-white rounded-full shadow hover:bg-blue-100">
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
                                    class="absolute flex gap-3 transition opacity-0 bottom-3 right-2 group-hover:opacity-100">
                                    <a href="./detail.html"
                                        class="flex items-center gap-2 px-2 py-2 text-white bg-orange-500 rounded shadow hover:bg-orange-600">
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
                                        class="px-2 py-2 text-white bg-blue-600 rounded shadow hover:bg-blue-700">
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
                            class="relative overflow-hidden transition bg-white rounded-lg shadow-md group hover:shadow-lg">
                            <div
                                class="relative w-full overflow-hidden aspect-w-1 aspect-h-1">
                                <img src="{{asset('assets/eimage/crypgo (13).jpg')}}"
                                    alt="Product Image"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90">
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none bg-gradient-to-t from-orange-500/60 via-transparent to-transparent group-hover:opacity-100"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute z-10 flex flex-col space-y-2 transition-opacity duration-300 opacity-0 top-3 right-3 group-hover:opacity-100">
                                    <!-- Love Icon -->
                                    <button
                                        class="p-2 transition bg-white rounded-full shadow hover:bg-red-100">
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
                                        class="p-2 transition bg-white rounded-full shadow hover:bg-blue-100">
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
                                    class="absolute flex gap-3 transition opacity-0 bottom-3 right-2 group-hover:opacity-100">
                                    <button
                                        class="flex items-center gap-2 px-2 py-2 text-white bg-orange-500 rounded shadow hover:bg-orange-600">
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
                                        class="px-2 py-2 text-white bg-blue-600 rounded shadow hover:bg-blue-700">
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
                            class="relative overflow-hidden transition bg-white rounded-lg shadow-md group hover:shadow-lg">
                            <div
                                class="relative w-full overflow-hidden aspect-w-1 aspect-h-1">
                                <img src="{{asset('assets/eimage/crypgo (8).jpg')}}"
                                    alt="Product Image"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90">
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none bg-gradient-to-t from-orange-500/60 via-transparent to-transparent group-hover:opacity-100"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute z-10 flex flex-col space-y-2 transition-opacity duration-300 opacity-0 top-3 right-3 group-hover:opacity-100">
                                    <!-- Love Icon -->
                                    <button
                                        class="p-2 transition bg-white rounded-full shadow hover:bg-red-100">
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
                                        class="p-2 transition bg-white rounded-full shadow hover:bg-blue-100">
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
                                    class="absolute flex gap-3 transition opacity-0 bottom-3 right-2 group-hover:opacity-100">
                                    <button
                                        class="flex items-center gap-2 px-2 py-2 text-white bg-orange-500 rounded shadow hover:bg-orange-600">
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
                                        class="px-2 py-2 text-white bg-blue-600 rounded shadow hover:bg-blue-700">
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
                            class="relative overflow-hidden transition bg-white rounded-lg shadow-md group hover:shadow-lg">
                            <div
                                class="relative w-full overflow-hidden aspect-w-1 aspect-h-1 ">
                                <img src="{{asset('assets/eimage/crypgo (8).jpg')}}"
                                    alt="Product Image"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110 group-hover:rotate-2 group-hover:brightness-90">
                                <!-- Unique Hover Overlay -->
                                <div
                                    class="absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none bg-gradient-to-t from-orange-500/60 via-transparent to-transparent group-hover:opacity-100"></div>
                                <!-- Right Side Icons -->
                                <div
                                    class="absolute z-10 flex flex-col space-y-2 transition-opacity duration-300 opacity-0 top-3 right-3 group-hover:opacity-100">
                                    <!-- Love Icon -->
                                    <button
                                        class="p-2 transition bg-white rounded-full shadow hover:bg-red-100">
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
                                        class="p-2 transition bg-white rounded-full shadow hover:bg-blue-100">
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
                                    class="absolute flex gap-3 transition opacity-0 bottom-3 right-2 group-hover:opacity-100">
                                    <button
                                        class="flex items-center gap-2 px-2 py-2 text-white bg-orange-500 rounded shadow hover:bg-orange-600">
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
                                        class="px-2 py-2 text-white bg-blue-600 rounded shadow hover:bg-blue-700">
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
                    <h2 class="mb-4 text-2xl font-bold">Special Layout
                        Section</h2>
                    <div class="flex flex-wrap gap-6">
                        <!-- First Div: 25% width -->
                        <div
                            class="rounded-lg overflow-hidden flex-1 min-w-[220px] max-w-[25%] flex-grow-0 flex-shrink-0">
                            <div
                                class="relative w-full overflow-hidden aspect-square group">
                                <img src="{{asset('assets/eimage/crypgo (7).jpg')}}"
                                    alt="Product 1"
                                    class="object-cover transition-transform duration-300 hover:scale-105" />
                                <div
                                    class="absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none bg-gradient-to-t from-orange-500/60 via-transparent to-transparent group-hover:opacity-100"></div>
                                <!-- Add to Cart Icon Button (shows on hover) -->
                                <button
                                    class="absolute flex items-center justify-center p-2 text-white transition-opacity duration-300 bg-orange-500 rounded-full shadow-lg opacity-0 bottom-3 right-3 group-hover:opacity-100 hover:bg-orange-600">
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
                                    class="object-cover w-full h-full transition-transform duration-300 hover:scale-105" />
                                <!-- Overlay for content -->
                                <div
                                    class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center">
                                    <p
                                        class="mb-2 text-lg font-medium text-white md:text-xl drop-shadow">Find
                                        the best Blazer Collection</p>
                                    <h3
                                        class="mb-2 text-4xl font-bold tracking-wider text-white md:text-5xl drop-shadow-lg">BLAZER</h3>
                                </div>
                                <!-- Shop Now link at bottom center -->
                                <a href="#"
                                    class="absolute px-6 py-2 font-semibold text-white transition -translate-x-1/2 bg-orange-500 rounded-full shadow bottom-6 left-1/2 hover:bg-orange-600">Shop
                                    Now</a>
                                <div
                                    class="absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none bg-gradient-to-t from-blue-500/60 via-transparent to-transparent hover:opacity-100"></div>
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
                                class="relative w-full overflow-hidden aspect-square group">
                                <img src="{{asset('assets/eimage/crypgo (7).jpg')}}"
                                    alt="Product 1"
                                    class="object-cover transition-transform duration-300 hover:scale-105" />
                                <div
                                    class="absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none bg-gradient-to-t from-orange-500/60 via-transparent to-transparent group-hover:opacity-100"></div>
                                <!-- Add to Cart Icon Button (shows on hover) -->
                                <button
                                    class="absolute flex items-center justify-center p-2 text-white transition-opacity duration-300 bg-orange-500 rounded-full shadow-lg opacity-0 bottom-3 right-3 group-hover:opacity-100 hover:bg-orange-600">
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
                    <h2 class="mb-6 text-2xl font-bold">Special Layout
                        Section</h2>

                    <div class="flex flex-wrap gap-6">

                        <!-- FIRST Div: 2 stacked images with space -->
                        <div
                            class="flex-1 min-w-[300px] md:min-w-[620px] max-w-full md:max-w-[50%] flex-grow-0 flex-shrink-0 space-y-4">
                            <!-- Image 1 -->
                            <div class="relative overflow-hidden rounded-xl">
                                <img src="{{asset('assets/eimage/crypgo (5).jpg')}}"
                                    alt="Accessories"
                                    class="object-cover w-full h-60">
                                <div
                                    class="absolute inset-0 flex flex-col justify-between p-4 bg-black/30">
                                    <h2
                                        class="text-xl font-semibold text-white">Accessories</h2>
                                    <a href="#"
                                        class="self-end text-sm text-white">Shop
                                        Now &gt;</a>
                                </div>
                            </div>
                            <!-- Image 2 -->
                            <div class="relative overflow-hidden rounded-xl">
                                <img src="{{asset('assets/eimage/image_2.jpg')}}"
                                    alt="Accessories"
                                    class="object-cover w-full h-60">
                                <div
                                    class="absolute inset-0 flex flex-col justify-between p-4 bg-black/30">
                                    <h2
                                        class="text-xl font-semibold text-white">Accessories</h2>
                                    <a href="#"
                                        class="self-end text-sm text-white">Shop
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
                                    class="object-cover w-full h-full transition-transform duration-300 hover:scale-105" />
                                <div
                                    class="absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none bg-gradient-to-t from-orange-500/60 via-transparent to-transparent hover:opacity-100"></div>
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
                                    class="object-cover w-full h-full transition-transform duration-300 hover:scale-105" />
                                <div
                                    class="absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none bg-gradient-to-t from-orange-500/60 via-transparent to-transparent hover:opacity-100"></div>
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
                            class="px-6 py-2 font-medium text-white transition bg-orange-500 rounded-md hover:bg-orange-600">View
                            All</a>
                    </div>
                </div>
            </section>

            <!-----online shop section-->
            <section class="relative py-20 bg-center bg-no-repeat bg-cover"
                style="background-image: url('assets/eimage/crypgo (20).jpg');">
                <div class="absolute inset-0 bg-black/60"></div>
                <div
                    class="relative z-10 max-w-2xl px-4 mx-auto text-center text-white">
                    <p class="mb-6 text-lg opacity-80">Lorem ipsum dolor sit
                        ammet</p>
                    <h2 class="mb-4 text-3xl font-bold md:text-5xl">Online Shop
                        Up To <span class="text-orange-400">50% Off</span>
                        Design</h2>

                </div>
            </section>

            <section>
                <div class="max-w-[1140px] mx-auto px-4 py-8">
                    <div class="mb-8 text-center">
                        <h1 class="text-2xl font-bold">Our Latest News</h1>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <!-- News Item 1 -->
                        <div
                            class="overflow-hidden bg-white rounded-lg shadow-md">
                            <a href="#"><img src="{{asset('assets/eimage/image_2.jpg')}}"
                                    alt="News 1"
                                    class="object-cover w-full h-60" /></a>
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
                            class="overflow-hidden bg-white rounded-lg shadow-md">
                            <a href="#"><img src="{{asset('assets/eimage/crypgo (6).jpg')}}"
                                    alt="News 2"
                                    class="object-cover w-full h-60" /></a>
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
                            class="overflow-hidden bg-white rounded-lg shadow-md">
                            <a href="#"><img src="{{asset('assets/eimage/crypgo (5).jpg')}}"
                                    alt="News 3"
                                    class="object-cover w-full h-60" /></a>
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
                        class="grid grid-cols-1 gap-0 p-6 bg-gray-200 rounded-lg md:grid-cols-3">
                        <!-- Card 1 -->
                        <div
                            class="flex flex-col items-center justify-center px-4 text-center">
                            <div class="flex items-center justify-center mb-4">
                                <img src="{{asset('assets/eimage/crypgo (03).svg')}}"
                                    alt="Image 1"
                                    class="object-contain w-24 h-24 rounded-lg" />
                            </div>
                            <h1 class="mb-1 text-lg font-semibold">100% Secure
                                Payments</h1>
                            <p>We offer competitive prices on<br> our 100
                                million plus product range.</p>
                        </div>
                        <!-- Card 2 -->
                        <div
                            class="flex flex-col items-center justify-center px-4 text-center">
                            <div class="flex items-center justify-center mb-4">
                                <img src="{{asset('assets/eimage/crypgo (02).svg')}}"
                                    alt="Image 2"
                                    class="object-contain w-24 h-24 rounded-lg" />
                            </div>
                            <h1 class="mb-1 text-lg font-semibold">World Wide
                                Delivery</h1>
                            <p>We offer competitive prices on<br> our 100
                                million plus product range.</p>
                        </div>
                        <!-- Card 3 -->
                        <div
                            class="flex flex-col items-center justify-center px-4 text-center">
                            <div class="flex items-center justify-center mb-4">
                                <img src="{{asset('assets/eimage/crypgo (01).svg')}}"
                                    alt="Image 3"
                                    class="object-contain w-24 h-24 rounded-lg" />
                            </div>
                            <h1 class="mb-1 text-lg font-semibold">24/7 Help
                                Center</h1>
                            <p>We offer competitive prices on<br> our 100
                                million plus product range.</p>
                        </div>
                    </div>
                </div>
            </section>

        </main>

    @endsection