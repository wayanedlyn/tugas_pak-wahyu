<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Rumah Makan</title>
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
        <h1 style="text-align: center; margin-bottom: 30px;">Hubungi Kami</h1>

        <div class="contact-info">
            <h2>📞 Informasi Kontak</h2>
            <p><strong>Alamat:</strong> Jl. Raya Contoh No. 123, Jakarta Selatan</p>
            <p><strong>Telepon:</strong> (021) 1234-5678</p>
            <p><strong>Email:</strong> info@rumahmakanenak.com</p>
            <p><strong>WhatsApp:</strong> 0812-3456-7890</p>
            <p><strong>Jam Operasional:</strong></p>
            <ul>
                <li>Senin - Jumat: 08:00 - 22:00</li>
                <li>Sabtu - Minggu: 09:00 - 23:00</li>
            </ul>
        </div>

        <div class="contact-form">
            <h2>✉️ Kirim Pesan</h2>
            <form>
                <div class="form-group">
                    <label for="name">Nama Lengkap:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Nomor Telepon:</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="message">Pesan:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Kirim Pesan</button>
            </form>
        </div>
    </div>
</body>

</html>
