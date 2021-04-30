<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name'=>"Admin", 'email'=>"admin@gmail.com", 'password'=>'1234', 'is_admin'=>true],
            ['name'=>"User", 'email'=>"user@gmail.com", 'password'=>'ABCD', 'is_admin'=>false],
        ];
        foreach ($users as $user){
            User::create([
                'name'=>$user['name'],
                'email'=>$user['email'],
                'password'=>Hash::make($user['password']),
                'is_admin'=>$user['is_admin'],
            ]);
        }
    }
}
