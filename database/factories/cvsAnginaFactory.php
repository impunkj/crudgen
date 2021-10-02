<?php

namespace Database\Factories;

use App\Models\cvsAngina;
use Illuminate\Database\Eloquent\Factories\Factory;

class cvsAnginaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cvsAngina::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'status' => $this->faker->word,
        'takingTreatment' => $this->faker->randomDigitNotNull,
        'causeAngina' => $this->faker->text,
        'howItStop' => $this->faker->text,
        'dtyy' => $this->faker->randomDigitNotNull,
        'dtmm' => $this->faker->randomDigitNotNull,
        'dtdd' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
