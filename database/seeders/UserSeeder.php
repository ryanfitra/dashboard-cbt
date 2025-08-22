<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Admin CBT',
                'email' => 'admin_cbt@unsri.ac.id',
                'username' => 'admin_cbt',
                'role' => 'admin',
                'password' => bcrypt('Eleunsri*#*#'), // password di-hash
            ],
            [
                'name' => 'Peserta CBT',
                'email' => 'peserta_cbt@unsri.ac.id',
                'username' => 'peserta_cbt',
                'role' => 'peserta',
                'password' => bcrypt('Eleunsri*#*#'), // password di-hash
            ],
        ];

        foreach ($data as $d) {
            User::create($d);
        }
    }
}
