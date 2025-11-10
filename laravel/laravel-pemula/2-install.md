

# 🐳 Setup Laravel + Docker di WSL Ubuntu

## ⚙️ Prasyarat

Pastikan kamu sudah menginstal:

* [x] **Composer** ✅
* [x] **Docker & Docker Compose**
  (cek dengan `docker -v` dan `docker compose version`)

Kalau belum, install dulu Docker:

```bash
sudo apt install docker.io docker-compose -y
sudo usermod -aG docker $USER
newgrp docker
```

---

## 🚀 Langkah 1: Buat folder project

```bash
mkdir laravel-docker
cd laravel-docker
```

---

## 🧱 Langkah 2: Buat project Laravel baru

Gunakan Composer untuk generate proyek:

```bash
composer create-project laravel/laravel app
```

Masuk ke folder-nya:

```bash
cd app
```

---

## 🐋 Langkah 3: Buat file `docker-compose.yml`

Buat file baru di dalam folder `app`:

```bash
nano docker-compose.yml
```

Isi dengan konfigurasi berikut:

```yaml
version: '3.8'

services:
  app:
    build:
      context: .
      dockerfile: Dockerfile
    container_name: laravel_app
    restart: unless-stopped
    tty: true
    environment:
      SERVICE_NAME: app
      SERVICE_TAGS: dev
    working_dir: /var/www
    volumes:
      - ./:/var/www
    networks:
      - laravel

  webserver:
    image: nginx:alpine
    container_name: nginx
    restart: unless-stopped
    tty: true
    ports:
      - "8000:80"
    volumes:
      - ./:/var/www
      - ./nginx/conf.d/:/etc/nginx/conf.d/
    networks:
      - laravel

  db:
    image: mysql:8.0
    container_name: mysql
    restart: unless-stopped
    tty: true
    ports:
      - "3306:3306"
    environment:
      MYSQL_DATABASE: laravel
      MYSQL_ROOT_PASSWORD: root
      MYSQL_PASSWORD: root
      MYSQL_USER: laravel
    volumes:
      - dbdata:/var/lib/mysql
    networks:
      - laravel

networks:
  laravel:
    driver: bridge

volumes:
  dbdata:
    driver: local
```

---

## 🔧 Langkah 4: Buat file `Dockerfile`

Masih di folder `app`, buat file baru:

```bash
nano Dockerfile
```

Isi dengan:

```dockerfile
FROM php:8.3-fpm

# Install extensions
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim unzip git curl \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

WORKDIR /var/www
COPY . /var/www

RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www

CMD ["php-fpm"]
```

---

## 🌐 Langkah 5: Buat konfigurasi Nginx

Buat folder dan file Nginx config:

```bash
mkdir -p nginx/conf.d
nano nginx/conf.d/app.conf
```

Isi dengan:

```nginx
server {
    listen 80;
    index index.php index.html;
    server_name localhost;
    root /var/www/public;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass app:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

---

## 🧩 Langkah 6: Jalankan Docker

Sekarang build dan jalankan semua container:

```bash
docker compose up -d --build
```

Cek apakah semua container aktif:

```bash
docker ps
```

---

## 🧭 Langkah 7: Akses Laravel

Buka di browser:

```
http://localhost:8000
```

Kalau muncul halaman “Laravel”, berarti setup berhasil 🎉

---

## 🧠 Tips Tambahan

* Untuk masuk ke dalam container Laravel:

  ```bash
  docker exec -it laravel_app bash
  ```
* Jalankan perintah Artisan dari dalam container:

  ```bash
  php artisan migrate
  php artisan serve
  ```
* Hentikan semua container:

  ```bash
  docker compose down
  ```

