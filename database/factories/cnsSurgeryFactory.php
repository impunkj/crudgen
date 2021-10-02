<?php

namespace Database\Factories;

use App\Models\cnsSurgery;
use Illuminate\Database\Eloquent\Factories\Factory;

class cnsSurgeryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cnsSurgery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'brain' => $this->faker->randomDigitNotNull,
        'spinal' => $this->faker->randomDigitNotNull,
        'brainwSurgery' => $this->faker->text,
        'brainREffect' => $this->faker->text,
        'spinalwSurgery' => $this->faker->text,
        'spinalREffect' => $this->faker->text,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
