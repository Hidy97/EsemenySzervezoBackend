<?php

namespace Database\Factories;

use App\Models\Organisator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'date' => fake()->date(),
            'location' => fake()->sentence(),
            'org_id' => Organisator::all()->random()->org_id,
        ];
    }
}
