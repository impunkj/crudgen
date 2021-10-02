<?php

namespace Database\Factories;

use App\Models\hepaticJaundice;
use Illuminate\Database\Eloquent\Factories\Factory;

class hepaticJaundiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = hepaticJaundice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'whyy' => $this->faker->randomDigitNotNull,
        'whmm' => $this->faker->randomDigitNotNull,
        'whdd' => $this->faker->randomDigitNotNull,
        'needHospital' => $this->faker->word,
        'cause' => $this->faker->text,
        'viralStatus' => $this->faker->text,
        'childCriteria' => $this->faker->text,
        'INR' => $this->faker->text,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
