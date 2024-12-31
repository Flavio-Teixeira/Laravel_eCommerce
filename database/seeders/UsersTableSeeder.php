<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert(
            [
                'name' => 'Admnistrator',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => 'dfhdskfjhsdkjfhskjfhsk',
                'remember_token' => 'okokokokokoko'
            ]
        );

        factory(\App\Models\User::class, 40)->create()->each(function($user){
            $user->store()->save(factory(\App\Models\Store::class)->make());
        });
    }
}
