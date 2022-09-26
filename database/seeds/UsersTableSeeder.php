<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ketua
        $ketua = factory(User::class)->create([
            'nik'                   => 'KPR2022011101',
            'name'                  => 'KETUA',
            'email'                 => 'ketua@koperasi.com',
            'email_verified_at'     => now(),
            'password'              => bcrypt('koperasi'),
            'nik'                   => '12345678910111213',
            'tempat_lahir'          => 'Bekasi',
            'tanggal_lahir'         => '12-01-1991',
            'alamat'                => 'Bekasi',
            'phone'                 => '3423423452',
            'ktp'                   => '12345678910111213',
            'pendidikan_terakhir'   => 'S1',
            'pekerjaan'             => 'Admin Kantor',
            'nama_wakil'            => 'John Doe',

        ]);

        $ketua->assignRole('ketua');

        $this->command->info('>_ Here is your ketua details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "koperasi"');

        // bendahara
        $bendahara = factory(User::class)->create([
            'nik'                   => 'KPR2022011102',
            'name'                  => 'BENDAHARA',
            'email'                 => 'bendahara@koperasi.com',
            'email_verified_at'     => now(),
            'password'              => bcrypt('koperasi'),
            'nik'                   => '12345678910111213',
            'tempat_lahir'          => 'Bekasi',
            'tanggal_lahir'         => '12-01-1991',
            'alamat'                => 'Bekasi',
            'phone'                 => '3423423452',
            'ktp'                   => '12345678910111213',
            'pendidikan_terakhir'   => 'S1',
            'pekerjaan'             => 'Admin Kantor',
            'nama_wakil'            => 'John Doe',
        ]);

        $bendahara->assignRole('bendahara');

        $this->command->info('>_ Here is your bendahara details to login:');
        $this->command->warn($bendahara->email);
        $this->command->warn('Password is "koperasi"');

        // anggota
        $anggota = factory(User::class)->create([
            'nik'                   => 'KPR2022011103',
            'name'                  => 'ANGGOTA',
            'email'                 => 'anggota@koperasi.com',
            'email_verified_at'     => now(),
            'password'              => bcrypt('koperasi'),
            'nik'                   => '12345678910111213',
            'tempat_lahir'          => 'Bekasi',
            'tanggal_lahir'         => '12-01-1991',
            'alamat'                => 'Bekasi',
            'phone'                 => '3423423452',
            'ktp'                   => '12345678910111213',
            'pendidikan_terakhir'   => 'S1',
            'pekerjaan'             => 'Admin Kantor',
            'nama_wakil'            => 'John Doe',
        ]);

        $anggota->assignRole('anggota');

        $this->command->info('>_ Here is your anggota details to login:');
        $this->command->warn($anggota->email);
        $this->command->warn('Password is "koperasi"');

        // bersihkan cache
        $this->command->call('cache:clear');
    }
}
