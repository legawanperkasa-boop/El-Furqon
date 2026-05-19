<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Depot Air Minum El-Furqon - Sleman, Yogyakarta</title>
    <meta name="description" content="Depot Air Minum El-Furqon menyediakan layanan isi ulang air galon higienis, steril, dan cepat antar untuk wilayah Jetis, Tirtoadi, Mlati, Sleman.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Tailwind CSS (Vite compiled) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .heading-font {
            font-family: 'Outfit', sans-serif;
        }
        
        /* Custom animations & effects */
        .glass-nav {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }
        .dark .glass-nav {
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.45);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.05);
        }

        .blue-gradient-bg {
            background: radial-gradient(circle at 10% 20%, rgba(224, 242, 254, 0.6) 0%, rgba(254, 254, 254, 1) 90%);
        }

        /* Waves Animation */
        .waves {
            position: relative;
            width: 100%;
            height: 12vh;
            margin-bottom: -7px; /* Fix for safari gap */
            min-height: 80px;
            max-height: 150px;
        }

        .parallax > use {
            animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
        }
        .parallax > use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }
        .parallax > use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }
        .parallax > use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }
        .parallax > use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }

        @keyframes move-forever {
            0% {
                transform: translate3d(-90px,0,0);
            }
            100% { 
                transform: translate3d(85px,0,0);
            }
        }

        /* Bubbles */
        .bubble {
            position: absolute;
            bottom: -20px;
            background-color: rgba(56, 189, 248, 0.2);
            border-radius: 50%;
            animation: float-bubble 12s infinite ease-in-out;
        }

        @keyframes float-bubble {
            0% {
                transform: translateY(0) scale(1) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 0.8;
            }
            90% {
                opacity: 0.4;
            }
            100% {
                transform: translateY(-80vh) scale(1.5) translateX(30px);
                opacity: 0;
            }
        }

        /* Glowing button */
        .btn-glow {
            box-shadow: 0 0 15px rgba(37, 99, 235, 0.4);
            transition: all 0.3s ease;
        }
        .btn-glow:hover {
            box-shadow: 0 0 25px rgba(37, 99, 235, 0.7);
            transform: translateY(-2px);
        }

        /* Custom Icon Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        @keyframes wiggle {
            0%, 100% { transform: rotate(0deg); }
            15% { transform: rotate(-15deg); }
            30% { transform: rotate(12deg); }
            45% { transform: rotate(-10deg); }
            60% { transform: rotate(8deg); }
            75% { transform: rotate(-4deg); }
        }
        @keyframes pulse-glow {
            0%, 100% { transform: scale(1); filter: drop-shadow(0 0 2px rgba(37, 99, 235, 0.4)); }
            50% { transform: scale(1.08); filter: drop-shadow(0 0 8px rgba(37, 99, 235, 0.7)); }
        }
        @keyframes spin-slow {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        @keyframes truck-drive {
            0%, 100% { transform: translateX(0); }
            50% { transform: translateX(4px); }
        }

        .icon-float {
            animation: float 3s ease-in-out infinite;
        }
        .icon-wiggle {
            animation: wiggle 2s ease-in-out infinite;
        }
        .icon-glow {
            animation: pulse-glow 2.5s ease-in-out infinite;
        }
        .icon-spin-slow {
            animation: spin-slow 8s linear infinite;
        }
        .icon-truck {
            animation: truck-drive 1.5s ease-in-out infinite;
        }

        /* Hover animations triggered by parent hover */
        .group:hover .group-hover-wiggle {
            animation: wiggle 1s ease-in-out;
        }
        .group:hover .group-hover-float {
            animation: float 1.5s ease-in-out infinite;
        }
        .group:hover .group-hover-spin {
            animation: spin-slow 2s linear infinite;
        }
        .group:hover .group-hover-glow {
            animation: pulse-glow 1s ease-in-out infinite;
        }
        .group:hover .group-hover-truck {
            animation: truck-drive 0.8s ease-in-out infinite;
        }

        .hover-wiggle:hover {
            animation: wiggle 1s ease-in-out;
        }
    </style>
</head>
<body class="blue-gradient-bg text-slate-800 antialiased min-h-screen relative overflow-x-hidden">

    <!-- Background Bubble Elements (Interactive Micro-animation) -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
        <div class="bubble" style="width: 40px; height: 40px; left: 10%; animation-delay: 0s; animation-duration: 15s;"></div>
        <div class="bubble" style="width: 20px; height: 20px; left: 25%; animation-delay: 2s; animation-duration: 12s;"></div>
        <div class="bubble" style="width: 50px; height: 50px; left: 40%; animation-delay: 4s; animation-duration: 18s;"></div>
        <div class="bubble" style="width: 30px; height: 30px; left: 60%; animation-delay: 1s; animation-duration: 14s;"></div>
        <div class="bubble" style="width: 60px; height: 60px; left: 75%; animation-delay: 6s; animation-duration: 20s;"></div>
        <div class="bubble" style="width: 25px; height: 25px; left: 90%; animation-delay: 3s; animation-duration: 10s;"></div>
    </div>

    <!-- HEADER / NAVIGATION -->
    <header class="fixed top-0 left-0 w-full z-50 transition-all duration-300 glass-nav shadow-sm" id="mainHeader">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                <!-- Logo -->
                <div class="flex items-center gap-2">
                    <div class="h-10 w-10 sm:h-12 sm:w-12 rounded-xl overflow-hidden shadow-md shadow-blue-500/30 transform hover:rotate-12 transition-transform duration-300">
                        <img src="/images/elfurqon_logo_blue.png" alt="Logo El-Furqon" class="w-full h-full object-cover icon-glow">
                    </div>
                    <div>
                        <span class="heading-font text-xl sm:text-2xl font-extrabold tracking-tight bg-gradient-to-r from-blue-700 to-cyan-500 bg-clip-text text-transparent">EL-FURQON</span>
                        <span class="block text-[10px] sm:text-xs font-semibold text-blue-500 tracking-wider -mt-1 uppercase">Depot Air Minum</span>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex items-center gap-8 font-medium text-slate-600">
                    <a href="#home" class="hover:text-blue-600 transition-colors duration-200">Beranda</a>
                    <a href="#about" class="hover:text-blue-600 transition-colors duration-200">Tentang Kami</a>
                    <a href="#services" class="hover:text-blue-600 transition-colors duration-200">Layanan</a>
                    <a href="#calculator" class="hover:text-blue-600 transition-colors duration-200">Kalkulator Order</a>
                    <a href="#location" class="hover:text-blue-600 transition-colors duration-200">Lokasi</a>
                    <a href="#faq" class="hover:text-blue-600 transition-colors duration-200">FAQ</a>
                </nav>

                <!-- CTA Button -->
                <div class="hidden sm:flex items-center gap-4">
                    <a href="https://wa.me/6282280718889" target="_blank" class="btn-glow group px-5 py-2.5 rounded-full bg-blue-600 text-white font-semibold text-sm flex items-center gap-2">
                        <i data-lucide="phone-call" class="h-4 w-4 group-hover-wiggle"></i>
                        <span>Hubungi Kami</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden p-2 rounded-lg hover:bg-slate-100/50 transition-colors" id="mobileMenuBtn" aria-label="Menu Utama">
                    <i data-lucide="menu" class="h-6 w-6 text-slate-700" id="menuIcon"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="hidden md:hidden absolute top-16 sm:top-20 left-0 w-full bg-white/95 backdrop-blur-lg border-b border-slate-100 shadow-xl transition-all duration-300" id="mobileMenu">
            <div class="px-4 pt-3 pb-6 space-y-3 font-semibold text-slate-700">
                <a href="#home" class="block py-2.5 px-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-all">Beranda</a>
                <a href="#about" class="block py-2.5 px-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-all">Tentang Kami</a>
                <a href="#services" class="block py-2.5 px-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-all">Layanan</a>
                <a href="#calculator" class="block py-2.5 px-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-all">Kalkulator Order</a>
                <a href="#location" class="block py-2.5 px-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-all">Lokasi</a>
                <a href="#faq" class="block py-2.5 px-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-all">FAQ</a>
                <div class="pt-2">
                    <a href="https://wa.me/6282280718889" target="_blank" class="w-full py-3 px-4 rounded-xl bg-blue-600 text-white font-bold text-center flex items-center justify-center gap-2 shadow-lg shadow-blue-500/20 group">
                        <i data-lucide="message-square" class="h-5 w-5 group-hover-wiggle"></i>
                        <span>Order via WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="home" class="pt-24 sm:pt-32 lg:pt-40 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Text Content -->
                <div class="lg:col-span-7 space-y-6 sm:space-y-8 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 border border-blue-200/50 text-blue-600 text-xs sm:text-sm font-semibold tracking-wide shadow-sm animate-bounce">
                        <span class="flex h-2 w-2 rounded-full bg-blue-500 animate-ping"></span>
                        <span>Depot Air Minum Sleman Terpercaya</span>
                    </div>
                    
                    <h1 class="heading-font text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight">
                        Air Mineral Higienis, <br>
                        <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">Segar & Cepat Antar</span> <br>
                        Untuk Keluarga Anda
                    </h1>
                    
                    <p class="text-base sm:text-lg text-slate-600 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                        Nikmati kesegaran air mineral berkualitas tinggi dari <strong>El-Furqon</strong>. Diproses secara steril menggunakan sistem filtrasi ultraviolet (UV) modern untuk menjamin kemurnian setiap tetesnya.
                    </p>

                    <!-- Features badging -->
                    <div class="grid grid-cols-3 gap-4 pt-2 max-w-md mx-auto lg:mx-0 text-left">
                        <div class="flex items-center gap-2 bg-white/50 backdrop-blur-sm p-2 rounded-lg border border-white/40">
                            <i data-lucide="shield-check" class="h-5 w-5 text-blue-500 shrink-0"></i>
                            <span class="text-xs sm:text-sm font-medium text-slate-700">100% Steril</span>
                        </div>
                        <div class="flex items-center gap-2 bg-white/50 backdrop-blur-sm p-2 rounded-lg border border-white/40">
                            <i data-lucide="truck" class="h-5 w-5 text-blue-500 shrink-0"></i>
                            <span class="text-xs sm:text-sm font-medium text-slate-700">Antar Cepat</span>
                        </div>
                        <div class="flex items-center gap-2 bg-white/50 backdrop-blur-sm p-2 rounded-lg border border-white/40">
                            <i data-lucide="badge-dollar-sign" class="h-5 w-5 text-blue-500 shrink-0"></i>
                            <span class="text-xs sm:text-sm font-medium text-slate-700">Hemat</span>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2">
                        <a href="#calculator" class="btn-glow px-8 py-4 rounded-full bg-blue-600 text-white font-bold text-base flex items-center justify-center gap-3 shadow-lg shadow-blue-500/20">
                            <span>Pesan Sekarang</span>
                            <i data-lucide="arrow-right" class="h-5 w-5"></i>
                        </a>
                        <a href="#location" class="px-8 py-4 rounded-full bg-white text-blue-600 font-bold text-base flex items-center justify-center gap-2 border border-slate-200 hover:bg-slate-50 transition-colors shadow-sm">
                            <i data-lucide="map-pin" class="h-5 w-5"></i>
                            <span>Cek Lokasi Depot</span>
                        </a>
                    </div>
                </div>

                <!-- Right Visual Content -->
                <div class="lg:col-span-5 relative flex justify-center items-center">
                    <!-- Geometric decoration background -->
                    <div class="absolute -top-10 -left-10 w-48 h-48 sm:w-72 sm:h-72 bg-gradient-to-tr from-blue-300 to-cyan-200 rounded-full blur-3xl opacity-40 z-0"></div>
                    <div class="absolute -bottom-10 -right-10 w-48 h-48 sm:w-72 sm:h-72 bg-blue-400/30 rounded-full blur-3xl opacity-30 z-0"></div>

                    <!-- Main Image frame -->
                    <div class="relative z-10 glass-card p-4 sm:p-6 rounded-3xl w-full max-w-md shadow-2xl hover:scale-[1.02] transition-transform duration-500">
                        <img src="{{ asset('images/water_gallon_premium.png') }}" alt="Galon Premium El-Furqon" class="rounded-2xl w-full h-auto object-cover aspect-[4/3] sm:aspect-square shadow-md">
                        
                        <!-- Floating Badge -->
                        <div class="absolute -bottom-4 -left-4 sm:-left-6 bg-white/90 backdrop-blur-md p-3 sm:p-4 rounded-2xl border border-white/50 shadow-xl flex items-center gap-3">
                            <div class="h-10 w-10 rounded-full bg-cyan-100 flex items-center justify-center text-cyan-600">
                                <i data-lucide="zap" class="h-5 w-5"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Layanan Lokal</p>
                                <p class="text-sm font-bold text-slate-800">Jetis, Tirtoadi & Sekitarnya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SVG Waves Transition -->
        <div class="mt-16 sm:mt-24 lg:mt-32">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
    </section>

    <!-- MAIN CONTENT CONTAINER (WHITE BACKGROUND FOR CONTRAST) -->
    <main class="bg-white relative z-20">
        
        <!-- ABOUT US SECTION -->
        <section id="about" class="py-20 sm:py-28">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                    <h2 class="heading-font text-xs sm:text-sm font-bold text-blue-600 tracking-widest uppercase">Tentang El-Furqon</h2>
                    <p class="heading-font text-3xl sm:text-4xl font-extrabold text-slate-900">Mengapa Memilih Depot Air El-Furqon?</p>
                    <div class="h-1 w-20 bg-blue-600 mx-auto rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Feature 1 -->
                    <div class="p-8 rounded-2xl bg-blue-50/50 hover:bg-blue-50 border border-blue-100/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center space-y-4 group">
                        <div class="h-14 w-14 rounded-2xl bg-blue-600 text-white flex items-center justify-center mx-auto shadow-md group-hover:scale-110 transition-transform">
                            <i data-lucide="filter" class="h-7 w-7 group-hover-spin"></i>
                        </div>
                        <h3 class="heading-font text-lg font-bold text-slate-800">Filtrasi Berlapis</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Proses filtrasi modern berulang untuk menghilangkan partikel mikro dan kotoran berbahaya secara efektif.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="p-8 rounded-2xl bg-blue-50/50 hover:bg-blue-50 border border-blue-100/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center space-y-4 group">
                        <div class="h-14 w-14 rounded-2xl bg-blue-600 text-white flex items-center justify-center mx-auto shadow-md group-hover:scale-110 transition-transform">
                            <i data-lucide="sparkles" class="h-7 w-7 group-hover-glow"></i>
                        </div>
                        <h3 class="heading-font text-lg font-bold text-slate-800">Sterilisasi UV & Ozon</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Membunuh bakteri, virus, dan kuman dengan radiasi sinar UV tingkat tinggi & sterilisasi Ozon aktif.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="p-8 rounded-2xl bg-blue-50/50 hover:bg-blue-50 border border-blue-100/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center space-y-4 group">
                        <div class="h-14 w-14 rounded-2xl bg-blue-600 text-white flex items-center justify-center mx-auto shadow-md group-hover:scale-110 transition-transform">
                            <i data-lucide="heart-handshake" class="h-7 w-7 group-hover-float"></i>
                        </div>
                        <h3 class="heading-font text-lg font-bold text-slate-800">Kebersihan Galon Terjamin</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Setiap galon dicuci bersih dengan air steril & sikat khusus sebelum pengisian untuk memastikan higienitas.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="p-8 rounded-2xl bg-blue-50/50 hover:bg-blue-50 border border-blue-100/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center space-y-4 group">
                        <div class="h-14 w-14 rounded-2xl bg-blue-600 text-white flex items-center justify-center mx-auto shadow-md group-hover:scale-110 transition-transform">
                            <i data-lucide="truck" class="h-7 w-7 group-hover-truck"></i>
                        </div>
                        <h3 class="heading-font text-lg font-bold text-slate-800">Layanan Antar Cepat</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Cukup kirim pesan melalui web, kurir kami akan segera mengirim pesanan langsung ke depan pintu Anda.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES / PRODUCTS SECTION -->
        <section id="services" class="py-20 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                    <h2 class="heading-font text-xs sm:text-sm font-bold text-blue-600 tracking-widest uppercase">Layanan & Produk</h2>
                    <p class="heading-font text-3xl sm:text-4xl font-extrabold text-slate-900">Pilihan Produk Air Mineral & Aksesoris</p>
                    <div class="h-1 w-20 bg-blue-600 mx-auto rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Product 1 -->
                    <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                        <div class="p-6 space-y-4">
                            <div class="h-12 w-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-xl">1</div>
                            <h3 class="heading-font text-xl font-bold text-slate-800">Isi Ulang Galon El-Furqon</h3>
                            <p class="text-sm text-slate-600">
                                Air isi ulang higienis yang diproses steril dengan penyaringan mikro serta sterilisasi UV. Cocok untuk kebutuhan air harian keluarga.
                            </p>
                        </div>
                        <div class="p-6 bg-slate-50/80 border-t border-slate-100 flex items-center justify-between">
                            <div>
                                <span class="text-xs text-slate-400 block font-semibold">Harga Depot</span>
                                <span class="text-lg font-extrabold text-blue-600">Rp 6.000</span>
                            </div>
                            <a href="#calculator" class="p-2.5 rounded-full bg-blue-600 text-white hover:bg-blue-700 transition-colors shadow-sm">
                                <i data-lucide="plus" class="h-5 w-5"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                        <div class="p-6 space-y-4">
                            <div class="h-12 w-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-xl">2</div>
                            <h3 class="heading-font text-xl font-bold text-slate-800">Isi Ulang Cleo / Aqua</h3>
                            <p class="text-sm text-slate-600">
                                Layanan isi ulang khusus untuk galon bermerek premium (Aqua, Cleo, VIT, dll.) dengan kualitas air jaminan murni dari sumber terpilih.
                            </p>
                        </div>
                        <div class="p-6 bg-slate-50/80 border-t border-slate-100 flex items-center justify-between">
                            <div>
                                <span class="text-xs text-slate-400 block font-semibold">Harga Depot</span>
                                <span class="text-lg font-extrabold text-blue-600">Rp 8.000</span>
                            </div>
                            <a href="#calculator" class="p-2.5 rounded-full bg-blue-600 text-white hover:bg-blue-700 transition-colors shadow-sm">
                                <i data-lucide="plus" class="h-5 w-5"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                        <div class="p-6 space-y-4">
                            <div class="h-12 w-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-xl">3</div>
                            <h3 class="heading-font text-xl font-bold text-slate-800">Galon Baru + Air</h3>
                            <p class="text-sm text-slate-600">
                                Pembelian galon plastik tebal food-grade baru yang berkualitas tinggi, sudah termasuk isi air minum mineral higienis El-Furqon siap pakai.
                            </p>
                        </div>
                        <div class="p-6 bg-slate-50/80 border-t border-slate-100 flex items-center justify-between">
                            <div>
                                <span class="text-xs text-slate-400 block font-semibold">Harga Depot</span>
                                <span class="text-lg font-extrabold text-blue-600">Rp 50.000</span>
                            </div>
                            <a href="#calculator" class="p-2.5 rounded-full bg-blue-600 text-white hover:bg-blue-700 transition-colors shadow-sm">
                                <i data-lucide="plus" class="h-5 w-5"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                        <div class="p-6 space-y-4">
                            <div class="h-12 w-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-xl">4</div>
                            <h3 class="heading-font text-xl font-bold text-slate-800">Pompa Galon Elektrik</h3>
                            <p class="text-sm text-slate-600">
                                Pompa air elektrik portable yang mudah di-charge via USB. Praktis digunakan untuk dispenser air minum tanpa mengangkat galon yang berat.
                            </p>
                        </div>
                        <div class="p-6 bg-slate-50/80 border-t border-slate-100 flex items-center justify-between">
                            <div>
                                <span class="text-xs text-slate-400 block font-semibold">Harga Depot</span>
                                <span class="text-lg font-extrabold text-blue-600">Rp 35.000</span>
                            </div>
                            <a href="#calculator" class="p-2.5 rounded-full bg-blue-600 text-white hover:bg-blue-700 transition-colors shadow-sm">
                                <i data-lucide="plus" class="h-5 w-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- INTERACTIVE ORDER CALCULATOR SECTION (WOW FACTOR) -->
        <section id="calculator" class="py-20 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-blue-50/30 to-cyan-50/20 pointer-events-none"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                    <h2 class="heading-font text-xs sm:text-sm font-bold text-blue-600 tracking-widest uppercase">Kalkulator Order Pintar</h2>
                    <p class="heading-font text-3xl sm:text-4xl font-extrabold text-slate-900">Hitung & Pesan Secara Instan</p>
                    <p class="text-sm sm:text-base text-slate-600 max-w-lg mx-auto">
                        Pilih produk di bawah ini untuk melihat total estimasi harga belanja Anda. Pesanan akan otomatis terkirim melalui WhatsApp ke tim pengirim kami!
                    </p>
                    <div class="h-1 w-20 bg-blue-600 mx-auto rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    
                    <!-- Left: Product Inputs (8 Columns) -->
                    <div class="lg:col-span-7 space-y-6">
                        
                        <!-- Product Item 1 -->
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-6 bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow gap-4 group">
                            <div class="flex items-center gap-4">
                                <div class="h-12 w-12 rounded-2xl bg-blue-100 text-blue-600 flex items-center justify-center shrink-0">
                                    <i data-lucide="droplet" class="h-6 w-6 group-hover-glow"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-base sm:text-lg">Refill Galon Biasa (El-Furqon)</h4>
                                    <p class="text-xs text-slate-500 font-semibold">Rp 6.000 / Galon</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 w-full sm:w-auto justify-end">
                                <button type="button" onclick="decrement('refill_biasa')" class="h-10 w-10 rounded-full border border-slate-200 hover:bg-slate-50 hover:border-slate-300 transition-colors flex items-center justify-center font-bold text-slate-600 text-lg select-none">-</button>
                                <span id="qty_refill_biasa" class="w-10 text-center font-extrabold text-lg text-slate-800">0</span>
                                <button type="button" onclick="increment('refill_biasa')" class="h-10 w-10 rounded-full border border-slate-200 hover:bg-slate-50 hover:border-slate-300 transition-colors flex items-center justify-center font-bold text-slate-600 text-lg select-none">+</button>
                            </div>
                        </div>

                        <!-- Product Item 2 -->
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-6 bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow gap-4 group">
                            <div class="flex items-center gap-4">
                                <div class="h-12 w-12 rounded-2xl bg-cyan-100 text-cyan-600 flex items-center justify-center shrink-0">
                                    <i data-lucide="sparkles" class="h-6 w-6 group-hover-glow"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-base sm:text-lg">Refill Galon Cleo / Aqua (Premium)</h4>
                                    <p class="text-xs text-slate-500 font-semibold">Rp 8.000 / Galon</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 w-full sm:w-auto justify-end">
                                <button type="button" onclick="decrement('refill_premium')" class="h-10 w-10 rounded-full border border-slate-200 hover:bg-slate-50 hover:border-slate-300 transition-colors flex items-center justify-center font-bold text-slate-600 text-lg select-none">-</button>
                                <span id="qty_refill_premium" class="w-10 text-center font-extrabold text-lg text-slate-800">0</span>
                                <button type="button" onclick="increment('refill_premium')" class="h-10 w-10 rounded-full border border-slate-200 hover:bg-slate-50 hover:border-slate-300 transition-colors flex items-center justify-center font-bold text-slate-600 text-lg select-none">+</button>
                            </div>
                        </div>

                        <!-- Product Item 3 -->
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-6 bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow gap-4 group">
                            <div class="flex items-center gap-4">
                                <div class="h-12 w-12 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0">
                                    <i data-lucide="package-plus" class="h-6 w-6 group-hover-float"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-base sm:text-lg">Galon Baru + Isi Air</h4>
                                    <p class="text-xs text-slate-500 font-semibold">Rp 50.000 / Set</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 w-full sm:w-auto justify-end">
                                <button type="button" onclick="decrement('galon_baru')" class="h-10 w-10 rounded-full border border-slate-200 hover:bg-slate-50 hover:border-slate-300 transition-colors flex items-center justify-center font-bold text-slate-600 text-lg select-none">-</button>
                                <span id="qty_galon_baru" class="w-10 text-center font-extrabold text-lg text-slate-800">0</span>
                                <button type="button" onclick="increment('galon_baru')" class="h-10 w-10 rounded-full border border-slate-200 hover:bg-slate-50 hover:border-slate-300 transition-colors flex items-center justify-center font-bold text-slate-600 text-lg select-none">+</button>
                            </div>
                        </div>

                        <!-- Product Item 4 -->
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-6 bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow gap-4 group">
                            <div class="flex items-center gap-4">
                                <div class="h-12 w-12 rounded-2xl bg-indigo-100 text-indigo-600 flex items-center justify-center shrink-0">
                                    <i data-lucide="zap" class="h-6 w-6 group-hover-wiggle"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-base sm:text-lg">Pompa Galon Elektrik</h4>
                                    <p class="text-xs text-slate-500 font-semibold">Rp 35.000 / Unit</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 w-full sm:w-auto justify-end">
                                <button type="button" onclick="decrement('pompa_elektrik')" class="h-10 w-10 rounded-full border border-slate-200 hover:bg-slate-50 hover:border-slate-300 transition-colors flex items-center justify-center font-bold text-slate-600 text-lg select-none">-</button>
                                <span id="qty_pompa_elektrik" class="w-10 text-center font-extrabold text-lg text-slate-800">0</span>
                                <button type="button" onclick="increment('pompa_elektrik')" class="h-10 w-10 rounded-full border border-slate-200 hover:bg-slate-50 hover:border-slate-300 transition-colors flex items-center justify-center font-bold text-slate-600 text-lg select-none">+</button>
                            </div>
                        </div>

                        <!-- Delivery Options -->
                        <div class="p-6 bg-white rounded-3xl border border-slate-100 shadow-sm space-y-4">
                            <h4 class="font-bold text-slate-800 text-base flex items-center gap-2">
                                <i data-lucide="truck" class="h-5 w-5 text-blue-600"></i>
                                <span>Metode Pengiriman</span>
                            </h4>
                            <div class="grid grid-cols-2 gap-4">
                                <label class="border-2 border-blue-600 bg-blue-50/50 p-4 rounded-2xl flex flex-col items-center justify-center text-center cursor-pointer transition-all hover:bg-blue-50" id="label_pickup">
                                    <input type="radio" name="delivery_type" value="pickup" checked onchange="updateDelivery(false)" class="sr-only">
                                    <i data-lucide="store" class="h-6 w-6 text-blue-600 mb-1"></i>
                                    <span class="text-sm font-bold text-slate-800">Ambil Sendiri</span>
                                    <span class="text-xs text-slate-500 font-medium">Bebas Biaya Kirim</span>
                                </label>
                                <label class="border-2 border-slate-100 p-4 rounded-2xl flex flex-col items-center justify-center text-center cursor-pointer transition-all hover:bg-slate-50" id="label_delivery">
                                    <input type="radio" name="delivery_type" value="delivery" onchange="updateDelivery(true)" class="sr-only">
                                    <i data-lucide="truck" class="h-6 w-6 text-slate-400 mb-1" id="icon_delivery"></i>
                                    <span class="text-sm font-bold text-slate-800">Antar ke Rumah</span>
                                    <span class="text-xs text-slate-500 font-medium">+Rp 2.000 Ongkir</span>
                                </label>
                            </div>
                        </div>

                        <!-- Payment Options -->
                        <div class="p-6 bg-white rounded-3xl border border-slate-100 shadow-sm space-y-4">
                            <h4 class="font-bold text-slate-800 text-base flex items-center gap-2">
                                <i data-lucide="wallet" class="h-5 w-5 text-blue-600"></i>
                                <span>Metode Pembayaran</span>
                            </h4>
                            <div class="grid grid-cols-2 gap-4">
                                <label class="border-2 border-blue-600 bg-blue-50/50 p-4 rounded-2xl flex flex-col items-center justify-center text-center cursor-pointer transition-all hover:bg-blue-50" id="label_pay_cod">
                                    <input type="radio" name="payment_type" value="cod" checked onchange="updatePayment('cod')" class="sr-only">
                                    <i data-lucide="banknote" class="h-6 w-6 text-blue-600 mb-1" id="icon_pay_cod"></i>
                                    <span class="text-sm font-bold text-slate-800">Bayar di Tempat (COD)</span>
                                </label>
                                <label class="border-2 border-slate-100 p-4 rounded-2xl flex flex-col items-center justify-center text-center cursor-pointer transition-all hover:bg-slate-50" id="label_pay_qris">
                                    <input type="radio" name="payment_type" value="qris" onchange="updatePayment('qris')" class="sr-only">
                                    <i data-lucide="qr-code" class="h-6 w-6 text-slate-400 mb-1" id="icon_pay_qris"></i>
                                    <span class="text-sm font-bold text-slate-800">QRIS (Bayar Instan)</span>
                                </label>
                            </div>
                        </div>

                        <!-- QRIS Instruction Panel -->
                        <div id="div_qris_panel" class="hidden p-4 bg-blue-50/50 rounded-3xl border border-blue-100 text-center space-y-3 transition-all duration-300">
                            <div>
                                <p class="text-xs text-blue-600 font-bold uppercase tracking-wider">Pindai QRIS El-Furqon</p>
                                <h5 class="font-extrabold text-slate-800 text-sm mt-1">LEGAWAN PERKASA, DIGITAL & KREATIF</h5>
                                <p class="text-[10px] text-slate-400 font-semibold">NMID: ID1025456047030</p>
                            </div>
                            <div class="max-w-[130px] mx-auto bg-white p-2 rounded-xl shadow-md border border-slate-100 relative group">
                                <img src="/images/qris_payment_code.png" alt="QRIS Depot El-Furqon" class="w-full h-auto rounded-lg">
                                <!-- Corner decorative scanning lines -->
                                <div class="absolute top-1 left-1 w-2 h-2 border-t-2 border-l-2 border-blue-600 rounded-tl"></div>
                                <div class="absolute top-1 right-1 w-2 h-2 border-t-2 border-r-2 border-blue-600 rounded-tr"></div>
                                <div class="absolute bottom-1 left-1 w-2 h-2 border-b-2 border-l-2 border-blue-600 rounded-bl"></div>
                                <div class="absolute bottom-1 right-1 w-2 h-2 border-b-2 border-r-2 border-blue-600 rounded-br"></div>
                            </div>
                            <div class="space-y-1.5 text-slate-600 text-xs text-left bg-white/60 p-4 rounded-2xl border border-white/40">
                                <p class="font-bold text-slate-800">Petunjuk Pembayaran:</p>
                                <p>1. Scan QR Code di atas menggunakan aplikasi E-Wallet atau Mobile Banking Anda.</p>
                                <p>2. Masukkan nominal transfer sesuai dengan total tagihan Anda.</p>
                                <p>3. Ambil tangkapan layar (screenshot) bukti transfer sukses Anda.</p>
                                <p>4. Klik tombol di kanan untuk konfirmasi pesanan dan kirim bukti transfer ke WhatsApp.</p>
                            </div>
                        </div>

                    </div>

                    <!-- Right: Customer Info & Live Bill (5 Columns) -->
                    <div class="lg:col-span-5 space-y-6">
                        
                        <!-- Customer details form -->
                        <div class="p-6 bg-white rounded-3xl border border-slate-100 shadow-md space-y-4">
                            <h4 class="font-bold text-slate-800 text-base flex items-center gap-2">
                                <i data-lucide="user" class="h-5 w-5 text-blue-600"></i>
                                <span>Informasi Pengiriman</span>
                            </h4>
                            
                            <div class="space-y-3 text-left">
                                <div>
                                    <label for="cust_name" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Nama Lengkap</label>
                                    <input type="text" id="cust_name" placeholder="Masukkan nama Anda..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 text-sm font-medium transition-all">
                                </div>
                                
                                <div id="div_address" class="hidden">
                                    <label for="cust_address" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Alamat Lengkap</label>
                                    <textarea id="cust_address" rows="3" placeholder="Nama Jalan, RT/RW, Dusun..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 text-sm font-medium transition-all"></textarea>
                                </div>

                                <div>
                                    <label for="cust_notes" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Catatan Tambahan (Opsional)</label>
                                    <input type="text" id="cust_notes" placeholder="Contoh: Galon diletakkan di teras..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 text-sm font-medium transition-all">
                                </div>
                            </div>
                        </div>

                        <!-- Live Bill summary -->
                        <div class="p-6 bg-gradient-to-br from-slate-900 to-blue-950 text-white rounded-3xl shadow-xl space-y-6 text-left">
                            <div>
                                <p class="text-xs text-blue-300 font-bold uppercase tracking-widest">Rincian Belanja Anda</p>
                                <h4 class="font-extrabold text-xl text-white mt-1">Receipt Ringkasan</h4>
                            </div>

                            <div class="space-y-3 text-sm text-slate-300 border-b border-slate-800 pb-4">
                                <div class="flex justify-between items-center">
                                    <span>Subtotal Produk</span>
                                    <span id="bill_subtotal" class="font-bold text-white">Rp 0</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span>Ongkos Kirim</span>
                                    <span id="bill_ongkir" class="font-bold text-white">Rp 0</span>
                                </div>
                            </div>

                            <div class="flex justify-between items-end">
                                <div>
                                    <span class="text-xs text-blue-300 font-bold uppercase block tracking-wider">Total Tagihan</span>
                                    <span class="text-[10px] text-slate-400 block -mt-0.5">Sudah termasuk PPN</span>
                                </div>
                                <div id="bill_total" class="text-2xl sm:text-3xl font-extrabold text-blue-400">Rp 0</div>
                            </div>

                            <!-- QRIS Checkout Status / Instructions -->
                            <div id="qris_checkout_status" class="hidden p-3.5 bg-blue-950/50 border border-blue-800/40 rounded-2xl text-xs space-y-1 text-slate-300">
                                <p class="font-bold text-blue-300">Langkah Terakhir:</p>
                                <p>Silakan lakukan transfer sebesar <strong id="qris_status_total" class="text-white">Rp 0</strong> ke QRIS di sebelah kiri, lalu klik tombol di bawah ini untuk mengirim bukti transfer ke WhatsApp.</p>
                            </div>

                            <button type="button" id="btn_checkout" onclick="checkout()" class="w-full py-4 px-6 rounded-2xl bg-emerald-600 hover:bg-emerald-500 font-bold text-white flex items-center justify-center gap-3 transition-colors shadow-lg shadow-emerald-700/20">
                                <i id="btn_checkout_icon" data-lucide="message-square-plus" class="h-5 w-5"></i>
                                <span id="btn_checkout_text">Pesan via WhatsApp</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- MAPS LOCATION SECTION -->
        <section id="location" class="py-20 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                    <h2 class="heading-font text-xs sm:text-sm font-bold text-blue-600 tracking-widest uppercase">Lokasi Depot Kami</h2>
                    <p class="heading-font text-3xl sm:text-4xl font-extrabold text-slate-900">Kunjungi Depot El-Furqon</p>
                    <div class="h-1 w-20 bg-blue-600 mx-auto rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                    <!-- Location Info (5 Columns) -->
                    <div class="lg:col-span-5 bg-white rounded-3xl p-8 border border-slate-100 shadow-md flex flex-col justify-between space-y-8 text-left">
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="h-12 w-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 shadow-sm">
                                    <i data-lucide="map-pin" class="h-6 w-6 icon-float"></i>
                                </div>
                                <div>
                                    <h4 class="font-extrabold text-slate-800 text-lg">Alamat Depot</h4>
                                    <p class="text-sm text-slate-600 leading-relaxed mt-1">
                                        68PH+P4F, Jetis, Tirtoadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55287
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="h-12 w-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 shadow-sm">
                                    <i data-lucide="clock" class="h-6 w-6 icon-spin-slow"></i>
                                </div>
                                <div>
                                    <h4 class="font-extrabold text-slate-800 text-lg">Jam Operasional</h4>
                                    <p class="text-sm text-slate-600 leading-relaxed mt-1">
                                        Setiap Hari: <strong>07:00 - 20:00 WIB</strong>
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="h-12 w-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 shadow-sm">
                                    <i data-lucide="phone" class="h-6 w-6 icon-wiggle"></i>
                                </div>
                                <div>
                                    <h4 class="font-extrabold text-slate-800 text-lg">Hubungi Kami</h4>
                                    <p class="text-sm text-slate-600 leading-relaxed mt-1">
                                        WhatsApp: <strong>+62 822-8071-8889</strong>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6 border-t border-slate-100 flex flex-col sm:flex-row gap-3">
                            <a href="https://maps.google.com/?q=68PH+P4F,+Jetis,+Tirtoadi,+Kec.+Mlati,+Kabupaten+Sleman,+Daerah+Istimewa+Yogyakarta+55287" target="_blank" class="w-full py-3.5 px-6 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-center flex items-center justify-center gap-2 transition-all shadow-md shadow-blue-500/10 text-sm">
                                <i data-lucide="navigation" class="h-4 w-4"></i>
                                <span>Petunjuk Arah</span>
                            </a>
                            <button onclick="copyAddress()" class="w-full py-3.5 px-6 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold flex items-center justify-center gap-2 transition-all text-sm">
                                <i data-lucide="copy" class="h-4 w-4" id="copyIcon"></i>
                                <span id="copyText">Salin Alamat</span>
                            </button>
                        </div>
                    </div>

                    <!-- Map Frame (7 Columns) -->
                    <div class="lg:col-span-7 h-96 lg:h-auto min-h-[400px] rounded-3xl overflow-hidden shadow-lg border border-slate-200 relative">
                        <!-- Custom Google Maps embed with location query -->
                        <iframe 
                            class="w-full h-full border-0" 
                            src="https://maps.google.com/maps?q=68PH%2BP4F%2C%20Jetis%2C%20Tirtoadi%2C%20Kec.%20Mlati%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta&t=&z=16&ie=UTF8&iwloc=&output=embed" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS SECTION -->
        <section class="py-20 overflow-hidden relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                    <h2 class="heading-font text-xs sm:text-sm font-bold text-blue-600 tracking-widest uppercase">Ulasan Pelanggan</h2>
                    <p class="heading-font text-3xl sm:text-4xl font-extrabold text-slate-900">Apa Kata Tetangga Kami?</p>
                    <div class="h-1 w-20 bg-blue-600 mx-auto rounded-full"></div>
                </div>

                <!-- Testimonials Carousel (Interactive JS slider) -->
                <div class="relative max-w-4xl mx-auto px-4">
                    <div class="overflow-hidden">
                        <div class="flex transition-transform duration-500 ease-in-out gap-6" id="testimonialSlider" style="transform: translateX(0%);">
                            
                            <!-- Slide 1 -->
                            <div class="w-full shrink-0 flex flex-col justify-between p-8 bg-white border border-slate-100 shadow-md rounded-3xl relative text-left">
                                <div class="absolute top-6 right-8 text-blue-200">
                                    <i data-lucide="quote" class="h-14 w-14 rotate-180"></i>
                                </div>
                                <div class="space-y-4 relative z-10">
                                    <div class="flex items-center gap-1 text-amber-400">
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                    </div>
                                    <p class="text-slate-600 italic leading-relaxed text-base sm:text-lg">
                                        "Layanan antar galonnya cepat sekali! Begitu order lewat web, gak sampai 15 menit kurir sudah datang membawa galon bersih. Airnya juga segar banget, tidak ada rasa aneh-aneh. Rekomendasi buat warga Tirtoadi!"
                                    </p>
                                </div>
                                <div class="flex items-center gap-3 pt-6 mt-6 border-t border-slate-100">
                                    <div class="h-12 w-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold">BP</div>
                                    <div>
                                        <h5 class="font-extrabold text-slate-800">Budi Pratama</h5>
                                        <p class="text-xs font-semibold text-slate-400 uppercase">Warga Jetis, Tirtoadi</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="w-full shrink-0 flex flex-col justify-between p-8 bg-white border border-slate-100 shadow-md rounded-3xl relative text-left">
                                <div class="absolute top-6 right-8 text-blue-200">
                                    <i data-lucide="quote" class="h-14 w-14 rotate-180"></i>
                                </div>
                                <div class="space-y-4 relative z-10">
                                    <div class="flex items-center gap-1 text-amber-400">
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                    </div>
                                    <p class="text-slate-600 italic leading-relaxed text-base sm:text-lg">
                                        "Sangat terbantu dengan kalkulator order di web ini. Bisa hitung budget isi ulang bulanan + beli pompa galon baru sekalian. Kurirnya ramah, membawakan galon langsung dipasangkan ke dispenser rumah."
                                    </p>
                                </div>
                                <div class="flex items-center gap-3 pt-6 mt-6 border-t border-slate-100">
                                    <div class="h-12 w-12 rounded-full bg-cyan-100 text-cyan-600 flex items-center justify-center font-bold">NS</div>
                                    <div>
                                        <h5 class="font-extrabold text-slate-800">Nining Sulastri</h5>
                                        <p class="text-xs font-semibold text-slate-400 uppercase">Ibu Rumah Tangga, Tirtoadi</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="w-full shrink-0 flex flex-col justify-between p-8 bg-white border border-slate-100 shadow-md rounded-3xl relative text-left">
                                <div class="absolute top-6 right-8 text-blue-200">
                                    <i data-lucide="quote" class="h-14 w-14 rotate-180"></i>
                                </div>
                                <div class="space-y-4 relative z-10">
                                    <div class="flex items-center gap-1 text-amber-400">
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                        <i data-lucide="star" class="h-5 w-5 fill-current"></i>
                                    </div>
                                    <p class="text-slate-600 italic leading-relaxed text-base sm:text-lg">
                                        "Saya sering ambil sendiri langsung ke depot karena lokasinya dekat dari rumah. Depotnya bersih sekali, kebersihan galon luar dan dalam dijaga ketat. Sukses terus Depot El-Furqon!"
                                    </p>
                                </div>
                                <div class="flex items-center gap-3 pt-6 mt-6 border-t border-slate-100">
                                    <div class="h-12 w-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold">AH</div>
                                    <div>
                                        <h5 class="font-extrabold text-slate-800">Agus Hermawan</h5>
                                        <p class="text-xs font-semibold text-slate-400 uppercase">Pemilik Warung Makan, Mlati</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Slide controls -->
                    <div class="flex justify-center items-center gap-2 mt-8">
                        <button onclick="slidePrev()" class="h-10 w-10 rounded-full border border-slate-200 bg-white hover:bg-slate-50 text-slate-600 flex items-center justify-center shadow-sm transition-colors">
                            <i data-lucide="chevron-left" class="h-5 w-5"></i>
                        </button>
                        <div class="flex items-center gap-1.5" id="sliderDots">
                            <span onclick="setSlide(0)" class="h-2 w-6 bg-blue-600 rounded-full cursor-pointer transition-all duration-300 slider-dot"></span>
                            <span onclick="setSlide(1)" class="h-2 w-2 bg-slate-300 hover:bg-slate-400 rounded-full cursor-pointer transition-all duration-300 slider-dot"></span>
                            <span onclick="setSlide(2)" class="h-2 w-2 bg-slate-300 hover:bg-slate-400 rounded-full cursor-pointer transition-all duration-300 slider-dot"></span>
                        </div>
                        <button onclick="slideNext()" class="h-10 w-10 rounded-full border border-slate-200 bg-white hover:bg-slate-50 text-slate-600 flex items-center justify-center shadow-sm transition-colors">
                            <i data-lucide="chevron-right" class="h-5 w-5"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ SECTION (INTERACTIVE ACCORDIONS) -->
        <section id="faq" class="py-20 bg-slate-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                    <h2 class="heading-font text-xs sm:text-sm font-bold text-blue-600 tracking-widest uppercase">Pertanyaan Umum</h2>
                    <p class="heading-font text-3xl sm:text-4xl font-extrabold text-slate-900">Pertanyaan yang Sering Diajukan</p>
                    <div class="h-1 w-20 bg-blue-600 mx-auto rounded-full"></div>
                </div>

                <div class="space-y-4">
                    <!-- FAQ 1 -->
                    <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden shadow-sm">
                        <button onclick="toggleFaq(1)" class="w-full p-6 text-left font-bold text-slate-800 flex justify-between items-center hover:bg-slate-50/50 transition-colors gap-4">
                            <span class="text-base sm:text-lg">Apakah air isi ulang El-Furqon aman dikonsumsi langsung?</span>
                            <i data-lucide="plus" class="h-5 w-5 text-slate-500 transition-transform duration-300 shrink-0" id="faqIcon_1"></i>
                        </button>
                        <div class="max-h-0 overflow-hidden transition-all duration-300" id="faqContent_1">
                            <div class="p-6 pt-0 border-t border-slate-50 text-sm sm:text-base text-slate-600 leading-relaxed">
                                Ya, 100% aman dan langsung bisa dikonsumsi. Air kami melewati proses penyaringan ketat dengan micro-filters serta disterilisasi menggunakan Sinar Ultraviolet (UV) dan Ozon tingkat tinggi guna membunuh segala jenis virus maupun mikroba berbahaya.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden shadow-sm">
                        <button onclick="toggleFaq(2)" class="w-full p-6 text-left font-bold text-slate-800 flex justify-between items-center hover:bg-slate-50/50 transition-colors gap-4">
                            <span class="text-base sm:text-lg">Berapa biaya ongkos kirim ke rumah?</span>
                            <i data-lucide="plus" class="h-5 w-5 text-slate-500 transition-transform duration-300 shrink-0" id="faqIcon_2"></i>
                        </button>
                        <div class="max-h-0 overflow-hidden transition-all duration-300" id="faqContent_2">
                            <div class="p-6 pt-0 border-t border-slate-50 text-sm sm:text-base text-slate-600 leading-relaxed">
                                Kami memberlakukan flat rate murah Rp 2.000 saja per pengiriman untuk wilayah lokal seperti Jetis, Tirtoadi, Mlati, Sleman. Biaya kirim ini tidak dipengaruhi oleh jumlah galon yang Anda pesan dalam satu kali order.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden shadow-sm">
                        <button onclick="toggleFaq(3)" class="w-full p-6 text-left font-bold text-slate-800 flex justify-between items-center hover:bg-slate-50/50 transition-colors gap-4">
                            <span class="text-base sm:text-lg">Berapa lama estimasi pengiriman galon?</span>
                            <i data-lucide="plus" class="h-5 w-5 text-slate-500 transition-transform duration-300 shrink-0" id="faqIcon_3"></i>
                        </button>
                        <div class="max-h-0 overflow-hidden transition-all duration-300" id="faqContent_3">
                            <div class="p-6 pt-0 border-t border-slate-50 text-sm sm:text-base text-slate-600 leading-relaxed">
                                Pengiriman rata-rata memakan waktu 15 - 30 menit setelah konfirmasi order disetujui, tergantung antrean pesanan dan jarak tempuh kurir dari depot kami yang berlokasi di Tirtoadi.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden shadow-sm">
                        <button onclick="toggleFaq(4)" class="w-full p-6 text-left font-bold text-slate-800 flex justify-between items-center hover:bg-slate-50/50 transition-colors gap-4">
                            <span class="text-base sm:text-lg">Apakah bisa melakukan pembayaran secara COD (Cash on Delivery)?</span>
                            <i data-lucide="plus" class="h-5 w-5 text-slate-500 transition-transform duration-300 shrink-0" id="faqIcon_4"></i>
                        </button>
                        <div class="max-h-0 overflow-hidden transition-all duration-300" id="faqContent_4">
                            <div class="p-6 pt-0 border-t border-slate-50 text-sm sm:text-base text-slate-600 leading-relaxed">
                                Ya tentu saja. Kami melayani pembayaran tunai (Cash) secara langsung di tempat saat kurir kami menyerahkan galon ke rumah Anda, atau transfer bank/E-Wallet lokal setelah pesanan sampai.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="bg-slate-900 text-slate-400 relative z-10 border-t border-slate-800">
        <!-- SVG Waves Top Footer -->
        <div class="absolute top-0 left-0 w-full overflow-hidden leading-none rotate-180 -mt-1 pointer-events-none">
            <svg class="w-full h-10 text-white fill-current" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"></path>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-10">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-16">
                <!-- Branding Info (5 Columns) -->
                <div class="md:col-span-5 space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="h-10 w-10 rounded-xl overflow-hidden shadow-md">
                            <img src="/images/elfurqon_logo_blue.png" alt="Logo El-Furqon" class="w-full h-full object-cover">
                        </div>
                        <span class="heading-font text-2xl font-black tracking-tight text-white">EL-FURQON</span>
                    </div>
                    <p class="text-sm text-slate-400 leading-relaxed max-w-sm">
                        Depot Air Minum Isi Ulang higienis dan terpercaya di Tirtoadi, Sleman. Kami mengutamakan kualitas kemurnian air minum dan layanan antar yang cepat langsung ke rumah Anda.
                    </p>
                    <!-- Social icons -->
                    <div class="flex items-center gap-3">
                        <a href="https://wa.me/6282280718889" target="_blank" class="h-10 w-10 rounded-full bg-slate-800 hover:bg-blue-600 text-slate-300 hover:text-white flex items-center justify-center transition-colors">
                            <i data-lucide="message-circle" class="h-5 w-5"></i>
                        </a>
                        <a href="#location" class="h-10 w-10 rounded-full bg-slate-800 hover:bg-blue-600 text-slate-300 hover:text-white flex items-center justify-center transition-colors">
                            <i data-lucide="navigation" class="h-5 w-5"></i>
                        </a>
                    </div>
                </div>

                <!-- Navigation Links (3 Columns) -->
                <div class="md:col-span-3 space-y-4">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-white">Tautan Cepat</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#home" class="hover:text-blue-500 transition-colors">Beranda</a></li>
                        <li><a href="#about" class="hover:text-blue-500 transition-colors">Tentang Kami</a></li>
                        <li><a href="#services" class="hover:text-blue-500 transition-colors">Layanan & Produk</a></li>
                        <li><a href="#calculator" class="hover:text-blue-500 transition-colors">Kalkulator Order</a></li>
                    </ul>
                </div>

                <!-- Contact details (4 Columns) -->
                <div class="md:col-span-4 space-y-4">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-white">Lokasi Depot</h4>
                    <p class="text-sm text-slate-400">
                        Jetis, Tirtoadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55287
                    </p>
                    <p class="text-sm text-slate-400">
                        WhatsApp: +62 822-8071-8889<br>
                        Email: info@galonelfurqon.com
                    </p>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs">
                <p>&copy; 2026 Depot Air Minum El-Furqon. All rights reserved.</p>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-white">Syarat & Ketentuan</a>
                    <a href="#" class="hover:text-white">Kebijakan Privasi</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- INTERACTIVE SCRIPTS -->
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // 1. Sticky Header scroll effect
        const header = document.getElementById('mainHeader');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                header.classList.add('shadow-lg', 'bg-white/95');
                header.classList.remove('shadow-sm', 'bg-white/75');
            } else {
                header.classList.add('shadow-sm', 'bg-white/75');
                header.classList.remove('shadow-lg', 'bg-white/95');
            }
        });

        // 2. Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuIcon = document.getElementById('menuIcon');

        mobileMenuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                menuIcon.setAttribute('data-lucide', 'x');
            } else {
                mobileMenu.classList.add('hidden');
                menuIcon.setAttribute('data-lucide', 'menu');
            }
            lucide.createIcons();
        });

        // Close menu on click link
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuIcon.setAttribute('data-lucide', 'menu');
                lucide.createIcons();
            });
        });

        // 3. Calculator State
        const prices = {
            refill_biasa: 6000,
            refill_premium: 8000,
            galon_baru: 50000,
            pompa_elektrik: 35000
        };

        const state = {
            refill_biasa: 0,
            refill_premium: 0,
            galon_baru: 0,
            pompa_elektrik: 0,
            isDelivery: false,
            paymentMethod: 'cod',
            qrisConfirmed: false
        };

        const deliveryCost = 2000;

        function resetQrisConfirmation() {
            state.qrisConfirmed = false;
            
            const statusBlock = document.getElementById('qris_checkout_status');
            if (statusBlock) statusBlock.classList.add('hidden');
            
            const btnCheckoutText = document.getElementById('btn_checkout_text');
            const btnCheckoutIcon = document.getElementById('btn_checkout_icon');
            const btnCheckout = document.getElementById('btn_checkout');
            
            if (btnCheckoutText) btnCheckoutText.innerText = "Konfirmasi Pesanan";
            if (btnCheckoutIcon) {
                btnCheckoutIcon.setAttribute('data-lucide', 'check');
            }
            if (btnCheckout) {
                btnCheckout.classList.remove('bg-emerald-600', 'hover:bg-emerald-500');
                btnCheckout.classList.add('bg-blue-600', 'hover:bg-blue-500');
            }
            lucide.createIcons();
        }

        function updateUI() {
            // Update quantity display
            document.getElementById('qty_refill_biasa').innerText = state.refill_biasa;
            document.getElementById('qty_refill_premium').innerText = state.refill_premium;
            document.getElementById('qty_galon_baru').innerText = state.galon_baru;
            document.getElementById('qty_pompa_elektrik').innerText = state.pompa_elektrik;

            // Reset QRIS confirmation state if UI changes
            if (state.paymentMethod === 'qris' && state.qrisConfirmed) {
                resetQrisConfirmation();
            }

            // Calculate totals
            const subtotal = (state.refill_biasa * prices.refill_biasa) +
                             (state.refill_premium * prices.refill_premium) +
                             (state.galon_baru * prices.galon_baru) +
                             (state.pompa_elektrik * prices.pompa_elektrik);
            
            const ongkir = state.isDelivery && subtotal > 0 ? deliveryCost : 0;
            const total = subtotal + ongkir;

            // Update bill displays
            document.getElementById('bill_subtotal').innerText = 'Rp ' + subtotal.toLocaleString('id-ID');
            document.getElementById('bill_ongkir').innerText = 'Rp ' + ongkir.toLocaleString('id-ID');
            document.getElementById('bill_total').innerText = 'Rp ' + total.toLocaleString('id-ID');
        }

        function increment(item) {
            state[item]++;
            updateUI();
        }

        function decrement(item) {
            if (state[item] > 0) {
                state[item]--;
                updateUI();
            }
        }

        function updateDelivery(isDeliv) {
            state.isDelivery = isDeliv;
            
            const labelPickup = document.getElementById('label_pickup');
            const labelDelivery = document.getElementById('label_delivery');
            const iconDelivery = document.getElementById('icon_delivery');
            const divAddress = document.getElementById('div_address');

            if (isDeliv) {
                labelDelivery.classList.add('border-blue-600', 'bg-blue-50/50');
                labelDelivery.classList.remove('border-slate-100');
                iconDelivery.classList.add('text-blue-600');
                iconDelivery.classList.remove('text-slate-400');

                labelPickup.classList.remove('border-blue-600', 'bg-blue-50/50');
                labelPickup.classList.add('border-slate-100');

                divAddress.classList.remove('hidden');
            } else {
                labelPickup.classList.add('border-blue-600', 'bg-blue-50/50');
                labelPickup.classList.remove('border-slate-100');

                labelDelivery.classList.remove('border-blue-600', 'bg-blue-50/50');
                labelDelivery.classList.add('border-slate-100');
                iconDelivery.classList.remove('text-blue-600');
                iconDelivery.classList.add('text-slate-400');

                divAddress.classList.add('hidden');
            }
            updateUI();
        }

        function updatePayment(method) {
            state.paymentMethod = method;

            const labelCod = document.getElementById('label_pay_cod');
            const labelQris = document.getElementById('label_pay_qris');
            const iconCod = document.getElementById('icon_pay_cod');
            const iconQris = document.getElementById('icon_pay_qris');
            const qrisPanel = document.getElementById('div_qris_panel');
            const btnCheckoutText = document.getElementById('btn_checkout_text');
            const btnCheckoutIcon = document.getElementById('btn_checkout_icon');
            const btnCheckout = document.getElementById('btn_checkout');
            const statusBlock = document.getElementById('qris_checkout_status');

            // Reset QRIS states
            state.qrisConfirmed = false;
            if (statusBlock) statusBlock.classList.add('hidden');

            if (method === 'qris') {
                labelQris.classList.add('border-blue-600', 'bg-blue-50/50');
                labelQris.classList.remove('border-slate-100');
                iconQris.classList.add('text-blue-600');
                iconQris.classList.remove('text-slate-400');

                labelCod.classList.remove('border-blue-600', 'bg-blue-50/50');
                labelCod.classList.add('border-slate-100');
                iconCod.classList.remove('text-blue-600');
                iconCod.classList.add('text-slate-400');

                qrisPanel.classList.remove('hidden');
                
                if (btnCheckoutText) btnCheckoutText.innerText = "Konfirmasi Pesanan";
                if (btnCheckoutIcon) {
                    btnCheckoutIcon.setAttribute('data-lucide', 'check');
                }
                if (btnCheckout) {
                    btnCheckout.classList.remove('bg-emerald-600', 'hover:bg-emerald-500');
                    btnCheckout.classList.add('bg-blue-600', 'hover:bg-blue-500');
                }
            } else {
                labelCod.classList.add('border-blue-600', 'bg-blue-50/50');
                labelCod.classList.remove('border-slate-100');
                iconCod.classList.add('text-blue-600');
                iconCod.classList.remove('text-slate-400');

                labelQris.classList.remove('border-blue-600', 'bg-blue-50/50');
                labelQris.classList.add('border-slate-100');
                iconQris.classList.remove('text-blue-600');
                iconQris.classList.add('text-slate-400');

                qrisPanel.classList.add('hidden');
                
                if (btnCheckoutText) btnCheckoutText.innerText = "Pesan via WhatsApp";
                if (btnCheckoutIcon) {
                    btnCheckoutIcon.setAttribute('data-lucide', 'message-square-plus');
                }
                if (btnCheckout) {
                    btnCheckout.classList.remove('bg-blue-600', 'hover:bg-blue-500');
                    btnCheckout.classList.add('bg-emerald-600', 'hover:bg-emerald-500');
                }
            }
            lucide.createIcons();
        }

        // 4. WhatsApp Checkout Functionality
        function saveOrderToDatabase(onSuccess) {
            const btn = document.getElementById('btn_checkout');
            const originalHtml = btn.innerHTML;
            btn.disabled = true;
            btn.innerHTML = '<span class="flex items-center justify-center gap-2"><svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Memproses...</span>';

            const subtotal = (state.refill_biasa * prices.refill_biasa) +
                             (state.refill_premium * prices.refill_premium) +
                             (state.galon_baru * prices.galon_baru) +
                             (state.pompa_elektrik * prices.pompa_elektrik);
            const ongkir = state.isDelivery ? deliveryCost : 0;
            const total = subtotal + ongkir;

            const data = {
                customer_name: document.getElementById('cust_name').value.trim(),
                notes: document.getElementById('cust_notes').value.trim(),
                delivery_method: state.isDelivery ? 'delivery' : 'takeaway',
                address: state.isDelivery ? document.getElementById('cust_address').value.trim() : '',
                payment_method: state.paymentMethod,
                qty_refill_biasa: state.refill_biasa,
                qty_refill_premium: state.refill_premium,
                qty_galon_baru: state.galon_baru,
                qty_pompa_elektrik: state.pompa_elektrik,
                subtotal: subtotal,
                ongkir: ongkir,
                total_amount: total
            };

            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            fetch('/order', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Gagal menyimpan pesanan');
                }
                return response.json();
            })
            .then(res => {
                if (res.success) {
                    onSuccess();
                } else {
                    alert('Gagal menyimpan pesanan ke database. Silakan coba lagi.');
                }
            })
            .catch(err => {
                console.error('Error saving order:', err);
                alert('Gagal menyimpan pesanan ke database. Silakan coba lagi.');
            })
            .finally(() => {
                btn.disabled = false;
                btn.innerHTML = originalHtml;
                lucide.createIcons();
            });
        }

        function checkout() {
            const subtotal = (state.refill_biasa * prices.refill_biasa) +
                             (state.refill_premium * prices.refill_premium) +
                             (state.galon_baru * prices.galon_baru) +
                             (state.pompa_elektrik * prices.pompa_elektrik);

            if (subtotal === 0) {
                alert('Silakan pilih minimal 1 produk terlebih dahulu!');
                return;
            }

            const name = document.getElementById('cust_name').value.trim();
            const notes = document.getElementById('cust_notes').value.trim();
            const address = document.getElementById('cust_address').value.trim();

            if (!name) {
                alert('Silakan masukkan nama lengkap Anda untuk melakukan pemesanan.');
                document.getElementById('cust_name').focus();
                return;
            }

            if (state.isDelivery && !address) {
                alert('Silakan masukkan alamat pengiriman lengkap Anda.');
                document.getElementById('cust_address').focus();
                return;
            }

            const ongkir = state.isDelivery ? deliveryCost : 0;
            const total = subtotal + ongkir;

            // Create order items text
            let itemsText = '';
            if (state.refill_biasa > 0) {
                itemsText += `- Refill Galon Biasa: ${state.refill_biasa} x Rp 6.000\n`;
            }
            if (state.refill_premium > 0) {
                itemsText += `- Refill Galon Premium (Aqua/Cleo): ${state.refill_premium} x Rp 8.000\n`;
            }
            if (state.galon_baru > 0) {
                itemsText += `- Galon Baru + Isi: ${state.galon_baru} x Rp 50.000\n`;
            }
            if (state.pompa_elektrik > 0) {
                itemsText += `- Pompa Galon Elektrik: ${state.pompa_elektrik} x Rp 35.000\n`;
            }

            // Formulate WA message
            let waText = `*Pemesanan Air Galon El-Furqon*\n\n`;
            waText += `Halo Depot El-Furqon, saya ingin memesan:\n${itemsText}\n`;
            waText += `*Metode:* ${state.isDelivery ? 'Antar Ke Rumah' : 'Ambil Sendiri'}\n`;
            if (state.isDelivery) {
                waText += `*Alamat:* ${address}\n`;
            }
            waText += `*Nama Pelanggan:* ${name}\n`;
            waText += `*Metode Bayar:* ${state.paymentMethod === 'qris' ? 'QRIS (Bayar Instan)' : 'Bayar di Tempat (COD)'}\n`;
            if (notes) {
                waText += `*Catatan:* ${notes}\n`;
            }
            waText += `\n*Rincian Harga:*\n- Subtotal: Rp ${subtotal.toLocaleString('id-ID')}\n- Ongkir: Rp ${ongkir.toLocaleString('id-ID')}\n*Total Tagihan: Rp ${total.toLocaleString('id-ID')}*\n\n`;
            
            if (state.paymentMethod === 'qris') {
                if (!state.qrisConfirmed) {
                    state.qrisConfirmed = true;
                    
                    const statusBlock = document.getElementById('qris_checkout_status');
                    const statusTotal = document.getElementById('qris_status_total');
                    const btnCheckoutText = document.getElementById('btn_checkout_text');
                    const btnCheckoutIcon = document.getElementById('btn_checkout_icon');
                    const btnCheckout = document.getElementById('btn_checkout');

                    if (statusTotal) statusTotal.innerText = 'Rp ' + total.toLocaleString('id-ID');
                    if (statusBlock) statusBlock.classList.remove('hidden');
                    
                    if (btnCheckoutText) btnCheckoutText.innerText = "Kirim Bukti ke WhatsApp";
                    if (btnCheckoutIcon) {
                        btnCheckoutIcon.setAttribute('data-lucide', 'message-square-plus');
                    }
                    if (btnCheckout) {
                        btnCheckout.classList.remove('bg-blue-600', 'hover:bg-blue-500');
                        btnCheckout.classList.add('bg-emerald-600', 'hover:bg-emerald-500');
                    }
                    lucide.createIcons();
                    
                    document.getElementById('div_qris_panel').scrollIntoView({ behavior: 'smooth' });
                } else {
                    saveOrderToDatabase(function() {
                        waText += `*(Saya telah melakukan transfer via QRIS dan menyertakan bukti pembayaran di chat ini)*\n\n`;
                        waText += `Terima kasih!`;
                        
                        const encodedText = encodeURIComponent(waText);
                        const waUrl = `https://wa.me/6282280718889?text=${encodedText}`;
                        window.open(waUrl, '_blank');
                        
                        resetQrisConfirmation();
                    });
                }
            } else {
                saveOrderToDatabase(function() {
                    waText += `Terima kasih!`;
                    const encodedText = encodeURIComponent(waText);
                    const waUrl = `https://wa.me/6282280718889?text=${encodedText}`;
                    window.open(waUrl, '_blank');
                });
            }
        }

        // 5. Testimonial Slider Controls
        let currentSlide = 0;
        const totalSlides = 3;
        const slider = document.getElementById('testimonialSlider');
        const dots = document.querySelectorAll('.slider-dot');

        function updateSlider() {
            slider.style.transform = `translateX(-${currentSlide * 100}%)`;
            dots.forEach((dot, index) => {
                if (index === currentSlide) {
                    dot.classList.add('bg-blue-600', 'w-6');
                    dot.classList.remove('bg-slate-300', 'w-2');
                } else {
                    dot.classList.add('bg-slate-300', 'w-2');
                    dot.classList.remove('bg-blue-600', 'w-6');
                }
            });
        }

        function slideNext() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }

        function slidePrev() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }

        function setSlide(index) {
            currentSlide = index;
            updateSlider();
        }

        // Auto slide every 7 seconds
        setInterval(slideNext, 7000);

        // 6. FAQ Accordion Toggle
        function toggleFaq(id) {
            const content = document.getElementById(`faqContent_${id}`);
            const icon = document.getElementById(`faqIcon_${id}`);
            
            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0px';
                icon.style.transform = 'rotate(0deg)';
                icon.setAttribute('data-lucide', 'plus');
            } else {
                for(let i=1; i<=4; i++) {
                    const otherContent = document.getElementById(`faqContent_${i}`);
                    const otherIcon = document.getElementById(`faqIcon_${i}`);
                    if(otherContent && i !== id) {
                        otherContent.style.maxHeight = '0px';
                        otherIcon.style.transform = 'rotate(0deg)';
                        otherIcon.setAttribute('data-lucide', 'plus');
                    }
                }
                
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.style.transform = 'rotate(45deg)';
                icon.setAttribute('data-lucide', 'plus');
            }
            lucide.createIcons();
        }

        // 7. Copy Address Clipboard Function
        function copyAddress() {
            const addressText = "68PH+P4F, Jetis, Tirtoadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55287";
            navigator.clipboard.writeText(addressText).then(() => {
                const btnText = document.getElementById('copyText');
                const copyIcon = document.getElementById('copyIcon');
                
                btnText.innerText = "Tersalin!";
                copyIcon.setAttribute('data-lucide', 'check');
                lucide.createIcons();
                
                setTimeout(() => {
                    btnText.innerText = "Salin Alamat";
                    copyIcon.setAttribute('data-lucide', 'copy');
                    lucide.createIcons();
                }, 2000);
            }).catch(err => {
                console.error("Gagal menyalin alamat: ", err);
            });
        }
    </script>
</body>
</html>
