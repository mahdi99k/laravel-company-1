<?php

namespace Database\Factories;

use App\Models\Seo;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeoFactory extends Factory
{
    protected $model = Seo::class;

    public function definition()
    {
        return [
            "title" => $this->faker->jobTitle,
            "keywords" => $this->faker->words(4 , true),      // create word()  array   |  words(number , true) (error)
            "description" => $this->faker->text,
            "author" => $this->faker->lastName,
        ];
    }
}
