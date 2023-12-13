<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Requirement Untuk Menginstall Project Pada Local Environment
- Versi PHP 8.2.4.
- Versi Composer 2.6.5.
- mysql Ver 15.1 Distrib 10.4.28-MariaDB.
- Atau PHP dan mysql Dapat Digunakan pada xampp versi 8.2.4-0-VS16.
- Git Version Control


## Instalasi Project

- Instalasi PHP dan myqsl melalui xampp.
- Instalasi composer versi 2.6.5 ke atas dengan melalui website composer via [link ini](https://getcomposer.org/).
- Download dan Install Git melalui [link ini](https://git-scm.com/downloads). 
- Selanjutnya Adalah Cloning Project melalui github.
- Proses cloning dapat dilakukan menggunakan Command Prompt Terminal atau Git bash "Sudah Include pada instalasi Git".
- Open Git bash atau Command Prompt Terminal pada suatu direktori lokal.
- Masukkan command "git init" untuk menginisialisasi repositori git pada direktori.
- Selanjutnya adalah melakukan proses Cloning pada github.
- Gunakan menggunakan command " git clone https://github.com/rendisibarani94/Kel06_PPL_WebApiHkbpPalmarum.git ".
- Setelah proses clone selesai, move direktori pada direktori project hasil clone dengan "cd $namaDirektori".
- Buka Command Prompt Terminal dan masukkan "composer install" untuk menginstall seluruh dependecy laravel.
- Setelah proses selesai duplikat file bernama ".env.example" dan ubah namanya menjadi ".env".
- Lalu kembali ke Command Prompt Terminal masukkan "php artisan key:generate".
- Untuk proses Import database, buka laman phpmyadmin melalui "127.0.0.1:8000".
- Tambahkan sebuah database kosong baru.
- Lalu Import database melalui menu import database, lalu pilih script sql pada direktori project laravel tadi.
- Kembali Ke Command Prompt Terminal lalu jalankan Project dengan command "php artisan serve --port=8070"

