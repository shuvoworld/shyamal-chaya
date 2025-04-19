<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\FamilyMember;

class FamilyMemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FamilyMember::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'relationship' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'national_id' => $this->faker->numberBetween(-10000, 10000),
            'member_id' => $this->faker->randomNumber(),
        ];
    }
}
