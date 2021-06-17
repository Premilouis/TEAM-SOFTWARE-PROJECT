<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role::factory()->times(10)->create();

        Role::create([
            'type'=>'Admin',
        ]);

        Role::create([
            'type'=>'HOD',
        ]);

        Role::create([
            'type'=>'Examiner',
        ]);
    }
}
