<style>
    body {
        margin: 0;
        padding: 0;
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
