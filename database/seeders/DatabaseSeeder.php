<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Product::factory(10)->create();

        $users = [
            ['name' => 'Admin', 'email'=>'admin@example.com', 'password'=>'password'],
            ['name' => 'test', 'email'=>'test@example.com', 'password'=>'password'],
            ['name' => 'sample', 'email'=>'sample@example.com', 'password'=>'password'],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email'=>$user['email'],
                'password'=>Hash::make($user['password'])
            ]);
        }
    }
}
