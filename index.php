<?php
include 'config/koneksi.php';

// ambil data produk dari database
$query = mysqli_query($conn, "SELECT * FROM products");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AENS PERFUME - Fragrance Catalog</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <nav>
        <div class="logo">
            <img src="assets/Images/AENS_LOGO-removebg-preview.png" class="logo-icon" alt="AENS PERFUME Logo">
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#catalog">Products</a></li>
            <li><a href="#about">About</a></li>
        </ul>
    </nav>
</header>

<main>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-content">
            <h1>Discover Your Signature Scent</h1>
            <p>Hadir dengan aroma eksklusif yang tahan lama, untuk menemani aktivitas anda</p>
            <a href="#catalog" class="cta-button">Explore Collection</a>
        </div>
    </section>

    <!-- KATALOG PRODUK (DARI DATABASE) -->
    <section id="catalog" class="product-catalog">
        <h2 class="section-title">Our Collection</h2>

        <div class="product-grid">
            <?php while ($product = mysqli_fetch_assoc($query)) { ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/Images/<?php echo $product['gambar']; ?>" alt="<?php echo $product['name']; ?>">
                    </div>

                    <div class="product-info">
                        <h3><?php echo $product['nama']; ?></h3>
                        <p><?php echo $product['deskripsi']; ?></p>

                        <p class="harga">
                            Rp <?php echo number_format($product['harga'], 0, ',', '.'); ?>
                        </p>
                        
                        <p id="stok-<?php echo $product['id']; ?>">
                                Stok Tersedia: <?php echo $product['stok']; ?>
                        </p>
                        

                        <button class="order-button"
                            onclick="openOrderForm(
                                '<?php echo $product['id']; ?>',
                                '<?php echo $product['nama']; ?>',
                                '<?php echo $product['harga']; ?>',
                                '<?php echo $product['stok']; ?>'
                            )">
                            Pesan Sekarang
                        </button>

                                                
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="about-section">
        <h2 class="section-title">The Art of Perfumery</h2>
        <p>
            AENS PERFUME lahir dari kecintaan dalam menciptakan wewangian yang unik dan berkesan.
            Setiap botol merupakan karya seni yang dibuat dengan bahan-bahan terbaik dari seluruh dunia
            untuk membangkitkan emosi dan menciptakan kesan yang abadi.
        </p>
    </section>

</main>

<footer>
    <p>&copy; 2025 AENS PERFUME. All Rights Reserved.</p>
    <p>Follow us on <a href="#">Instagram</a></p>
</footer>

    <div id="orderModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeOrderForm()">&times;</span>

            <h2>Form Pemesanan</h2>

            <p id="productName"></p>
            <p id="productPrice"></p>
            <p id="productStock"></p>

            <form id="orderForm">
                <input type="hidden" name="product_id" id="productId">
                <input type="hidden" name="harga" id="productHarga">

                <div class="form-row">
                    <div class="form-group">
                        <label>Nama Lengkap <span class="required">*</span></label>
                        <input type="text" name="nama_lengkap" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Email <span class="required">*</span></label>
                        <input type="email" name="email" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>No. Telepon <span class="required">*</span></label>
                        <input type="text" name="no_hp" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group full-width">
                        <label>Alamat Lengkap <span class="required">*</span></label>
                        <textarea name="alamat" rows="3" required></textarea>
                    </div>
                </div>

                <div class="form-row two-columns">
                    <div class="form-group">
                        <label>Kota <span class="required">*</span></label>
                        <input type="text" name="kota" required>
                    </div>
                    <div class="form-group">
                        <label>Provinsi <span class="required">*</span></label>
                        <input type="text" name="provinsi" required>
                    </div>
                </div>

                <div class="form-row two-columns">
                    <div class="form-group">
                        <label>Kode Pos <span class="required">*</span></label>
                        <input type="text" name="kode_pos" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah <span class="required">*</span></label>
                        <input type="number" name="jumlah" id="jumlahInput" min="1" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Metode Pembayaran <span class="required">*</span></label>
                        <select name="metode_pembayaran" required>
                            <option value="">Pilih Metode</option>
                            <option value="Transfer Bank">Transfer Bank</option>
                            <option value="COD">COD</option>
                            <option value="E-Wallet">E-Wallet</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Kirim Pesanan</button>
            </form>
        </div>
    </div>

    <div id="successModal" class="modal">
        <div class="modal-content">
            <h2>Pesanan Berhasil 🎉</h2>
            <p id="successText"></p>
            <button onclick="closeSuccess()">Tutup</button>
        </div>
    </div>

<!-- JS -->
<script src="assets/js/script.js"></script>

</body>
</html>
