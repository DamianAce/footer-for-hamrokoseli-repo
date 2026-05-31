<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Hamro Koseli</title>

    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Theme Customization (Earthy and Artisan Brand Colors) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            primary: '#b55b3d',    /* Handcrafted Clay / Terracotta */
                            secondary: '#2a5c43',  /* Deep Forest Green */
                            cream: '#fdfbf7',      /* Soft Warm Ivory Background */
                            dark: '#2c2523',       /* Charcoal Brown for Typography */
                        }
                    }
                }
            }
        }
    </script>

    <!-- Bootstrap Icons for clean, lightweight vector icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="bg-brand-cream text-brand-dark font-sans leading-relaxed">

    <!-- Header / Navbar will be added here -->

    <!-- Brand Header -->
    <header class="py-16 px-4 text-center">
        <span class="text-brand-primary font-semibold tracking-widest text-xs uppercase">About Us</span>
        <h1 class="text-3xl md:text-5xl font-bold font-serif text-brand-dark mt-2">Hamro Koseli</h1>
        <div class="w-20 h-0.5 bg-brand-primary mx-auto mt-4"></div>
        <p class="text-gray-600 text-sm md:text-base max-w-xl mx-auto mt-4 leading-relaxed font-light">
            Connecting local Nepalese artisans with global craft lovers. Preserving heritage, supporting livelihoods,
            and sharing the warmth of handmade love.
        </p>
    </header>

    <!-- Main Content & Mission Section -->
    <main class="container mx-auto px-4 max-w-5xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- Left Text Column -->
            <div class="space-y-6">
                <h2 class="text-2xl md:text-3xl font-bold font-serif text-brand-dark">Empowering Creators, Preserving
                    Culture</h2>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    Hamro Koseli is a curated multi-vendor marketplace built to showcase the remarkable skills of local
                    artisans. From hand-spun wool and clay pottery to intricate woodcarvings, each piece tells a story
                    of generation-spanning craftsmanship.
                </p>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    By bypassing unnecessary middlemen, we ensure that our creators receive fair pricing for their
                    labor, encouraging the continuity of ancient cultural arts in modern times.
                </p>
            </div>

            <!-- Right Clean Image Column -->
            <div class="relative">
                <!-- Warm clay aesthetic border behind the image -->
                <div class="absolute -inset-2 bg-brand-primary/10 rounded-2xl transform rotate-2"></div>
                <img src="aboutus.jpg"
                    class="relative w-full h-80 object-cover rounded-xl shadow-md transform hover:rotate-0 duration-300"
                    alt="Hamro Koseli Artisans">
            </div>

        </div>
    </main>

    <!-- Essential Stats Section (Minimalist & Grid Based) -->
    <section class="container mx-auto px-4 max-w-5xl mt-24">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Stat Card 1 -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 text-center hover:shadow-md transition-shadow">
                <div class="text-brand-primary mb-2"><i class="bi bi-people text-2xl"></i></div>
                <h3 class="text-2xl font-bold text-brand-dark">500+</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider mt-1">Artisans & Vendors</p>
            </div>

            <!-- Stat Card 2 -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 text-center hover:shadow-md transition-shadow">
                <div class="text-brand-primary mb-2"><i class="bi bi-gift text-2xl"></i></div>
                <h3 class="text-2xl font-bold text-brand-dark">10,000+</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider mt-1">Handmade Crafts</p>
            </div>

            <!-- Stat Card 3 -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 text-center hover:shadow-md transition-shadow">
                <div class="text-brand-primary mb-2"><i class="bi bi-geo-alt text-2xl"></i></div>
                <h3 class="text-2xl font-bold text-brand-dark">15+</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider mt-1">Districts Represented</p>
            </div>

            <!-- Stat Card 4 -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 text-center hover:shadow-md transition-shadow">
                <div class="text-brand-primary mb-2"><i class="bi bi-heart-fill text-2xl"></i></div>
                <h3 class="text-2xl font-bold text-brand-dark">100%</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider mt-1">Ethical & Eco-friendly</p>
            </div>

        </div>
    </section>

    <!-- Core Values Section (Clean Rounded Cards) -->
    <section class="container mx-auto px-4 max-w-5xl my-24">
        <h2 class="text-2xl font-bold font-serif text-brand-dark text-center mb-10">Our Core Pillars</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Pillar 1 -->
            <div
                class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 space-y-3 hover:shadow-md transition-shadow duration-300">
                <div class="text-brand-secondary text-lg font-bold flex items-center">
                    <span
                        class="w-8 h-8 bg-brand-secondary/10 rounded-full flex items-center justify-center me-2 text-brand-secondary">
                        <i class="bi bi-shield-check"></i>
                    </span>
                    Authenticity
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    We verify every vendor to ensure all products are genuinely handcrafted by local creators using
                    traditional techniques.
                </p>
            </div>

            <!-- Pillar 2 -->
            <div
                class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 space-y-3 hover:shadow-md transition-shadow duration-300">
                <div class="text-brand-secondary text-lg font-bold flex items-center">
                    <span
                        class="w-8 h-8 bg-brand-secondary/10 rounded-full flex items-center justify-center me-2 text-brand-secondary">
                        <i class="bi bi-cash-coin"></i>
                    </span>
                    Fair Trade
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Artisans price their own work. We believe in complete financial transparency, empowering small-scale
                    rural micro-entrepreneurs.
                </p>
            </div>

            <!-- Pillar 3 -->
            <div
                class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 space-y-3 hover:shadow-md transition-shadow duration-300">
                <div class="text-brand-secondary text-lg font-bold flex items-center">
                    <span
                        class="w-8 h-8 bg-brand-secondary/10 rounded-full flex items-center justify-center me-2 text-brand-secondary">
                        <i class="bi bi-globe"></i>
                    </span>
                    Global Access
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    We handle logistics and digital presence so creators in remote Himalayan regions can reach
                    appreciators worldwide.
                </p>
            </div>

        </div>
    </section>

    <!-- Clean Tailwind Footer -->
    <?php include('footer.php'); ?>

</body>

</html>