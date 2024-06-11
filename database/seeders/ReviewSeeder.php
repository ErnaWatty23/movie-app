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
            'id'=>1,
            'movie_id' =>'1',
            'user' =>'@erna_wati',
            'rating' => '4/5',
            'date' => '12 Desember 2022', 
        ]);
    
        Review::create([
            'id'=>2,
            'movie_id' =>'2',
            'user' =>'@Hudzaifah_aslam',
            'rating' => '3,5/5',
            'date' => '23 April 2019',
        ]);
    
        Review::create([
           'id'=> 3,
            'movie_id' =>'3',
            'user' =>'@Azmi_iskandar',
            'rating' => '3/5',
            'date' => '13 Mey 2024', 
        ]);
        
    }

}
