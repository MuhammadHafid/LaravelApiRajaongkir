# Rajaongkir List City and Province + Search City

## Overview
- Melakukan fetch data province dan city dari https://api.rajaongkir.com/starter/city
- Menampilkan data province dan city dari hasil fetching data
- Mencari data province dan city berdasarkan pencarian nama city, contoh pencarian : User mencari "ceh" maka akan menampilkan kota yang mempunyai "ceh" di dalamnya.

## How To
- Clone repo
- Buka command prompt dan arahkan cd ke lokasi clone project
- Install composer "composer install"
- Copy .env dengan "cp .env.example .env"
- Generate key dengan "php artisan key:generate"
- Run aplikasi "php artisan server"
- Buka web browser dan buka http://127.0.0.1:8000/

Aplikasi siap digunakan

## Feature
Feature Website tersedia
- View data province and city
- Search data province and city by city_name

## HowTheSearchWork
- Pertama data difetch ditampung di variabel $response
- User menginputkan city yang diinginkan
- Parameter pada input-box dikirim ke RajaOngkirController ditampung sebagai variabel $search
- Apabila user tidak menginputkan nama kota maka akan direturn view ke menu awal (menampilkan semua kota dan provinsi)
- Apabila user sudah menginputkan akan direturn ke RajaOngkirShow serta controller mengirimkan $data untuk kota dan provinsi serta $search untuk query pencarian kota.
- Di RajaOngkirShow pencocokan data menggunakan $datas->city_name dan $search tapi sebelum dicocokan untuk menghilangkan sensitive case 2 variabel dijadikan variabel baru ($searchTerm dan $datasTerm) serta bentuk string dijadikan lower case semua. Kedua string tersebut lalu dicocokan oleh strpos, strpos berfungsi untuk mengetahui apakah param ke2 yang dimasukan terdapat di param ke1 apabila ada maka hasilnya akan menjadi angka yang lebih dari sama dengan 0 apabila tidak terdapat kecocokan maka tidak menghasilkan angka alias false.
- Setelah menghasilkan angka, di perulangan untuk pemanggilan kota dan provinsi dicek apabila angka lebih dari -1 atau lebih dari sama dengan 0 maka akan kota dan provinsi akan ditampilkan.