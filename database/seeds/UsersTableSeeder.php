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
        $user_admin = User::create([
            'name' => 'admin',
            'first_name' => '212',
        	'last_name' => 'solutions',
            'email' => 'admin@212soulutions.com',
            'password' => \Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        $user_admin->attachRole('admin');

        $user_cashier = User::create([
        	'name' => 'cashier',
            'first_name' => '212',
            'last_name' => 'solutions',
            'email' => 'cashier@212soulutions.com',
            'password' => \Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        $user_cashier->attachRole('cashier');
    }
}
