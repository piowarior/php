# Belajar Framework PHP LARAVEL

## Persiapan Duls bro

saya pakai 

- vs code
- wsl ubuntu
- docker

## langkah pertama

### instal composer 

Apa Itu Composer?

Composer itu package manager untuk PHP, mirip kayak npm di JavaScript.
Laravel, Filament, dan library PHP lain semuanya diinstall lewat Composer.

Berikut versi Markdown-nya biar kamu bisa langsung simpan jadi catatan di VS Code atau Notion:

---

# 💻 Instalasi Composer di WSL Ubuntu

## 🧩 Langkah 1: Update sistem dulu

Pastikan sistem kamu terbaru biar dependensi gak error.

```bash
sudo apt update && sudo apt upgrade -y
```

---

## 🧰 Langkah 2: Install PHP dan dependensinya

Composer butuh PHP, jadi pastikan sudah terpasang:

```bash
sudo apt install php php-cli php-mbstring unzip curl php-xml php-bcmath php-zip php-curl -y
```

---

## ⚙️ Langkah 3: Download installer Composer

Gunakan `curl` buat ambil installer resminya:

```bash
curl -sS https://getcomposer.org/installer -o composer-setup.php
```

---

## ✅ Langkah 4: Verifikasi installer (opsional tapi disarankan)

Kamu bisa cek hash-nya untuk memastikan file-nya aman:

```bash
HASH="$(curl -sS https://composer.github.io/installer.sig)"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
```

Kalau muncul `Installer verified`, lanjut ke langkah berikutnya.

---

## 💿 Langkah 5: Install Composer secara global

```bash
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```

---

## 🧾 Langkah 6: Cek apakah Composer sudah terpasang

```bash
composer -V
```

Kalau berhasil, akan muncul versi Composer seperti:

```
Composer version 2.7.2 2025-xx-xx
```

---

