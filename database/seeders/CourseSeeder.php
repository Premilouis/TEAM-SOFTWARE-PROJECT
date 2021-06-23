<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Course::factory()->times(10)->create();
        Course::create([
            'code'=>'CSC101S3',
            'name' => 'Foundations of Computer Science',
            'level' => '1S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC102S3',
            'name' => 'Computer Programming I',
            'level' => '1S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC103S3',
            'name' => 'Introduction to Computer Systems',
            'level' => '1S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC104S2',
            'name' => 'Mathematics for Computing I',
            'level' => '1S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC105S2',
            'name' => 'Statistics for Computing I',
            'level' => '1S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC106S3',
            'name' => 'Human Computer Interaction',
            'level' => '1S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC107S2',
            'name' => 'Multimedia Technologies',
            'level' => '1S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC108S2',
            'name' => 'Design of Algorithms',
            'level' => '1S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC109S2',
            'name' => 'Introduction to Computer Security and Cryptography',
            'level' => '1S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC110S2',
            'name' => 'Organisational Behaviour',
            'level' => '1S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC111S2',
            'name' => 'Mathematics for Computing II',
            'level' => '1S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC112S3',
            'name' => 'Statistics for Computing II',
            'level' => '1S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC101G3',
            'name' => 'Foundations of Computer Science',
            'level' => '1G',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC102G3',
            'name' => 'Computer Programming I',
            'level' => '1G',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC103G2',
            'name' => 'Multimedia Technologies',
            'level' => '1G',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC104G2',
            'name' => 'Design of Algorithms',
            'level' => '1G',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC201S2',
            'name' => 'Database Systems Concepts and Design',
            'level' => '2S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC202S2',
            'name' => 'Computer Programming II',
            'level' => '2S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC203S2',
            'name' => 'Operating Systems',
            'level' => '2S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC204S2',
            'name' => 'Data Structures & Algorithms',
            'level' => '2S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC205S2',
            'name' => 'Software Engineering',
            'level' => '2S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC206S4',
            'name' => 'Mathematics for Computing III',
            'level' => '2S',
            'num_of_credits' => '4',
        ]);
        Course::create([
            'code'=>'CSC207S3',
            'name' => 'Computer Architecture',
            'level' => '2S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC208S3',
            'name' => 'Concepts of Programming Languages',
            'level' => '2S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC209S3',
            'name' => 'Bioinformatics',
            'level' => '2S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC210S3',
            'name' => 'Web Technologies',
            'level' => '2S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC211S2',
            'name' => 'Emerging Trends in Computer Science',
            'level' => '2S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC212S2',
            'name' => 'Professional Practice',
            'level' => '2S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC201G2',
            'name' => 'Database Systems Concepts and Design',
            'level' => '2G',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC202G2',
            'name' => 'Computer Programming II',
            'level' => '2G',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC203G2',
            'name' => 'Operating Systems',
            'level' => '2G',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC204G2',
            'name' => 'Data Structures & Algorithms',
            'level' => '2G',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC205G2',
            'name' => 'Software Engineering',
            'level' => '2G',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC301S3',
            'name' => 'Rapid Application Development',
            'level' => '3S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC302S2',
            'name' => 'Computer Programming III',
            'level' => '3S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC303S2',
            'name' => 'Data Communication and Computer Networks',
            'level' => '3S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC304S3',
            'name' => 'Team Software Project',
            'level' => '3S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC305S2',
            'name' => 'Graphics and Visual Computing',
            'level' => '3S',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC306S3',
            'name' => 'Advanced Database Design and Systems',
            'level' => '3S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC307S3',
            'name' => 'Advanced Topics in Computer Networks',
            'level' => '3S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC308S3',
            'name' => 'Artificial Intelligence',
            'level' => '3S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC309S3',
            'name' => 'High Performance Computing',
            'level' => '3S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC310S3',
            'name' => 'Image Processing and Computer Vision',
            'level' => '3S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC311S3',
            'name' => 'Machine Learning',
            'level' => '3S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC312S3',
            'name' => 'Mobile Computing',
            'level' => '3S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC301G3',
            'name' => 'Rapid Application Development',
            'level' => '3G',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC302G2',
            'name' => 'Computer Programming III',
            'level' => '3G',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC303G2',
            'name' => 'Data Communication and Computer Networks',
            'level' => '3G',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC304G3',
            'name' => 'Team Software Project',
            'level' => '3G',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC305G2',
            'name' => 'Graphics and Visual Computing',
            'level' => '3G',
            'num_of_credits' => '2',
        ]);
        Course::create([
            'code'=>'CSC301M3',
            'name' => 'Advanced Database Design and Systems',
            'level' => '3M',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC302M3',
            'name' => 'Advanced Topics in Computer Networks',
            'level' => '3M',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC303M3',
            'name' => 'Artificial Intelligence',
            'level' => '3M',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC304M3',
            'name' => 'High Performance Computing',
            'level' => '3M',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC305M3',
            'name' => 'Image Processing and Computer Vision',
            'level' => '3M',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC306M3',
            'name' => 'Machine Learning',
            'level' => '3M',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC307M3',
            'name' => 'Mobile Computing',
            'level' => '3M',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC401S3',
            'name' => 'Advanced Algorithms',
            'level' => '4S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC402S3',
            'name' => 'Compiler Design',
            'level' => '4S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC403S3',
            'name' => 'Data Science',
            'level' => '4S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC404S3',
            'name' => 'Information Systems Security',
            'level' => '4S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC405S3',
            'name' => 'Systems and Network Administration',
            'level' => '4S',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC406S6',
            'name' => 'Research Project',
            'level' => '4S',
            'num_of_credits' => '6',
        ]);
        Course::create([
            'code'=>'CSC407S6',
            'name' => 'Industrial Training',
            'level' => '4S',
            'num_of_credits' => '6',
        ]);
        Course::create([
            'code'=>'CSC401M3',
            'name' => 'Advanced Algorithms',
            'level' => '4M',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC402M3',
            'name' => 'Compiler Design',
            'level' => '4M',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC403M3',
            'name' => 'Data Science',
            'level' => '4M',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC404M3',
            'name' => 'Information Systems Security',
            'level' => '4M',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC405M3',
            'name' => 'Systems and Network Administration',
            'level' => '4M',
            'num_of_credits' => '3',
        ]);
        Course::create([
            'code'=>'CSC406M6',
            'name' => 'Research Project',
            'level' => '4M',
            'num_of_credits' => '6',
        ]);
        Course::create([
            'code'=>'CSC407M6',
            'name' => 'Industrial Training',
            'level' => '4M',
            'num_of_credits' => '6',
        ]);
        
    }
}
