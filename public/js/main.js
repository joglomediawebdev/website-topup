  // Initialize Lucide icons
        lucide.createIcons();

        // Enhanced smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Enhanced game card interactions
        document.querySelectorAll('.game-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
                this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.25)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = '';
            });
        });

        // Show all buttons with loading effect
        // document.querySelectorAll('.show-all-btn').forEach(btn => {
        //     btn.addEventListener('click', function() {
        //         const originalText = this.textContent;
        //         this.textContent = 'Memuat lebih banyak game...';
        //         this.style.opacity = '0.7';

        //         setTimeout(() => {
        //             this.textContent = originalText;
        //             this.style.opacity = '1';
        //             // Here you would typically load more games
        //             alert('Fitur ini akan segera hadir! 🎮');
        //         }, 1500);
        //     });
        // });

        // Search functionality
        document.querySelector('.search-box').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const searchTerm = this.value;
                if (searchTerm.trim()) {
                    alert(`Mencari: "${searchTerm}"`);
                    // Here you would implement actual search functionality
                }
            }
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero');
            const rate = scrolled * -0.3;

            if (hero) {
                hero.style.transform = `translateY(${rate}px)`;
            }
        });

        // Character image rotation effect
        const characterImage = document.querySelector('.character-image');
        if (characterImage) {
            let rotation = 0;
            setInterval(() => {
                rotation += 0.5;
                characterImage.style.transform = `rotate(${Math.sin(rotation * 0.01)}deg) scale(${1 + Math.sin(rotation * 0.02) * 0.05})`;
            }, 50);
        }

        // Dynamic typing effect for hero title
        const heroTitle = document.querySelector('.hero h1');
        if (heroTitle) {
            const originalText = heroTitle.textContent;
            heroTitle.textContent = '';

            let i = 0;
            const typeWriter = () => {
                if (i < originalText.length) {
                    heroTitle.textContent += originalText.charAt(i);
                    i++;
                    setTimeout(typeWriter, 80);
                } else {
                    // Add blinking cursor effect
                    heroTitle.innerHTML += '<span style="animation: blink 1s infinite;">|</span>';
                    const style = document.createElement('style');
                    style.textContent = `
                    @keyframes blink {
                        0%, 50% { opacity: 1; }
                        51%, 100% { opacity: 0; }
                    }
                `;
                    document.head.appendChild(style);
                }
            };

            setTimeout(typeWriter, 1000);
        }

        // Add floating animation to feature cards
        document.querySelectorAll('.feature-card').forEach((card, index) => {
            card.style.animationDelay = `${index * 0.2}s`;
            card.style.animation = 'fadeInUp 0.6s ease forwards';
        });

        // CSS for fade in animation
        const animationStyle = document.createElement('style');
        animationStyle.textContent = `
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .feature-card {
            opacity: 0;
        }
    `;
        document.head.appendChild(animationStyle);

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.6s ease forwards';
                }
            });
        }, observerOptions);

        // Observe all game cards and feature cards
        document.querySelectorAll('.game-card, .feature-card').forEach(card => {
            observer.observe(card);
        });

        // Add click effects to buttons
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;

                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(255, 255, 255, 0.3)';
                ripple.style.transform = 'scale(0)';
                ripple.style.animation = 'ripple 0.6s linear';
                ripple.style.pointerEvents = 'none';

                this.appendChild(ripple);

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // CSS for ripple effect
        const rippleStyle = document.createElement('style');
        rippleStyle.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
        document.head.appendChild(rippleStyle);

        // Add header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(15, 23, 42, 0.95)';
                header.style.backdropFilter = 'blur(20px)';
            } else {
                header.style.background = 'rgba(15, 23, 42, 0.9)';
                header.style.backdropFilter = 'blur(20px)';
            }
        });

        // Initialize all animations and effects
        document.addEventListener('DOMContentLoaded', function() {
            // Add stagger animation to game cards
            document.querySelectorAll('.game-card').forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';

                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
