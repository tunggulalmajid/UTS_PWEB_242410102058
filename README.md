# Chocoffey - Proyek UTS Pemrograman Web

Chocoffey adalah aplikasi web manajemen kafe sederhana yang dibangun menggunakan Laravel 12, Vite, and Tailwind CSS. Proyek ini dibuat untuk memenuhi Ujian Tengah Semester (UTS) mata kuliah Pemrograman Web.

Aplikasi ini mensimulasikan sistem di mana admin dapat login dan mengelola data order dan data menu.

## ✨ Fitur Utama

* **Autentikasi Sederhana:** Sistem login admin (non-database, berbasis variabel/session).
* **Dashboard:** Halaman utama setelah login.
* **Manajemen Order:** Melihat dan menambah data order (disimpan dalam Session).
* **Manajemen Menu:** Halaman untuk mengelola menu.
* **Halaman Profil:** Menampilkan info profil (statis atau dari session).
* **Desain Responsif:** Dibuat dengan Tailwind CSS dan JavaScript untuk *hamburger menu*.

## 🚀 Teknologi yang Digunakan

* **Backend:** [Laravel 12](https://laravel.com/)
* **Frontend:** [Tailwind CSS](https://tailwindcss.com/)
* **Build Tool:** [Vite](https://vitejs.dev/)
* **Templating:** Blade (termasuk Blade Components)
* **Core:** PHP, JavaScript

## 🔧 Instalasi dan Setup

Berikut adalah langkah-langkah untuk menjalankan proyek ini di komputer lokal Anda.

1.  **Clone repositori:**
    ```bash
    git clone [https://github.com/tunggulalmajid/UTS_PWEB_242410102058.git](https://github.com/tunggulalmajid/UTS_PWEB_242410102058.git)
    ```

2.  **Masuk ke direktori proyek:**
    ```bash
    cd UTS_PWEB_242410102058
    ```

3.  **Install dependensi Composer:**
    ```bash
    composer install
    ```

4.  **Install dependensi NPM:**
    ```bash
    npm install
    ```

5.  **Salin file environment:**
    ```bash
    cp .env.example .env
    ```

6.  **Buat *Application Key*:**
    ```bash
    php artisan key:generate
    ```

7.  **Jalankan server pengembangan:**
    Anda perlu membuka **dua terminal** untuk menjalankan proyek ini:

    * Di **Terminal 1**, jalankan Vite untuk kompilasi aset (CSS/JS):
        ```bash
        npm run dev
        ```

    * Di **Terminal 2**, jalankan server Laravel:
        ```bash
        php artisan serve
        ```

8.  **Buka aplikasi:**
    Buka `http://127.0.0.1:8000` di browser Anda.

## 🔑 Cara Menggunakan

Untuk login ke aplikasi, gunakan kredensial default yang telah ditentukan di dalam `app/Http/Controllers/AuthController.php`:

* **Username:** `tunggul`
* **Password:** `tung123`
