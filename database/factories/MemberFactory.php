<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    protected $model = Member::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' => preg_replace('/[^0-9]/', '', $this->faker->phoneNumber),
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'gender' => $this->faker->randomElement(['M', 'F']),
            'membership_start' => $this->faker->date,
        ];
    }
}
