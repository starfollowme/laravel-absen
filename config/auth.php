<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | Opsi ini mendefinisikan "guard" autentikasi default dan "broker"
    | untuk reset password.
    |
    */

    'defaults' => [
        'guard' => 'web', // Pastikan guard default adalah 'web'
        'passwords' => 'tenaga_pendidik', // Ubah ini ke 'tenaga_pendidik'
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Di sini Anda mendefinisikan setiap guard autentikasi untuk aplikasi Anda.
    | Kita akan mengarahkan guard 'web' untuk menggunakan provider 'tenaga_pendidik'.
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'tenaga_pendidik', // UBAH INI dari 'users' menjadi 'tenaga_pendidik'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | Di sini kita mendefinisikan bagaimana user diambil dari database.
    | Kita hanya membutuhkan provider untuk model TenagaPendidik.
    |
    */

    'providers' => [
        // Provider 'users' bawaan bisa dihapus atau dikomentari agar tidak menimbulkan konflik
        // 'users' => [
        //     'driver' => 'eloquent',
        //     'model' => App\Models\User::class,
        // ],

        // Ini adalah provider utama yang akan kita gunakan
        'tenaga_pendidik' => [
            'driver' => 'eloquent',
            'model' => App\Models\TenagaPendidik::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | Konfigurasi untuk fungsionalitas reset password.
    | Kita juga perlu mengarahkannya ke provider yang benar.
    |
    */

    'passwords' => [
        'tenaga_pendidik' => [ // UBAH INI dari 'users' menjadi 'tenaga_pendidik'
            'provider' => 'tenaga_pendidik', // Pastikan providernya juga 'tenaga_pendidik'
            'table' => 'password_reset_tokens', // Nama tabel bisa tetap sama
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Waktu tunggu sebelum konfirmasi password diminta kembali.
    |
    */

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];