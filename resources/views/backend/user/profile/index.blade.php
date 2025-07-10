@extends('backend.user.layouts.master')

@section('content')
<section class="container max-w-2xl mx-auto mt-10 bg-white rounded-xl shadow-md p-8">
        <div class="flex items-center space-x-6 mb-6">
                <img class="h-24 w-24 object-cover rounded-full border-4 border-indigo-500" src="https://ui-avatars.com/api/?name=User+Profile" alt="User Avatar">
                <div>
                        <h2 class="text-2xl font-bold text-gray-800">John Doe</h2>
                        <p class="text-gray-500">johndoe@example.com</p>
                </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                        <label class="block text-gray-700 font-semibold mb-2">Full Name</label>
                        <input type="text" value="John Doe" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" readonly>
                </div>
                <div>
                        <label class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" value="johndoe@example.com" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" readonly>
                </div>
                <div>
                        <label class="block text-gray-700 font-semibold mb-2">Phone</label>
                        <input type="text" value="+1 234 567 890" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" readonly>
                </div>
                <div>
                        <label class="block text-gray-700 font-semibold mb-2">Location</label>
                        <input type="text" value="New York, USA" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" readonly>
                </div>
        </div>
        <div class="mt-8 flex justify-end">
                <button class="bg-indigo-600 text-white px-6 py-2 rounded-lg shadow hover:bg-indigo-700 transition">Edit Profile</button>
        </div>
</section>
           
@endsection