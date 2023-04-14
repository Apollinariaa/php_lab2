<?php

namespace Database\Factories;
use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->text(20),
            'active' => $this->faker->boolean(),
            'link' => $this->faker->text(255),
            'image_banner' => $this->faker->imageUrl(),
            'active_from' => $this->faker->date(),
            'active_to' => $this->faker->date(),
        ];
    }
}
