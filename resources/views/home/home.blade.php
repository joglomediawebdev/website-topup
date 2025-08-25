<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogedin - Platform Gaming Terdepan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #4c1d95 0%, #7c3aed 50%, #a855f7 100%);
            color: white;
            overflow-x: hidden;
        }

        /* Header Navigation */
        .header {
            background: rgba(30, 27, 75, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 2rem;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            border-bottom: 1px solid rgba(139, 92, 246, 0.3);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1.5rem;
            font-weight: bold;
            color: #a855f7;
        }

        .logo::before {
            content: "🎮";
            font-size: 1.8rem;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            background: rgba(168, 85, 247, 0.2);
            color: #c4b5fd;
        }

        /* Hero Section */
        .hero {
            margin-top: 80px;
            padding: 4rem 2rem;
            text-align: center;
            position: relative;
            background: linear-gradient(135deg, rgba(76, 29, 149, 0.8), rgba(124, 58, 237, 0.8));
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow: hidden;
        }

        /* Hero background overlay for better text readability */
        .hero::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(76, 29, 149, 0.7), rgba(124, 58, 237, 0.7));
            z-index: 1;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(168,85,247,0.1)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            animation: float 20s linear infinite;
            z-index: -1;
        }

        @keyframes float {
            0% { transform: translateX(-50px); }
            100% { transform: translateX(50px); }
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #ffffff, #c4b5fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 30px rgba(168, 85, 247, 0.5);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            line-height: 1.6;
            opacity: 0.9;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 1rem 2rem;
            border: none;
            border-radius: 0.75rem;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: white;
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
            color: white;
            box-shadow: 0 10px 25px rgba(139, 92, 246, 0.3);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        /* Game Sections */
        .section {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: left;
            background: linear-gradient(45deg, #ffffff, #e0e7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            border-bottom: 3px solid #8b5cf6;
            padding-bottom: 0.5rem;
            display: inline-block;
        }

        .game-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .game-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            padding: 1.5rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(168, 85, 247, 0.2);
            position: relative;
            overflow: hidden;
        }

        .game-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .game-card:hover::before {
            left: 100%;
        }

        .game-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            border-color: #a855f7;
        }

        .game-image {
            width: 100%;
            height: 120px;
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .game-image::after {
            content: "🎮";
            font-size: 3rem;
            position: absolute;
            opacity: 0.7;
        }

        /* Hide emoji when background image is set */
        .game-image.has-image::after {
            display: none;
        }

        .holoverse-badge {
            background: #1e1b4b;
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 1rem;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: inline-block;
        }

        .game-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #e5e7eb;
        }

        .show-all-btn {
            background: rgba(139, 92, 246, 0.2);
            border: 2px solid #8b5cf6;
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: block;
            margin: 2rem auto 0;
            text-align: center;
            width: fit-content;
        }

        .show-all-btn:hover {
            background: #8b5cf6;
            transform: scale(1.05);
        }

        /* Features Section */
        .features {
            background: rgba(30, 27, 75, 0.5);
            padding: 4rem 2rem;
            margin: 2rem 0;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            padding: 2rem;
            border-radius: 1rem;
            border-left: 4px solid #8b5cf6;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(10px);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            display: block;
        }

        .feature-title {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #c4b5fd;
        }

        .feature-description {
            line-height: 1.6;
            opacity: 0.8;
        }

        /* Footer */
        .footer {
            background: #1e1b4b;
            padding: 3rem 2rem 1rem;
            margin-top: 4rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: #a855f7;
        }

        .footer-section p, .footer-section a {
            color: #d1d5db;
            text-decoration: none;
            line-height: 1.6;
            margin-bottom: 0.5rem;
            display: block;
        }

        .footer-section a:hover {
            color: #c4b5fd;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: #8b5cf6;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: #a855f7;
            transform: translateY(-2px);
        }

        .copyright {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(168, 85, 247, 0.3);
            opacity: 0.7;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .section-title {
                font-size: 2rem;
            }

            .game-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header Navigation -->
    <header class="header">
        <div class="nav-container">
            <div class="logo">Jogedin</div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#joki">Joki</a></li>
                    <li><a href="#game">Game</a></li>
                    <li><a href="#afiliasi">Afiliasi</a></li>
                    <li><a href="#promo">Promo</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="beranda">
        <div class="hero-content">
            <h1>Top Up aja njr</h1>
            <p>Hamburkanlah duit-duitmu itu kawan, jangan pikir dua kali. Gaslah topup sampe gabisa makan. Makan siang skin-skin cakep juga kenyang bwanggg!!!</p>
            <div class="cta-buttons">
                <a href="#promo" class="btn btn-primary">🔗 Cek Promo</a>
                <a href="#game" class="btn btn-secondary">📋 Lihat Game</a>
            </div>
        </div>
    </section>

    <!-- Game Popular Section -->
    <section class="section" id="game">
        <h2 class="section-title">Game Popular</h2>
        <div class="game-grid">
            <div class="game-card">
                <div class="game-image"></div>
                <div class="holoverse-badge">HOLOVERSE</div>
                <div class="game-title">Genshin Impact</div>
            </div>
            <div class="game-card">
                <div class="game-image"></div>
                <div class="holoverse-badge">HOLOVERSE</div>
                <div class="game-title">Genshin Impact</div>
            </div>
            <div class="game-card">
                <div class="game-image"></div>
                <div class="holoverse-badge">HOLOVERSE</div>
                <div class="game-title">Genshin Impact</div>
            </div>
            <div class="game-card">
                <div class="game-image"></div>
                <div class="holoverse-badge">HOLOVERSE</div>
                <div class="game-title">Genshin Impact</div>
            </div>
        </div>

        <h2 class="section-title">Game Seluler</h2>
        <div class="game-grid">
            <div class="game-card">
                <div class="game-image"></div>
                <div class="holoverse-badge">HOLOVERSE</div>
                <div class="game-title">Genshin Impact</div>
            </div>
            <div class="game-card">
                <div class="game-image"></div>
                <div class="holoverse-badge">HOLOVERSE</div>
                <div class="game-title">Genshin Impact</div>
            </div>
            <div class="game-card">
                <div class="game-image"></div>
                <div class="holoverse-badge">HOLOVERSE</div>
                <div class="game-title">Genshin Impact</div>
            </div>
            <div class="game-card">
                <div class="game-image"></div>
                <div class="holoverse-badge">HOLOVERSE</div>
                <div class="game-title">Genshin Impact</div>
            </div>
        </div>
        <button class="show-all-btn">Tampilkan Semua</button>

        <h2 class="section-title">Game PC</h2>
        <div class="game-grid">
            <div class="game-card">
                <div class="game-image"></div>
                <div class="holoverse-badge">HOLOVERSE</div>
                <div class="game-title">Genshin Impact</div>
            </div>
            <div class="game-card">
                <div class="game-image"></div>
                <div class="holoverse-badge">HOLOVERSE</div>
                <div class="game-title">Genshin Impact</div>
            </div>
            <div class="game-card">
                <div class="game-image"></div>
                <div class="holoverse-badge">HOLOVERSE</div>
                <div class="game-title">Genshin Impact</div>
            </div>
            <div class="game-card">
                <div class="game-image"></div>
                <div class="holoverse-badge">HOLOVERSE</div>
                <div class="game-title">Genshin Impact</div>
            </div>
        </div>
        <button class="show-all-btn">Tampilkan Semua</button>
    </section>

    <!-- Features Section -->
    <section class="features" id="afiliasi">
        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">💳</span>
                <h3 class="feature-title">Bayar Seceapat Kilat</h3>
                <p class="feature-description">Jogedin punya server terdepan dan terintegrasi holoverse</p>
            </div>
            <div class="feature-card">
                <span class="feature-icon">💰</span>
                <h3 class="feature-title">Metode Pembayaran Komplit</h3>
                <p class="feature-description">Dana pulsa e-money transfer bank, semua bisa! Joki resmi samakan treatment - semua bisa</p>
            </div>
            <div class="feature-card">
                <span class="feature-icon">🔒</span>
                <h3 class="feature-title">Promo Bikin Ngicess</h3>
                <p class="feature-description">Minuman hrus din. Promo promo buat trending banyak dan masa depan bisa kol</p>
            </div>
            <div class="feature-card">
                <span class="feature-icon">⚡</span>
                <h3 class="feature-title">Kirim Instan, Gak Pake Lama</h3>
                <p class="feature-description">Cepet inset, dan gak kayak delivery makanan yang sering gasket sai rajin+brangde</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Jogedin</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare cursus sed non lorem eget ipsum lorem magna consectetur.</p>
                <h3>Hubungi Kami</h3>
                <div class="social-links">
                    <a href="#">📱</a>
                    <a href="#">📸</a>
                    <a href="#">🔵</a>
                    <a href="#">📧</a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Layanan</h3>
                <a href="#game">Promo</a>
                <a href="#joki">Hubungi Team</a>
                <a href="#afiliasi">Pusat Bantuan</a>
                <a href="#promo">Syarat dan Profil</a>
            </div>
            <div class="footer-section">
                <h3>Logo</h3>
                <p>© 2024, Jogedin. Semua Hak Diplit</p>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2024 Jogedin Gaming Platform. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Function to set hero background image
        function setHeroBackground(imageUrl) {
            const hero = document.querySelector('.hero');
            hero.style.backgroundImage = `url('${imageUrl}')`;
        }

        // Function to set game card image
        function setGameImage(cardIndex, imageUrl) {
            const gameImages = document.querySelectorAll('.game-image');
            if (gameImages[cardIndex]) {
                gameImages[cardIndex].style.backgroundImage = `url('${imageUrl}')`;
                gameImages[cardIndex].classList.add('has-image');
            }
        }

        // Example usage (uncomment and replace with your image URLs):
        setHeroBackground('https://example.com/hero-background.jpg');
        // setGameImage(0, 'https://example.com/genshin-impact.jpg');
        // setGameImage(1, 'https://example.com/mobile-legends.jpg');

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
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

        // Add interactive hover effects to game cards
        document.querySelectorAll('.game-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Show all buttons functionality
        document.querySelectorAll('.show-all-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                this.textContent = 'Memuat lebih banyak game...';
                setTimeout(() => {
                    this.textContent = 'Tampilkan Semua';
                    alert('Fitur ini akan segera hadir!');
                }, 1000);
            });
        });

        // Add parallax effect to hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero');
            const rate = scrolled * -0.5;
            hero.style.transform = `translateY(${rate}px)`;
        });

        // Dynamic typing effect for hero title
        const heroTitle = document.querySelector('.hero h1');
        const originalText = heroTitle.textContent;
        heroTitle.textContent = '';

        let i = 0;
        const typeWriter = () => {
            if (i < originalText.length) {
                heroTitle.textContent += originalText.charAt(i);
                i++;
                setTimeout(typeWriter, 100);
            }
        };

        setTimeout(typeWriter, 1000);
    </script>
</body>
</html>
