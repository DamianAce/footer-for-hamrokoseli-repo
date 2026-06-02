<!-- ===== HEADER STYLES ===== -->
<style>
    /* Sticky header */
    #site-header {
        position: sticky;
        top: 0;
        z-index: 9999;
        width: 100%;
    }

    /* Hide scrollbar on sub-nav */
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

    /* Mobile drawer */
    #mobile-drawer {
        position: fixed;
        top: 0;
        left: -100%;
        width: 80%;
        max-width: 320px;
        height: 100vh;
        background: #1f3d2e;
        z-index: 99999;
        transition: left 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        overflow-y: auto;
        box-shadow: 4px 0 24px rgba(0,0,0,0.35);
    }
    #mobile-drawer.open { left: 0; }

    /* Overlay */
    #drawer-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.55);
        z-index: 99998;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.35s;
    }
    #drawer-overlay.open { opacity: 1; pointer-events: all; }

    /* Nav link hover underline */
    .subnav-link {
        position: relative;
        white-space: nowrap;
    }
    .subnav-link::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background: #fff;
        transition: width 0.25s;
    }
    .subnav-link:hover::after { width: 100%; }

    /* Mobile nav link style */
    .mob-nav-link {
        display: block;
        padding: 13px 20px;
        color: rgba(255,255,255,0.88);
        font-size: 15px;
        font-weight: 600;
        border-bottom: 1px solid rgba(255,255,255,0.08);
        transition: background 0.2s, color 0.2s;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .mob-nav-link:hover { background: rgba(255,255,255,0.08); color: #fff; }

    /* Search bar focus glow */
    .search-wrap:focus-within {
        box-shadow: 0 0 0 2px rgba(31,61,46,0.35);
    }
</style>

<!-- ===== HEADER ===== -->
<header id="site-header">

    <!-- 1. Top Thin Bar (hidden on very small screens to save space) -->
    <div class="bg-[#F5E8D6] text-[#2c2523] text-[11px] font-medium py-1.5 px-4 border-b border-[#ebd7be] hidden sm:block">
        <div class="max-w-7xl mx-auto flex items-center justify-between gap-2">
            <!-- Left -->
            <a href="become-seller.php" class="flex items-center gap-1.5 hover:text-[#b55b3d] transition-colors">
                <i class="fa-solid fa-house text-[#b55b3d]"></i>
                <span>Sell on Hamro Koseli</span>
            </a>
            <!-- Right -->
            <div class="flex items-center gap-3">
                <a href="become-seller.php" class="hover:text-[#b55b3d] transition-colors">Become a Seller</a>
                <span class="text-gray-400">|</span>
                <span>Support local artisans &bull; Free shipping on orders over Rs.999</span>
            </div>
        </div>
    </div>

    <!-- 2. Main Navbar -->
    <div class="bg-[#1f3d2e] text-white px-4 py-3 border-b border-emerald-950/40">
        <div class="max-w-7xl mx-auto flex items-center justify-between gap-3">

            <!-- LEFT: Hamburger (mobile) + Logo -->
            <div class="flex items-center gap-3">
                <!-- Hamburger button – visible only on mobile -->
                <button id="hamburger-btn"
                    class="md:hidden text-white hover:text-emerald-200 transition-colors p-1 shrink-0"
                    aria-label="Open menu" aria-expanded="false">
                    <svg id="icon-menu" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                <!-- Logo -->
                <a href="index.php" class="flex items-center gap-2.5 group shrink-0">
                    <img src="Assets/logo.jpeg" alt="Hamro Koseli Logo"
                        class="w-10 h-10 object-contain rounded-full shadow-md transform group-hover:scale-105 transition duration-300">
                    <div>
                        <div class="font-serif text-lg md:text-xl font-black tracking-wide leading-none text-white"
                            style="font-family:'Playfair Display',serif;">HAMRO KOSELI</div>
                        <span class="text-[9px] text-emerald-200/90 tracking-wide font-medium hidden sm:block">Special Koseli for Special People</span>
                    </div>
                </a>
            </div>

            <!-- CENTER: Search bar (visible on md+; collapses on mobile) -->
            <div class="search-wrap hidden md:flex flex-1 max-w-lg mx-4 items-center bg-[#FDFBF7] rounded-full px-4 py-2 border border-emerald-950/10 shadow-inner">
                <i class="fa-solid fa-magnifying-glass text-slate-400 mr-2"></i>
                <input type="text" id="desktop-search" placeholder="Search Products....."
                    class="w-full bg-transparent border-0 focus:outline-none text-sm text-slate-800 placeholder-slate-400 font-medium"
                    style="font-family:'Plus Jakarta Sans',sans-serif;">
            </div>

            <!-- RIGHT: Actions -->
            <div class="flex items-center gap-3 shrink-0">
                <!-- Sign In – hidden on mobile (available inside drawer) -->
                <a href="login.php" id="desktop-signin"
                    class="hidden md:inline-flex rounded-full border border-white/90 text-white font-semibold px-5 py-1.5 text-sm hover:bg-white hover:text-[#1f3d2e] transition-all duration-300 active:scale-95 shadow-sm">
                    Sign In
                </a>

                <!-- Icons -->
                <div class="flex items-center gap-3 text-white text-lg">
                    <!-- Search icon (mobile only) -->
                    <button id="mobile-search-btn" class="md:hidden hover:text-emerald-200 transition-colors p-1" aria-label="Search">
                        <i class="fa-solid fa-magnifying-glass text-base"></i>
                    </button>
                    <!-- Wishlist -->
                    <a href="wishlist.php" class="hover:text-emerald-200 transition-colors p-1" title="Wishlist">
                        <i class="fa-regular fa-heart"></i>
                    </a>
                    <!-- Cart -->
                    <a href="cart.php" class="hover:text-emerald-200 transition-colors p-1 relative" title="Cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </div>

        </div>

        <!-- Mobile search bar (slides down when toggled) -->
        <div id="mobile-search-bar" class="hidden md:hidden mt-2 max-w-full">
            <div class="search-wrap flex items-center bg-[#FDFBF7] rounded-full px-4 py-2 border border-emerald-950/10 shadow-inner">
                <i class="fa-solid fa-magnifying-glass text-slate-400 mr-2"></i>
                <input type="text" id="mobile-search" placeholder="Search Products....."
                    class="w-full bg-transparent border-0 focus:outline-none text-sm text-slate-800 placeholder-slate-400 font-medium"
                    style="font-family:'Plus Jakarta Sans',sans-serif;">
            </div>
        </div>
    </div>

    <!-- 3. Sub-Navbar (desktop only) -->
    <div class="bg-[#1f3d2e] px-4 py-2 hidden md:block">
        <div class="max-w-7xl mx-auto flex items-center">
            <!-- Hamburger for categories -->
            <button class="text-white hover:text-emerald-200 mr-5 transition-colors p-1" title="All Categories">
                <i class="fa-solid fa-bars text-lg"></i>
            </button>
            <!-- Nav Links -->
            <nav class="flex items-center space-x-6 overflow-x-auto no-scrollbar text-white/90 text-xs sm:text-sm font-semibold tracking-wide"
                style="font-family:'Plus Jakarta Sans',sans-serif;">
                <a href="index.php"          class="subnav-link hover:text-white transition-all">Home</a>
                <a href="categories.php"     class="subnav-link hover:text-white transition-all">Category</a>
                <a href="shop.php"           class="subnav-link hover:text-white transition-all">Shop</a>
                <a href="#todays-deals"      class="subnav-link hover:text-white transition-all">Today's Deals</a>
                <a href="#featured-products" class="subnav-link hover:text-white transition-all">Featured Products</a>
                <a href="#top-sellers"       class="subnav-link hover:text-white transition-all">Top Sellers</a>
                <a href="new-arrivals.php"   class="subnav-link hover:text-white transition-all">New Arrivals</a>
            </nav>
        </div>
    </div>

</header>

<!-- ===== OVERLAY ===== -->
<div id="drawer-overlay" aria-hidden="true"></div>

<!-- ===== MOBILE DRAWER ===== -->
<aside id="mobile-drawer" aria-label="Mobile Navigation" role="dialog">
    <!-- Drawer header -->
    <div class="flex items-center justify-between px-5 py-4 border-b border-white/10">
        <div class="flex items-center gap-2.5">
            <img src="Assets/logo.jpeg" alt="Hamro Koseli" class="w-9 h-9 rounded-full object-contain">
            <span class="font-serif font-black text-white text-base" style="font-family:'Playfair Display',serif;">HAMRO KOSELI</span>
        </div>
        <!-- Close button -->
        <button id="close-drawer-btn" class="text-white/80 hover:text-white transition-colors p-1" aria-label="Close menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Login / Signup buttons in drawer -->
    <div class="flex gap-3 px-5 py-4 border-b border-white/10">
        <a href="login.php"
            class="flex-1 text-center rounded-full border border-white text-white font-semibold py-2 text-sm hover:bg-white hover:text-[#1f3d2e] transition-all duration-300">
            Login
        </a>
        <a href="signup.php"
            class="flex-1 text-center rounded-full bg-white text-[#1f3d2e] font-semibold py-2 text-sm hover:bg-emerald-100 transition-all duration-300">
            Sign Up
        </a>
    </div>

    <!-- Navigation links -->
    <nav>
        <a href="index.php"          class="mob-nav-link"><i class="fa-solid fa-house w-5 mr-2 opacity-70"></i>Home</a>
        <a href="categories.php"     class="mob-nav-link"><i class="fa-solid fa-grid-2 w-5 mr-2 opacity-70"></i>Category</a>
        <a href="shop.php"           class="mob-nav-link"><i class="fa-solid fa-bag-shopping w-5 mr-2 opacity-70"></i>Shop</a>
        <a href="#todays-deals"      class="mob-nav-link"><i class="fa-solid fa-tag w-5 mr-2 opacity-70"></i>Today's Deals</a>
        <a href="#featured-products" class="mob-nav-link"><i class="fa-solid fa-star w-5 mr-2 opacity-70"></i>Featured Products</a>
        <a href="#top-sellers"       class="mob-nav-link"><i class="fa-solid fa-medal w-5 mr-2 opacity-70"></i>Top Sellers</a>
        <a href="new-arrivals.php"   class="mob-nav-link"><i class="fa-solid fa-sparkles w-5 mr-2 opacity-70"></i>New Arrivals</a>
        <a href="become-seller.php"  class="mob-nav-link"><i class="fa-solid fa-store w-5 mr-2 opacity-70"></i>Become a Seller</a>
    </nav>

    <!-- Support note at bottom -->
    <div class="px-5 py-4 mt-2 text-emerald-200/70 text-xs text-center">
        Support local artisans &bull; Free shipping on orders over Rs.999
    </div>
</aside>

<!-- ===== HEADER SCRIPTS ===== -->
<script>
(function () {
    const hamburger     = document.getElementById('hamburger-btn');
    const drawer        = document.getElementById('mobile-drawer');
    const overlay       = document.getElementById('drawer-overlay');
    const closeBtn      = document.getElementById('close-drawer-btn');
    const mobileSearchBtn = document.getElementById('mobile-search-btn');
    const mobileSearchBar = document.getElementById('mobile-search-bar');
    const mobileSearchInput = document.getElementById('mobile-search');

    function openDrawer() {
        drawer.classList.add('open');
        overlay.classList.add('open');
        hamburger.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
        drawer.classList.remove('open');
        overlay.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    hamburger.addEventListener('click', openDrawer);
    closeBtn.addEventListener('click', closeDrawer);
    overlay.addEventListener('click', closeDrawer);

    // Close drawer on nav link click (smooth UX)
    drawer.querySelectorAll('a').forEach(function(link) {
        link.addEventListener('click', closeDrawer);
    });

    // Escape key closes drawer
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeDrawer();
    });

    // Mobile search toggle
    mobileSearchBtn.addEventListener('click', function() {
        const hidden = mobileSearchBar.classList.contains('hidden');
        mobileSearchBar.classList.toggle('hidden', !hidden);
        if (hidden) {
            mobileSearchInput.focus();
        }
    });
})();
</script>
