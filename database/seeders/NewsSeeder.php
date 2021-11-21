<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{

    public function run()
    {
//      News::where('id' , '>=' , 1)->truncate();
        \DB::table('news')->truncate();
//      News::factory()->count(5)->create();
    }
}
