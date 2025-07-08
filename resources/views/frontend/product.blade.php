@extends('frontend.layouts.master')
@section('title', 'Product Page')
@section('content')

<main class="">
         <section>
            <div class="flex flex-col lg:flex-row gap-8 p-4 max-w-[1400px] mx-auto mb-40">
  <!-- Sidebar -->
  <aside class=" fiex w-full lg:w-1/4  p-4 border rounded border-gray-200">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-lg font-semibold">Search Filter</h2>
      <button class="text-sm text-red-500 hover:underline">Clear All</button>
    </div>

    <!-- Category -->
    <div class="mb-4">
      <h3 class="text-sm font-semibold mb-2">Category</h3>
      <ul class="space-y-1">
        <li><button class="flex justify-between w-full text-left">Mens <span class="text-xs bg-orange-100 text-orange-600 px-2 rounded-full">90</span></button></li>
        <li><button class="flex justify-between w-full text-left">Womens <span class="text-xs bg-orange-100 text-orange-600 px-2 rounded-full">128</span></button></li>
        <li><button class="flex justify-between w-full text-left">Kids <span class="text-xs bg-orange-100 text-orange-600 px-2 rounded-full">56</span></button></li>
        <li><button class="flex justify-between w-full text-left">Divided <span class="text-xs bg-orange-100 text-orange-600 px-2 rounded-full">73</span></button></li>
        <li><button class="flex justify-between w-full text-left">Moslem <span class="text-xs bg-orange-100 text-orange-600 px-2 rounded-full">230</span></button></li>
        <li><button class="flex justify-between w-full text-left">Accessories <span class="text-xs bg-orange-100 text-orange-600 px-2 rounded-full">165</span></button></li>
      </ul>
    </div>

    <!-- Brand -->
    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Brand</label>
      <select class="w-full border rounded px-3 py-2">
        <option>Choose a brand</option>
      </select>
    </div>

    <!-- Size -->
    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Size</label>
      <div class="flex flex-wrap gap-2">
        <button class="px-3 py-1 border rounded hover:bg-orange-100">XS</button>
        <button class="px-3 py-1 border rounded hover:bg-orange-100">S</button>
        <button class="px-3 py-1 border rounded hover:bg-orange-100">M</button>
        <button class="px-3 py-1 border rounded hover:bg-orange-100">L</button>
        <button class="px-3 py-1 border rounded hover:bg-orange-100">XL</button>
      </div>
    </div>

    <!-- Color -->
    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Color</label>
      <div class="flex gap-2">
        <span class="w-5 h-5 rounded-full bg-red-500 border"></span>
        <span class="w-5 h-5 rounded-full bg-yellow-500 border"></span>
        <span class="w-5 h-5 rounded-full bg-green-500 border"></span>
        <span class="w-5 h-5 rounded-full bg-blue-500 border"></span>
        <span class="w-5 h-5 rounded-full bg-black border"></span>
      </div>
    </div>

    <!-- Price Range -->
    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Price Range</label>
      <div class="flex gap-2 mb-2">
        <input type="number" placeholder="Min" class="w-1/2 border px-2 py-1 rounded">
        <input type="number" placeholder="Max" class="w-1/2 border px-2 py-1 rounded">
      </div>
      <button class="w-full bg-orange-500 text-white py-2 rounded hover:bg-orange-600">Update Filter</button>
    </div>
  </aside>

  <!-- Product Grid -->
  <main class="w-full lg:w-3/4">
    <div class="flex justify-between items-center mb-4">
      <p class="text-sm text-gray-500">Showing 12 out of 1432 items</p>
      <select class="border rounded px-3 py-2 text-sm">
        <option>Sort By</option>
      </select>
    </div>

    <!-- Product Grid with 3 items per page and pagination -->
    <div id="product-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
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
                    class="absolute bottom-2 right-2 flex gap-2 group-hover:opacity-100 opacity-0 transition text-xs">
                    <a href="{{route('fn.detail')}}"
                        class="bg-orange-500 text-white px-2 py-1 rounded shadow hover:bg-orange-600 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none"
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
                        class="bg-blue-600 text-white px-2 py-1 rounded shadow hover:bg-blue-700 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3" />
                            <path d="M2.05 12C3.81 7.61 7.92 4.5 12 4.5C16.08 4.5 20.19 7.61 21.95 12C20.19 16.39 16.08 19.5 12 19.5C7.92 19.5 3.81 16.39 2.05 12Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
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
        <!-- Product Card 2 -->
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
                    class="absolute bottom-2 right-2 flex gap-2 group-hover:opacity-100 opacity-0 transition text-xs">
                    <a href="./detail.html"
                        class="bg-orange-500 text-white px-2 py-1 rounded shadow hover:bg-orange-600 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none"
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
                        class="bg-blue-600 text-white px-2 py-1 rounded shadow hover:bg-blue-700 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3" />
                            <path d="M2.05 12C3.81 7.61 7.92 4.5 12 4.5C16.08 4.5 20.19 7.61 21.95 12C20.19 16.39 16.08 19.5 12 19.5C7.92 19.5 3.81 16.39 2.05 12Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
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
        <!-- Product Card 3 -->
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
                    class="absolute bottom-2 right-2 flex gap-2 group-hover:opacity-100 opacity-0 transition text-xs">
                    <a href="./detail.html"
                        class="bg-orange-500 text-white px-2 py-1 rounded shadow hover:bg-orange-600 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none"
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
                        class="bg-blue-600 text-white px-2 py-1 rounded shadow hover:bg-blue-700 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3" />
                            <path d="M2.05 12C3.81 7.61 7.92 4.5 12 4.5C16.08 4.5 20.19 7.61 21.95 12C20.19 16.39 16.08 19.5 12 19.5C7.92 19.5 3.81 16.39 2.05 12Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
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
                <img src="{{asset('assets/eimage/crypgo (9).jpg')}}"
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
                    class="absolute bottom-2 right-2 flex gap-2 group-hover:opacity-100 opacity-0 transition text-xs">
                    <a href="./detail.html"
                        class="bg-orange-500 text-white px-2 py-1 rounded shadow hover:bg-orange-600 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none"
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
                        class="bg-blue-600 text-white px-2 py-1 rounded shadow hover:bg-blue-700 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3" />
                            <path d="M2.05 12C3.81 7.61 7.92 4.5 12 4.5C16.08 4.5 20.19 7.61 21.95 12C20.19 16.39 16.08 19.5 12 19.5C7.92 19.5 3.81 16.39 2.05 12Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
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
                <img src="{{asset('assets/eimage/crypgo (8).jpg')}}"
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
                    class="absolute bottom-2 right-2 flex gap-2 group-hover:opacity-100 opacity-0 transition text-xs">
                    <a href="./detail.html"
                        class="bg-orange-500 text-white px-2 py-1 rounded shadow hover:bg-orange-600 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none"
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
                        class="bg-blue-600 text-white px-2 py-1 rounded shadow hover:bg-blue-700 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3" />
                            <path d="M2.05 12C3.81 7.61 7.92 4.5 12 4.5C16.08 4.5 20.19 7.61 21.95 12C20.19 16.39 16.08 19.5 12 19.5C7.92 19.5 3.81 16.39 2.05 12Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
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
                <img src="{{asset('assets/eimage/crypgo (7).jpg')}}"
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
                    class="absolute bottom-2 right-2 flex gap-2 group-hover:opacity-100 opacity-0 transition text-xs">
                    <a href="./detail.html"
                        class="bg-orange-500 text-white px-2 py-1 rounded shadow hover:bg-orange-600 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none"
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
                        class="bg-blue-600 text-white px-2 py-1 rounded shadow hover:bg-blue-700 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3" />
                            <path d="M2.05 12C3.81 7.61 7.92 4.5 12 4.5C16.08 4.5 20.19 7.61 21.95 12C20.19 16.39 16.08 19.5 12 19.5C7.92 19.5 3.81 16.39 2.05 12Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
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
    </div>
    <!-- Pagination (bottom of product grid) -->
    <div class="flex justify-center mt-8">
        <nav class="inline-flex rounded-md shadow-sm" aria-label="Pagination">
            <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-orange-100 hover:text-orange-600">Previous</a>
            <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-gray-700 font-semibold hover:bg-orange-100 hover:text-orange-600">1</a>
            <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-orange-100 hover:text-orange-600">2</a>
            <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-orange-100 hover:text-orange-600">3</a>
            <span class="px-3 py-2 border-t border-b border-gray-300 bg-white text-gray-400">...</span>
            <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-orange-100 hover:text-orange-600">10</a>
            <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-orange-100 hover:text-orange-600">Next</a>
        </nav>
    </div>
  </main>
</div>

         </section>
        </main>

@endsection