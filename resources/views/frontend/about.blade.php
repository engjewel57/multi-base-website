@extends('frontend.layouts.master')

@section('title', 'About Us')

@section('content')

  <main class="">
            <!-- Section with background image and opacity overlay -->
            <section class="relative mb-10  overflow-hidden">
                <img src="{{asset('assets/eimage/crypgo (30).jpg')}}" alt="About Us Background" class="absolute inset-0 w-full h-full object-cover opacity-40">
                <div class="relative z-10 p-10 md:p-16 text-white items-center flex flex-col justify-center text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">About Us</h1>
                    <p class="text-lg md:text-xl font-medium drop-shadow-lg">Discover our story, mission, and values at Shoperce.</p>
                </div>
                <div class="absolute inset-0 bg-black opacity-40"></div>
            </section>

            <!-- About Us Content -->
             <section>

                <div class="max-w-7xl mx-auto px-4 py-10 mb-40">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-15">
                        <div class="relative space-y-6 flex items-center justify-center">
                            <img src="{{asset('assets/eimage/crypgo (4).jpg')}}" alt="About Us Image" class="w-full h-auto rounded-lg shadow-lg">
                            <!-- Play Button Overlay -->
                            <button class="absolute inset-0 flex items-center justify-center focus:outline-none group">
                                <span class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-white/80 shadow-lg group-hover:bg-white transition">
                                    <svg class="w-10 h-10 text-red-500 group-hover:text-red-600" fill="currentColor" viewBox="0 0 48 48">
                                        <circle cx="24" cy="24" r="23" fill="none"/>
                                        <polygon points="20,16 34,24 20,32" fill="currentColor"/>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="space-y-6">
                            <h2 class="text-3xl font-bold text-gray-800">About Shoperce</h2>
                            <p class="text-gray-600">Eveniet voluptatibus voluptates suscipit minima,<br> cum voluptatum ut dolor, sed facere corporis qui,<br> ea quisquam quis odit minus nulla vitae. Sit, voluptatem.</p>
                            <p class="text-gray-600">Ipsum harum assumenda in eum vel eveniet numquam, cumque vero vitae<br> enim cupiditate deserunt eligendi officia modi consectetur.<br> Expedita tempora quos nobis earum hic ex asperiores quisquam optio nostrum sit!</p>
                        </div>
                    </div>
                    <!-- New content below the image/content section -->
                    <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Card 1 -->
                        <div class="bg-white rounded-lg shadow-lg p-8 flex flex-col items-center text-center hover:shadow-2xl transition">
                            <div class="bg-orange-100 rounded-full p-4 mb-4">
                                <svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M12 8v4l3 3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="12" cy="12" r="10" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Our Mission</h3>
                            <p class="text-gray-600">To deliver quality products and exceptional service that brings value to our customers every day.</p>
                        </div>
                        <!-- Card 2 -->
                        <div class="bg-white rounded-lg shadow-lg p-8 flex flex-col items-center text-center hover:shadow-2xl transition">
                            <div class="bg-blue-100 rounded-full p-4 mb-4">
                                <svg class="w-10 h-10 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="9" cy="7" r="4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Our Team</h3>
                            <p class="text-gray-600">A passionate group of professionals dedicated to making your shopping experience seamless and enjoyable.</p>
                        </div>
                        <!-- Card 3 -->
                        <div class="bg-white rounded-lg shadow-lg p-8 flex flex-col items-center text-center hover:shadow-2xl transition">
                            <div class="bg-green-100 rounded-full p-4 mb-4">
                                <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="12" cy="12" r="10" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Our Values</h3>
                            <p class="text-gray-600">Integrity, innovation, and customer satisfaction are at the heart of everything we do.</p>
                        </div>
                    </div>
                </div></svg></div></svg></div></svg></div>
             </section>

             
        </main>
   @endsection