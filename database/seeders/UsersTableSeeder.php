<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*\DB::table('users')->insert(
            [
                'name' => 'Admnistrator',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => 'dfhdskfjhsdkjfhskjfhsk',
                'remember_token' => 'okokokokokoko'
            ]
        );*/

        /*\App\Models\User::factory()->count(40)->create()->each(function($user){
            $user->store()->save(\App\Models\Store::factory()->make());
        });
        */
        User::factory(3)->create();


    }
}
