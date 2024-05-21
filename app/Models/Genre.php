<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'name' => 'Drama',
            'description' => 'The drama genre is a genre that invites the audience to feel the emotional journey of the characters through the conflicts they face.
            ',
        ],
        [
            'id' => 2,
            'name' => 'Comedy',
            'description' => 'The drama genre is a genre that invites the audience to feel the emotional journey of the characters through the conflicts they face.',
        ],
        [
            'id' => 3,
            'name' => 'Action',
            'description' => 'The action genre is a genre full of tense scenes with a focus on the heroic actions oft he characters.',
        ],
        [
            'id' => 4,
            'name' => 'Shounen',
            'description' => 'Shounen is a genre in Japanese manga and anime that is aimed specifically at young male audiences, especially in the teenage to early adult age group.',
        ],
        [
            'id' => 5,
            'name' => 'Romance',
            'description' => 'The romantic genre is a story genre that focuses on the romance and affection between the characters.',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}