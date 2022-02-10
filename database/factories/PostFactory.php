<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->realText(random_int(10, 40));
        $create = $this->faker->dateTimeBetween('-30 days', '-1 days');
        return [
            'title' => $title,
            'short_title' => mb_strlen($title)>30 ? mb_substr($title, 0, 30) . '...' : $title,
            'author_id' => random_int(1,4),
            'descr' => $this->faker->realText(random_int(100, 500)),
            'created_at' => $create,
            'updated_at' => $create,
        ];
    }
}
