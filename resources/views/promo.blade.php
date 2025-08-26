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
        <li><a href="{{ url('/game') }}">Game</a></li>
        <li><a href="{{ url('/afiliasi') }}">Afiliasi</a></li>
        <li><a href="{{ url('/promo') }}">Promo</a></li>
    </ul>
</nav>


<!-- PROMO SECTION -->
<style>
    /* Container dan tata letak promo */
    .promo-wrapper {
        background-color: #7a5a8c33; /* ungu soft transparan */
        padding: 24px 12px;
    }

    .promo-container {
        max-width: 980px;
        margin: 0 auto;
        background-color: #7a5a8c66; /* ungu lembut */
        border: 3px solid #6b21a8;
        border-radius: 12px;
        padding: 28px 18px 36px 18px;
    }

    .promo-header {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #ffffff;
        font-weight: 700;
        font-size: 20px;
        margin-bottom: 16px;
    }

    .promo-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 24px 0 38px 0;
    }

    .promo-banner {
        width: 100%;
        max-width: 720px;
        border-radius: 8px;
        box-shadow: 0 6px 16px rgba(0,0,0,0.35);
        border: 2px solid #4c1d95; /* ungu tua */
    }

    .promo-link {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: #ffffff;
        text-decoration: none;
        font-size: 13px;
        margin-top: 10px;
        padding: 6px 10px;
        border-radius: 999px;
        background-color: rgba(255,255,255,0.08);
        border: 1px solid rgba(255,255,255,0.2);
    }

    .promo-link:hover { color: #c084fc; border-color: #c084fc; }

    @media (max-width: 640px) {
        .promo-container { padding: 18px 10px 26px 10px; }
        .promo-banner { max-width: 100%; }
    }
</style>

<div class="promo-wrapper">
    <div class="promo-container">
        <div class="promo-header">
            <span>❮</span>
            <span>Game</span>
        </div>

        <!--
            Cara menambah/menghapus banner:
            - Duplikasikan blok <div class="promo-item"> di bawah ini
            - Ganti atribut src gambar dengan file Anda di folder public/images
            - Ganti href pada tautan jika diperlukan
        -->

        <?php
            // Anda bisa menambah atau menghapus item pada array ini secara manual
            $promoBanners = [
                [ 'src' => asset('images/cod-event.png'),  'href' => '#', 'alt' => 'Promo 1' ],
                [ 'src' => asset('images/freefire-event.png'), 'href' => '#', 'alt' => 'Promo 2' ],
                [ 'src' => asset('images/fc-mobile-event.png'),  'href' => '#', 'alt' => 'Promo 3' ],
                [ 'src' => asset('images/event-kode-promo.png'), 'href' => '#', 'alt' => 'Promo 4' ],
            ];
        ?>

        @foreach ($promoBanners as $promo)
            <div class="promo-item">
                <img class="promo-banner" src="{{ $promo['src'] }}" alt="{{ $promo['alt'] }}">
                <a class="promo-link" href="{{ $promo['href'] }}">
                    Baca Selengkapnya
                    <img src="{{ asset('images/link.png') }}" alt="share" style="width:14px;height:14px;opacity:0.85;">
                </a>
            </div>
        @endforeach
    </div>
    <div style="height:24px"></div>
    <!-- spacer kecil sebelum footer -->
    
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
