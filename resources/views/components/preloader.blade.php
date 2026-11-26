<!-- Floral Paper-Cut Preloader Screen -->
<div id="cafe-preloader" class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-paper-cream transition-all duration-700 select-none">
    
    <!-- Background Paper Pattern & Glow -->
    <div class="absolute inset-0 bg-[radial-gradient(#f8bbd0_1.5px,transparent_1.5px)] [background-size:24px_24px] opacity-60"></div>
    <div class="absolute w-96 h-96 rounded-full bg-pink-200/40 blur-3xl pointer-events-none"></div>

    <!-- Center Card Stage -->
    <div class="relative z-10 flex flex-col items-center p-8 text-center max-w-sm">
        
        <!-- Animated Origami Blooming Flower -->
        <div class="relative w-32 h-32 mb-6 flex items-center justify-center">
            
            <!-- Rotating floral petal halo -->
            <div class="absolute inset-0 rounded-full border-2 border-dashed border-pink-300 animate-[spin_12s_linear_infinite]"></div>
            
            <!-- Pulse glow backdrop ring -->
            <div class="absolute inset-3 rounded-full bg-pink-100/80 shadow-[0_0_30px_rgba(240,98,146,0.25)] animate-pulse"></div>

            <!-- Central Flower Petals with Staggered Scale Animation -->
            <div class="relative w-20 h-20 preloader-bloom">
                <x-paper-flower class="w-full h-full drop-shadow-md" />
            </div>

            <!-- Sparkle accents -->
            <span class="absolute -top-1 -right-1 text-pink-400 text-lg animate-bounce">✦</span>
            <span class="absolute -bottom-1 -left-1 text-pink-400 text-sm animate-bounce [animation-delay:0.5s]">✦</span>
        </div>

        <!-- Typography -->
        <h2 class="font-playfair text-3xl font-bold tracking-tight text-pink-deep leading-tight">
            Sky Mews
        </h2>
        <p class="font-script text-2xl text-pink-rose mt-0.5">
            Crafting Your Floral Experience...
        </p>

        <!-- Paper Cut Animated Progress Bar -->
        <div class="w-48 h-2 bg-pink-100 rounded-full mt-6 overflow-hidden border border-pink-200/80 p-0.5">
            <div id="preloader-bar" class="h-full bg-gradient-to-r from-pink-300 via-pink-500 to-rose-400 rounded-full w-0 transition-all duration-300 ease-out"></div>
        </div>

        <span id="preloader-status" class="font-sans text-[11px] uppercase tracking-widest text-stone-500 font-semibold mt-3">
            Folding Petals & Brewing Teas
        </span>

    </div>

    <!-- Scalloped bottom paper trim -->
    <div class="absolute bottom-0 left-0 right-0 h-4 bg-gradient-to-r from-pink-300 via-pink-400 to-rose-400">
        <div class="scallop-divider w-full"></div>
    </div>
</div>

<style>
@keyframes preloaderBloom {
    0% {
        transform: scale(0.85) rotate(-10deg);
    }
    50% {
        transform: scale(1.1) rotate(10deg);
    }
    100% {
        transform: scale(0.85) rotate(-10deg);
    }
}
.preloader-bloom {
    animation: preloaderBloom 3s ease-in-out infinite;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const preloader = document.getElementById('cafe-preloader');
    const bar = document.getElementById('preloader-bar');
    const statusText = document.getElementById('preloader-status');

    if (preloader && bar) {
        let progress = 0;
        const messages = [
            'Folding Petals & Paper Arches...',
            'Chilling Lychee Coolers...',
            'Steaming Truffle Dimsums...',
            'Welcome to Sky Mews!'
        ];

        const interval = setInterval(() => {
            progress += Math.floor(Math.random() * 25) + 15;
            if (progress >= 100) {
                progress = 100;
                bar.style.width = '100%';
                if (statusText) statusText.innerText = messages[3];
                clearInterval(interval);

                setTimeout(() => {
                    preloader.style.opacity = '0';
                    preloader.style.transform = 'scale(1.04)';
                    setTimeout(() => {
                        preloader.style.display = 'none';
                    }, 700);
                }, 350);
            } else {
                bar.style.width = progress + '%';
                const msgIndex = Math.min(Math.floor((progress / 100) * (messages.length - 1)), messages.length - 2);
                if (statusText) statusText.innerText = messages[msgIndex];
            }
        }, 120);
    }
});
</script>
