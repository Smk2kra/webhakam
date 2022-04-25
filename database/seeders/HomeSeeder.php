<?php

namespace Database\Seeders;
use App\Models\Home;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create([
            'title'     =>'WELCOME TO MY OUR SCHOOL',
            'subtitle'  =>'Mewujudkan pelajar yang berprestasi, berpendidikan karakter, memiliki sopan santun, dan lulusan siap kerja',
            'image'     => 'image.jpg',
            'facebook'     => 'https://web.facebook.com/',
            'twitter'     => 'https://twitter.com/home',
            'instagram'     => 'https://www.instagram.com/',
            'siswa'     => '1200',
            'kelas'     => '45',
        ]);
    }
}
