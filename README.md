# AENS PERFUME – Website Pemesanan Parfum

AENS PERFUME adalah website katalog dan pemesanan parfum berbasis web yang dikembangkan sebagai tugas mata kuliah **Pemrograman Web**.  
Website ini menampilkan katalog produk parfum dan menyediakan fitur pemesanan online yang terhubung dengan database MySQL menggunakan PHP.

---

## 📌 Fitur Utama
- Menampilkan katalog produk parfum dari database
- Menampilkan detail produk (nama, deskripsi, harga, dan stok)
- Form pemesanan tanpa pindah halaman (popup/modal)
- Penyimpanan data pesanan ke database
- Update stok produk otomatis setelah pemesanan
- Tampilan responsif dengan HTML, CSS, dan JavaScript

---

## 🛠️ Teknologi yang Digunakan
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP (Native)
- **Database**: MySQL
- **Server Lokal**: XAMPP
- **Tools**: Visual Studio Code, phpMyAdmin

---

## 📂 Struktur Folder & File

```aens_parfume/

│
├── assets/
│ ├── css/
│ │ └── style.css
│ ├── js/
│ │ ├── script.js
│ └── images/
│ ├── AENS LOGO.jpeg
│ ├── AENS_LOGO-removebg-preview.png
│ ├── BERRY.jpg
│ ├── BLUE NIGHT.jpg
│ ├── COOLMAN.jpg
│ ├── LUCKY.jpg
│ └── PINKFON.jpg
│ ├── ROMANCE.jpg
│
├── database/
│ ├── koneksi.php
│ └── aens_parfume.sql
│
├── index.php
├── order.php
├── proses_order.php
├── test.php
│
└── README.md
```
---

## 📄 Penjelasan File Penting

### `index.php`
Halaman utama website yang menampilkan:
- Hero section
- Katalog produk parfum
- Tombol **Pesan Sekarang**
- Popup form pemesanan  
Data produk diambil langsung dari database MySQL.

---

### `proses_order.php`
File backend untuk:
- Menerima data dari form pemesanan (AJAX)
- Menyimpan data pesanan ke tabel `orders`
- Menghitung total harga
- Mengurangi stok produk
- Mengirim respon JSON ke frontend

---

### `assets/css/style.css`
Berisi seluruh styling website:
- Layout halaman
- Tampilan katalog produk
- Desain popup form pemesanan
- Efek hover dan animasi

---

### `assets/js/script.js`
Berisi JavaScript untuk:
- Efek animasi scroll
- Interaksi UI (hover, animasi produk)
- Pengaturan tampilan modal popup

---

### `database/koneksi.php`
File koneksi database MySQL menggunakan ekstensi `mysqli`.  
Digunakan oleh semua file PHP yang membutuhkan akses database.

---

### `database/aens_parfume.sql`
File SQL untuk:
- Membuat database
- Membuat tabel `products` dan `orders`
- Digunakan untuk import database melalui phpMyAdmin

---

## 🗄️ Struktur Database

### Tabel `products`
Digunakan untuk menyimpan data produk parfum:
- nama produk
- deskripsi
- harga
- stok
- gambar

### Tabel `orders`
Digunakan untuk menyimpan data pemesanan pelanggan:
- nama lengkap
- email
- nomor telepon
- alamat
- jumlah pesanan
- metode pembayaran
- total harga

---

## ▶️ Cara Menjalankan Project
1. Install dan jalankan **XAMPP**
2. Pindahkan folder `aens_parfume` ke:
C:\xampp\htdocs\

3. Import database melalui phpMyAdmin:
- Buat database `aens_parfume`
- Import file `database/aens_parfume.sql`
4. Jalankan di browser: http://localhost/aens_parfume/index.php
