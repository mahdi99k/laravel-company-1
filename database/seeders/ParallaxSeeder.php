<?php

namespace Database\Seeders;

use App\Models\Parallax;
use Illuminate\Database\Seeder;

class ParallaxSeeder extends Seeder
{
    public function run()
    {
        Parallax::factory()->count(2)->create();
    }
}
