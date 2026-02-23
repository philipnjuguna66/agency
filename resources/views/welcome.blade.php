<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fanaka Real Estate | Agency Portal - Become a Partner</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --fanaka-navy: #292974;
            --fanaka-green: #00a65a;
        }
        .bg-fanaka-navy { background-color: var(--fanaka-navy); }
        .bg-fanaka-green { background-color: var(--fanaka-green); }
        .text-fanaka-navy { color: var(--fanaka-navy); }
        .text-fanaka-green { color: var(--fanaka-green); }
        .border-fanaka-navy { border-color: var(--fanaka-navy); }

        .btn-navy { background-color: var(--fanaka-navy); transition: all 0.3s ease; }
        .btn-navy:hover { background-color: #1a1a5a; transform: translateY(-2px); }

        .btn-green { background-color: var(--fanaka-green); transition: all 0.3s ease; }
        .btn-green:hover { background-color: #008d4c; transform: translateY(-2px); }

        .hero-gradient {
            background: linear-gradient(rgba(41, 41, 116, 0.95), rgba(41, 41, 116, 0.85)), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
        }

        .portal-card {
            border-left: 6px solid var(--fanaka-green);
        }
    </style>
</head>
<body class="bg-slate-50 text-gray-800 font-sans">

<!-- Navigation -->
<nav class="bg-white shadow-sm py-4 sticky top-0 z-50">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <div class="w-10 h-10 bg-fanaka-navy rounded-full flex items-center justify-center text-white">
                <i class="fas fa-handshake"></i>
            </div>
            <span class="text-xl font-bold tracking-tight text-fanaka-navy uppercase">Fanaka Agency Portal</span>
        </div>
        <div class="hidden md:flex items-center space-x-6">
            <a href="/app" class="btn-navy text-white px-6 py-2 rounded-lg font-bold transition-all">
                Partner Login
            </a>
            <a href="https://wa.me/254700111172" target="_blank" class="text-fanaka-green font-bold flex items-center space-x-2">
                <i class="fab fa-whatsapp"></i>
                <span>Support</span>
            </a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<header class="relative py-20 lg:py-32 overflow-hidden hero-gradient text-white">
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <!-- Hero Content -->
            <div class="lg:w-1/2 text-center lg:text-left">
                <span class="inline-block bg-white/10 text-fanaka-green px-4 py-1 rounded-full text-sm font-bold mb-6 border border-fanaka-green/30 uppercase tracking-widest">
                    Official Agency Gateway
                </span>
                <h1 class="text-4xl lg:text-6xl font-extrabold mb-8 leading-tight">
                    Empowering Our <span class="text-fanaka-green">Partners</span> to Build Wealth
                </h1>
                <p class="text-xl text-blue-50 mb-10 leading-relaxed opacity-90">
                    The Fanaka Agency Portal is a specialized tool for our authorized agents to manage listings, track payouts, and access verified title documents in real-time.
                </p>
                <div class="hidden lg:grid grid-cols-2 gap-4">
                    <div class="flex items-center space-x-3 bg-white/5 p-4 rounded-xl border border-white/10">
                        <i class="fas fa-file-invoice-dollar text-fanaka-green text-xl"></i>
                        <span class="text-sm font-medium">Real-time Commission Tracking</span>
                    </div>
                    <div class="flex items-center space-x-3 bg-white/5 p-4 rounded-xl border border-white/10">
                        <i class="fas fa-map-marked-alt text-fanaka-green text-xl"></i>
                        <span class="text-sm font-medium">Interactive Plot Maps</span>
                    </div>
                </div>
            </div>

            <!-- Portal Access Link Card -->
            <div class="lg:w-1/2 w-full max-w-md">
                <div class="bg-white rounded-3xl shadow-2xl p-10 portal-card text-gray-800">
                    <div class="flex justify-center mb-6">
                        <div class="w-20 h-20 bg-slate-50 rounded-2xl flex items-center justify-center text-fanaka-navy text-4xl shadow-inner">
                            <i class="fas fa-user-shield"></i>
                        </div>
                    </div>
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-fanaka-navy">Agency Access</h2>
                        <p class="text-gray-500 mt-2">Authorized personnel only. Secure login via our centralized management system.</p>
                    </div>

                    <div class="space-y-4">
                        <a href="/app" class="group w-full py-5 btn-navy text-white rounded-2xl font-bold text-xl shadow-lg flex items-center justify-center space-x-3">
                            <span>Enter Agency Portal</span>
                            <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                        </a>

                        <p class="text-center text-sm text-gray-400">
                            By clicking, you will be redirected to the secure login environment.
                        </p>
                    </div>

                    <div class="mt-12 pt-8 border-t border-gray-100">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500 italic">Need access?</span>
                            <a href="https://wa.me/254700111172" target="_blank" class="text-fanaka-green font-bold flex items-center space-x-1 hover:underline">
                                <span>Contact Admin</span>
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Stats Bar -->
<section class="py-12 bg-white border-b relative z-20">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div class="border-r border-gray-100 last:border-0">
                <p class="text-3xl lg:text-4xl font-extrabold text-fanaka-navy">100%</p>
                <p class="text-xs font-bold text-fanaka-green uppercase mt-1 tracking-wider">Commissions Paid</p>
            </div>
            <div class="border-r border-gray-100 last:border-0">
                <p class="text-3xl lg:text-4xl font-extrabold text-fanaka-navy">50+</p>
                <p class="text-xs font-bold text-fanaka-green uppercase mt-1 tracking-wider">Active Partners</p>
            </div>
            <div class="border-r border-gray-100 last:border-0">
                <p class="text-3xl lg:text-4xl font-extrabold text-fanaka-navy">15+</p>
                <p class="text-xs font-bold text-fanaka-green uppercase mt-1 tracking-wider">Prime Projects</p>
            </div>
            <div>
                <p class="text-3xl lg:text-4xl font-extrabold text-fanaka-navy">100%</p>
                <p class="text-xs font-bold text-fanaka-green uppercase mt-1 tracking-wider">Title Guarantee</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Partner With Us -->
<section id="benefits" class="py-24">
    <div class="container mx-auto px-6 text-center mb-16">
        <h2 class="text-3xl lg:text-4xl font-bold text-fanaka-navy mb-4 uppercase tracking-tight">Why Partner With <span class="text-fanaka-green">Fanaka?</span></h2>
        <div class="w-24 h-1 bg-fanaka-green mx-auto"></div>
    </div>
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-10 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-16 h-16 bg-fanaka-green/10 rounded-2xl flex items-center justify-center mb-8 text-fanaka-green text-3xl">
                    <i class="fas fa-money-bill-trend-up"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-fanaka-navy">High Commissions</h3>
                <p class="text-gray-600 leading-relaxed">Earn industry-leading commission rates on every plot sold. We value your network and ensure you are rewarded fairly and promptly.</p>
            </div>
            <div class="bg-white p-10 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-16 h-16 bg-fanaka-green/10 rounded-2xl flex items-center justify-center mb-8 text-fanaka-green text-3xl">
                    <i class="fas fa-shield-check"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-fanaka-navy">Ready Title Deeds</h3>
                <p class="text-gray-600 leading-relaxed">Sell with total confidence. Every Fanaka project has a ready title deed. No legal drama—just clean, verifiable land deals for your clients.</p>
            </div>
            <div class="bg-white p-10 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-16 h-16 bg-fanaka-green/10 rounded-2xl flex items-center justify-center mb-8 text-fanaka-green text-3xl">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-fanaka-navy">Marketing Support</h3>
                <p class="text-gray-600 leading-relaxed">Access high-resolution project videos, photos, and brochures directly from your portal to help you close sales in half the time.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-12 bg-fanaka-navy text-white/40">
    <div class="container mx-auto px-6 text-center">
        <div class="mb-6">
            <span class="text-2xl font-bold text-white tracking-widest uppercase">Fanaka Real Estate Ltd</span>
        </div>
        <div class="border-t border-white/5 pt-10 text-xs tracking-widest uppercase">
            &copy; {{ now()->year }} Fanaka Real Estate Ltd. All Rights Reserved.
        </div>
    </div>
</footer>

</body>
</html>
