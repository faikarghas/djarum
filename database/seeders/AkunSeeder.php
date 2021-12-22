<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'name' => 'admin',
                'email' => 'admin@varion.com',
                'level' => 'admin',
                'password' => bcrypt('admin123')
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
