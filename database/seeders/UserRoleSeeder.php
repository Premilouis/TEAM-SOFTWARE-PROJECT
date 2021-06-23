<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //UserRole::factory()->times(10)->create();

        UserRole::create([
            'user_id'=>'1',
            'role_id'=>'1',
        ]);

        /*UserRole::create([
            'user_id'=>'2',
            'role_id'=>'2',
        ]);

        UserRole::create([
            'user_id'=>'2',
            'role_id'=>'3',
        ]);
        
        UserRole::create([
            'user_id'=>'3',
            'role_id'=>'3',
        ]);*/
    }
}
