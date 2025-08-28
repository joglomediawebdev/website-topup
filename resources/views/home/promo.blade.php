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
                    <li><a href="{{ url('/') }}">Beranda</a></li>
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

<div class="page-wrapper">
    <div class="title-row">
        <div class="back-icon"></div>
        <a href="{{ url('/') }}" style="font-size:18px; font-weight:700; color:inherit; text-decoration:none;">
            Beranda
        </a>
    </div>
    
</div>
<!-- PROMO SECTION NEW LAYOUT -->
<style>
    .promo-hero { max-width: 1100px; margin: 18px auto 10px; padding: 0 16px; }
    .promo-hero-banner { width: 100%; border-radius: 10px; box-shadow: 0 8px 22px rgba(0,0,0,.35); }
    .promo-hero-cta { display: grid; place-items: center; margin-top: 10px; }
    .btn-tersier { background: linear-gradient(180deg, #A020F0); color: #fff; border: none; border-radius: 14px; padding: 12px 20px; font-weight: 800; cursor: pointer; box-shadow: 0 10px 20px rgba(124,32,255,.45); display:inline-flex; align-items:center; gap:8px; text-decoration:none; }
    .btn-tersier:hover { filter: brightness(1.06); }

    .promo-chips { display:flex; gap:24px; justify-content:center; margin: 18px 0 26px; flex-wrap:wrap; }
    .promo-chip { background:#5b4b66; color:#ffffff; border:none; padding:10px 18px; border-radius:10px; font-size:14px; font-weight:600; box-shadow: 0 4px 10px rgba(0,0,0,.15); }

    .promo-section { max-width: 1100px; margin: 0 auto 26px; padding: 0 16px; }
    .promo-title { color:#fff; font-size:24px; font-weight:800; margin: 10px 0 12px; }
    .promo-card { background: transparent; border:5px solid #A020F0; border-radius:14px; padding:32px; display:flex; flex-direction:column; align-items:center; }
    .promo-grid { display:grid; gap:16px; }
    .promo-banner-img { width:100%; border-radius:8px; box-shadow: 0 6px 14px rgba(0,0,0,.25); }
    .promo-card-group { background: transparent; border:5px solid #A020F0; border-radius:14px; padding:40px;}
    .promo-item-block { display:flex; flex-direction:column; align-items:center; margin-bottom:16px; }
    .promo-item-block:last-child { margin-bottom:0; }
    .btn-kotak { background: linear-gradient(180deg, #A020F0); color:#fff; border:none; border-radius:12px; padding:10px 16px; font-weight:800; cursor:pointer; margin-top:8px; display:inline-flex; align-items:center; gap:8px; box-shadow: 0 8px 18px rgba(124,32,255,.35); }
    .btn-kotak:hover { filter: brightness(1.06); }
    .btn-icon { width:16px; height:16px; opacity:.9; }
    @media(min-width: 700px){ .promo-grid { grid-template-columns: 1fr; } }
</style>

<?php
    $heroBanner = asset('images/cod-event.png');
    $bestDealBanners = [
        asset('images/fc-mobile-event.png'),
        asset('images/freefire-event.png'),
    ];
    $infoEventBanner = asset('images/dragon-nest-event.png');
?>

<div class="promo-hero">
    <img class="promo-hero-banner" src="{{ $heroBanner }}" alt="Hero">
    <div class="promo-hero-cta">
        <a href="#" class="btn-tersier">Baca Selengkapnya <img class="btn-icon" src="{{ asset('images/share.png') }}" alt="share"></a>
    </div>
</div>

<div class="promo-chips">
    <div class="promo-chip">Semua Produk</div>
    <div class="promo-chip">Game Mobile</div>
    <div class="promo-chip">Game PC</div>
    <div class="promo-chip">Game Lokal</div>
  </div>

<div class="promo-section">
    <div class="promo-title">BEST DEAL 🔥</div>
    <div class="promo-card-group">
        @foreach($bestDealBanners as $src)
            <div class="promo-item-block">
                <img class="promo-banner-img" src="{{ $src }}" alt="Best Deal">
                <button class="btn-kotak" type="button">Baca Selengkapnya <img class="btn-icon" src="{{ asset('images/share.png') }}" alt="share"></button>
            </div>
        @endforeach
    </div>
</div>

<div class="promo-section">
    <div class="promo-title">Info Event Game</div>
    <div class="promo-grid">
        <div class="promo-card">
            <img class="promo-banner-img" src="{{ $infoEventBanner }}" alt="Info Event">
            <button class="btn-kotak" type="button">Baca Selengkapnya <img class="btn-icon" src="{{ asset('images/share.png') }}" alt="share"></button>
        </div>
    </div>
</div>

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

<style>
    body {
        margin: 0;
        padding: 0;
        background: #8f79a3 url('{{ asset('images/background-game-page.png') }}') no-repeat center center fixed; /* ungu + gambar */
        background-size: full;
        font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
    }

    /* Navbar styling */

    /* ===== Main content ===== */
    .page-wrapper {
        max-width: 1180px;
        margin: 28px auto 48px;
        padding: 0 24px;
        color: #111827;
        padding-top: 80px;
    }

    .title-row {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #fff;
        margin-bottom: 12px;
        user-select: none;
    }

    .back-icon {
        width: 20px;
        height: 20px;
        border: 2px solid #fff;
        border-top: 0;
        border-right: 0;
        transform: rotate(45deg);
        border-radius: 2px;
        opacity: .9;
    }

    .search-bar {
        position: relative;
        height: 48px;                /* lebih tinggi biar oval */
        display: flex;
        align-items: center;
        padding: 0 44px 0 44px;      /* kiri & kanan cukup untuk ikon */
        border-radius: 9999px;       /* full oval */
        background: #5b4b66;         /* warna ungu sesuai gambar */
        color: #fff;                 /* teks & ikon jadi putih */
        box-shadow: 0 4px 6px rgba(0,0,0,0.25); /* shadow biar timbul */
    }

    .search-input {
        flex: 1;
        border: none;
        outline: none;
        background: transparent;
        color: #fff;                 /* teks input putih */
        font-size: 16px;             /* agak lebih besar */
    }

    .search-icon {
        position: absolute;
        left: 16px;
        width: 20px;
        height: 20px;
        color: #fff;                 /* ikon kiri putih */
        cursor: pointer;
    }

    .search-close {
        position: absolute;
        right: 16px;
        width: 20px;
        height: 20px;
        color: #fff;                 /* hanya ikon X putih */
        font-size: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        background: none;            /* hilangkan lingkaran background */
    }

    .chip-row {
    display: flex;
    justify-content: space-between; /* biar merata */
    align-items: center;
    gap: 16px; /* jarak antar chip */
    margin: 12px 0 18px;
    flex-wrap: nowrap; /* biar tetap satu baris */
    }

    .chip {
        flex: 1; /* semua chip punya lebar sama */
        text-align: center;
        background: #5b4b66;
        color: #ffffff;
        padding: 12px 0; /* tinggi lebih proporsional */
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s;
    }

    .chip:hover {
        background: #463553; /* warna lebih gelap saat hover */
    }

    .page-wrapper .section-title {
        color: #fff;
        font-weight: 700;
        letter-spacing: 1px;
        margin: 8px 0 6px;
        padding-bottom: 0;
        font-size: 18px;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 22px;
    }

    .card {
        background: #f2f2f6;
        border-radius: 16px;
        overflow: hidden; /* pastikan gambar yang cover tidak keluar */
        box-shadow: 0 6px 16px rgba(0,0,0,.18);
    }
    .card-media {
        width: 100%;
        height: 220px; /* lebih tinggi agar benar-benar memenuhi area gambar */
        object-fit: cover; /* isi penuh, crop jika perlu */
        display: block;
        background: transparent; /* hilangkan abu-abu bawaan */
    }
    .card-title {
        padding: 12px 14px 16px;
        text-align: center;
        font-weight: 600;
        color: #111827;
    }

    .main-nav {
    background: rgba(15, 23, 42, 0.9);
    backdrop-filter: blur(20px);
    padding: 0.8rem 2rem;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    border-bottom: 1px solid rgba(139, 92, 246, 0.2);
    }

    @media (max-width: 900px){
        .grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 600px){
        .grid { grid-template-columns: 1fr; }
        .card-media { height: 200px; }
    }
</style>
<script src="{{ asset ('js/main.js')}}"></script>