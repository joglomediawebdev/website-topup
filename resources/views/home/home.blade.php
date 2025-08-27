<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogedin - Platform Gaming Terdepan</title>
    <!-- Import Lucide React Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS (diperlukan untuk modal) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


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
            <div class="auth-buttons">
            <button class="btn btn-secondary login-btn" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i data-lucide="log-in" class="lucide-icon"></i> Login
            </button>
            <button class="btn btn-primary daftar-btn" data-bs-toggle="modal" data-bs-target="#registerModal">
                <i data-lucide="users" class="lucide-icon"></i> Daftar
            </button>
        </div>

        </div>
    </header>
   <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content custom-modal-content text-white">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="loginModalLabel">Mau Gabung, brok?</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="loginEmail" placeholder="Example@gmail.com" required>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 mb-3">Masuk</button>

                    <div class="d-flex align-items-center my-3">
                        <hr class="flex-grow-1">
                        <span class="mx-2">Atau</span>
                        <hr class="flex-grow-1">
                    </div>

                    <button type="button" class="btn btn-light w-100 d-flex align-items-center justify-content-center gap-2">
                        <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google" width="20">
                        Lanjut dengan Google
                    </button>
                </form>
                <p class="text-center mt-4 mb-0">
                    Sudah memiliki akun? <a href="#" class="text-white fw-bold" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Masuk</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Register -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content custom-modal-content text-white">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="registerModalLabel">Aloo, brok!</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="registerEmail" placeholder="Example@gmail.com" required>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 mb-3">Masuk</button>

                    <div class="d-flex align-items-center my-3">
                        <hr class="flex-grow-1">
                        <span class="mx-2">Atau</span>
                        <hr class="flex-grow-1">
                    </div>

                    <button type="button" class="btn btn-light w-100 d-flex align-items-center justify-content-center gap-2">
                        <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google" width="20">
                        Lanjut dengan Google
                    </button>
                </form>
                <p class="text-center mt-4 mb-0">
                    Belum memiliki akun? <a href="#" class="text-white fw-bold" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Daftar</a>
                </p>
            </div>
        </div>
    </div>
</div>

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
            <a href="">
                <div class="game-card">
                    <div class="game-image">
                        <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                    </div>
                    <div class="game-title">Free Fire</div>
                </div>
            </a>
            <a href="">
                <div class="game-card">
                    <div class="game-image">
                        <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                    </div>
                    <div class="game-title">Free Fire</div>
                </div>
            </a>
            <a href="">
                <div class="game-card">
                    <div class="game-image">
                        <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                    </div>
                    <div class="game-title">Free Fire</div>
                </div>
            </a>
            <a href="">
                <div class="game-card">
                    <div class="game-image">
                        <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                    </div>
                    <div class="game-title">Free Fire</div>
                </div>
            </a>
        </div>

        <h2 class="section-title">Game Seluler</h2>
        <div class="game-grid">
            <a href="">
                <div class="game-card">
                    <div class="game-image">
                        <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                    </div>
                    <div class="game-title">Free Fire</div>
                </div>
            </a>
            <a href="">
                <div class="game-card">
                    <div class="game-image">
                        <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                    </div>
                    <div class="game-title">Free Fire</div>
                </div>
            </a>
            <a href="">
                <div class="game-card">
                    <div class="game-image">
                        <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                    </div>
                    <div class="game-title">Free Fire</div>
                </div>
            </a>
            <a href="">
                <div class="game-card">
                    <div class="game-image">
                        <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                    </div>
                    <div class="game-title">Free Fire</div>
                </div>
            </a>
        </div>
        <button class="show-all-btn">Tampilkan Semua</button>

        <h2 class="section-title">Game PC</h2>
        <div class="game-grid">
            <div class="game-grid">
                <a href="">
                    <div class="game-card">
                        <div class="game-image">
                            <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                        </div>
                        <div class="game-title">Free Fire</div>
                    </div>
                </a>
                <a href="">
                    <div class="game-card">
                        <div class="game-image">
                            <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                        </div>
                        <div class="game-title">Free Fire</div>
                    </div>
                </a>
                <a href="">
                    <div class="game-card">
                        <div class="game-image">
                            <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                        </div>
                        <div class="game-title">Free Fire</div>
                    </div>
                </a>
                <a href="">
                    <div class="game-card">
                        <div class="game-image">
                            <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                        </div>
                        <div class="game-title">Free Fire</div>
                    </div>
                </a>
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
    <script src="{{ asset ('js/main.js')}}"></script>
