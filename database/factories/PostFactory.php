<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     * dsfjds
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->title(),
            'content'=>$this->faker->text(600),
        ];
    }
}
