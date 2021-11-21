<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{

    protected $model = News::class;

    public function definition()
    {
        return [
            "title" => $this->faker->jobTitle,
            "summary" => $this->faker->text,
            "image" => $this->faker->image,
            "alt" => $this->faker->colorName(),
        ];
    }
}
