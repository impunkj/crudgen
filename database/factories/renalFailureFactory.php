<?php

namespace Database\Factories;

use App\Models\renalFailure;
use Illuminate\Database\Eloquent\Factories\Factory;

class renalFailureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = renalFailure::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'urea' => $this->faker->word,
        'creatinine' => $this->faker->word,
        'dialysis' => $this->faker->word,
        'hemo' => $this->faker->word,
        'hemoValue' => $this->faker->word,
        'peritoneal' => $this->faker->word,
        'peritonealValue' => $this->faker->word,
        'fistual' => $this->faker->word,
        'fistualValue' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
