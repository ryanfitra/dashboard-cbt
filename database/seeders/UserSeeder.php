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
                'username' => 'admin_cbt',
                'email' => 'admin_cbt@unsri.ac.id',
                'role' => 'admin',
                'password' => bcrypt('Eleunsri*#*#'), // password di-hash
            ],
            [
                'name' => 'Peserta CBT',
                'username' => 'peserta_cbt',
                'email' => 'peserta_cbt@unsri.ac.id',
                'role' => 'peserta',
                'password' => bcrypt('Eleunsri*#*#'), // password di-hash
            ],
        ];

        foreach ($data as $d) {
            User::create($d);
        }
    }
}
