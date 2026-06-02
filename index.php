<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamro Koseli - Discover Authentic Nepalese Artisan Crafts</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Theme Customization -->
    <script>
        tailwind = window.tailwind || {};
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
                            secondary: '#1f3d2e',  /* Deep Forest Green */
                            cream: '#F5E8D6',      /* Brand Peach/Pink Background */
                            dark: '#2c2523',       /* Charcoal Brown for Typography */
                        }
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-[#F4EAE1] text-brand-dark font-sans leading-relaxed flex flex-col min-h-screen">

    <!-- Header / Navbar -->
    <?php include('header.php'); ?>

    <!-- Main Content -->
    <main class="w-full flex-grow">

        <!-- 1. Hero Welcome Banner (Fades downward into the background) -->
        <section class="relative bg-gradient-to-b from-[#1f3d2e] to-transparent text-white pt-16 pb-40 text-center px-6">
            <div class="max-w-4xl mx-auto relative z-10">
                <h2 class="font-serif text-4xl sm:text-5xl md:text-6xl font-bold mb-4 tracking-tight leading-tight">
                    Discover Authentic Artisan Crafts
                </h2>
                <p class="text-emerald-100/90 text-sm sm:text-base md:text-lg mb-8 max-w-xl mx-auto">
                    Support local artisans and find unique, handmade treasures
                </p>
                
                <!-- Shop Now Button -->
                <a href="shop.php" class="bg-[#b55b3d] hover:bg-[#a04f33] text-white font-bold px-8 py-3 rounded-full shadow-md transition duration-300 inline-block tracking-wide">
                    Shop Now
                </a>
            </div>
        </section>

        <!-- 2. Overlapping Product Cards Section -->
        <section class="max-w-7xl mx-auto -mt-24 px-6 mb-16 relative z-20">
            <!-- Flash Sale Badge (Align Left above the cards) -->
            <div class="mb-4 text-left">
                <div class="inline-flex items-center gap-1.5 bg-[#e5b842] text-brand-dark text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-md shadow-sm">
                    <span>Flash Sale - Limited Time</span>
                </div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1: Textiles -->
                <div class="bg-[#FDFBF7] rounded-2xl overflow-hidden shadow-sm border border-amber-900/5 hover:shadow-md transition">
                    <div class="h-64 overflow-hidden bg-slate-100">
                        <img src="Sweaters.png" alt="Textiles" class="w-full h-full object-cover">
                    </div>
                    <div class="p-5">
                        <h4 class="text-slate-500 font-semibold text-[10px] uppercase tracking-wider mb-1">Textile</h4>
                        <h3 class="font-serif text-base font-bold text-brand-dark mb-2">Product Discription.....</h3>
                        <div class="flex items-center gap-2">
                            <span class="text-brand-primary font-bold text-sm">Rs. xxx.xx</span>
                            <span class="text-slate-400 text-xs line-through">Rs. xxx.xx</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Accessories -->
                <div class="bg-[#FDFBF7] rounded-2xl overflow-hidden shadow-sm border border-amber-900/5 hover:shadow-md transition">
                    <div class="h-64 overflow-hidden bg-slate-100">
                        <img src="SunGlass.png" alt="Accessories" class="w-full h-full object-cover">
                    </div>
                    <div class="p-5">
                        <h4 class="text-slate-500 font-semibold text-[10px] uppercase tracking-wider mb-1">Accessories</h4>
                        <h3 class="font-serif text-base font-bold text-brand-dark mb-2">Product Discription.....</h3>
                        <div class="flex items-center gap-2">
                            <span class="text-brand-primary font-bold text-sm">Rs. xxx.xx</span>
                            <span class="text-slate-400 text-xs line-through">Rs. xxx.xx</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Furniture -->
                <div class="bg-[#FDFBF7] rounded-2xl overflow-hidden shadow-sm border border-amber-900/5 hover:shadow-md transition">
                    <div class="h-64 overflow-hidden bg-slate-100">
                        <img src="Table.png" alt="Furniture" class="w-full h-full object-cover">
                    </div>
                    <div class="p-5">
                        <h4 class="text-slate-500 font-semibold text-[10px] uppercase tracking-wider mb-1">Furniture</h4>
                        <h3 class="font-serif text-base font-bold text-brand-dark mb-2">Product Discription.....</h3>
                        <div class="flex items-center gap-2">
                            <span class="text-brand-primary font-bold text-sm">Rs. xxx.xx</span>
                            <span class="text-slate-400 text-xs line-through">Rs. xxx.xx</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Pottery -->
                <div class="bg-[#FDFBF7] rounded-2xl overflow-hidden shadow-sm border border-amber-900/5 hover:shadow-md transition">
                    <div class="h-64 overflow-hidden bg-slate-100">
                        <img src="Pottery.png" alt="Pottery" class="w-full h-full object-cover">
                    </div>
                    <div class="p-5">
                        <h4 class="text-slate-500 font-semibold text-[10px] uppercase tracking-wider mb-1">Pottery</h4>
                        <h3 class="font-serif text-base font-bold text-brand-dark mb-2">Product Discription.....</h3>
                        <div class="flex items-center gap-2">
                            <span class="text-brand-primary font-bold text-sm">Rs. xxx.xx</span>
                            <span class="text-slate-400 text-xs line-through">Rs. xxx.xx</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Shop By Category Section -->
        <section class="max-w-7xl mx-auto px-6 mb-16">
            <div class="flex items-center justify-between mb-8">
                <h3 class="font-serif text-2xl sm:text-3xl font-bold text-brand-dark">Shop by Category</h3>
                <a href="categories.php" class="text-brand-primary hover:text-[#a04f33] font-bold text-sm flex items-center gap-1 transition-colors hover:underline">
                    <span>See All</span>
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Category 1: Pottery -->
                <div class="bg-[#FDFBF7] rounded-2xl overflow-hidden shadow-sm border border-amber-900/5 hover:shadow-md transition group">
                    <div class="h-56 overflow-hidden bg-slate-100">
                        <img src="Pottery and Ceramics.png" alt="Pottery & Ceramics" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="font-serif text-base font-bold text-brand-dark group-hover:text-brand-primary transition-colors">Pottery & Ceramics</h4>
                    </div>
                </div>

                <!-- Category 2: Textile -->
                <div class="bg-[#FDFBF7] rounded-2xl overflow-hidden shadow-sm border border-amber-900/5 hover:shadow-md transition group">
                    <div class="h-56 overflow-hidden bg-slate-100">
                        <img src="Textile and Fabrics.png" alt="Textile & Fabric" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="font-serif text-base font-bold text-brand-dark group-hover:text-brand-primary transition-colors">Textile & Fabric</h4>
                    </div>
                </div>

                <!-- Category 3: Jewelry -->
                <div class="bg-[#FDFBF7] rounded-2xl overflow-hidden shadow-sm border border-amber-900/5 hover:shadow-md transition group">
                    <div class="h-56 overflow-hidden bg-slate-100">
                        <img src="Jewlery and Accessory.png" alt="Jewelry & Accessories" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="font-serif text-base font-bold text-brand-dark group-hover:text-brand-primary transition-colors">Jewelry & Accessories</h4>
                    </div>
                </div>

                <!-- Category 4: Home Decor -->
                <div class="bg-[#FDFBF7] rounded-2xl overflow-hidden shadow-sm border border-amber-900/5 hover:shadow-md transition group">
                    <div class="h-56 overflow-hidden bg-slate-100">
                        <img src="Home Decor.png" alt="Home Decor" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="font-serif text-base font-bold text-brand-dark group-hover:text-brand-primary transition-colors">Home Decor</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Today's Deals Panel -->
        <section id="todays-deals" class="max-w-7xl mx-auto px-6 mb-16">
            <div class="bg-[#E5DCD0]/60 border border-brand-primary/5 rounded-[32px] p-6 sm:p-8 shadow-sm">
                
                <div class="flex items-center justify-between mb-8">
                    <h3 class="font-serif text-2xl sm:text-3xl font-bold text-brand-dark flex items-center gap-2">
                        <span>Today's Deals</span>
                    </h3>
                    <a href="deals.php" class="text-brand-primary hover:text-[#a04f33] font-bold text-sm flex items-center gap-1 transition-colors hover:underline">
                        <span>See All</span>
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Deal Card 1 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-amber-950/5 relative hover:shadow-md transition">
                        <span class="absolute top-3 left-3 bg-[#e5b842] text-brand-dark text-[10px] font-extrabold uppercase px-2.5 py-1 rounded-full z-10 shadow-sm">
                            -20% off
                        </span>
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="Sweaters.png" alt="Deal 1" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <span class="text-slate-400 font-semibold text-[10px] uppercase tracking-wider">Store Name</span>
                            <h4 class="font-serif text-sm font-bold text-brand-dark my-1 truncate">Product Details.....</h4>
                            <div class="flex items-center gap-1 text-[11px] mb-3 text-slate-500">
                                <span class="flex text-amber-500 gap-0.5">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star text-slate-300"></i>
                                </span>
                                <span>(124)</span>
                            </div>
                            <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100">
                                <span class="text-brand-primary font-bold text-sm">Rs. 399.00</span>
                                <button class="bg-[#b55b3d] hover:bg-[#a04f33] text-white text-xs font-semibold px-3 py-1.5 rounded-lg transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Deal Card 2 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-amber-950/5 relative hover:shadow-md transition">
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="SunGlass.png" alt="Deal 2" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <span class="text-slate-400 font-semibold text-[10px] uppercase tracking-wider">Store Name</span>
                            <h4 class="font-serif text-sm font-bold text-brand-dark my-1 truncate">Product Details.....</h4>
                            <div class="flex items-center gap-1 text-[11px] mb-3 text-slate-500">
                                <span class="flex text-amber-500 gap-0.5">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star text-slate-300"></i>
                                </span>
                                <span>(124)</span>
                            </div>
                            <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100">
                                <span class="text-brand-primary font-bold text-sm">Rs. 399.00</span>
                                <button class="bg-[#b55b3d] hover:bg-[#a04f33] text-white text-xs font-semibold px-3 py-1.5 rounded-lg transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Deal Card 3 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-amber-950/5 relative hover:shadow-md transition">
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="Table.png" alt="Deal 3" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <span class="text-slate-400 font-semibold text-[10px] uppercase tracking-wider">Store Name</span>
                            <h4 class="font-serif text-sm font-bold text-brand-dark my-1 truncate">Product Details.....</h4>
                            <div class="flex items-center gap-1 text-[11px] mb-3 text-slate-500">
                                <span class="flex text-amber-500 gap-0.5">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star text-slate-300"></i>
                                </span>
                                <span>(124)</span>
                            </div>
                            <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100">
                                <span class="text-brand-primary font-bold text-sm">Rs. 399.00</span>
                                <button class="bg-[#b55b3d] hover:bg-[#a04f33] text-white text-xs font-semibold px-3 py-1.5 rounded-lg transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Deal Card 4 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-amber-950/5 relative hover:shadow-md transition">
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="Pottery.png" alt="Deal 4" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <span class="text-slate-400 font-semibold text-[10px] uppercase tracking-wider">Store Name</span>
                            <h4 class="font-serif text-sm font-bold text-brand-dark my-1 truncate">Product Details.....</h4>
                            <div class="flex items-center gap-1 text-[11px] mb-3 text-slate-500">
                                <span class="flex text-amber-500 gap-0.5">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star text-slate-300"></i>
                                </span>
                                <span>(124)</span>
                            </div>
                            <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100">
                                <span class="text-brand-primary font-bold text-sm">Rs. 399.00</span>
                                <button class="bg-[#b55b3d] hover:bg-[#a04f33] text-white text-xs font-semibold px-3 py-1.5 rounded-lg transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- 5. Featured Products & Trending Now Split Section -->
        <section id="featured-products" class="max-w-7xl mx-auto px-6 mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                
                <!-- Left Panel: Featured Products (Column span 8) -->
                <div class="lg:col-span-8 bg-[#E5DCD0]/60 border border-brand-primary/5 rounded-[32px] p-6 sm:p-8 shadow-sm">
                    
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="font-serif text-2xl sm:text-3xl font-bold text-brand-dark">Featured Products</h3>
                        <a href="featured.php" class="text-brand-primary hover:text-[#a04f33] font-bold text-sm flex items-center gap-1 transition-colors hover:underline">
                            <span>See All</span>
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Featured Card 1 -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-amber-950/5 relative hover:shadow-md transition">
                            <span class="absolute top-3 left-3 bg-[#b55b3d] text-white text-[10px] font-extrabold uppercase px-3 py-1 rounded-full z-10 shadow-sm">
                                Featured
                            </span>
                            <div class="h-48 overflow-hidden bg-slate-100">
                                <img src="Sweaters.png" alt="Featured 1" class="w-full h-full object-cover">
                            </div>
                            <div class="p-5">
                                <span class="text-slate-400 font-semibold text-[10px] uppercase tracking-wider">Store Name</span>
                                <h4 class="font-serif text-sm font-bold text-brand-dark my-1 truncate">Product Details.....</h4>
                                <div class="flex items-center gap-1 text-[11px] mb-3 text-slate-500">
                                    <span class="flex text-amber-500 gap-0.5">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star text-slate-300"></i>
                                    </span>
                                    <span>(124)</span>
                                </div>
                                <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100">
                                    <span class="text-brand-primary font-bold text-sm">Rs. 399.00</span>
                                    <button class="bg-[#b55b3d] hover:bg-[#a04f33] text-white text-xs font-semibold px-3 py-1.5 rounded-lg transition">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Featured Card 2 -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-amber-950/5 relative hover:shadow-md transition">
                            <div class="h-48 overflow-hidden bg-slate-100">
                                <img src="SunGlass.png" alt="Featured 2" class="w-full h-full object-cover">
                            </div>
                            <div class="p-5">
                                <span class="text-slate-400 font-semibold text-[10px] uppercase tracking-wider">Store Name</span>
                                <h4 class="font-serif text-sm font-bold text-brand-dark my-1 truncate">Product Details.....</h4>
                                <div class="flex items-center gap-1 text-[11px] mb-3 text-slate-500">
                                    <span class="flex text-amber-500 gap-0.5">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star text-slate-300"></i>
                                    </span>
                                    <span>(124)</span>
                                </div>
                                <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100">
                                    <span class="text-brand-primary font-bold text-sm">Rs. 399.00</span>
                                    <button class="bg-[#b55b3d] hover:bg-[#a04f33] text-white text-xs font-semibold px-3 py-1.5 rounded-lg transition">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Featured Card 3 -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-amber-950/5 relative hover:shadow-md transition">
                            <div class="h-48 overflow-hidden bg-slate-100">
                                <img src="Table.png" alt="Featured 3" class="w-full h-full object-cover">
                            </div>
                            <div class="p-5">
                                <span class="text-slate-400 font-semibold text-[10px] uppercase tracking-wider">Store Name</span>
                                <h4 class="font-serif text-sm font-bold text-brand-dark my-1 truncate">Product Details.....</h4>
                                <div class="flex items-center gap-1 text-[11px] mb-3 text-slate-500">
                                    <span class="flex text-amber-500 gap-0.5">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star text-slate-300"></i>
                                    </span>
                                    <span>(124)</span>
                                </div>
                                <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100">
                                    <span class="text-brand-primary font-bold text-sm">Rs. 399.00</span>
                                    <button class="bg-[#b55b3d] hover:bg-[#a04f33] text-white text-xs font-semibold px-3 py-1.5 rounded-lg transition">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Featured Card 4 -->
                        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-amber-950/5 relative hover:shadow-md transition">
                            <span class="absolute top-3 left-3 bg-[#b55b3d] text-white text-[10px] font-extrabold uppercase px-3 py-1 rounded-full z-10 shadow-sm">
                                Featured
                            </span>
                            <div class="h-48 overflow-hidden bg-slate-100">
                                <img src="Pottery.png" alt="Featured 4" class="w-full h-full object-cover">
                            </div>
                            <div class="p-5">
                                <span class="text-slate-400 font-semibold text-[10px] uppercase tracking-wider">Store Name</span>
                                <h4 class="font-serif text-sm font-bold text-brand-dark my-1 truncate">Product Details.....</h4>
                                <div class="flex items-center gap-1 text-[11px] mb-3 text-slate-500">
                                    <span class="flex text-amber-500 gap-0.5">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star text-slate-300"></i>
                                    </span>
                                    <span>(124)</span>
                                </div>
                                <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100">
                                    <span class="text-brand-primary font-bold text-sm">Rs. 399.00</span>
                                    <button class="bg-[#b55b3d] hover:bg-[#a04f33] text-white text-xs font-semibold px-3 py-1.5 rounded-lg transition">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Panel: Trending Now (Column span 4) -->
                <div class="lg:col-span-4 bg-[#E5DCD0]/60 border border-brand-primary/5 rounded-[32px] p-6 sm:p-8 shadow-sm h-fit">
                    <h3 class="font-serif text-2xl font-bold text-brand-dark flex items-center gap-2 mb-6">
                        <span>Trending Now</span>
                    </h3>

                    <div class="space-y-4">
                        <!-- Trending Item 1 -->
                        <div class="flex items-center gap-4 bg-white p-3 rounded-2xl shadow-sm border border-amber-955/5 group transition">
                            <div class="w-16 h-16 rounded-xl overflow-hidden shrink-0 bg-slate-100">
                                <img src="Sweaters.png" alt="Succulent" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-serif text-sm font-bold text-brand-dark group-hover:text-brand-primary transition-colors">Terrarium Garden Kit</h4>
                                <span class="text-brand-primary font-bold text-xs">Rs.550.0</span>
                                <div class="flex items-center gap-1 text-[10px] text-amber-500 font-semibold mt-0.5">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.6</span>
                                </div>
                            </div>
                        </div>

                        <!-- Trending Item 2 -->
                        <div class="flex items-center gap-4 bg-white p-3 rounded-2xl shadow-sm border border-amber-955/5 group transition">
                            <div class="w-16 h-16 rounded-xl overflow-hidden shrink-0 bg-slate-100">
                                <img src="SunGlass.png" alt="Succulent" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-serif text-sm font-bold text-brand-dark group-hover:text-brand-primary transition-colors">Terrarium Garden Kit</h4>
                                <span class="text-brand-primary font-bold text-xs">Rs.550.0</span>
                                <div class="flex items-center gap-1 text-[10px] text-amber-500 font-semibold mt-0.5">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.6</span>
                                </div>
                            </div>
                        </div>

                        <!-- Trending Item 3 -->
                        <div class="flex items-center gap-4 bg-white p-3 rounded-2xl shadow-sm border border-amber-955/5 group transition">
                            <div class="w-16 h-16 rounded-xl overflow-hidden shrink-0 bg-slate-100">
                                <img src="Table.png" alt="Succulent" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-serif text-sm font-bold text-brand-dark group-hover:text-brand-primary transition-colors">Terrarium Garden Kit</h4>
                                <span class="text-brand-primary font-bold text-xs">Rs.550.0</span>
                                <div class="flex items-center gap-1 text-[10px] text-amber-500 font-semibold mt-0.5">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- 6. Top Sellers Section -->
        <section id="top-sellers" class="max-w-7xl mx-auto px-6 mb-20">
            <div class="bg-[#E5DCD0]/60 border border-brand-primary/5 rounded-[32px] p-6 sm:p-10 shadow-sm">
                
                <div class="flex items-center justify-between mb-8">
                    <h3 class="font-serif text-2xl sm:text-3xl font-bold text-brand-dark flex items-center gap-2">
                        <span>Top Sellers</span>
                    </h3>
                    <a href="top-sellers.php" class="text-brand-primary hover:text-[#a04f33] font-bold text-sm flex items-center gap-1 transition-colors hover:underline">
                        <span>See All</span>
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Seller Card 1 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-amber-955/5 relative hover:shadow-md transition">
                        <span class="absolute top-3 left-3 bg-[#e5b842] text-brand-dark text-[10px] font-extrabold uppercase px-2.5 py-1 rounded-full z-10 shadow-sm">
                            -20% off
                        </span>
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="Sweaters.png" alt="Seller 1" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <span class="text-slate-400 font-semibold text-[10px] uppercase tracking-wider">Store Name</span>
                            <h4 class="font-serif text-sm font-bold text-brand-dark my-1 truncate">Product Details.....</h4>
                            <div class="flex items-center gap-1 text-[11px] mb-3 text-slate-500">
                                <span class="flex text-amber-500 gap-0.5">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star text-slate-300"></i>
                                </span>
                                <span>(124)</span>
                            </div>
                            <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100">
                                <span class="text-brand-primary font-bold text-sm">Rs. 399.00</span>
                                <button class="bg-[#b55b3d] hover:bg-[#a04f33] text-white text-xs font-semibold px-3 py-1.5 rounded-lg transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Seller Card 2 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-amber-955/5 relative hover:shadow-md transition">
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="SunGlass.png" alt="Seller 2" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <span class="text-slate-400 font-semibold text-[10px] uppercase tracking-wider">Store Name</span>
                            <h4 class="font-serif text-sm font-bold text-brand-dark my-1 truncate">Product Details.....</h4>
                            <div class="flex items-center gap-1 text-[11px] mb-3 text-slate-500">
                                <span class="flex text-amber-500 gap-0.5">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star text-slate-300"></i>
                                </span>
                                <span>(124)</span>
                            </div>
                            <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100">
                                <span class="text-brand-primary font-bold text-sm">Rs. 399.00</span>
                                <button class="bg-[#b55b3d] hover:bg-[#a04f33] text-white text-xs font-semibold px-3 py-1.5 rounded-lg transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Seller Card 3 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-amber-955/5 relative hover:shadow-md transition">
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="Table.png" alt="Seller 3" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <span class="text-slate-400 font-semibold text-[10px] uppercase tracking-wider">Store Name</span>
                            <h4 class="font-serif text-sm font-bold text-brand-dark my-1 truncate">Product Details.....</h4>
                            <div class="flex items-center gap-1 text-[11px] mb-3 text-slate-500">
                                <span class="flex text-amber-500 gap-0.5">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star text-slate-300"></i>
                                </span>
                                <span>(124)</span>
                            </div>
                            <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100">
                                <span class="text-brand-primary font-bold text-sm">Rs. 399.00</span>
                                <button class="bg-[#b55b3d] hover:bg-[#a04f33] text-white text-xs font-semibold px-3 py-1.5 rounded-lg transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Seller Card 4 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-amber-955/5 relative hover:shadow-md transition">
                        <div class="h-48 overflow-hidden bg-slate-100">
                            <img src="Pottery.png" alt="Seller 4" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <span class="text-slate-400 font-semibold text-[10px] uppercase tracking-wider">Store Name</span>
                            <h4 class="font-serif text-sm font-bold text-brand-dark my-1 truncate">Product Details.....</h4>
                            <div class="flex items-center gap-1 text-[11px] mb-3 text-slate-500">
                                <span class="flex text-amber-500 gap-0.5">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star text-slate-300"></i>
                                </span>
                                <span>(124)</span>
                            </div>
                            <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100">
                                <span class="text-brand-primary font-bold text-sm">Rs. 399.00</span>
                                <button class="bg-[#b55b3d] hover:bg-[#a04f33] text-white text-xs font-semibold px-3 py-1.5 rounded-lg transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php include('footer.php'); ?>

</body>

</html>