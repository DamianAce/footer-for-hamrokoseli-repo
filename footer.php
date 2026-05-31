<!-- Tailwind CSS Play CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Tailwind Theme Customization (Earthy and Artisan Brand Colors) -->
<script>
    tailwind = window.tailwind || {};
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

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
</style>
<!-- Footer -->
<footer class="bg-[#1E2A44] text-slate-300 py-16 mt-auto font-sans">
    <div class="container mx-auto px-6 max-w-5xl">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            
            <!-- Column 1: Brand Info -->
            <div class="space-y-4">
                <h3 class="text-3xl font-bold text-[#b55b3d] font-serif tracking-tight">HamroKoseli</h3>
                <p class="text-slate-300 text-sm leading-relaxed">
                    Preserving Nepal's rich artistic heritage by connecting local master craftspeople with global connoisseurs of authenticity.
                </p>
            </div>
            
            <!-- Column 2: Navigation Links -->
            <div class="space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-widest text-[#b55b3d]">QUICK LINK</h4>
                <ul class="flex flex-col space-y-2.5 text-sm">
                    <li><a href="index.php" class="text-slate-300 hover:text-white transition-colors">Home</a></li>
                    <li><a href="shop.php" class="text-slate-300 hover:text-white transition-colors">Shop</a></li>
                    <li><a href="categories.php" class="text-slate-300 hover:text-white transition-colors">Categories</a></li>
                    <li><a href="about.php" class="text-slate-300 hover:text-white transition-colors">About Us</a></li>
                    <li><a href="privacy.php" class="text-slate-300 hover:text-white transition-colors">Privacy Policy</a></li>
                </ul>
            </div>
            
            <!-- Column 3: Support Links -->
            <div class="space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-widest text-[#b55b3d]">SUPPORT</h4>
                <ul class="flex flex-col space-y-2.5 text-sm">
                    <li><a href="sustainability.php" class="text-slate-300 hover:text-white transition-colors">Sustainability</a></li>
                    <li><a href="wholesale.php" class="text-slate-300 hover:text-white transition-colors">Wholesale</a></li>
                    <li><a href="shipping.php" class="text-slate-300 hover:text-white transition-colors">Shipping Info</a></li>
                    <li><a href="contact.php" class="text-slate-300 hover:text-white transition-colors">Contact Us</a></li>
                </ul>
            </div>
            
            <!-- Column 4: Newsletter -->
            <div class="space-y-4">
                <h4 class="text-xs font-bold uppercase tracking-widest text-[#b55b3d]">NEWSLETTER</h4>
                <p class="text-slate-300 text-sm leading-relaxed">
                    Join our community for stories of craft and culture.
                </p>
                <div class="flex items-center bg-[#F2E7D9] rounded-full p-0.5 max-w-[260px] w-full">
                    <input type="email" placeholder="Email Address" class="bg-transparent pl-4 pr-2 py-1.5 text-slate-800 placeholder-slate-500 focus:outline-none w-full text-xs font-medium">
                    <button class="bg-[#b55b3d] text-white rounded-full w-8 h-8 flex items-center justify-center hover:bg-[#a04e33] transition-colors shrink-0">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
                <div class="pt-1">
                    <a href="become-seller.php" class="text-[#b55b3d] hover:text-[#a04e33] text-sm font-semibold underline underline-offset-4 transition-colors">Become a Seller</a>
                </div>
            </div>
            
        </div>
        
        <!-- Bottom Bar -->
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 mt-16 pt-8 border-t border-slate-700/30">
            <p class="text-xs text-slate-400">
                &copy; 2024 HamroKoseli. Preserving Nepalese heritage through authentic craftsmanship.
            </p>
            <div class="flex items-center space-x-6">
                <a href="#" class="text-[#b55b3d] hover:text-[#a04e33] transition-colors text-lg">
                    <i class="fa-solid fa-globe"></i>
                </a>
                <a href="#" class="text-[#b55b3d] hover:text-[#a04e33] transition-colors text-lg">
                    <i class="fa-solid fa-share-nodes"></i>
                </a>
                <a href="#" class="text-[#b55b3d] hover:text-[#a04e33] transition-colors text-lg">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</footer>