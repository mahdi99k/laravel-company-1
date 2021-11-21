<?php

namespace Database\Factories;

use App\Models\Link;
use Illuminate\Database\Eloquent\Factories\Factory;

class LinkFactory extends Factory
{

    protected $model = Link::class;

    public function definition()
    {
        return [
            "name_link" => $this->faker->domainName,
            "url" => $this->faker->url,
        ];
    }
}
