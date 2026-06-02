<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Hamro Koseli</title>

    <!-- Google Fonts for Luxury Artisanal Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Theme Customization (Earthy and Artisan Brand Colors) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        serif: ['"Playfair Display"', 'serif'],
                    },
                    colors: {
                        brand: {
                            primary: '#b55b3d',    /* Handcrafted Clay / Terracotta */
                            secondary: '#2a5c43',  /* Deep Forest Green */
                            cream: '#F5E8D6',      /* Brand Peach/Pink Background */
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

<body class="bg-[#F4EAE1] text-brand-dark font-sans leading-relaxed">

    <!-- Header / Navbar -->
    <?php include('header.php'); ?>

    <!-- Hero Section (Full-Width, Dark & Immersive) -->
    <section class="relative h-[65vh] min-h-[480px] w-full flex items-center justify-start bg-cover bg-center overflow-hidden" style="background-image: url('1st image.png');">
        <!-- Dark overlay with warm copper tone tint -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent"></div>
        
        <div class="container mx-auto px-6 md:px-12 max-w-6xl relative z-10 text-white">
            <span class="text-[#e5b842] text-xs font-bold uppercase tracking-[0.25em] block mb-3">The Heritage of Nepal</span>
            <h1 class="text-4xl md:text-6xl font-serif font-bold leading-[1.15] max-w-3xl mb-6">
                Crafting a bridge between tradition and the modern world.
            </h1>
            <p class="text-gray-300 text-sm md:text-base max-w-xl leading-relaxed font-light">
                Empowering local artisans by showcasing their unique handmade creations, preserving rich cultural heritage, and supporting sustainable livelihoods.
            </p>
        </div>
    </section>

    <!-- Story Section (Staggered Grid) -->
    <section class="container mx-auto px-6 md:px-12 max-w-6xl py-20 space-y-24">
        
        <!-- Row 1: Our Heritage -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Text Column -->
            <div class="space-y-6">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-brand-dark leading-tight">Our Heritage</h2>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    For generations, the artisans of Nepal have crafted beautiful and meaningful works of art. From intricate wood carvings to hand-woven textiles, each piece tells a unique story. At Hamro Koseli, we are proud to share these stories with the world, connecting you with the artisans behind them.
                </p>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    Every product is selected with great care, focusing on authentic materials, traditional skills, and the preservation of Nepalese artistic lineage.
                </p>
            </div>
            
            <!-- Right Image Column (Landscape) -->
            <div class="relative group">
                <div class="absolute -inset-1 bg-brand-primary/10 rounded-2xl blur-sm transition duration-500 group-hover:bg-brand-primary/20"></div>
                <img src="2nd image.png" 
                     class="relative w-full h-[320px] object-cover rounded-2xl shadow-lg transform transition duration-500 hover:scale-[1.01]" 
                     alt="Traditional Weaving Loom">
            </div>
        </div>

        <!-- Row 2: The Artisan's Spirit -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Image Column (Landscape of Clay Pots) -->
            <div class="relative group order-last md:order-first">
                <div class="absolute -inset-1 bg-brand-primary/10 rounded-2xl blur-sm transition duration-500 group-hover:bg-brand-primary/20"></div>
                <img src="3rd image handmade pots.png" 
                     class="relative w-full h-[320px] object-cover rounded-2xl shadow-lg transform transition duration-500 hover:scale-[1.01]" 
                     alt="Handmade Clay Pots">
            </div>
            
            <!-- Right Card Text Column -->
            <div class="bg-[#E0D5C5] rounded-2xl p-8 md:p-10 shadow-md border border-gray-200/30 space-y-6">
                <h2 class="text-2xl md:text-3xl font-serif font-bold text-brand-dark leading-tight">The Artisan's Spirit</h2>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    Every piece tells a story of dedication, passion, and skill. By supporting our artisans, you help preserve these traditional crafts for future generations and support sustainable livelihoods.
                </p>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed font-light">
                    Our network supports over 500 family-run workshops, enabling them to thrive while passing their ancestral arts onto younger generations.
                </p>
            </div>
        </div>
    </section>

    <!-- "Empowering Artisans" Card Section -->
    <section class="container mx-auto px-6 md:px-12 max-w-6xl py-12">
        <div class="bg-[#E0D5C5] rounded-3xl p-8 md:p-12 shadow-lg border border-gray-200/30 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Image Column with Custom Shadow/Offset Backdrop -->
            <div class="lg:col-span-5 flex justify-center lg:justify-start">
                <div class="relative w-[85%] md:w-[75%] lg:w-full max-w-[340px]">
                    <!-- Creative offset backdrop element -->
                    <div class="absolute bottom-[-15px] right-[-15px] w-full h-full bg-[#5c4a43] rounded-2xl z-0"></div>
                    <!-- Main Image -->
                    <img src="4th image.png" 
                         class="relative z-10 w-full h-[380px] object-cover rounded-2xl shadow-md border border-white/50" 
                         alt="Smiling Nepali Artisan">
                </div>
            </div>
            
            <!-- Right Content Column -->
            <div class="lg:col-span-7 space-y-6">
                <h2 class="text-3xl font-serif font-bold text-brand-primary">Empowering Artisans</h2>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    By providing direct access to global markets and fair pricing, we support local communities and promote the preservation of sustainable crafting traditions. We work side-by-side with master makers.
                </p>
                
                <!-- Checkmark list -->
                <ul class="space-y-4 pt-2">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#fceae4] flex items-center justify-center text-brand-primary">
                            <i class="bi bi-check-lg text-sm font-bold"></i>
                        </span>
                        <p class="text-gray-700 text-sm font-medium">Direct-to-consumer access, maximizing artisan income.</p>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#fceae4] flex items-center justify-center text-brand-primary">
                            <i class="bi bi-check-lg text-sm font-bold"></i>
                        </span>
                        <p class="text-gray-700 text-sm font-medium">Digital literacy training and professional product photography support.</p>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#fceae4] flex items-center justify-center text-brand-primary">
                            <i class="bi bi-check-lg text-sm font-bold"></i>
                        </span>
                        <p class="text-gray-700 text-sm font-medium">Financial management resources for small-scale makers.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- "The HamroKoseli Promise" Section -->
    <section class="container mx-auto px-6 md:px-12 max-w-6xl py-20 text-center space-y-12">
        <h2 class="text-3xl font-serif font-bold text-brand-primary">The HamroKoseli Promise</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
            <!-- Pillar 1: Unrivaled Quality -->
            <div class="flex flex-col items-center space-y-4 p-4 transform hover:-translate-y-1 transition duration-300">
                <div class="w-16 h-16 rounded-full bg-rose-50 flex items-center justify-center text-rose-500 shadow-sm">
                    <i class="bi bi-patch-check-fill text-2xl"></i>
                </div>
                <h3 class="text-xl font-serif font-bold text-brand-dark">Unrivaled Quality</h3>
                <p class="text-gray-600 text-sm leading-relaxed max-w-xs mx-auto">
                    We verify every artisan and vendor to ensure only genuine, high-quality handcrafted products reach your doorstep.
                </p>
            </div>
            
            <!-- Pillar 2: Fair Trade Ethics -->
            <div class="flex flex-col items-center space-y-4 p-4 transform hover:-translate-y-1 transition duration-300">
                <div class="w-16 h-16 rounded-full bg-teal-50 flex items-center justify-center text-teal-600 shadow-sm">
                    <i class="bi bi-cash-coin text-2xl"></i>
                </div>
                <h3 class="text-xl font-serif font-bold text-brand-dark">Fair Trade Ethics</h3>
                <p class="text-gray-600 text-sm leading-relaxed max-w-xs mx-auto">
                    Artisans set their own prices. We believe in complete financial transparency, empowering small-scale rural micro-entrepreneurs.
                </p>
            </div>
            
            <!-- Pillar 3: Sustainable Impact -->
            <div class="flex flex-col items-center space-y-4 p-4 transform hover:-translate-y-1 transition duration-300">
                <div class="w-16 h-16 rounded-full bg-amber-50 flex items-center justify-center text-amber-600 shadow-sm">
                    <i class="bi bi-heart-fill text-2xl"></i>
                </div>
                <h3 class="text-xl font-serif font-bold text-brand-dark">Sustainable Impact</h3>
                <p class="text-gray-600 text-sm leading-relaxed max-w-xs mx-auto">
                    We focus on eco-friendly materials and traditional methods that protect the environment and support local economies.
                </p>
            </div>
        </div>
    </section>

    <!-- Call-to-Action (CTA) Banner Section -->
    <section class="container mx-auto px-6 md:px-12 max-w-6xl pb-24">
        <div class="relative rounded-3xl overflow-hidden bg-[#241e1c] py-16 px-8 text-center shadow-lg">
            <!-- Subtle warm background image or gradient overlay -->
            <div class="absolute inset-0 bg-cover bg-center opacity-70" style="background-image: url('5th image.png');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/60"></div>
            
            <div class="relative z-10 max-w-2xl mx-auto space-y-6">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-white">Join our family of fine makers</h2>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed">
                    Are you an artisan or maker looking to share your crafts with the world? We'd love to help you grow your business and share your work globally.
                </p>
                <div class="pt-4">
                    <a href="become-seller.php" class="inline-block bg-[#e5b842] hover:bg-[#d4a833] text-brand-dark font-semibold px-8 py-3 rounded-full shadow-md transition duration-300 transform hover:scale-105">
                        Become a Seller
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Clean Tailwind Footer -->
    <?php include('footer.php'); ?>

</body>

</html>