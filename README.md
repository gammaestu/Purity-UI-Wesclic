## Setup Project Laravel (Bahasa Indonesia)

Ikuti langkah berikut untuk menyiapkan proyek ini dari nol.

### Prasyarat
- PHP 8.2+
- Composer
- Node.js + npm
- SQLite/MySQL/PostgreSQL (sesuaikan di `.env`)

### Langkah Instalasi
1) Install dependensi PHP  
   ```bash
   composer install
   ```

2) Install dependensi frontend (Tailwind/Vite)  
   ```bash
   npm install
   ```

3) Salin environment dan sesuaikan  
   ```bash
   cp .env.example .env    # atau copy manual di Windows
   ```
   Lalu edit `.env` (DB, APP_URL, dll).

4) Generate app key  
   ```bash
   php artisan key:generate
   ```

5) Migrasi & seed database (akan mereset data)  
   ```bash
   php artisan migrate:fresh --seed
   ```

6) Buat symlink storage  
   ```bash
   php artisan storage:link
   ```

### Menjalankan Proyek
Di tab/terminal terpisah jalankan dua perintah berikut:

```bash
# 1) Build & watcher frontend (Tailwind/Vite)
npm run dev

# 2) Jalankan server Laravel
php artisan serve
```

Buka URL yang ditampilkan oleh `php artisan serve` (default `http://127.0.0.1:8000`).***
