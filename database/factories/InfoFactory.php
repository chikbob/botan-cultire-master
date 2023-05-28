<?php

namespace Database\Factories;

use App\Models\Info;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InfoFactory extends Factory
{
    protected $model = Info::class;

    public function definition()
    {
        return [
            'info' => $this->faker->name
        ];
    }
}
