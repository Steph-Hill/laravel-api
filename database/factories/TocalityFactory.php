<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TocalityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(rand(5,10),true),
            'content'=> $this->faker->paragraphs(15,true)
        ];
    }
}
