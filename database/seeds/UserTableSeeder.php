<?php

//namespace Database\Seeds;

use App\Models\User as User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        User::truncate();

        User::create([
            'email' => 'admin@admin.pt',
            'name' => 'Admin',
            'password' => bcrypt('456456')
        ]);
    }
}
