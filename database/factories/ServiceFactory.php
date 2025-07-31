<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    public function definition(): array
    {
        $services = [
            'Web Development (Laravel)',
            'Web Development (React)',
            'Web Development (Vue.js)',
            'SEO Optimization',
            'Content Writing',
            'UI/UX Design',
            'Mobile App Development (Flutter)',
            'Mobile App Development (React Native)',
            'VFX Animation',
            '3D Modeling',
            'Digital Marketing',
            'WordPress Development',
            'E-commerce Setup (Shopify)',
        ];

        return [
            'name' => $this->faker->randomElement($services),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 100, 5000),
            'discount' => $this->faker->randomElement([0, 5, 10, 15, 20]),
            'estimated_delivery' => $this->faker->randomElement(['2 days', '3 days', '1 week', '10 days']),
            'budget' => $this->faker->randomElement(['low', 'medium', 'high']),
        ];
    }
}
