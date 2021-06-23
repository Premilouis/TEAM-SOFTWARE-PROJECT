<?php

namespace Database\Seeders;

use App\Models\Action;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Action::factory()->times(2)->create();
        Action::create([
            'name'=>'Setting',
        ]);
        Action::create([
            'name'=>'Moderating',
        ]);
        Action::create([
            'name'=>'Typing',
        ]);
        Action::create([
            'name'=>'Supervision For Packeting',
        ]);
        Action::create([
            'name'=>'1st Marking',
        ]);
        Action::create([
            'name'=>'2nd Marking',
        ]);
        Action::create([
            'name'=>'Supervision',
        ]);
        Action::create([
            'name'=>'Invigilation',
        ]);
        Action::create([
            'name'=>'Technical Officer',
        ]);
        Action::create([
            'name'=>'Lab Attendants',
        ]);
        Action::create([
            'name'=>'Hall Attendant',
        ]);
        
    }
}
