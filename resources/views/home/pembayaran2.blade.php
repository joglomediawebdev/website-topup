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
    <?php
        // Gambar header/hero (ganti secara manual sesuai kebutuhan)
        $hero = [
            'logo' => asset('images/free-fire.png'),
            'title' => 'Free Fire',
            'vendor' => 'Garena',
            'chips' => ['Android', 'iOS']
        ];

        // Daftar produk/nominal yang bisa Anda atur secara manual (gambar, judul, harga)
        $produkTopup = [
            [ 'src' => asset('images/ff-diamond.png'), 'title' => '5 Diamonds', 'price' => 'IDR 901' ],
            [ 'src' => asset('images/ff-diamond.png'), 'title' => '12 Diamonds', 'price' => 'IDR 1.802' ],
            [ 'src' => asset('images/ff-diamond.png'), 'title' => '50 Diamonds', 'price' => 'IDR 7.207' ],
            [ 'src' => asset('images/ff-diamond.png'), 'title' => '70 Diamonds', 'price' => 'IDR 9.009' ],
            [ 'src' => asset('images/ff-diamond.png'), 'title' => '355 Diamonds', 'price' => 'IDR 18.018' ],
            [ 'src' => asset('images/ff-diamond.png'), 'title' => '720 Diamonds', 'price' => 'IDR 45.045' ],
            [ 'src' => asset('images/ff-diamond.png'), 'title' => '2180 Diamonds', 'price' => 'IDR 270.270' ],
            [ 'src' => asset('images/ff-diamond.png'), 'title' => '3640 Diamonds', 'price' => 'IDR 450.450' ],
        ];
    ?>

    <!-- Hero/Header Game -->
    <div class="hero-game">
        <img class="hero-logo" src="{{ $hero['logo'] }}" alt="Logo">
        <div>
            <div class="mini-chip-row">
                @foreach ($hero['chips'] as $chip)
                    <div class="mini-chip">{{ $chip }}</div>
                @endforeach
            </div>
            <div style="font-size:22px; font-weight:800;">{{ $hero['title'] }}</div>
            <div class="muted">{{ $hero['vendor'] }}</div>
            <a class="muted" href="{{ url('#') }}" style="text-decoration: underline;">Cara Transaksi</a>
        </div>
    </div>

    <div class="layout">
        <!-- Kolom kiri -->
        <div class="left-col">
            <!-- Step 1 -->
            <div class="panel">
                <div class="panel-title"><span class="step-badge">1</span> Masukkan Player ID</div>
                <div class="row" style="margin-bottom: 10px;">
                    <input class="input" type="text" placeholder="Masukkan Player ID">
                </div>
                <div class="muted">Untuk menemukan Player ID Anda, masuk aplikasi dan lihat pada profil Anda.</div>
            </div>

            <!-- Step 2 -->
            <div class="panel" style="margin-top: 14px;">
                <div class="panel-title"><span class="step-badge">2</span> Pilih Nominal Top Up</div>
                <div class="product-grid">
                    @foreach ($produkTopup as $item)
                        <div class="product-card">
                            <img class="product-media" src="{{ $item['src'] }}" alt="Produk">
                            <div class="product-body">
                                <div style="font-size:12px; font-weight:600;">{{ $item['title'] }}</div>
                                <div class="price">{{ $item['price'] }}</div>
                                <button class="btn-main" type="button">Pilih</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Step 3 -->
            <div class="panel" style="margin-top: 14px;">
                <div class="panel-title"><span class="step-badge">3</span> Pilih Metode Pembayaran</div>
                <?php
                    // Opsi pembayaran dapat diubah manual di sini
                    $paymentOptions = [
                        'ewallet' => [
                            ['logo' => asset('images/dana.png'),      'name' => 'DANA',      'fee' => 'IDR 1.389'],
                            ['logo' => asset('images/shopeepay.png'), 'name' => 'ShopeePay', 'fee' => 'IDR 1.389'],
                            ['logo' => asset('images/gopay.png'),     'name' => 'GoPay',     'fee' => 'IDR 1.389'],
                            ['logo' => asset('images/ovo.png'),       'name' => 'OVO',       'fee' => 'IDR 1.389'],
                            ['logo' => asset('images/linkaja.png'),   'name' => 'LinkAja',   'fee' => 'IDR 1.389'],
                        ],
                        'bank' => [
                            ['logo' => asset('images/bca.png'),  'name' => 'BCA',  'fee' => 'IDR 3.000'],
                            ['logo' => asset('images/bni.png'),  'name' => 'BNI',  'fee' => 'IDR 3.000'],
                            ['logo' => asset('images/bri.png'),  'name' => 'BRI',  'fee' => 'IDR 3.000'],
                            ['logo' => asset('images/mandiri.png'), 'name' => 'Mandiri', 'fee' => 'IDR 3.000'],
                        ],
                        'qris' => [
                            ['logo' => asset('images/qris.png'), 'name' => 'QRIS', 'fee' => 'IDR 1.000'],
                        ],
                        'retail' => [
                            ['logo' => asset('images/alfamart.png'), 'name' => 'Alfamart', 'fee' => 'IDR 16.000'],
                            ['logo' => asset('images/indomaret.png'), 'name' => 'Indomaret', 'fee' => 'IDR 6.000'],
                        ],
                    ];
                ?>

                <div class="pay-tabs">
                    <button class="pay-tab active" data-tab="ewallet" type="button">E-Wallet</button>
                    <button class="pay-tab" data-tab="bank" type="button">Transfer Bank</button>
                    <button class="pay-tab" data-tab="qris" type="button">QR Code</button>
                    <button class="pay-tab" data-tab="retail" type="button">Via Retail</button>
                </div>

                <div id="pay-content">
                    @foreach (['ewallet','bank','qris','retail'] as $group)
                        <div class="pay-panel" data-panel="{{ $group }}" style="display: {{ $group==='ewallet' ? 'block' : 'none' }};">
                            <div class="pay-grid">
                                @foreach ($paymentOptions[$group] as $opt)
                                    <div class="pay-card">
                                        <img class="pay-logo" src="{{ $opt['logo'] }}" alt="{{ $opt['name'] }}">
                                        <div class="pay-fee">Biaya: {{ $opt['fee'] }}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Kolom kanan -->
        <div class="right-col">
            <div class="panel">
                <div style="font-weight:800; margin-bottom:8px;">Checkout</div>
                <div class="checkout-row">
                    <div class="checkout-item"><div>Item</div><div class="muted">-</div></div>
                    <div class="checkout-item"><div>Payment</div><div class="muted">-</div></div>
                    <div class="checkout-item"><div>Alamat Email</div><div class="muted">-</div></div>
                    <div class="checkout-item"><div>Metode Pembayaran</div><div class="muted">-</div></div>
                    <div class="checkout-item divider"><div>Biaya Admin</div><div class="muted">IDR 0</div></div>
                    <div class="checkout-item"><div>Total</div><div class="muted">IDR 0</div></div>
                </div>
                <button class="btn-main" style="width:100%; margin-top:12px;">Bayar</button>
            </div>

            <div class="panel" style="margin-top: 14px;">
                <div style="font-weight:800; margin-bottom:8px;">Konfirmasi Pembelian</div>
                <div style="display:grid; gap:10px;">
                    <div>
                        <div class="muted" style="margin-bottom:4px;">Nomor Telepon / Email</div>
                        <input class="input" type="text" placeholder="628999999999">
                        <div class="muted">Nomor ini akan dihubungi apabila ada kendala.</div>
                    </div>
                    <div>
                        <div class="muted" style="margin-bottom:4px;">Kode Promo</div>
                        <div class="row" style="gap:8px;">
                            <input class="input" type="text" placeholder="Tukar kode">
                            <button class="btn-main" type="button">Cek Kode Promo</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel" style="margin-top: 14px;">
                <div style="font-weight:800; margin-bottom:8px;">Bagaimana Cara Top up Diamonds?</div>
                <ol class="muted" style="padding-left: 18px; display:grid; gap:6px;">
                    <li>Klik di sini untuk memulai.</li>
                    <li>Selesaikan pembayaran.</li>
                    <li>Masukkan Player ID.</li>
                    <li>Pilih jumlah Diamonds yang kamu inginkan.</li>
                    <li>Pilih metode pembayaran favoritmu.</li>
                    <li>Nikmati item dalam game setelah pembayaran berhasil.</li>
                    <li>Jangan lupa topup kembali disini!</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<script>
    // Toggle payment tabs and content panels
    (function(){
        const tabs = document.querySelectorAll('.pay-tab');
        const panels = document.querySelectorAll('.pay-panel');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const key = tab.getAttribute('data-tab');
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                panels.forEach(p => {
                    p.style.display = (p.getAttribute('data-panel') === key) ? 'block' : 'none';
                });
            });
        });
    })();
</script>

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
        background-size: cover;
        font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
    }

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
    
    /* ===== Pembayaran page layout ===== */
    .hero-game {
        display: grid;
        grid-template-columns: 84px 1fr;
        gap: 30px;
        background: rgba(255,255,255,0.15);
        border: 1px solid rgba(255,255,255,0.35);
        border-radius: 14px;
        padding: 14px;
        color: #fff;
        margin-bottom: 18px;
    }
    .hero-logo { width: 103px; height: 103px; border-radius: 10px; object-fit: cover; box-shadow: 0 4px 10px rgba(0,0,0,.25); }
    .mini-chip-row { display: flex; gap: 8px; margin: 6px 0 10px; flex-wrap: wrap; }
    .mini-chip { background: #e7def2; color: #2c2150; border: 1px solid #cbb6ec; padding: 4px 10px; border-radius: 999px; font-size: 12px; }

    .layout { display: grid; grid-template-columns: 1fr 340px; gap: 18px; align-items: start; }
    .panel { background: #f7f7fb; border-radius: 12px; padding: 16px; box-shadow: 0 6px 16px rgba(0,0,0,.18); border: 1px solid #e5e7eb; }
    .panel-title { font-weight: 700; color: #1f2937; margin: 0 0 12px; display: flex; align-items: center; gap: 10px; }
    .step-badge { background: #6b21a8; color: #fff; border-radius: 6px; padding: 2px 8px; font-size: 12px; }
    .row { display: flex; gap: 10px; }
    .input { flex: 1; height: 36px; border-radius: 8px; border: 1px solid #d1d5db; padding: 0 10px; }
    .select { height: 36px; border-radius: 8px; border: 1px solid #d1d5db; padding: 0 10px; min-width: 160px; }

    .product-grid { display: grid; grid-template-columns: repeat(4, minmax(0,1fr)); gap: 12px; }
    .product-card { background: #ffffff; border: 1px solid #e5e7eb; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,.08); display: flex; flex-direction: column; }
    .product-media { width: 100%; height: 110px; object-fit: cover; background: #f9fafb; }
    .product-body { padding: 10px; display: grid; gap: 6px; }
    .price { font-weight: 700; color: #6b21a8; font-size: 13px; }
    .btn-main { background: #6b21a8; color: #fff; border: none; border-radius: 8px; padding: 8px 10px; cursor: pointer; font-weight: 600; }
    .btn-tersier { background: #6b21a8; color: #ffffff; }

    .checkout-row { display: grid; gap: 12px; }
    .checkout-item { display: grid; grid-template-columns: 1fr auto; gap: 8px; font-size: 13px; padding: 6px 0; border-bottom: none; }
    .checkout-item.divider { border-top: 2px solid #e5e7eb; }
    .muted { color: #6b7280; font-size: 12px; }

    @media (max-width: 980px){ .layout { grid-template-columns: 1fr; } }
    @media (max-width: 640px){ .product-grid { grid-template-columns: repeat(2,1fr); } }

    /* ===== Payment tabs & options ===== */
    .pay-tabs { display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 12px; }
    .pay-tab { background: #e5e7eb; color: #111827; border-radius: 8px; padding: 8px 12px; border: 1px solid #d1d5db; cursor: pointer; font-weight: 600; }
    .pay-tab.active { background: #6b21a8; color: #fff; border-color: #6b21a8; }
    .pay-grid { display: grid; grid-template-columns: repeat(4, minmax(0,1fr)); gap: 14px; }
    .pay-card { background: #ffffff; border: 1px solid #e5e7eb; border-radius: 12px; padding: 12px; box-shadow: 0 4px 10px rgba(0,0,0,.08); }
    .pay-logo { width: 120px; height: 40px; object-fit: contain; display:block; margin: 0 auto 8px; }
    .pay-fee { font-size: 12px; color: #6b7280; text-align: center; }
    @media (max-width: 640px){ .pay-grid { grid-template-columns: repeat(2, minmax(0,1fr)); } }
</style>
<script src="{{ asset ('js/main.js')}}"></script>