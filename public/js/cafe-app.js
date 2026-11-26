document.addEventListener('DOMContentLoaded', () => {
    // 1. Intersection Observer for Scroll Animations
    const animatedElements = document.querySelectorAll('.reveal-on-scroll, .reveal-fade-left, .reveal-fade-right, .reveal-zoom-in');
    
    if ('IntersectionObserver' in window) {
        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -60px 0px',
            threshold: 0.15
        };

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    obs.unobserve(entry.target);
                }
            });
        }, observerOptions);

        animatedElements.forEach(el => observer.observe(el));
    } else {
        // Fallback for older browsers
        animatedElements.forEach(el => el.classList.add('revealed'));
    }

    // 2. Ambient Falling Petals Background Effect
    function createAmbientPetals() {
        const maxPetals = 12;
        for (let i = 0; i < maxPetals; i++) {
            const petal = document.createElement('div');
            petal.className = 'petal-particle';
            
            const size = Math.random() * 12 + 10;
            const left = Math.random() * 95;
            const duration = Math.random() * 8 + 7;
            const delay = Math.random() * 5;
            
            petal.style.width = `${size}px`;
            petal.style.height = `${size * 1.3}px`;
            petal.style.left = `${left}vw`;
            petal.style.animationDuration = `${duration}s`;
            petal.style.animationDelay = `${delay}s`;
            
            document.body.appendChild(petal);
        }
    }
    createAmbientPetals();

    // 3. Menu Category Filter for Menu Tabbed lists
    const tabs = document.querySelectorAll('.menu-tab-btn');
    const items = document.querySelectorAll('.menu-item-card');

    if (tabs.length > 0 && items.length > 0) {
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                const category = tab.getAttribute('data-category');
                items.forEach(item => {
                    if (category === 'all' || item.getAttribute('data-category') === category) {
                        item.style.display = 'block';
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(15px)';
                        setTimeout(() => {
                            item.style.transition = 'all 0.4s ease';
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 50);
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }

    // 4. Mobile Menu Drawer Toggle
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // 5. Reservation Form Interactive Submission
    const reserveForm = document.getElementById('reservation-form');
    if (reserveForm) {
        reserveForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = reserveForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i> Confirming Table...';

            const formData = new FormData(reserveForm);

            try {
                const response = await fetch(reserveForm.action, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json'
                    },
                    body: formData
                });

                const data = await response.json();
                const successNotice = document.getElementById('reservation-success');

                if (successNotice) {
                    successNotice.classList.remove('hidden');
                    successNotice.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    reserveForm.reset();
                    
                    setTimeout(() => {
                        successNotice.classList.add('hidden');
                    }, 8000);
                }
            } catch (err) {
                alert('Table reservation requested! We will reach out to you directly via WhatsApp.');
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            }
        });
    }
});
