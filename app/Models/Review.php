<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

   protected $reviews = [
    [
        'id' => 1,
        'title' =>'Jojo Bijare Adventure',
        'user' =>'@erna_wati',
        'rating' => '4/5',
        'date' => '12 Desember 2022',   
     ],
     [
        'id' => 2,
        'title' =>'Noragami',
        'user' =>'@Hudzaifah_aslam',
        'rating' => '3,5/5',
        'date' => '23 April 2019',   
     ],
     [
        'id' => 3,
        'title' =>'Wind Breaker',
        'user' =>'@Azmi_iskandar',
        'rating' => '3/5',
        'date' => '13 Mey 2024',   
     ],
     [
        'id' => 4,
        'title' =>'Spy x Family',
        'user' =>'@Alwi_Assegaf',
        'rating' => '4,5/5',
        'date' => '20 Juli 2021',   
     ],
     [
        'id' => 5,
        'title' =>'Attack on titan',
        'user' =>'@kadam_sidik',
        'rating' => '4,5/5',
        'date' => '20 Juli 2021',   
     ],
   ];

   public function getAllReviews()
   {
 return $this->reviews;
}
}