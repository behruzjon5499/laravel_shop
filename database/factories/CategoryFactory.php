<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_ru'=>fake()->sentence(),
            'name_uz'=>fake()->sentence(),
            'name_en'=>fake()->sentence(),
            'photo'=>'DBlQsvDF4YvV9ZZhr9jU4bc9LIx6JO-metaTWV0YWxfMi5qcGc=-.jpg',
            'description_ru'=>fake()->sentence(4),
            'description_uz'=>fake()->sentence(4),
            'description_en'=>fake()->paragraph(4),
        ];
    }
}
