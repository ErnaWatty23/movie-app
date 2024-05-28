<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'title' =>'Jojo Bijare Adventure',
            'user' =>'@erna_wati',
            'rating' => '4/5',
            'date' => '12 Desember 2022', 
        ]);
    
        Review::create([
            'title' =>'Noragami',
            'user' =>'@Hudzaifah_aslam',
            'rating' => '3,5/5',
            'date' => '23 April 2019',
        ]);
    
        Review::create([
            'title' =>'Wind Breaker',
            'user' =>'@Azmi_iskandar',
            'rating' => '3/5',
            'date' => '13 Mey 2024', 
        ]);
        
        Review ::create([
            'title' =>'Spy x Family',
            'user' =>'@Alwi_Assegaf',
            'rating' => '4,5/5',
            'date' => '20 Juli 2021', 
        ]);

        Review ::create ([
            'title' =>'Attack on titan',
            'user' =>'@kadam_sidik',
            'rating' => '4,5/5',
            'date' => '20 Juli 2021',
        ]);
    }
}
