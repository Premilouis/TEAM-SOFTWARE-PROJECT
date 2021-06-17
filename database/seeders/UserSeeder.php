<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::factory()->times(10)->create();

        User::create([
            'user_name'=>'admin',
            'email'=>'admin123@gmail.com',
            'password'=>Hash::make('admin123'),
            'first_name'=>'Mala',
            'last_name'=>'Siva',
            'mobile'=>'0774243534',
            'bank_name'=>'boc',
            'bank_acc_num'=>'1453268',
            'nic_num'=>'978356772v',
            'designation'=>'ManagementAssistantIII',
            'user_type_id'=>'1',
            'remember_token'=>Str::random(10),

        ]);

        User::create([
            'user_name'=>'lec1',
            'email'=>'lec1@gmail.com',
            'password'=>Hash::make('lec1'),
            'first_name'=>'Raja',
            'last_name'=>'Kumar',
            'mobile'=>'0744243534',
            'bank_name'=>'HNB',
            'bank_acc_num'=>'147868',
            'nic_num'=>'959356772v',
            'designation'=>'LecturerII',
            'user_type_id'=>'3',
            'remember_token'=>Str::random(10),
        
        ]);
        
        User::create([
            'user_name'=>'lec2',
            'email'=>'lec2@gmail.com',
            'password'=>Hash::make('lec2'),
            'first_name'=>'Vimal',
            'last_name'=>'Nathan',
            'mobile'=>'0713243534',
            'bank_name'=>'Peoples',
            'bank_acc_num'=>'4579631',
            'nic_num'=>'959321572v',
            'designation'=>'LecturerI',
            'user_type_id'=>'2',
            'remember_token'=>Str::random(10),
        
        ]);
    }
}
