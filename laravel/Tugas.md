# 🚀 Roadmap Belajar Laravel Step by Step

Ini adalah catatan roadmap belajar Laravel dari **dasar sampai advanced**.  
Tiap proyek dibagi menjadi 3 level sesuai tingkat kesulitan dan fitur yang digunakan.

---

## 📌 Level 1 – Laravel Murni (Mudah–Sedang)

### 1️⃣ Proyek 1: Simple Blog
**Tujuan:** Belajar CRUD, routing, view, model, migration di Laravel.  
**Fitur:**
- Tampilkan daftar artikel
- Tambah / edit / hapus artikel  

**Belajar apa:**
- Routes (`web.php`)
- Controller dasar
- Model & Migration
- Blade templating
- Form request

**Kompleksitas:** Mudah – masih pakai Laravel murni, database sederhana (SQLite/MySQL)

---

### 2️⃣ Proyek 2: To-Do List Web App
**Tujuan:** Belajar session, validasi, dan hubungan antar tabel (relasi sederhana)  

**Fitur:**
- Buat task baru, tandai selesai
- Filter by status (done/pending)

**Belajar apa:**
- Session handling (Laravel session)
- Validation & error messages
- Relasi sederhana (user-task jika pakai login)

**Kompleksitas:** Sedang – masih murni Laravel tapi mulai pakai logika sedikit kompleks

---

### 3️⃣ Proyek 3: Mini E-Commerce (Produk + Cart)
**Tujuan:** Belajar banyak tabel & relasi, dasar autentikasi  

**Fitur:**
- Tabel produk, tambah ke cart (session based)
- Login user sederhana

**Belajar apa:**
- Authentication (`php artisan make:auth` atau Laravel Breeze)
- Relasi banyak-tabel (produk, cart, user)
- Query builder & Eloquent

**Kompleksitas:** Sedang – mulai menggabungkan banyak konsep Laravel murni

---

## 📌 Level 2 – Laravel + Starter Package Raugadh (Sedang–Sulit)

> Sekarang mulai pakai **starter package Raugadh**, sebagian struktur sudah siap pakai. Tujuan: belajar memperluas project dengan fitur siap pakai, customisasi, dan integrasi Laravel murni.

### 4️⃣ Proyek 4: Sistem Reservasi Studio / Cosplay
**Tujuan:** Belajar integrasi starter package + modifikasi fitur  

**Fitur:**
- User daftar & login
- Booking studio atau kostum
- Admin lihat jadwal booking, approve / reject

**Belajar apa:**
- Gunakan starter package Raugadh (struktur modul siap pakai)
- Override controller & blade bawaan
- Integrasi middleware dan policy

**Kompleksitas:** Sedang – pakai starter, tapi mulai modifikasi logika

---

### 5️⃣ Proyek 5: Sistem Simpan Pinjam (Barang / Cosplay)
**Tujuan:** Belajar advanced relationships, report, custom package  

**Fitur:**
- Peminjam, penyedia barang, admin
- Transaksi barang, tracking status
- Generate laporan PDF / Excel

**Belajar apa:**
- Modifikasi starter package Raugadh
- Eloquent relations banyak tabel
- Export report (package tambahan: `maatwebsite/excel`)

**Kompleksitas:** Sedang–Sulit – integrasi package + custom logic

---

## 📌 Level 3 – Advanced / Bebas (Sulit)

### 6️⃣ Proyek 6: Platform Mini Marketplace / Social Web App
**Tujuan:** Belajar full stack, integrasi Laravel + JS + Docker + API + real-time  

**Fitur:**
- User login / register
- CRUD produk, komentar / review
- Chat real-time (Laravel WebSockets / Pusher)
- Admin panel lengkap

**Belajar apa:**
- Integrasi frontend modern (Vue / React / Tailwind)
- API Laravel + AJAX
- WebSockets real-time
- Advanced Docker setup (Nginx, MySQL, Redis, Horizon)

**Kompleksitas:** Sulit – hampir project full stack, bisa dikembangkan lebih luas

---

## 💡 Tips Tambahan
- Gunakan container Laravel untuk semua perintah artisan (`docker exec -it laravel_app bash`)
- Gunakan Git untuk version control sejak awal
- Gunakan `.env` untuk setting database, mail, API keys, dsb

---

> Dengan roadmap ini, kamu bisa belajar **step by step** dari Laravel murni sampai integrasi starter package dan full stack advanced.  
> Setiap proyek dibangun di atas pengetahuan dari proyek sebelumnya, jadi urutannya penting untuk pemahaman yang bertahap.
