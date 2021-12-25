<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;

class PostFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
    */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function() {
                return User::factory()->create()->id;
            },

            'title' => $this->faker->text(),
            'content' => $this->faker->text(),
            'published' => $this->faker->boolean()
        ];
    }
}
