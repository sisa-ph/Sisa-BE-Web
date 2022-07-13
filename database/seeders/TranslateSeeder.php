<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Translate;

class TranslateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Translate::create([
            'english' => 'Hole',
            'bicol' => 'Labot',
            'tagalog' => 'Butas',

        ]);
    }
}
