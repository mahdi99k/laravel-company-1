<?php

namespace Database\Factories;

use App\Models\Parallax;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParallaxFactory extends Factory
{

    protected $model = Parallax::class;

    public function definition()
    {
        return [
            "title" => $this->faker->jobTitle,
            "titleSize" => $this->faker->numberBetween(12, 30),
            "titleColor" => $this->faker->colorName,
            "body" => $this->faker->text,
            "bodySize" => $this->faker->numberBetween(12, 20),
            "bodyColor" => $this->faker->hexColor,
            "image" => $this->faker->image,
            'alt' => $this->faker->firstName,
        ];
    }
}
