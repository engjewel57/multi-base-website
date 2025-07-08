@extends('frontend.layouts.master')

@section('title', 'Contact Us')

@section('content')

               <main>
            <!-----hero section contact----->
           <section class="relative mb-10  overflow-hidden">
                <img src="{{asset('assets/eimage/crypgo (30).jpg')}}" alt="About Us Background" class="absolute inset-0 w-full h-full object-cover opacity-40">
                <div class="relative z-10 p-10 md:p-16 text-white items-center flex flex-col justify-center text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Get in Touch</h1>
                </div>
                <div class="absolute inset-0 bg-black opacity-40"></div>
            </section>

            <!----contact form section----->
        <section class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-2 mb-40 bg-white rounded-xl ">
            <!-- Left Side: Contact Info -->
            <div class="flex flex-col justify-center space-y-6 mb-20
                md:mb-0 p-8  ">
                <!-- Location -->
                <div class="flex items-start space-x-4">
                    <div class=" p-3 rounded-full">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21c-4.418 0-8-5.373-8-10A8 8 0 1 1 20 11c0 4.627-3.582 10-8 10z"/>
                            <circle cx="12" cy="11" r="3" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg text-gray-800">Location</h3>
                        <p class="text-gray-500">123 Main Street, City, Country</p>
                    </div>
                </div>
                <!-- Phone -->
                <div class="flex items-start space-x-4">
                    <div class="bg-green-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 0 1 2-2h2.28a2 2 0 0 1 1.94 1.515l.518 2.073a2 2 0 0 1-.45 1.947l-1.1 1.1a16.001 16.001 0 0 0 6.364 6.364l1.1-1.1a2 2 0 0 1 1.947-.45l2.073.518A2 2 0 0 1 21 16.72V19a2 2 0 0 1-2 2h-.01C7.61 21 3 16.39 3 10.01V10a2 2 0 0 1 2-2z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg text-gray-800">Phone</h3>
                        <p class="text-gray-500">+123 456 7890</p>
                    </div>
                </div>
                <!-- Email -->
                <div class="flex items-start space-x-4">
                    <div class="bg-red-100 p-3 rounded-full">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 12l-4-4-4 4m8 0v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-6"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg text-gray-800">Email</h3>
                        <p class="text-gray-500">info@example.com</p>
                    </div>
                </div>
            </div>
            <!-- Right Side: Contact Form -->
            <form class=" rounded-lg p-8  space-y-6" autocomplete="off">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-1" for="name">Name</label>
                        <input id="name" name="name" type="text" required class="w-full px-4 py-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none bg-white" placeholder="Your Name">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-1" for="email">Email</label>
                        <input id="email" name="email" type="email" required class="w-full px-4 py-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none bg-white" placeholder="you@email.com">
                    </div>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1" for="subject">Subject</label>
                    <input id="subject" name="subject" type="text" required class="w-full px-4 py-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none bg-white" placeholder="Subject">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1" for="message">Message</label>
                    <textarea id="message" name="message" rows="4" required class="w-full px-4 py-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none bg-white" placeholder="Type your message..."></textarea>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1" for="file">Attach File</label>
                    <input id="file" name="file" type="file" class="block w-full text-gray-600 border rounded bg-white file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded transition">Send Message</button>
            </form>
        </section>

        </main>
        @endsection