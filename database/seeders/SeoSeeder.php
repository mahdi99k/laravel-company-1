<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    public function run()
    {
//      Seo::where('id' , '>=' , 1)->truncate();
//      \DB::table('seos')->truncate();
        Seo::factory()->count(5)->create();
    }
}
