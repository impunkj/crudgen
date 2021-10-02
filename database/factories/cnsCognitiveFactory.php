<?php

namespace Database\Factories;

use App\Models\cnsCognitive;
use Illuminate\Database\Eloquent\Factories\Factory;

class cnsCognitiveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cnsCognitive::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'MiniCogScore' => $this->faker->randomDigitNotNull,
        'PatientAten' => $this->faker->randomDigitNotNull,
        'PharseTest' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
