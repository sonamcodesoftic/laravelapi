<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = [
            [
               'fname'=>'Admin',
               'lname'=>'Admin',
               'email'=>'admin@itsolutionstuff.com',
               'is_admin'=>'1',
               'password'=> bcrypt('123456'),
               'phone'=>'8572844684',
               'ip'=>'1234567890',
               'browser'=>'45678991',
               'country'=>'India',
               'device'=>'window',
               'key'=>'456df',
               'token'=>'hf5VJKHDKJSDBJD54sjdfhj',
               'countrycode'=>'+91',
               'fcmtoken'=>'895641237dfdfcx',
               'address'=>'Mohali,India',
               'profile'=>'admin.png',
               'state'=>'Punjab',
               'nationality'=>'Indian',
               'gender'=>'F',
               'date_of_birth'=>'05-07-2021',
               'city'=>'Mohali',
               'pincode'=>'160066',
               'userrole'=>'admin',
               'status'=>'active'

            ],
            [
               'fname'=>'User',
               'lname'=>'User',
               'email'=>'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
               'phone'=>'8572844684',
               'ip'=>'1234567890',
               'browser'=>'45678991',
               'country'=>'India',
               'device'=>'window',
               'key'=>'456df',
               'token'=>'hf5VJKHDKJSDBJD54sjdfhj',
               'countrycode'=>'+91',
               'fcmtoken'=>'895641237dfdfcx',
               'address'=>'Mohali,India',
               'profile'=>'admin.png',
               'state'=>'Punjab',
               'nationality'=>'Indian',
               'gender'=>'F',
               'date_of_birth'=>'05-07-2021',
               'city'=>'Mohali',
               'pincode'=>'160066',
               'userrole'=>'admin',
               'status'=>'active'
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
