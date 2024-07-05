<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => rand(1,4),
            'name' => [
                'uz' => fake()->sentence(3),
                'ru' => "Влади́мир Влади́мирович Пу́тин",
            ],
            'price' => rand(50000,10000000),
            'description' => [
                'uz' => fake()->paragraph(5),
                'ru' => "В Белом доме оценили решение по новому генсеку НАТО
05.07.2024, 23:50
В США анонсировали встречу Байдена с Зеленским
05.07.2024, 23:46
Россиянин, устроивший налет на банк по приказу мошенников, предстанет перед судом
05.07.2024, 23:41
В США обеспокоены стремлением Таиланда и Малайзии в БРИКС"
            ],
        ];
    }
}
