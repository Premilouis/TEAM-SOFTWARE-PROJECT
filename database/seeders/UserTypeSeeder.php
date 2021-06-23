<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //UserType::factory()->times(10)->create();

        UserType::create([
            'type'=>'Internal',
        ]);

        UserType::create([
            'type'=>'External',
        ]);

        UserType::create([
            'type'=>'Foreigner',
        ]);



            
    }
}
