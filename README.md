# Kanji Bites

Kanji Bites adalah aplikasi web sederhana berbasis Laravel untuk latihan kanji dasar menggunakan flashcard.

## Fitur

- menampilkan 10 kanji dasar
- menampilkan arti, onyomi, kunyomi, dan contoh penggunaan
- membuka dan menyembunyikan jawaban
- berpindah ke kartu sebelumnya dan berikutnya

## Tech Stack

- Laravel 12
- Blade
- Vanilla CSS
- Vanilla JavaScript
- PHPUnit
- Laravel Pint
- GitHub Actions

## Menjalankan Project

Clone repository lalu masuk ke folder project.

`git clone https://github.com/KEPL2026/evolusi-pl-24-541430-SV-24905.git`

`cd evolusi-pl-24-541430-SV-24905`

Install dependency.

`composer install`

Siapkan environment.

`cp .env.example .env`

`php artisan key:generate`

Jalankan aplikasi.

`php artisan serve`

Aplikasi dapat dibuka melalui:

`http://127.0.0.1:8000`

## Testing

Menjalankan automated test:

`php artisan test`

Memeriksa format kode:

`./vendor/bin/pint --test`

## Branching Strategy

Project menggunakan branch:

- `main` untuk versi utama aplikasi
- `dev` untuk proses pengembangan
- `feature/progress-tracker` untuk pengembangan fitur progress

Alur Pull Request:

`feature/progress-tracker → dev → main`

## Conventional Commits

Commit menggunakan format Conventional Commits.

Contoh:

`feat(flashcard): add basic kanji flashcard`

`test(flashcard): add flashcard page test`

`ci: add laravel continuous integration workflow`

## Continuous Integration

GitHub Actions menjalankan dua job:

- `tests` untuk menjalankan test Laravel
- `code-style` untuk memeriksa format PHP menggunakan Laravel Pint

## Author

Della Nurizki
