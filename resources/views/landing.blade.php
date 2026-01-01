<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V-Coffee</title>
    <link rel="icon" href="{{ asset('../img/logo.png') }}" type="image/png">
    <meta name="description"
        content="Tempat terbaik menikmati kopi premium dengan suasana nyaman dan harga bersahabat.">
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
                            450: '#d97706', // Custom amber
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
    <style>
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        .hero-text-shadow {
            text-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="font-sans text-gray-800 antialiased bg-coffee-50 selection:bg-coffee-500 selection:text-white">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-300 glass-nav py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <img src="{{ asset('../img/logo.png') }}" alt="V-Coffee Logo" class="w-10 h-10 object-contain">
                <span class="text-xl font-serif font-bold text-coffee-900 tracking-tight">V-Coffee</span>
            </div>

            <div class="hidden md:flex items-center gap-8">
                <a href="#home"
                    class="text-sm font-medium text-coffee-900 hover:text-coffee-600 transition-colors">Beranda</a>
                <a href="#about"
                    class="text-sm font-medium text-coffee-900 hover:text-coffee-600 transition-colors">Tentang Kami</a>
                <a href="#menu"
                    class="text-sm font-medium text-coffee-900 hover:text-coffee-600 transition-colors">Menu</a>
                <a href="#gallery"
                    class="text-sm font-medium text-coffee-900 hover:text-coffee-600 transition-colors">Galeri</a>
                <a href="#location"
                    class="text-sm font-medium text-coffee-900 hover:text-coffee-600 transition-colors">Lokasi</a>
            </div>

            <div class="md:hidden">
                <!-- Mobile Menu Button (simplified) -->
                <button class="text-coffee-900 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <!-- Local generated hero image -->
            <img src="{{ asset('../img/hero-bg.png') }}" alt="V-Coffee Interior" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-coffee-900/90"></div>
        </div>

        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <span
                class="inline-block py-1 px-3 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-cream text-xs font-semibold tracking-wider mb-6 uppercase">Since
                2019 • The Real Taste</span>
            <h1 class="text-5xl md:text-7xl font-serif font-bold text-white mb-6 leading-tight hero-text-shadow">
                Rasakan Keaslian<br />
                <span class="text-amber-400">Kopi Robusta dan Arabika</span>
            </h1>
            <p class="text-gray-200 text-lg md:text-xl mb-10 max-w-2xl mx-auto font-light">
                Menghadirkan cita rasa kopi terbaik dari petani lokal dengan sentuhan modern. Tempat nyaman untuk
                inspirasi dan cerita.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#menu"
                    class="group px-8 py-3.5 rounded-full bg-gradient-to-r from-coffee-700 via-coffee-600 to-amber-600 text-white font-medium shadow-lg shadow-coffee-900/50 hover:shadow-amber-500/30 hover:scale-105 transition-all duration-300 flex items-center gap-2">
                    Lihat Menu
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
                <a href="#location"
                    class="px-8 py-3.5 rounded-full border border-white/30 text-white font-medium hover:bg-white/10 hover:border-white/60 transition-all duration-300 backdrop-blur-sm">
                    Kunjungi Kami
                </a>
            </div>

            <!-- Badges -->
            <div class="mt-12 flex flex-wrap justify-center gap-4 text-white/80 text-sm font-medium">
                <div
                    class="flex items-center gap-2 backdrop-blur-sm bg-black/20 px-3 py-1.5 rounded-lg border border-white/10">
                    <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Kopi Premium
                </div>
                <div
                    class="flex items-center gap-2 backdrop-blur-sm bg-black/20 px-3 py-1.5 rounded-lg border border-white/10">
                    <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    Harga UMKM
                </div>
                <div
                    class="flex items-center gap-2 backdrop-blur-sm bg-black/20 px-3 py-1.5 rounded-lg border border-white/10">
                    <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Tanpa Ribet
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 md:py-28 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 md:gap-20 items-center">
                <div class="relative order-2 md:order-1">
                    <div
                        class="absolute -top-4 -left-4 w-24 h-24 bg-amber-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob">
                    </div>
                    <div
                        class="absolute -bottom-4 -right-4 w-24 h-24 bg-coffee-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000">
                    </div>
                    <img src="https://images.unsplash.com/photo-1517228704285-1d071850774a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                        alt="Barista Crafting"
                        class="relative rounded-2xl shadow-2xl rotate-2 hover:rotate-0 transition-all duration-500 w-full object-cover h-[500px]">
                </div>
                <div class="order-1 md:order-2">
                    <h2 class="text-coffee-600 font-bold tracking-widest uppercase text-sm mb-3">Cerita Kami</h2>
                    <h3 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 mb-6 leading-tight">Lebih Dari
                        Sekadar <br><span class="text-coffee-700 italic">Secangkir Kopi.</span></h3>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        Berawal dari kecintaan kami terhadap biji kopi lokal Indonesia, V-Coffee hadir untuk
                        menjembatani petani kopi terbaik dengan penikmat kopi sejati.
                    </p>
                    <p class="text-gray-600 mb-8 text-lg leading-relaxed">
                        Kami menyeduh setiap cangkir dengan hati, menggunakan teknik manual brew maupun mesin modern
                        untuk mengeluarkan karakter terbaik setiap biji kopi.
                    </p>
                    <a href="#gallery"
                        class="text-coffee-700 font-semibold border-b-2 border-coffee-400 hover:text-coffee-900 hover:border-coffee-800 transition-colors pb-1">Lihat
                        Galeri Kami &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-20 bg-coffee-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-coffee-600 font-bold tracking-widest uppercase text-sm mb-3">Menu Favorit</h2>
                <h3 class="text-4xl md:text-5xl font-serif font-bold text-gray-900">Pilihan Terbaik Kami</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="group bg-white rounded-2xl p-4 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="overflow-hidden rounded-xl h-64 mb-6 relative">
                        <img src="https://images.unsplash.com/photo-1517701604599-bb29b5c7fa53?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Kopi Susu Senja"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-coffee-800 shadow-sm">
                            Best Seller</div>
                    </div>
                    <div class="text-center px-4 pb-4">
                        <h4 class="text-2xl font-serif font-bold text-gray-900 mb-2">V-Coffee Signature</h4>
                        <p class="text-gray-500 mb-4 line-clamp-2">Perpaduan espresso robusta, susu segar creamy, dan
                            gula aren asli yang legit.</p>
                        <span class="text-xl font-bold text-coffee-700">Rp 18.000</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="group bg-white rounded-2xl p-4 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="overflow-hidden rounded-xl h-64 mb-6 relative">
                        <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="V60 Manual Brew"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="text-center px-4 pb-4">
                        <h4 class="text-2xl font-serif font-bold text-gray-900 mb-2">V60 Manual Brew</h4>
                        <p class="text-gray-500 mb-4 line-clamp-2">Pilihan beans seasonal (Gayo, Toraja, Bali) dengan
                            metode seduh tangan yang presisi.</p>
                        <span class="text-xl font-bold text-coffee-700">Rp 22.000</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="group bg-white rounded-2xl p-4 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="overflow-hidden rounded-xl h-64 mb-6 relative">
                        <img src="https://images.unsplash.com/photo-1555507036-ab1f40388085?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Butter Croissant"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="text-center px-4 pb-4">
                        <h4 class="text-2xl font-serif font-bold text-gray-900 mb-2">Butter Croissant</h4>
                        <p class="text-gray-500 mb-4 line-clamp-2">Pastry renyah berlapis dengan aroma butter yang
                            menggoda, teman ngopi sempurna.</p>
                        <span class="text-xl font-bold text-coffee-700">Rp 15.000</span>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="/menu"
                    class="inline-block px-8 py-3 rounded-full border-2 border-coffee-800 text-coffee-800 font-semibold hover:bg-coffee-800 hover:text-white transition-all duration-300">Lihat
                    Menu Lengkap</a>
            </div>
        </div>
    </section>

    <!-- Member Benefit Section -->
    <section class="py-20 relative overflow-hidden">
        <!-- Background with Gradient/Image -->
        <div class="absolute inset-0 bg-gradient-to-br from-coffee-900 via-coffee-800 to-black z-0"></div>
        <div
            class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/wood-pattern.png')] z-0">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-white">
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <!-- Left Content -->
                <div class="space-y-8">
                    <div>
                        <h2 class="text-amber-500 font-bold tracking-widest uppercase text-sm mb-3">V-Coffee Loyalty
                        </h2>
                        <h3 class="text-4xl md:text-5xl font-serif font-bold leading-tight">Gabung Member,<br />Banyak
                            Untungnya!</h3>
                    </div>
                    <p class="text-gray-300 text-lg leading-relaxed">
                        Jadilah bagian dari keluarga V-Coffee dan nikmati berbagai penawaran eksklusif khusus untuk
                        pelanggan setia kami.
                    </p>

                    <div class="space-y-4">
                        <!-- Benefit Item 1 -->
                        <div
                            class="flex items-start gap-4 p-4 rounded-xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors">
                            <div
                                class="w-12 h-12 rounded-full bg-amber-500/20 flex items-center justify-center flex-shrink-0 text-amber-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-1">Point Reward</h4>
                                <p class="text-gray-400 text-sm">Dapatkan 1 poin setiap transaksi Rp 10.000. Tukarkan
                                    dengan menu favoritmu.</p>
                            </div>
                        </div>

                        <!-- Benefit Item 2 -->
                        <div
                            class="flex items-start gap-4 p-4 rounded-xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors">
                            <div
                                class="w-12 h-12 rounded-full bg-amber-500/20 flex items-center justify-center flex-shrink-0 text-amber-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-1">Birthday Treat</h4>
                                <p class="text-gray-400 text-sm">Kopi gratis pilihanmu khusus di hari ulang tahunmu.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="#"
                            class="inline-block px-8 py-4 rounded-full bg-amber-500 text-coffee-900 font-bold hover:bg-amber-400 hover:scale-105 transition-all shadow-lg shadow-amber-500/20">
                            Daftar Member Sekarang
                        </a>
                    </div>
                </div>

                <!-- Right Visual -->
                <div class="relative hidden md:block group">
                    <div
                        class="absolute inset-0 bg-amber-500 rounded-2xl rotate-6 group-hover:rotate-3 transition-transform opacity-20 blur-lg">
                    </div>
                    <img src="{{ asset('img/member-card.png') }}" alt="Member Card Illustration"
                        class="relative rounded-2xl shadow-2xl border-4 border-white/10 w-full object-cover h-[500px] transform group-hover:scale-105 transition-transform duration-500">


                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section (Grid) -->
    <section id="gallery" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-12">Suasana di V-Coffee
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 auto-rows-[200px]">
                <div class="col-span-2 row-span-2 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Gallery 1"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="col-span-1 row-span-1 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Gallery 2"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="col-span-1 row-span-1 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Gallery 3"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="col-span-1 row-span-1 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1507133750069-b6d36a88ab02?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Gallery 4"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="col-span-1 row-span-1 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1521017432531-fbd92d768814?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Gallery 5"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- Location & Info Section -->
    <section id="location" class="py-20 bg-coffee-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Info -->
                <div class="space-y-8">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold">Mampir Yuk!</h2>
                    <p class="text-gray-300">Kami tunggu kedatanganmu untuk berbagi cerita dan kopi.</p>

                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-amber-500 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div>
                                <h4 class="font-bold text-lg">Alamat</h4>
                                <p class="text-gray-300">Jl. Kopi Kenangan No. 8, Jakarta Selatan</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-amber-500 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <h4 class="font-bold text-lg">Jam Buka</h4>
                                <ul class="text-gray-300 space-y-1">
                                    <li>Senin - Jumat: 08:00 - 22:00</li>
                                    <li>Sabtu - Minggu: 09:00 - 23:00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-amber-500 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <div>
                                <h4 class="font-bold text-lg">Kontak</h4>
                                <p class="text-gray-300">0899-9991-950</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Maps (Placeholder embed) -->
                <div class="h-80 w-full rounded-2xl overflow-hidden shadow-2xl border-4 border-white/10">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2991041920677!2d106.8000!3d-6.2250!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTMnMzAuMCJTIDEwNsKwNDgnMDAuMCJF!5e0!3m2!1sen!2sid!4v1600000000000!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-coffee-900 border-t border-white/5 py-8 text-center text-gray-400 text-sm">
        <p>&copy; 2026 Vanness Wangsaff. All rights reserved.</p>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/628999991950" target="_blank"
        class="fixed bottom-6 right-6 z-50 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg hover:shadow-green-500/50 hover:scale-110 transition-all duration-300">
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <path
                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
        </svg>
    </a>

</body>

</html>
