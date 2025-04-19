<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Member;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'membership_no' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'name' => $this->faker->name(),
            'father_name' => $this->faker->word(),
            'mother_name' => $this->faker->word(),
            'permanent_address' => $this->faker->text(),
            'present_address' => $this->faker->text(),
            'mobile' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'phone' => $this->faker->phoneNumber(),
            'national_id' => $this->faker->numberBetween(-1000000000, 1000000000),
            'occupation_id' => 2,
            'marital_status' => 1,
            'image' => $this->faker->text(),
        ];
    }
}
