<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@212solutions.com',
            'password' => \Hash::make('password'),
            'email_verified_at' => now(),
            'role_id' => 1
        ]);
    }
}
