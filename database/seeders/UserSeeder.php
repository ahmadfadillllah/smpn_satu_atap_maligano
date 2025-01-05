<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Operator',
            'uuid' => (string) Uuid::uuid4()->toString(),
            'nikname' => 'operator',
            'email' => 'operator@gmail.com',
            'password' => Hash::make('@@12345@@'),
            'role' => 'operator',
        ]);

        DB::table('profil_sekolah_m')->insert([
            'uuid' => (string) Uuid::uuid4()->toString(),
            'profile' => null,
            'visi' => null,
            'misi' => null,
            'nspn' => null,
            'sk_pendirian' => null,
            'sk_izin' => null,
            'bentuk_pendidikan' => null,
            'tanggal_sk_pendirian' => null,
            'tanggal_sk_izin' => null,
            'status_kepemilikan' => null,
        ]);
    }
}
