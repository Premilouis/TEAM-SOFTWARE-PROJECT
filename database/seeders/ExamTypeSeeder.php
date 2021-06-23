<?php

namespace Database\Seeders;

use App\Models\ExamType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExamTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ExamType::factory()->times(10)->create();
        ExamType::create([
            'type'=>'Written',
        ]);
        ExamType::create([
            'type'=>'Practical',
        ]);
        ExamType::create([
            'type'=>'Research',
        ]);
        ExamType::create([
            'type'=>'Group Project',
        ]);
        ExamType::create([
            'type'=>'Industrial Training',
        ]);
    }
}
