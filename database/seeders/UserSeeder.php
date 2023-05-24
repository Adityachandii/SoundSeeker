<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //  Schema::create('users', function (Blueprint $table) {
    //     $table->id();
    //     $table->string('username');
    //     $table->integer('phone');
    //     $table->date('tanggallahir');
    //     $table->string('email')->unique();
    //     $table->string('password');
    //     $table->string('confirmpassword');
    //     $table->rememberToken();
    //     $table->timestamps();
    // });

    public function run()
    {
        //user
        User::create([
            'username'=>'annisabenedictanugroho',
            'phone'=>'0821999666',
            'tanggallahir'=>'2021-01-01',
            'email'=> 'annisabenedicta.nugroho@gmail.com',
            'password'=> Hash::make('icacathdit'),
            'confirmpassword'=>Hash::make('icacathdit')
        ]);
    }
}
