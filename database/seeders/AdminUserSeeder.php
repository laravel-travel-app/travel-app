<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new User;
        $users->name = 'Admin';
        $users->email = 'admin@gmail.com';
        $users->email_verified_at = date('Y-m-d H:i:s');
        $users->password = bcrypt('admin');
        $users->save();
    }
}
