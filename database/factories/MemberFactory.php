<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

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
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category' => $this->faker->randomLetter,
            'category_id' => $this->faker->randomDigit,
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomLetter,
            'birthdate' => $this->faker->date(),
            'birthplace' => $this->faker->city,
            'civil_status' => $this->faker->word,
            'id_presented' => $this->faker->word,
            'nationality' => $this->faker->word,
            'phone_number' => $this->faker->tollFreePhoneNumber,
            'cellphone_number' => $this->faker->e164PhoneNumber,
            'occupation' => $this->faker->word,
            'monthly_income' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'street_number' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'street_name' => $this->faker->streetName,
            'barangay' => $this->faker->streetName,
            'municipality' => $this->faker->city,
            'zip_code' => $this->faker->postcode,
        ];
    }
}
