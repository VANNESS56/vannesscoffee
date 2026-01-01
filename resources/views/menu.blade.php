<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Lengkap - V-Coffee</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        coffee: {
                            50: '#fdf8f6',
                            100: '#f2e8e5',
                            200: '#eaddd7',
                            300: '#e0cec7',
                            400: '#d2bab0',
                            500: '#a77f72',
                            600: '#8a5a4c',
                            700: '#6d453b',
                            800: '#4b3832', // Espresso
                            900: '#342622',
                        },
                        cream: '#FFF4E6',
                        amber: {
                            450: '#d97706',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-coffee-50 font-sans antialiased text-gray-800">

    <!-- Navbar (Simplified) -->
    <nav class="bg-white/90 backdrop-blur-md border-b border-coffee-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2 group">
                <img src="{{ asset('img/logo.png') }}" alt="V-Coffee Logo"
                    class="w-10 h-10 object-contain group-hover:scale-110 transition-transform">
                <span class="text-xl font-serif font-bold text-coffee-900 tracking-tight">V-Coffee</span>
            </a>
            <a href="/" class="text-sm font-medium text-coffee-700 hover:text-coffee-900 flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali
            </a>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-coffee-800 py-16 text-center text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]">
        </div>
        <h1 class="text-4xl md:text-5xl font-serif font-bold relative z-10 mb-2">Daftar Menu Kami</h1>
        <p class="text-coffee-200 text-lg relative z-10">Temukan rasa favoritmu hari ini</p>
    </header>

    <!-- Menu Content -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-16">

        <!-- Section: Signatures -->
        <section>
            <div class="flex items-center gap-4 mb-8">
                <h2 class="text-3xl font-serif font-bold text-coffee-900">V-Coffee Signatures</h2>
                <div class="h-px bg-coffee-300 flex-1"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-x-8 gap-y-6">
                <!-- Item -->
                <div class="flex justify-between items-start group">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900 group-hover:text-coffee-600 transition-colors">V-Kopi
                            Susu Gula Aren</h3>
                        <p class="text-sm text-gray-500">Espresso 2 shot + Fresh Milk + Gula Aren Organik.</p>
                    </div>
                    <span class="font-semibold text-coffee-700">18k</span>
                </div>
                <!-- Item -->
                <div class="flex justify-between items-start group">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900 group-hover:text-coffee-600 transition-colors">Salted
                            Caramel Latte</h3>
                        <p class="text-sm text-gray-500">Creamy latte dengan saus karamel gurih buatan sendiri.</p>
                    </div>
                    <span class="font-semibold text-coffee-700">25k</span>
                </div>
                <!-- Item -->
                <div class="flex justify-between items-start group">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900 group-hover:text-coffee-600 transition-colors">Pandan
                            Coffee Latte</h3>
                        <p class="text-sm text-gray-500">Aroma pandan asli berpadu dengan kopi susu lembut.</p>
                    </div>
                    <span class="font-semibold text-coffee-700">23k</span>
                </div>
                <!-- Item -->
                <div class="flex justify-between items-start group">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900 group-hover:text-coffee-600 transition-colors">
                            V-Black Citrus</h3>
                        <p class="text-sm text-gray-500">Americano dingin nan segar dengan sentuhan lemon zest.</p>
                    </div>
                    <span class="font-semibold text-coffee-700">22k</span>
                </div>
            </div>
        </section>

        <!-- Section: Espresso Based -->
        <section>
            <div class="flex items-center gap-4 mb-8">
                <h2 class="text-3xl font-serif font-bold text-coffee-900">Espresso Based</h2>
                <div class="h-px bg-coffee-300 flex-1"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-x-8 gap-y-6">
                <!-- Item -->
                <div class="flex justify-between items-end border-b border-dashed border-coffee-200 pb-2">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900">Espresso (Single/Double)</h3>
                    </div>
                    <span class="font-semibold text-coffee-700">10k / 15k</span>
                </div>
                <!-- Item -->
                <div class="flex justify-between items-end border-b border-dashed border-coffee-200 pb-2">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900">Americano / Long Black</h3>
                    </div>
                    <span class="font-semibold text-coffee-700">18k</span>
                </div>
                <!-- Item -->
                <div class="flex justify-between items-end border-b border-dashed border-coffee-200 pb-2">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900">Cappuccino</h3>
                    </div>
                    <span class="font-semibold text-coffee-700">22k</span>
                </div>
                <!-- Item -->
                <div class="flex justify-between items-end border-b border-dashed border-coffee-200 pb-2">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900">Café Latte</h3>
                    </div>
                    <span class="font-semibold text-coffee-700">22k</span>
                </div>
                <!-- Item -->
                <div class="flex justify-between items-end border-b border-dashed border-coffee-200 pb-2">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900">Mochaccino</h3>
                    </div>
                    <span class="font-semibold text-coffee-700">25k</span>
                </div>
                <!-- Item -->
                <div class="flex justify-between items-end border-b border-dashed border-coffee-200 pb-2">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900">Piccolo</h3>
                    </div>
                    <span class="font-semibold text-coffee-700">20k</span>
                </div>
            </div>
        </section>

        <!-- Section: Manual Brew -->
        <section>
            <div class="flex items-center gap-4 mb-8">
                <h2 class="text-3xl font-serif font-bold text-coffee-900">Manual Brew</h2>
                <div class="h-px bg-coffee-300 flex-1"></div>
            </div>
            <p class="text-gray-500 mb-6 italic">Tanyakan barista kami untuk pilihan beans seasonal minggu ini: Gayo,
                Bali, Toraja, atau Flores.</p>
            <div class="grid md:grid-cols-2 gap-x-8 gap-y-6">
                <!-- Item -->
                <div class="flex justify-between items-center bg-white p-4 rounded-lg shadow-sm">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900">V60 Pour Over</h3>
                        <p class="text-xs text-gray-500">Clean, bright acidity, tea-like body.</p>
                    </div>
                    <span class="font-semibold text-coffee-700">22k - 35k</span>
                </div>
                <!-- Item -->
                <div class="flex justify-between items-center bg-white p-4 rounded-lg shadow-sm">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900">Japanese Iced Coffee</h3>
                        <p class="text-xs text-gray-500">Segar, aromatik, diseduh langsung di atas es.</p>
                    </div>
                    <span class="font-semibold text-coffee-700">25k - 38k</span>
                </div>
                <!-- Item -->
                <div class="flex justify-between items-center bg-white p-4 rounded-lg shadow-sm">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900">Aeropress</h3>
                        <p class="text-xs text-gray-500">Full body, rich flavor.</p>
                    </div>
                    <span class="font-semibold text-coffee-700">22k - 35k</span>
                </div>
                <!-- Item -->
                <div class="flex justify-between items-center bg-white p-4 rounded-lg shadow-sm">
                    <div>
                        <h3 class="font-bold text-lg text-gray-900">Vietnam Drip</h3>
                        <p class="text-xs text-gray-500">Klasik, kuat, dengan susu kental manis.</p>
                    </div>
                    <span class="font-semibold text-coffee-700">18k</span>
                </div>
            </div>
        </section>

        <!-- Section: Non Coffee -->
        <section>
            <div class="flex items-center gap-4 mb-8">
                <h2 class="text-3xl font-serif font-bold text-coffee-900">Non-Coffee</h2>
                <div class="h-px bg-coffee-300 flex-1"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-x-8 gap-y-6">
                <div class="flex justify-between items-end border-b border-gray-200 pb-2">
                    <h3 class="font-bold text-lg text-gray-700">Signature Chocolate</h3>
                    <span class="font-semibold text-coffee-700">23k</span>
                </div>
                <div class="flex justify-between items-end border-b border-gray-200 pb-2">
                    <h3 class="font-bold text-lg text-gray-700">Greentea Matcha Latte</h3>
                    <span class="font-semibold text-coffee-700">24k</span>
                </div>
                <div class="flex justify-between items-end border-b border-gray-200 pb-2">
                    <h3 class="font-bold text-lg text-gray-700">Red Velvet Latte</h3>
                    <span class="font-semibold text-coffee-700">24k</span>
                </div>
                <div class="flex justify-between items-end border-b border-gray-200 pb-2">
                    <h3 class="font-bold text-lg text-gray-700">Lemon Tea / Lychee Tea</h3>
                    <span class="font-semibold text-coffee-700">18k</span>
                </div>
            </div>
        </section>

        <!-- Section: Snacks -->
        <section>
            <div class="flex items-center gap-4 mb-8">
                <h2 class="text-3xl font-serif font-bold text-coffee-900">Pastry & Light Bites</h2>
                <div class="h-px bg-coffee-300 flex-1"></div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <img src="https://images.unsplash.com/photo-1555507036-ab1f40388085?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                        alt="Croissant" class="w-full h-32 object-cover">
                    <div class="p-3">
                        <h4 class="font-bold text-gray-900">Butter Croissant</h4>
                        <p class="text-coffee-600 font-semibold text-sm">15k</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <img src="https://images.unsplash.com/photo-1607958996333-41aef7caefaa?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                        alt="Choco Croissant" class="w-full h-32 object-cover">
                    <div class="p-3">
                        <h4 class="font-bold text-gray-900">Choco Pain Au</h4>
                        <p class="text-coffee-600 font-semibold text-sm">18k</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <img src="https://images.unsplash.com/photo-1565538810643-b5bdb714032a?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                        alt="Fries" class="w-full h-32 object-cover">
                    <div class="p-3">
                        <h4 class="font-bold text-gray-900">French Fries</h4>
                        <p class="text-coffee-600 font-semibold text-sm">18k</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <img src="https://images.unsplash.com/photo-1621255755173-047b1e84adba?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                        alt="Platter" class="w-full h-32 object-cover">
                    <div class="p-3">
                        <h4 class="font-bold text-gray-900">Mix Platter</h4>
                        <p class="text-coffee-600 font-semibold text-sm">35k</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-coffee-900 py-6 text-center text-gray-400 text-sm border-t border-white/10">
        <p>Harga sudah termasuk pajak restoran 10%.</p>
        <p class="mt-2 text-xs opacity-60">© V-Coffee Menu 2024</p>
    </footer>

</body>

</html>