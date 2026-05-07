<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Track;

class TrackSeeder extends Seeder
{
    public function run(): void
    {
        Track::create([
            'title' => 'SoundHelix Song 1',
            'artist' => 'SoundHelix',
            'genre' => 'electronic',
            'energy' => 'high',
            'cover' => 'https://via.placeholder.com/300',
            'preview' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3'
        ]);

        Track::create([
            'title' => 'SoundHelix Song 2',
            'artist' => 'SoundHelix',
            'genre' => 'ambient',
            'energy' => 'medium',
            'cover' => 'https://via.placeholder.com/300',
            'preview' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-2.mp3'
        ]);

        Track::create([
            'title' => 'SoundHelix Song 3',
            'artist' => 'SoundHelix',
            'genre' => 'chill',
            'energy' => 'low',
            'cover' => 'https://via.placeholder.com/300',
            'preview' => 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3'
        ]);
    }
}