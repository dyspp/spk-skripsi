<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name'  =>  'Dody Septian',
            'email' =>  'superadmin@dy-laptops.com',
            'password'  =>  Hash::make('superadmin'),
            'display_picture'   =>  'default.jpg',
            'privilege' =>  'super_admin'
        ]);
    }
}
