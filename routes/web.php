<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/projects', function () {
    return view('projects', [
        'projects' => [
            [
                'id' => 1,
                'slug' => 'paw-pet-assistance-wellness-system',
                'title' => 'Paw! Pet Asistance & Wellness System',
                'description1' => 'Aplikasi untuk mengidentifikasi penyakit kulit kucing dan anjing. Ini menyediakan pengingat tepat waktu untuk jadwal makan, vitamin, dan pengobatan. Selain itu, aplikasi ini menyertakan artikel tentang perawatan hewan peliharaan untuk membantu hewan peliharaan pemilik merawat hewan peliharaannya dengan lebih baik',
                'description2' => 'Aplikasi ini dikembangkan melalui cloud cumputing untuk mengintegrasikannya dengan firebase, lalu ada machine learning untuk pengembangan model dan klasifikasian hewan, serta di deploy melalui mobile apps',
                'category' => 'Mobile Apps, Cloud Computing, Machine Learning',
                'image' => 'img/projects/project1.jpg'
            ],
            [
                'id' => 2,
                'slug' => 'sistem-prediksi-banjir',
                'title' => 'Sistem Prediksi Banjir',
                'description1' => 'Ini merupakan sistem untuk memprediksi banjir dengan menggunakan algoritma ANN pada machine learning. Sistem ini dapat memprediksi apakah dengan data yang diinputkan akan mengakibattkan banjir atau tidak. Pada projek ini kami berkolaborasi dengan BPBD Jakarta untuk mendapatkan data-data penting yang dapat kami olah.',
                'description2' => 'Selain memprediksi banjir, kami juga menyediakan peta unttuk sekolah yang rawan banjir untuk daerah Jakarta sebagai sistem informasi publiknya.',
                'category' => 'Web Development, Database, API',
                'image' => 'img/projects/project2.jpg'
            ],
            [
                'id' => 3,
                'slug' => 'snapcal',
                'title' => 'Snapcal',
                'description1' => 'Aplikasi ini digunakan untuk mengidentifikasi kalori makanan dengan cara memfoto makanan tersebut. Aplikasi ini menyediakan informasi tentang jumlah kalori dari makanan yang difoto.',
                'description2' => 'Aplikasi ini dikembangkan menggunakan teknologi pengenalan gambar dan machine learning untuk mengidentifikasi makanan dan menghitung kalori. Aplikasi ini juga menyediakan fitur untuk melacak asupan kalori harian pengguna.',
                'category' => 'Mobile Apps, Machine Learning, Image Recognition',
                'image' => 'img/projects/project3.jpg'
            ],
            [
                'id' => 4,
                'slug' => 'library-booking-system',
                'title' => 'Library Booking System',
                'description1' => 'Aplikasi web yang memungkinkan pembaca untuk meminjam buku dari perpustakaan. Sistem ini juga memungkinkan administrator untuk mengelola buku yang tersedia di perpustakaan.',
                'description2' => 'Aplikasi ini mencakup fitur seperti pencarian buku, manajemen pemesanan, dan panel admin untuk mengelola inventaris buku. Aplikasi ini dirancang untuk mempermudah proses peminjaman buku dan pengelolaan sumber daya perpustakaan.',
                'category' => 'Web Apps, Database, UI/UX Design',
                'image' => 'img/projects/project4.jpg'
            ],
            [
                'id' => 5,
                'slug' => 'parking-management-system',
                'title' => 'Parking Management System',
                'description1' => 'Aplikasi web yang memungkinkan pengguna untuk memeriksa kapasitas parkir, memesan tempat parkir, dan melakukan pembayaran.',
                'description2' => 'Aplikasi ini menyediakan pembaruan waktu nyata tentang ketersediaan parkir, memungkinkan pengguna untuk memesan tempat parkir di muka, dan mendukung pembayaran online untuk biaya parkir. Dirancang untuk menyederhanakan proses parkir dan meningkatkan kenyamanan pengguna.',
                'category' => 'Web Apps, Database, UI/UX Design, Real-time Systems, Payment Integration',
                'image' => 'img/projects/project5.jpg'
            ],
            [
                'id' => 6,
                'slug' => 'nearby-restaurant-finder',
                'title' => 'Nearby Restaurant Finder',
                'description1' => 'Aplikasi web yang memungkinkan pengguna untuk mencari restoran di sekitar mereka berdasarkan lokasi saat ini. Aplikasi ini menyediakan informasi tentang restoran, termasuk menu, ulasan, dan rating.',
                'description2' => 'Aplikasi ini menggunakan teknologi geolokasi untuk menemukan restoran terdekat dan menampilkan hasil pencarian dalam peta interaktif. Pengguna dapat melihat detail restoran, membaca ulasan, dan memberikan rating.',
                'category' => 'Web Apps, Geolocation, UI/UX Design',
                'image' => 'img/projects/project6.jpg'
            ]
        ]
    ]);
});

Route::get('/projects/{slug}', function ($slug) {
    $projects = [
        [
            'id' => 1,
            'slug' => 'paw-pet-assistance-wellness-system',
            'title' => 'Paw! Pet Asistance & Wellness System',
            'description1' => 'Aplikasi untuk mengidentifikasi penyakit kulit kucing dan anjing. Ini menyediakan pengingat tepat waktu untuk jadwal makan, vitamin, dan pengobatan. Selain itu, aplikasi ini menyertakan artikel tentang perawatan hewan peliharaan untuk membantu hewan peliharaan pemilik merawat hewan peliharaannya dengan lebih baik',
            'description2' => 'Aplikasi ini dikembangkan melalui cloud cumputing untuk mengintegrasikannya dengan firebase, lalu ada machine learning untuk pengembangan model dan klasifikasian hewan, serta di deploy melalui mobile apps',
            'category' => 'Mobile Apps, Cloud Computing, Machine Learning',
            'image' => 'img/projects/project1.jpg'
        ],
        [
            'id' => 2,
            'slug' => 'sistem-prediksi-banjir',
            'title' => 'Sistem Prediksi Banjir',
            'description1' => 'Ini merupakan sistem untuk memprediksi banjir dengan menggunakan algoritma ANN pada machine learning. Sistem ini dapat memprediksi apakah dengan data yang diinputkan akan mengakibattkan banjir atau tidak. Pada projek ini kami berkolaborasi dengan BPBD Jakarta untuk mendapatkan data-data penting yang dapat kami olah.',
            'description2' => 'Selain memprediksi banjir, kami juga menyediakan peta unttuk sekolah yang rawan banjir untuk daerah Jakarta sebagai sistem informasi publiknya.',
            'category' => 'Web Development, Database, API',
            'image' => 'img/projects/project2.jpg'
        ],
        [
            'id' => 3,
            'slug' => 'snapcal',
            'title' => 'Snapcal',
            'description1' => 'Aplikasi ini digunakan untuk mengidentifikasi kalori makanan dengan cara memfoto makanan tersebut. Aplikasi ini menyediakan informasi tentang jumlah kalori dari makanan yang difoto.',
            'description2' => 'Aplikasi ini dikembangkan menggunakan teknologi pengenalan gambar dan machine learning untuk mengidentifikasi makanan dan menghitung kalori. Aplikasi ini juga menyediakan fitur untuk melacak asupan kalori harian pengguna.',
            'category' => 'Mobile Apps, Machine Learning, Image Recognition',
            'image' => 'img/projects/project3.jpg'
        ],
        [
            'id' => 4,
            'slug' => 'library-booking-system',
            'title' => 'Library Booking System',
            'description1' => 'Aplikasi web yang memungkinkan pembaca untuk meminjam buku dari perpustakaan. Sistem ini juga memungkinkan administrator untuk mengelola buku yang tersedia di perpustakaan.',
            'description2' => 'Aplikasi ini mencakup fitur seperti pencarian buku, manajemen pemesanan, dan panel admin untuk mengelola inventaris buku. Aplikasi ini dirancang untuk mempermudah proses peminjaman buku dan pengelolaan sumber daya perpustakaan.',
            'category' => 'Web Apps, Database, UI/UX Design',
            'image' => 'img/projects/project4.jpg'
        ],
        [
            'id' => 5,
            'slug' => 'parking-management-system',
            'title' => 'Parking Management System',
            'description1' => 'Aplikasi web yang memungkinkan pengguna untuk memeriksa kapasitas parkir, memesan tempat parkir, dan melakukan pembayaran.',
            'description2' => 'Aplikasi ini menyediakan pembaruan waktu nyata tentang ketersediaan parkir, memungkinkan pengguna untuk memesan tempat parkir di muka, dan mendukung pembayaran online untuk biaya parkir. Dirancang untuk menyederhanakan proses parkir dan meningkatkan kenyamanan pengguna.',
            'category' => 'Web Apps, Database, UI/UX Design, Real-time Systems, Payment Integration',
            'image' => 'img/projects/project5.jpg'
        ],
        [
            'id' => 6,
            'slug' => 'nearby-restaurant-finder',
            'title' => 'Nearby Restaurant Finder',
            'description1' => 'Aplikasi web yang memungkinkan pengguna untuk mencari restoran di sekitar mereka berdasarkan lokasi saat ini. Aplikasi ini menyediakan informasi tentang restoran, termasuk menu, ulasan, dan rating.',
            'description2' => 'Aplikasi ini menggunakan teknologi geolokasi untuk menemukan restoran terdekat dan menampilkan hasil pencarian dalam peta interaktif. Pengguna dapat melihat detail restoran, membaca ulasan, dan memberikan rating.',
            'category' => 'Web Apps, Geolocation, UI/UX Design',
            'image' => 'img/projects/project6.jpg'
        ]
    ];
});

Route::get('/services', function () {
    return view('services');
});