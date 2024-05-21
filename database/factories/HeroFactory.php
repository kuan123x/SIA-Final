<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
 */
class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ro = [
            'Gold Lane',
            'Mid Lane',
            'Roam',
            'Healer',
            'Exp Lane',
            'Jungler'

        ];
        $ty = [
            'Tank',
            'Mage',
            'Marksman',
            'Fighter',
            'Support',
            'Assassin'
        ];
        $he = [
            'Layla',
    'Zilong',
    'Balmond',
    'Nana',
    'Saber',
    'Alice',
    'Gord',
    'Franco',
    'Miya',
    'Eudora',
    'Karina',
    'Minotaur',
    'Sun',
    'Aurora',
    'Roger',
    'Alucard',
    'Lapu-Lapu',
    'Lolita',
    'Hayabusa',
    'Freya',
    'Karrie',
    'Johnson',
    'Martis',
    'Lesley',
    'Chou',
    'Gatotkaca',
    'Vexana',
    'Kagura',
    'Hilda',
        ];
        return [
            'hero_name' => fake()->randomElement($he),
            'type' => fake()->randomElement($ty),
            'role' => fake()->randomElement($ro)
        ];
    }
}
