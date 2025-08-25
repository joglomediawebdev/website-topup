<style>
    body {
        margin: 0;
        padding: 0;
        background: #8f79a3; /* ungu lembut seperti gambar */
        font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
    }

    /* Navbar styling */
    nav {
        background: linear-gradient(to right, #0a1f75, #1e1b7a); /* gradasi biru tua */
        border-bottom: 2px solid #a855f7; /* garis ungu */
        padding: 12px 24px;
        display: flex;
        align-items: center;
    }

    nav .logo {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 20px;
        font-weight: bold;
        color: white;
        margin-right: auto; /* dorong menu ke tengah */
    }

    nav ul {
        display: flex;
        list-style: none;
        gap: 32px;
        margin: 0 auto; /* posisi agak ke tengah */
        padding: 0;
    }

    nav ul li a {
        text-decoration: none;
        color: white;
        font-weight: 500;
        transition: color 0.2s ease-in-out;
    }

    nav ul li a:hover {
        color: #a855f7; /* ungu saat hover */
    }

    /* ===== Main content ===== */
    .page-wrapper {
        max-width: 1180px;
        margin: 28px auto 48px;
        padding: 0 24px;
        color: #111827;
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
        height: 40px;
        display: flex;
        align-items: center;
        padding: 0 44px 0 16px;
        border-radius: 22px;
        background: rgba(255,255,255,0.25);
        border: 1px solid rgba(255,255,255,0.45);
        color: #111827;
    }
    .search-input {
        flex: 1;
        border: none;
        outline: none;
        background: transparent;
        color: #111827;
        font-size: 14px;
    }
    .search-close {
        position: absolute;
        right: 12px;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #7c6aa1;
        color: #fff;
        font-size: 12px;
        display: grid;
        place-items: center;
        cursor: pointer;
    }

    .chip-row {
        display: flex;
        gap: 12px;
        margin: 12px 0 18px;
        flex-wrap: wrap;
    }
    .chip {
        background: #e7def2;
        color: #2c2150;
        border: 1px solid #cbb6ec;
        padding: 6px 12px;
        border-radius: 8px;
        font-size: 12px;
        cursor: pointer;
    }

    .section-title {
        color: #fff;
        font-weight: 700;
        letter-spacing: 1px;
        margin: 18px 0 12px;
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

    @media (max-width: 900px){
        .grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 600px){
        .grid { grid-template-columns: 1fr; }
        .card-media { height: 200px; }
    }
</style>

<nav>
    <!-- Logo -->
    <div class="logo">
        <img src="{{ asset('images/game-console-logo.png') }}" alt="Logo" style="width:56px; height:56px;">
        Jogedin
    </div>

    <!-- Menu -->
    <ul>
        <li><a href="{{ url('/') }}">Beranda</a></li>
        <li><a href="{{ url('/joki') }}">Joki</a></li>
        <li><a href="{{ url('/game') }}">Game</a></li>
        <li><a href="{{ url('/afiliasi') }}">Afiliasi</a></li>
        <li><a href="{{ url('/promo') }}">Promo</a></li>
    </ul>
</nav>

<!-- ===== Main Content ===== -->
<div class="page-wrapper">
    <div class="title-row">
        <div class="back-icon"></div>
        <div style="font-size:18px; font-weight:700;">Game</div>
    </div>

    <div class="search-bar">
        <input class="search-input" type="text" placeholder="Cari game…" />
        <div class="search-close">×</div>
    </div>

    <div class="chip-row">
        <div class="chip">Semua Produk</div>
        <div class="chip">Flash Top-Up</div>
        <div class="chip">Voucher</div>
        <div class="chip">Game Lokal</div>
    </div>

    <div class="section-title">A</div>
    <div class="grid">
        @for ($i = 0; $i < 6; $i++)
            <div class="card">
                <img class="card-media" src="{{ asset('images/genshin.png') }}" alt="Game">
                <div class="card-title">Genshin Impact</div>
            </div>
        @endfor
    </div>

    <div class="section-title" style="margin-top:24px;">B</div>
    <div class="grid">
        @for ($i = 0; $i < 3; $i++)
            <div class="card">
                <img class="card-media" src="{{ asset('images/genshin.png') }}" alt="Game">
                <div class="card-title">Belum tersedia</div>
            </div>
        @endfor
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
