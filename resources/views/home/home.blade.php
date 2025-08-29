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
            <div class="logo">
                <img src="{{ asset('images/game-console-logo.png') }}" alt="Logo" style="width:50px; height:50px; margin-right:8px;">
                Jogedin
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#joki">Joki</a></li>
                    <li><a href="{{ url('/game') }}">Game</a></li>
                    <li><a href="{{ url('#') }}">Afiliasi</a></li>
                    <li><a href="{{ url('/promo') }}">Promo</a></li>
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
</body>

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
                <a href="{{ url('/promo') }}" class="btn btn-primary">
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
        <a href="{{ url('/pembayaran') }}">
            <div class="game-card">
                <div class="game-image">
                    <img src="{{ asset('images/genshin.png') }}" alt="Genshin">
                </div>
                <div class="game-title">Genshin</div>
            </div>
        </a>
        <a href="{{ url('/pembayaran2') }}">
            <div class="game-card">
                <div class="game-image">
                    <img src="{{ asset('images/free-fire.png') }}" alt="Free Fire">
                </div>
                <div class="game-title">Free Fire</div>
            </div>
        </a>
        <a href="{{ url('/pembayaran3') }}">
            <div class="game-card">
                <div class="game-image">
                    <img src="{{ asset('images/mobile-legend.png') }}" alt="Mobile Legend">
                </div>
                <div class="game-title">Mobile Legend</div>
            </div>
        </a>
        <a href="{{ url('/pembayaran4') }}">
            <div class="game-card">
                <div class="game-image">
                    <img src="{{ asset('images/valorant.png') }}" alt="Valorant">
                </div>
                <div class="game-title">Valorant</div>
            </div>
        </a>
    </div>

    <h2 class="section-title">Game Seluler</h2>
    <div class="game-grid">
        <a href="{{ url('/pembayaran') }}">
            <div class="game-card">
                <div class="game-image">
                    <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                </div>
                <div class="game-title">Free Fire</div>
            </div>
        </a>
        <a href="{{ url('/pembayaran') }}">
            <div class="game-card">
                <div class="game-image">
                    <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                </div>
                <div class="game-title">Free Fire</div>
            </div>
        </a>
        <a href="{{ url('/pembayaran') }}">
            <div class="game-card">
                <div class="game-image">
                    <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                </div>
                <div class="game-title">Free Fire</div>
            </div>
        </a>
        <a href="{{ url('/pembayaran') }}">
            <div class="game-card">
                <div class="game-image">
                    <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                </div>
                <div class="game-title">Free Fire</div>
            </div>
        </a>
    </div>
    <a href="{{ url('/game') }}" class="show-all-btn">Tampilkan Semua</a>

    <h2 class="section-title">Game PC</h2>
    <div class="game-grid">
        <div class="game-grid">
            <a href="{{ url('/pembayaran') }}">
                <div class="game-card">
                    <div class="game-image">
                        <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                    </div>
                    <div class="game-title">Free Fire</div>
                </div>
            </a>
            <a href="{{ url('/pembayaran') }}">
                <div class="game-card">
                    <div class="game-image">
                        <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                    </div>
                    <div class="game-title">Free Fire</div>
                </div>
            </a>
            <a href="{{ url('/pembayaran') }}">
                <div class="game-card">
                    <div class="game-image">
                        <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                    </div>
                    <div class="game-title">Free Fire</div>
                </div>
            </a>
            <a href="{{ url('/pembayaran') }}">
                <div class="game-card">
                    <div class="game-image">
                        <img src="{{ asset('images/genshin.png') }}" alt="Free Fire">
                    </div>
                    <div class="game-title">Free Fire</div>
                </div>
            </a>
        </div>
    </div>
    <a href="{{ url('/game') }}" class="show-all-btn">Tampilkan Semua</a>
</section>

<!-- Updated Features Section -->
<section class="features" id="afiliasi">
    <div class="features-container">
        <div class="features-content">
            <div class="features-header">
                <h2>Jogedin</h2>
                <p>Setiap bulan, ribuan gamers ngeoot ke Jodedin buat top-up. Gak perlu ribet login sana-sini, tinggal klik-klik, saldo langsung masuk ke game kesayanganmu. Dari Mobile Legends, Free Fire, Genshin Impact, sampe yang apa aja dah.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i data-lucide="credit-card"></i>
                </div>
                <div class="feature-content">
                    <h3>Bayar Secepat Kilat</h3>
                    <p>Udah percaya aje, cepet beut dah pokoknya</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i data-lucide="wallet"></i>
                </div>
                <div class="feature-content">
                    <h3>Metode Pembayaran Komplit</h3>
                    <p>Dari pulsa, e-wallet, transfer bank, sampe bayar pake receh kembali Indomaret - semua bisa.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i data-lucide="gift"></i>
                </div>
                <div class="feature-content">
                    <h3>Promo Bikin Ngiler</h3>
                    <p>Diskon, kode unik, cashback, kadang bonus skin juga. Pokoke bikin top-up makin feel murah meriah.</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i data-lucide="zap"></i>
                </div>
                <div class="feature-content">
                    <h3>Kirim Instan, Gak Pake Lama</h3>
                    <p>Top-up di sini - langsung mendarat ke akuntmu. Cepat, tepat, dan gak kayak delivery makanan yang sering telat.</p>
                </div>
            </div>
        </div>

        <div class="features-images">
            <div class="promo-image">
                <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?w=300&h=200&fit=crop" alt="Mobile Legends">
                <div class="promo-badge">Special Event</div>
            </div>
            <div class="promo-image">
                <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=300&h=200&fit=crop" alt="Genshin Impact">
                <div class="promo-badge">Special Event</div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer style="background-color: #3f2466; color: white; padding: 40px 0; width: 100%; margin: 0; box-sizing:border-box;">
    <div style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 40px; padding: 0 10px; max-width: 1800px; margin: 0 auto;">
        <!-- Kolom Kiri -->
        <div style="max-width: 400px;">
            <h2 style="font-size: 30px; font-weight: bold; margin-bottom: 16px;">Jogedin</h2>
            <p style="line-height: 1.6; font-size: 14px; margin-bottom: 20px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare cursus sed nunc eget dictum.
                Sed ornare cursus sed nunc eget dictum. Sed ornare cursus sed nunc eget dictum.
            </p>

            <h3 style="font-size: 16px; font-weight: bold; margin-bottom: 12px;">Hubungi Kami</h3>
            <div style="display: flex; gap: 12px;">
                <a href="#"><img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" style="width:40px;height:40px;"></a>
                <a href="#"><img src="{{ asset('images/instagram.png') }}" alt="Instagram" style="width:40px;height:40px;"></a>
                <a href="#"><img src="{{ asset('images/telegram.png') }}" alt="Telegram" style="width:40px;height:40px;"></a>
                <a href="#"><img src="{{ asset('images/gmail.png') }}" alt="Gmail" style="width:40px;height:40px;"></a>
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div>
            <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 12px;">Laman</h3>
            <ul style="list-style: none; padding: 0; margin: 0; line-height: 2;">
                <li><a href="{{ url('/promo') }}" style="color:white; text-decoration:none;">Promo</a></li>
                <li><a href="{{ url('/contact') }}" style="color:white; text-decoration:none;">Hubungi Kami</a></li>
                <li><a href="{{ url('/support') }}" style="color:white; text-decoration:none;">Pusat Bantuan</a></li>
                <li><a href="{{ url('/privacy') }}" style="color:white; text-decoration:none;">Kebijakan Privasi</a></li>
            </ul>
        </div>
    </div>

    <!-- Garis pemisah -->
    <div style="padding: 0 10px; max-width: 1800px; margin: 0 auto;">
        <hr style="border: 0; border-top: 1px solid #ccc; margin: 30px 0;">
    </div>

    <!-- Bagian Bawah Footer -->
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; padding: 0 10px; max-width: 1800px; margin: 0 auto;">
        <!-- Logo bawah -->
        <div style="font-size: 18px; font-weight: bold;">
            <img src="{{ asset('images/game-console-logo.png') }}" alt="Logo" style="width:64px; height:60px;">
        </div>

        <!-- Hak Cipta -->
        <div style="background-color: white; color: #3f2466; padding: 6px 16px; border-radius: 20px; font-size: 14px; font-weight: 500;">
            © 2025 Jogedin. Semua Hak Cipta
        </div>
    </div>
</footer>
<script src="{{ asset ('js/main.js')}}"></script>
