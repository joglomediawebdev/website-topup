<footer style="background-color: #3f2466; color: white; padding: 40px 0; width: 100vw; position: relative; left: 50%; right: 50%; margin-left: -50vw; margin-right: -50vw;">
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
