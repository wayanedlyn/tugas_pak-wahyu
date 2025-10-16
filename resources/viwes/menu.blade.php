<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Rumah Makan</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="/">Rumah Makan Enak</a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/menu" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 style="text-align: center; margin-bottom: 30px;">Menu Kami</h1>

        <div class="menu-category">
            <h2>🍽️ Makanan Utama</h2>
            <ul>
                <li><strong>Nasi Goreng Spesial</strong> - Rp 25.000</li>
                <li><strong>Mie Ayam Bakso</strong> - Rp 20.000</li>
                <li><strong>Gado-gado</strong> - Rp 18.000</li>
                <li><strong>Sate Ayam (10 tusuk)</strong> - Rp 30.000</li>
                <li><strong>Ayam Bakar</strong> - Rp 35.000</li>
            </ul>
        </div>

        <div class="menu-category">
            <h2>🥤 Minuman</h2>
            <ul>
                <li><strong>Es Teh Manis</strong> - Rp 5.000</li>
                <li><strong>Jus Jeruk</strong> - Rp 10.000</li>
                <li><strong>Kopi Hitam</strong> - Rp 8.000</li>
                <li><strong>Es Kelapa Muda</strong> - Rp 12.000</li>
                <li><strong>Air Mineral</strong> - Rp 4.000</li>
            </ul>
        </div>

        <div class="menu-category">
            <h2>🍰 Dessert</h2>
            <ul>
                <li><strong>Es Krim Vanilla</strong> - Rp 15.000</li>
                <li><strong>Pudding Coklat</strong> - Rp 12.000</li>
                <li><strong>Kue Lapis</strong> - Rp 8.000</li>
            </ul>
        </div>
    </div>
</body>

</html>
