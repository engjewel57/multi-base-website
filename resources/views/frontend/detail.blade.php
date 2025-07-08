@extends('frontend.layouts.master')
@section('title', 'Contact Us')
@section('content')

   <section class="mb-40 max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-2 gap-10 items-start ">
    
    <!-- Image Slider -->
    <div class="space-y-4">
      <div class="w-full aspect-square overflow-hidden rounded-lg">
        <img id="mainImage" src="{{asset('assets/eimage/crypgo (14).jpg')}}" alt="Main Product" class="w-full h-300 object-cover">
      </div>
      <div class="flex gap-2">
        <img src="{{asset('assets/eimage/crypgo (15).jpg')}}" class="w-20 h-20 object-cover cursor-pointer rounded-lg border" onclick="document.getElementById('mainImage').src = this.src">
        <img src="{{asset('assets/eimage/crypgo (16).jpg')}}" class="w-20 h-20 object-cover cursor-pointer rounded-lg border" onclick="document.getElementById('mainImage').src = this.src">
        <img src="{{asset('assets/eimage/crypgo (17).jpg')}}" class="w-20 h-20 object-cover cursor-pointer rounded-lg border" onclick="document.getElementById('mainImage').src = this.src">
      </div>
    </div>

    <!-- Product Info -->
    <div>
      <h1 class="text-3xl font-bold mb-2">Stylish Modern Jacket</h1>
      <div class="flex items-center mb-4">
        <div class="flex text-yellow-400 text-lg mr-2">
          ★★★★☆
        </div>
        <span class="text-sm text-gray-500">(4.5 Rating)</span>
      </div>
      <p class="text-gray-700 mb-4">
        This modern jacket is designed to keep you warm and stylish. Made with high-quality materials for maximum comfort.
      </p>

      <!-- Availability -->
      <p class="mb-2 text-green-600 font-medium">In Stock</p>

      <!-- Color Options -->
      <div class="mb-4">
        <p class="font-semibold mb-2">Color:</p>
        <div class="flex gap-2">
          <input type="radio" name="color" id="color1" class="hidden color-option" checked>
          <label for="color1" class="w-6 h-6 bg-black rounded-full cursor-pointer border-2 border-white"></label>

          <input type="radio" name="color" id="color2" class="hidden color-option">
          <label for="color2" class="w-6 h-6 bg-red-500 rounded-full cursor-pointer border-2 border-white"></label>

          <input type="radio" name="color" id="color3" class="hidden color-option">
          <label for="color3" class="w-6 h-6 bg-blue-500 rounded-full cursor-pointer border-2 border-white"></label>
        </div>
      </div>

      <!-- Size Options -->
      <div class="mb-4">
        <p class="font-semibold mb-2">Size:</p>
        <div class="flex gap-3">
          <button class="border rounded px-3 py-1 hover:bg-gray-100">S</button>
          <button class="border rounded px-3 py-1 hover:bg-gray-100">M</button>
          <button class="border rounded px-3 py-1 hover:bg-gray-100">L</button>
          <button class="border rounded px-3 py-1 hover:bg-gray-100">XL</button>
        </div>
      </div>

      <!-- Quantity -->
      <div class="mb-4">
        <p class="font-semibold mb-2">Quantity:</p>
        <input type="number" value="1" min="1" class="w-20 border rounded px-3 py-2">
      </div>

      <!-- Price -->
      <div class="text-2xl font-bold text-orange-500 mb-6"><span class="text-gray-500">Price:</span>
        $49.99
      </div>

      <!-- Add to Cart Button -->
      <a href="{{route('fn.shipping.address')}}" class=" text-orange-400 px-6 py-3 rounded hover:bg-orange-200 border border-amber-500 transition font-medium">
        Add to Cart
      </a>
        <button class="bg-orange-500 text-white px-6 py-3 rounded hover:bg-orange-600 transition font-medium">
        Procced Chackout
      </button>
    </div>
  </section>

@endsection