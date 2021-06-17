<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
           ActionSeeder::class,
           CourseSeeder::class,
           ExamPerformingRoleSeeder::class,
           ExamSeeder::class,
           ExamTypeSeeder::class,
           PaymentSeeder::class,
           PerformingRoleSeeder::class,
           PriceSeeder::class,
           RoleSeeder::class,
           UserTypeSeeder::class,
           UserSeeder::class,
           UserRoleSeeder::class,
           
       ]);

       DB::table('user_types')->insert([
        'type'=>Str::random(20),
       ]);

       DB::table('roles')->insert([
        'type'=>Str::random(20),
       ]);

       DB::table('users')->insert([
        'user_name'=>Str::random(20),
        'email'=>Str::random(20).'@gmail.com',
        'password'=>Hash::make('password'),
        'first_name'=>Str::random(30),
        'last_name'=>Str::random(30),
        'mobile'=>Str::random(20),
        'bank_name'=>Str::random(20),
        'bank_acc_num'=>Str::random(20),
        'nic_num'=>Str::random(20),
        'designation'=>Str::random(20),
        'user_type_id'=>rand(1,3),
        'remember_token'=>Str::random(10),

    ]);

    DB::table('user_roles')->insert([
        'user_id'=>rand(1,3),
        'role_id'=>rand(1,3),
    ]);
    
    

    }
}
