# Toko Online CodeIgniter 4

Proyek ini adalah platform toko online yang dibangun menggunakan [CodeIgniter 4](https://codeigniter.com/). Sistem ini menyediakan beberapa fungsionalitas untuk toko online, termasuk manajemen produk, keranjang belanja, dan sistem transaksi.

## Daftar Isi

- [Fitur](#fitur)
- [Persyaratan Sistem](#persyaratan-sistem)
- [Instalasi](#instalasi)
- [Struktur Proyek](#struktur-proyek)

## Fitur

- Katalog Produk
  - Tampilan produk dengan gambar
  - Pencarian produk
- Keranjang Belanja
  - Tambah/hapus produk
  - Update jumlah produk
- Sistem Transaksi
  - Proses checkout
  - Riwayat transaksi
- Panel Admin
  - Manajemen produk (CRUD)
  - Manajemen kategori
  - Laporan transaksi
  - Export data ke PDF
- Sistem Autentikasi
  - Login/Register pengguna
  - Manajemen akun
- UI Responsif dengan NiceAdmin template

## Persyaratan Sistem

- PHP >= 8.2
- Composer
- Web server (XAMPP)

## Instalasi

1. **Clone repository ini**
   ```bash
   git clone [URL repository]
   cd belajar-ci-tugas
   ```
2. **Install dependensi**
   ```bash
   composer install
   ```
3. **Konfigurasi database**

   - Start module Apache dan MySQL pada XAMPP
   - Buat database **db_ci4** di phpmyadmin.
   - copy file .env dari tutorial https://www.notion.so/april-ns/Codeigniter4-Migration-dan-Seeding-045ffe5f44904e5c88633b2deae724d2

4. **Jalankan migrasi database**
   ```bash
   php spark migrate
   ```
5. **Seeder data**
   ```bash
   php spark db:seed ProductSeeder
   ```
   ```bash
   php spark db:seed UserSeeder
   ```
6. **Jalankan server**
   ```bash
   php spark serve
   ```
7. **Akses aplikasi**
   Buka browser dan akses `http://localhost:8080` untuk melihat aplikasi.

## Struktur Proyek

Proyek menggunakan struktur MVC CodeIgniter 4:

- app/Controllers - Logika aplikasi dan penanganan request
  - AuthController.php - Autentikasi pengguna
  - ProdukController.php - Manajemen produk
  - TransaksiController.php - Proses transaksi
- app/Models - Model untuk interaksi database
  - ProductModel.php - Model produk
  - UserModel.php - Model pengguna
- app/Views - Template dan komponen UI
  - v_produk.php - Tampilan produk
  - v_keranjang.php - Halaman keranjang
- public/img - Gambar produk dan aset
- public/NiceAdmin - Template admin

## 📦 Fitur Utama:
- Login multi-role (admin & user biasa)
- Manajemen produk dan kategori
- Keranjang belanja (dengan session & library Cart)
- Checkout transaksi dengan pengiriman (web service RajaOngkir)
- Diskon harian otomatis (berdasarkan tanggal login)
- Riwayat transaksi & detail pembelian
- Dashboard sederhana (folder public)
- Validasi diskon tidak boleh duplikat tanggal
- Diskon tampil di header, keranjang, transaksi, dan profil

---

## ⚙️ Cara Install
1. Clone project ini
2. Jalankan `composer install`
3. Copy file `.env.example` jadi `.env`, lalu isi koneksi database
4. Jalankan migration:
   ```bash
   php spark migrate
   php spark db:seed DiskonSeeder

 
(# UAS Praktikum PWL - Manajemen Diskon dan Transaksi (CodeIgniter 4))

## Nama
Nama: Arvendo Doni Duwi Mahendra
NIM: A11.2023.15489
Kelas: A11.4419
## Deskripsi Aplikasi
Aplikasi ini dibangun menggunakan **CodeIgniter 4** sebagai bagian dari **Ujian Akhir Semester
Praktikum Web Lanjut**. Aplikasi ini memiliki fitur:
- Login & Logout pengguna
- Role-based access (user dan admin)
- Manajemen Produk
- Manajemen Diskon (admin only)
- Diskon otomatis diterapkan ke keranjang sesuai tanggal hari ini
- Fitur Keranjang Belanja (Cart)
- Checkout transaksi
- Penyimpanan ke database (transaction dan transaction_detail)
- Riwayat Transaksi pengguna
- Tampilan menggunakan Bootstrap 5
## Cara Menjalankan Proyek
1. Clone atau download repository ini
2. Import database ke MySQL/phpMyAdmin
3. Atur file `.env`
4. Jalankan dengan `php spark serve`
5. Akses di browser: http://localhost:8080
## Akun Login
### Admin:
- Username: Arvendo Duwi
- Password: 1234567
### User:
- Username: Sherly
- Password: 1234567

