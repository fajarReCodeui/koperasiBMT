<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'nik' => 'KPR2022011101',
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'nik' => '213214341342',
        'tempat_lahir' => 'bekasi',
        'tanggal_lahir' => '21-11-2022',
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Type::class, function (Faker $faker) {
    return [
        'nama_jenis_pinjaman'       => 'BANTU-BANTU',
        'minimum_jumlah_pinjaman'   => '2000000',
        'maksimum_jumlah_pinjaman'  => '5000000',
        'minimum_lama_angsuran'     => '12',
        'maksimum_lama_angsuran'    => '24',
        'bunga'                     => '5',
    ];
});