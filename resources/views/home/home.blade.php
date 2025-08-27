<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogedin - Platform Gaming Terdepan</title>
    <!-- Import Lucide React Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #2d1b69 0%, #5b21b6 100%);
            color: white;
            overflow-x: hidden;
        }

        /* Header Navigation */
        .header {
            background: rgba(15, 23, 42, 0.9);
            backdrop-filter: blur(20px);
            padding: 0.8rem 2rem;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            border-bottom: 1px solid rgba(139, 92, 246, 0.2);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1.8rem;
            font-weight: bold;
            color: #a855f7;
        }

        .logo::before {
            content: "🎮";
            font-size: 2rem;
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
            list-style: none;
            align-items: center;
        }

        .nav-links a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            padding: 0.6rem 1.2rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .nav-links a:hover {
            background: rgba(168, 85, 247, 0.2);
            color: #c4b5fd;
        }

        .search-container {
            position: relative;
            margin-left: auto;
            margin-right: 1rem;
        }

        .search-box {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 25px;
            padding: 0.5rem 1rem 0.5rem 2.5rem;
            color: white;
            width: 250px;
            outline: none;
            transition: all 0.3s ease;
        }

        .search-box::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .search-box:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: #a855f7;
        }

        .search-icon {
            position: absolute;
            left: 0.8rem;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }

        /* Hero Section */
        .hero {
            margin-top: 70px;
            padding: 0;
            position: relative;
            background: url('/images/banner.png') center/cover;
            min-height: 600px;
            overflow: hidden;
            display: flex;
            align-items: center;
        }

        .hero::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(76, 29, 149, 0.8), rgba(124, 58, 237, 0.6));
            z-index: 1;
        }

        .hero-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 4rem 2rem;
            display: flex;
            align-items: center;
            position: relative;
            z-index: 2;
            width: 100%;
        }

        .hero-content {
            flex: 0 0 55%;
            max-width: 700px;
            background: rgba(0, 0, 0, 0.85);
            padding: 3.5rem 3rem;
            border-radius: 1.5rem;
            border: 1px solid rgba(27, 7, 73, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            opacity: 0.7;
        }

        .hero-character {
            flex: 1;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 400px;
            margin-left: -100px;
        }

        .character-image {
            width: 350px;
            height: 350px;
            background: url('https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=400&fit=crop') center/cover;
            border-radius: 1.5rem;
            filter: drop-shadow(0 25px 50px rgba(0, 0, 0, 0.4));
            position: relative;
            z-index: 3;
        }

        /* Custom character styling to match the image */
        .character-image::before {
            content: "";
            position: absolute;
            top: -20px;
            left: -20px;
            right: -20px;
            bottom: -20px;
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.3), rgba(59, 130, 246, 0.3));
            border-radius: 50%;
            z-index: -1;
            animation: pulse 3s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(0.95);
                opacity: 0.7;
            }

            50% {
                transform: scale(1.05);
                opacity: 0.3;
            }
        }

        .hero h1 {
            font-size: 3.8rem;
            margin-bottom: 1.5rem;
            color: #ffffff;
            font-weight: 900;
            line-height: 1.1;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            font-size: 1.1rem;
            margin-bottom: 2.5rem;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.9);
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn {
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: white;
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #06b6d4, #0891b2);
            color: white;
            box-shadow: 0 8px 25px rgba(6, 182, 212, 0.4);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
        }

        .btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn:hover::before {
            left: 100%;
        }

        /* Game Sections */
        .section {
            padding: 4rem 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 2.5rem;
            text-align: left;
            background: linear-gradient(45deg, #ffffff, #e0e7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            border-bottom: 3px solid #8b5cf6;
            padding-bottom: 0.8rem;
            display: inline-block;
            font-weight: 700;
        }

        .game-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .game-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            padding: 1.5rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(168, 85, 247, 0.15);
            position: relative;
            overflow: hidden;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            display: block;
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
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
            border-color: #a855f7;
            background: rgba(255, 255, 255, 0.12);
        }

        .game-image {
            width: 100%;
            height: 240px;
            border-radius: 0.8rem;
            margin-bottom: 1rem;
            position: relative;
            overflow: hidden;
        }

        .game-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .game-image.has-image::after {
            display: none;
        }

        .game-title {
            font-size: 1.5rem;
            font-weight: 600;
            text-align: center;
            color: #f8fafc;
        }

        .show-all-btn {
            background: rgba(139, 92, 246, 0.15);
            border: 2px solid #8b5cf6;
            color: white;
            padding: 1rem 3rem;
            border-radius: 0.8rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: block;
            margin: 2rem auto 0;
            text-align: center;
            width: fit-content;
            font-size: 1rem;
        }

        .show-all-btn:hover {
            background: #8b5cf6;
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(139, 92, 246, 0.3);
        }

        /* Features Section */
        .features {
            background: linear-gradient(135deg, rgba(30, 27, 75, 0.6), rgba(55, 48, 163, 0.4));
            padding: 4rem 2rem;
            margin: 2rem 0;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.08);
            padding: 2.5rem;
            border-radius: 1rem;
            border-left: 4px solid #8b5cf6;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .feature-card:hover {
            background: rgba(255, 255, 255, 0.12);
            transform: translateX(10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            color: #a855f7;
        }

        .feature-icon svg {
            width: 3rem;
            height: 3rem;
        }

        .feature-title {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: #c4b5fd;
            font-weight: 600;
        }

        .feature-description {
            line-height: 1.7;
            opacity: 0.85;
            color: rgba(255, 255, 255, 0.8);
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #1e1b4b, #312e81);
            padding: 4rem 2rem 2rem;
            margin-top: 4rem;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 3rem;
        }

        .footer-section h3 {
            margin-bottom: 1.5rem;
            color: #a855f7;
            font-size: 1.3rem;
            font-weight: 600;
        }

        .footer-section p,
        .footer-section a {
            color: #d1d5db;
            text-decoration: none;
            line-height: 1.7;
            margin-bottom: 0.8rem;
            display: block;
            opacity: 0.9;
        }

        .footer-section a:hover {
            color: #c4b5fd;
            opacity: 1;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-links a {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #8b5cf6, #a855f7);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }

        .social-links a:hover {
            background: linear-gradient(135deg, #a855f7, #c084fc);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(168, 85, 247, 0.4);
        }

        .copyright {
            text-align: center;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(168, 85, 247, 0.3);
            opacity: 0.7;
            font-size: 0.9rem;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .search-box {
                width: 200px;
            }

            .hero-container {
                flex-direction: column;
                text-align: center;
                padding: 2rem 1rem;
            }

            .hero-content {
                margin-left: 0;
                margin-bottom: 2rem;
                flex: none;
                max-width: 100%;
                order: 2;
            }

            .hero-character {
                margin-left: 0;
                order: 1;
            }

            .character-image {
                width: 280px;
                height: 280px;
            }

            .hero h1 {
                font-size: 2.8rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
                gap: 0.8rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .game-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 1.5rem;
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
        <div class="hero-container">
            <div class="hero-content">
                <h1>Top Up aja njr</h1>
                <p>Hamburkanlah duit-duitmu itu kawan, jangan pikir dua kali. Gaslah topup sampe gabisa makan. Makan siang skin-skin cakep juga kenyang bwanggg!!!</p>
                <div class="cta-buttons">
                    <a href="#promo" class="btn btn-primary">
                        <i data-lucide="link"></i>
                        Cek Promo
                    </a>
                    <a href="#game" class="btn btn-secondary">
                        <i data-lucide="clipboard-list"></i>
                        Lihat Game
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Game Popular Section -->
    <section class="section" id="game">
        <h2 class="section-title">Game Popular</h2>
        <div class="game-grid">
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1538481199705-c710c4e965fc?w=400&h=300&fit=crop" alt="Free Fire">
                </div>
                <div class="game-title">Free Fire</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1560419015-7c427e8ae5ba?w=400&h=300&fit=crop" alt="Mobile Legends">
                </div>
                <div class="game-title">Mobile Legends</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1587202372775-e229f172b9d7?w=400&h=300&fit=crop" alt="PUBG Mobile">
                </div>
                <div class="game-title">PUBG Mobile</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?w=400&h=300&fit=crop" alt="Genshin Impact">
                </div>
                <div class="game-title">Genshin Impact</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?w=400&h=300&fit=crop" alt="Valorant">
                </div>
                <div class="game-title">Valorant</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=300&fit=crop" alt="COD Mobile">
                </div>
                <div class="game-title">COD Mobile</div>
            </div>
        </div>

        <h2 class="section-title">Game Seluler</h2>
        <div class="game-grid">
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?w=400&h=300&fit=crop" alt="Arena of Valor">
                </div>
                <div class="game-title">Arena of Valor</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1579952363873-27d3bfad9c0d?w=400&h=300&fit=crop" alt="Clash Royale">
                </div>
                <div class="game-title">Clash Royale</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=400&h=300&fit=crop" alt="Clash of Clans">
                </div>
                <div class="game-title">Clash of Clans</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?w=400&h=300&fit=crop" alt="Among Us">
                </div>
                <div class="game-title">Among Us</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1511882150382-421056c89033?w=400&h=300&fit=crop" alt="Pokemon GO">
                </div>
                <div class="game-title">Pokemon GO</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1606144042614-b2417e99c4e3?w=400&h=300&fit=crop" alt="Brawl Stars">
                </div>
                <div class="game-title">Brawl Stars</div>
            </div>
        </div>
        <button class="show-all-btn">Tampilkan Semua</button>

        <h2 class="section-title">Game PC</h2>
        <div class="game-grid">
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?w=400&h=300&fit=crop" alt="Valorant">
                </div>
                <div class="game-title">Valorant</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?w=400&h=300&fit=crop" alt="Counter Strike">
                </div>
                <div class="game-title">Counter Strike</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1589241062272-c0a000072dfa?w=400&h=300&fit=crop" alt="League of Legends">
                </div>
                <div class="game-title">League of Legends</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?w=400&h=300&fit=crop" alt="Apex Legends">
                </div>
                <div class="game-title">Apex Legends</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=400&h=300&fit=crop" alt="Dota 2">
                </div>
                <div class="game-title">Dota 2</div>
            </div>
            <div class="game-card">
                <div class="game-image">
                    <img src="https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?w=400&h=300&fit=crop" alt="Overwatch">
                </div>
                <div class="game-title">Overwatch</div>
            </div>
        </div>
        <button class="show-all-btn">Tampilkan Semua</button>
    </section>

    <!-- Features Section -->
    <section class="features" id="afiliasi">
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i data-lucide="credit-card"></i>
                </div>
                <h3 class="feature-title">Bayar Secepat Kilat</h3>
                <p class="feature-description">Jogedin punya server terdepan dan terintegrasi holoverse dengan sistem pembayaran tercepat</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i data-lucide="wallet"></i>
                </div>
                <h3 class="feature-title">Metode Pembayaran Komplit</h3>
                <p class="feature-description">Dana, pulsa, e-money, transfer bank, semua bisa! Joki resmi dengan treatment terbaik</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i data-lucide="gift"></i>
                </div>
                <h3 class="feature-title">Promo Bikin Ngiler</h3>
                <p class="feature-description">Promo-promo menarik setiap hari yang bikin kamu makin hemat dan untung berlimpah</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i data-lucide="zap"></i>
                </div>
                <h3 class="feature-title">Kirim Instan, Gak Pake Lama</h3>
                <p class="feature-description">Pengiriman super cepat dan tidak seperti delivery makanan yang sering telat</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
   <!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>Jogedin</h3>
            <p>Platform gaming terdepan dengan layanan top up dan joki terpercaya. Nikmati pengalaman gaming terbaik bersama kami.</p>
            <h3>Hubungi Kami</h3>
            <div class="social-links">
                <a href="#" title="WhatsApp">
                    <i data-lucide="phone"></i>
                </a>
                <a href="#" title="Instagram">
                    <i data-lucide="instagram"></i>
                </a>
                <a href="#" title="Facebook">
                    <i data-lucide="facebook"></i>
                </a>
                <a href="#" title="Email">
                    <i data-lucide="mail"></i>
                </a>
            </div>
        </div>
        <div class="footer-section">
            <h3>Layanan</h3>
            <a href="#game">Promo Gaming</a>
            <a href="#joki">Hubungi Team</a>
            <a href="#afiliasi">Pusat Bantuan</a>
            <a href="#promo">Syarat dan Ketentuan</a>
        </div>
        <div class="footer-section">
            <h3>Informasi</h3>
            <p>© 2024, Jogedin Gaming Platform</p>
            <p>Semua Hak Dilindungi Undang-Undang</p>
            <a href="#">Kebijakan Privasi</a>
            <a href="#">Terms of Service</a>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; 2024 Jogedin Gaming Platform. All rights reserved.</p>
    </div>
</footer>

<script>
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
    document.querySelectorAll('.show-all-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const originalText = this.textContent;
            this.textContent = 'Memuat lebih banyak game...';
            this.style.opacity = '0.7';

            setTimeout(() => {
                this.textContent = originalText;
                this.style.opacity = '1';
                // Here you would typically load more games
                alert('Fitur ini akan segera hadir! 🎮');
            }, 1500);
        });
    });

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
</script>
