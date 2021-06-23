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
            'name'=>'Mrs. A. Vahini',
            //'mobile'=>'0774243534',
            'bank_name'=>'BOC',
            'bank_acc_num'=>'1453268',
            //'nic_num'=>'978356772v',
            'designation'=>'Management Assistant Gr. III',
            'user_type_id'=>'1',
            'remember_token'=>Str::random(10),

        ]);

        
        User::create([
            'user_name'=>'suthakar',
            'email'=>'sosuthakar@univ.jfn.ac.lk',
            'password'=>Hash::make('suthakar123'),
            'name'=>'Mr. S. Suthakar',
            'mobile'=>'+94212218194',
            'bank_name'=>'BOC',
            'bank_acc_num'=>'1478681',
            'nic_num'=>'959356772v',
            'designation'=>'Senior Lecturer Gr.II',
            'user_type_id'=>'1',
            'remember_token'=>Str::random(10),
        
        ]);
        
        User::create([
            'user_name'=>'mahesan',
            'email'=>'mahesans@univ.jfn.ac.lk',
            'password'=>Hash::make('mahesan123'),
            'name'=>'Dr. S. Mahesan',
            'mobile'=>'+94212218194',
            'bank_name'=>'HNB',
            'bank_acc_num'=>'457963169124',
            'nic_num'=>'959321572v',
            'designation'=>'Senior Lecturer Gr.I',
            'user_type_id'=>'1',
            'remember_token'=>Str::random(10),
        
        ]);

        User::create([
            'user_name'=>'charles',
            'email'=>'charles.ey@univ.jfn.ac.lk',
            'password'=>Hash::make('charles123'),
            'name'=>'Dr. E. Y. A. Charles',
            'mobile'=>'+94212218194',
            'bank_name'=>'NSB',
            'bank_acc_num'=>'345267592180',
            'nic_num'=>'784512558v',
            'designation'=>'Senior Lecturer Gr.I',
            'user_type_id'=>'1',
            'remember_token'=>Str::random(10),
        
        ]);

        User::create([
            'user_name'=>'thabo',
            'email'=>'thabo@univ.jfn.ac.lk',
            'password'=>Hash::make('thabo123'),
            'name'=>'Dr. K. Thabotharan',
            'mobile'=>'+94212218194',
            'bank_name'=>'Commercial',
            'bank_acc_num'=>'4578129535',
            'nic_num'=>'754189635v',
            'designation'=>'Senior Lecturer Gr.I',
            'user_type_id'=>'1',
            'remember_token'=>Str::random(10),
        
        ]);

        User::create([
            'user_name'=>'ramanan',
            'email'=>'a.ramanan@univ.jfn.ac.lk',
            'password'=>Hash::make('ramanan123'),
            'name'=>'Dr. A. Ramanan',
            'mobile'=>'+94212218194',
            'bank_name'=>'BOC',
            'bank_acc_num'=>'2316784',
            'nic_num'=>'841526779v',
            'designation'=>'Senior Lecturer Gr.I',
            'user_type_id'=>'1',
            'remember_token'=>Str::random(10),
        
        ]);

        User::create([
            'user_name'=>'barathy',
            'email'=>'barathym@univ.jfn.ac.lk',
            'password'=>Hash::make('barathy123'),
            'name'=>'Dr. (Mrs). B. Mayurathan',
            'mobile'=>'+94212218194',
            'bank_name'=>'BOC',
            'bank_acc_num'=>'7458621',
            'nic_num'=>'965412785v',
            'designation'=>'Senior Lecturer Gr.I',
            'user_type_id'=>'1',
            'remember_token'=>Str::random(10),
        
        ]);

        User::create([
            'user_name'=>'siyam',
            'email'=>'siyam@univ.jfn.ac.lk',
            'password'=>Hash::make('siyam123'),
            'name'=>'Dr. M. Siyamalan',
            'mobile'=>'+94212218194',
            'bank_name'=>'HNB',
            'bank_acc_num'=>'745896251445',
            'nic_num'=>'857412338v',
            'designation'=>'Senior Lecturer Gr.II',
            'user_type_id'=>'1',
            'remember_token'=>Str::random(10),
        
        ]);

        User::create([
            'user_name'=>'shriparen',
            'email'=>'shriparens@univ.jfn.ac.lk',
            'password'=>Hash::make('shriparen123'),
            'name'=>'Mr. S. Shriparen',
            'mobile'=>'+94212218194',
            'bank_name'=>'BOC',
            'bank_acc_num'=>'8562147',
            'nic_num'=>'954178632v',
            'designation'=>'Lecturer (Probationary)',
            'user_type_id'=>'1',
            'remember_token'=>Str::random(10),
        
        ]);

        User::create([
            'user_name'=>'sarves',
            'email'=>'sarves@univ.jfn.ac.lk',
            'password'=>Hash::make('sarves123'),
            'name'=>'Mr. K. Sarveswaran',
            'mobile'=>'+94212218194',
            'bank_name'=>'NSB',
            'bank_acc_num'=>'756214412395',
            'nic_num'=>'874512963v',
            'designation'=>'Lecturer',
            'user_type_id'=>'1',
            'remember_token'=>Str::random(10),
        
        ]);

        User::create([
            'user_name'=>'samantha',
            'email'=>'samantha@univ.jfn.ac.lk',
            'password'=>Hash::make('samantha123'),
            'name'=>'Ms. J. Samantha Tharani',
            'mobile'=>'+94212218194',
            'bank_name'=>'Commercial',
            'bank_acc_num'=>'4585521236',
            'nic_num'=>'851452639v',
            'designation'=>'Lecturer (Probationary)',
            'user_type_id'=>'1',
            'remember_token'=>Str::random(10),
        
        ]);

        User::create([
            'user_name'=>'hajanthan',
            'email'=>'yhajanthan@univ.jfn.ac.lk',
            'password'=>Hash::make('hajanthan123'),
            'name'=>'Mr. Y. Hajanthan',
            'mobile'=>'+94212218194',
            'bank_name'=>'BOC',
            'bank_acc_num'=>'7845961',
            'nic_num'=>'801123654v',
            'designation'=>'Technical Officer Gr. II Seg."B"',
            'user_type_id'=>'1',
            'remember_token'=>Str::random(10),
        
        ]);

        User::create([
            'user_name'=>'arul',
            'email'=>'arul@univ.jfn.ac.lk',
            'password'=>Hash::make('arul123'),
            'name'=>'Mr. A. Arulnesan',
            'mobile'=>'+94212218194',
            'bank_name'=>'NSB',
            'bank_acc_num'=>'526378418965',
            'nic_num'=>'845215447v',
            'designation'=>'Laboratory Attendant Gr. III',
            'user_type_id'=>'1',
            'remember_token'=>Str::random(10),
        
        ]);

        
        

    }
}
