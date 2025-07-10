
 <!-- Top Support Bar -->
        <div class="bg-gray-400 text-gray-100">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:justify-between md:items-center py-2 px-4 text-sm gap-2 md:gap-0">
                <!-- Left: Support -->
                <span class="flex items-center justify-center md:justify-start">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 inline mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18"></svg>
                        <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                    </svg>
                    <span class="text-red-400 font-semibold">Support:</span>
                    <span class="ml-1">(021) 091 932 334</span>
                </span>
                <!-- Right: Links and Selects -->
                <div class="flex flex-wrap items-center justify-center md:justify-end gap-2">
                    <a href="#" class="hover:underline whitespace-nowrap">Store Location:</a>
                    <a href="#" class="hover:underline whitespace-nowrap">Track your order</a>
                    <div class="flex gap-2">
                        <!-- Country select -->
                        <div class="bg-white rounded px-2 py-1">
                            <select class="bg-white text-gray-500 border-none outline-none">
                                <option>USA ($)</option>
                                <option>Canada ($)</option>
                                <option>Australia ($)</option>
                                <option>Singapore ($)</option>
                            </select>
                        </div>
                        <!-- Language select -->
                        <div class="bg-white rounded px-2 py-1">
                            <select class="bg-white text-gray-500 border-none outline-none">
                                <option>English (US)</option>
                                <option>Français (FR)</option>
                                <option>Español (ES)</option>
                                <option>Deutsch (DE)</option>
                                <option>中文 (CN)</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----hader-->
        <header class=" bg-white shadow">
            <div
                class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <a href="{{route('fn.home')}}">
                        <span
                        class="text-2xl font-bold "><span
                            class="text-red-400">Shop</span>erce</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-4">
                    <ul class="flex space-x-4 items-center">
                        <li>
                            <a href="{{route('fn.home')}}"
                                class="px-4 py-2 rounded-lg text-gray-700 hover:bg-orange-100 hover:text-orange-600 font-semibold transition">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-4 py-2 rounded-lg text-gray-700 hover:bg-orange-100 hover:text-orange-600 font-semibold transition">
                                Category
                            </a>
                        </li>
                        <li>
                            <a href="{{route('fn.about')}}"
                                class="px-4 py-2 rounded-lg text-gray-700 hover:bg-orange-100 hover:text-orange-600 font-semibold transition">
                                About
                            </a>
                        </li>
                        <!-- Pages Dropdown -->
                        <li class="relative group">
                            <button
                                class="px-4 py-2 rounded-lg text-gray-700 hover:bg-orange-100 hover:text-orange-600 font-semibold transition flex items-center"
                                id="pages-dropdown-btn"
                                type="button"
                            >
                                Pages
                                <svg class="w-4 h-4 ml-1 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <!-- Dropdown Menu -->
                            <div class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-100 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition z-50">
                                <ul class="py-2">
                                    <li>
                                        <a href="{{route('fn.product')}}" class="block px-4 py-2 text-gray-700 hover:bg-orange-100 hover:text-orange-600">Product</a>
                                    </li>
                                    <li>
                                        <a href="./block.html" class="block px-4 py-2 text-gray-700 hover:bg-orange-100 hover:text-orange-600">Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="{{route('fn.contact')}}"
                                class="px-4 py-2 rounded-lg text-gray-700 hover:bg-orange-100 hover:text-orange-600 font-semibold transition">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>


                <!-- Search, Account, Cart -->
                <div class="flex items-center space-x-4">
                    <!-- Search Bar -->
                    <div class="relative hidden md:block">
                        <input type="text" placeholder="Search products..."
                            class="pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 bg-gray-100 text-sm">
                        <svg
                            class="w-5 h-5 text-gray-400 absolute left-3 top-2.5"
                            fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg>
                    </div>
                    <!-- Account Dropdown -->
                    <div class="relative group hidden md:inline">
                        <!-- Account Icon (triggers dropdown) -->
                        <button class="p-2 rounded-full hover:bg-blue-50 transition flex items-center" id="account-icon-btn">
                            <svg class="w-6 h-6 text-gray-600" fill="none"
                                stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <circle cx="12" cy="8" r="4" />
                                <path d="M4 20c0-4 4-7 8-7s8 3 8 7" />
                            </svg>
                            <svg class="w-4 h-4 ml-1 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <!-- Dropdown Menu -->
                        <div class="absolute right-0 mt-2 w-72 bg-white rounded-lg shadow-lg border border-gray-100 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition z-50">
                            <div class="flex">
                                <!-- Left: Icon & Options -->
                                <div class="w-1/3 flex flex-col items-center justify-center py-6 bg-gray-50 rounded-l-lg">
                                    <div class="bg-blue-100 p-3 rounded-full mb-2">
                                        <svg class="w-8 h-8 text-blue-500" fill="none"
                                            stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <circle cx="12" cy="8" r="4" />
                                            <path d="M4 20c0-4 4-7 8-7s8 3 8 7" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-semibold text-sm">Account</span>
                                    <div class="mt-4 flex flex-col gap-2">
                                        <button class="text-blue-600 hover:underline text-xs focus:outline-none" id="show-login">Sign In</button>
                                        <button class="text-blue-600 hover:underline text-xs focus:outline-none" id="show-register">Register</button>
                                    </div>
                                </div>
                                <!-- Right: Forms -->
                                <div class="w-2/3 p-4">
                                    <!-- Login Form -->
                                    <form id="login-form" class="space-y-3 flex flex-col">
                                        <h3 class="text-lg font-semibold mb-2 self-start">Sign In</h3>
                                        <div class="flex flex-col space-y-2">
                                            <label class="text-sm font-medium text-gray-700" for="login-email">Email</label>
                                            <input id="login-email" type="email" placeholder="Enter your email" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm" required>
                                        </div>
                                        <div class="flex flex-col space-y-2">
                                            <label class="text-sm font-medium text-gray-700" for="login-password">Password</label>
                                            <input id="login-password" type="password" placeholder="Enter your password" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm" required>
                                        </div>
                                        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition mt-2">Login</button>
                                        <div class="flex justify-between text-xs mt-2">
                                            <a href="#" class="text-blue-500 hover:underline">Forgot?</a>
                                            <button type="button" class="text-blue-500 hover:underline" id="to-register">Register</button>
                                        </div>
                                    </form>
                                    <!-- Register Form (hidden by default) -->
                                    <form id="register-form" class="space-y-3 hidden">
                                        <h3 class="text-lg font-semibold mb-2">Register</h3>
                                        <input type="text" placeholder="Full Name" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm" required>
                                        <input type="email" placeholder="Email" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm" required>
                                        <input type="password" placeholder="Password" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm" required>
                                            <input type="password" placeholder="ConfirmPassword" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm" required>
                                        <button type="submit" class="w-full bg-orange-500 text-white py-2 rounded hover:bg-orange-600 transition">Register</button>
                                        <div class="flex justify-between text-xs mt-2">
                                            <button type="button" class="text-blue-500 hover:underline" id="to-login">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <!-- Cart Icon -->
                    <a href="#" id="cart-button"
                        class="relative p-2 rounded-full hover:bg-blue-50 transition hidden md:inline">
                        <svg class="w-6 h-6 text-gray-600" fill="none"
                            stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <circle cx="9" cy="21" r="1" />
                            <circle cx="20" cy="21" r="1" />
                            <path
                                d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                        </svg>
                        <span
                            class="absolute top-1 right-1 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5">2</span>
                    </a>
                </div>

                   <!-- Header Top -->


  <!-- Right Icons (User + Cart) -->
  <div class="flex items-center space-x-4 relative md:hidden">
  <!-- User Icon -->
  <div id="user-icon" class="relative group cursor-pointer">
    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <circle cx="12" cy="8" r="4" />
      <path d="M4 20c0-4 4-7 8-7s8 3 8 7" />
    </svg>
    <!-- Hover Dropdown -->
    <div class="absolute right-0 mt-2 w-40 bg-white border rounded shadow-md hidden group-hover:block z-50">
      <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Login</a>
      <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Register</a>
    </div>
  </div>

  <!-- Cart Icon -->
  <div id="cart-icon" class="relative group cursor-pointer">
    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <circle cx="9" cy="21" r="1" />
      <circle cx="20" cy="21" r="1" />
      <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
    </svg>
    <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5">2</span>
    <!-- Hover Dropdown -->
    <div class="absolute right-0 mt-2 w-48 bg-white border rounded shadow-md hidden group-hover:block z-50">
      <div class="px-4 py-2 text-sm">You have 2 items</div>
      <a href="#" class="block px-4 py-2 text-sm text-center text-blue-600 hover:bg-gray-100">View Cart</a>
    </div>
  </div>
</div>
<div class="flex items-center justify-between px-4 py-2 bg-white shadow md:hidden">
  <!-- Menu Button -->
<!-- Mobile Menu Button (always visible on mobile, hidden on md and up) -->
<button id="mobile-menu-button" class="p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 md:hidden">
        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <!-- Desktop Nav (optional for larger screens) -->
      <nav class="hidden md:flex space-x-6">
        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">About</a>
        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
      </nav>
    </div>

    <!-- Mobile Menu Content -->
    <div id="mobile-menu" class="hidden md:hidden px-4 pb-4 space-y-4">
      <!-- Navigation Links -->
      <nav class="space-y-2">
        <a href="./index.html" class="block text-gray-700 hover:text-orange-600 font-medium">Home</a>
        <a href="#" class="block text-gray-700 hover:text-orange-600 font-medium">Category</a>
        <a href="./about.html" class="block text-gray-700 hover:text-orange-600 font-medium">About</a>
        <a href="./product.html" class="block text-gray-700 hover:text-orange-600 font-medium">Pages</a>
        <a href="./contact.html" class="block text-gray-700 hover:text-orange-600 font-medium">Contact</a>
      </nav>
    </div>

 

</div>
 </header>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('theme', {
            darkMode: localStorage.getItem('theme') === 'dark',
            toggleTheme() {
                this.darkMode = !this.darkMode;
                localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
                document.documentElement.classList.toggle('dark', this.darkMode);
            },
            current() {
                return this.darkMode ? 'dark' : 'light';
            }
        });

        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
        }
    });
</script>

<!-- Lucide Icon CDN -->
<script src="https://unpkg.com/lucide@latest"></script>

<!-- Fixed Dark Mode Toggle Button (Top Right) -->
<div class="fixed top-4 right-4 z-50" x-data>
    <button
        @click="$store.theme.toggleTheme()"
        class="p-2 rounded-full bg-white dark:bg-gray-800 shadow hover:bg-yellow-100 dark:hover:bg-yellow-900 transition"
        title="Toggle Theme"
    >
        <!-- Light mode icon -->
        <i data-lucide="sun"
           x-show="!$store.theme.darkMode"
           class="w-5 h-5 text-yellow-500"></i>

        <!-- Dark mode icon -->
        <i data-lucide="moon"
           x-show="$store.theme.darkMode"
           class="w-5 h-5 text-yellow-500"></i>
    </button>
</div>


<!-- Initialize Lucide Icons -->
<script>
    lucide.createIcons();
</script>