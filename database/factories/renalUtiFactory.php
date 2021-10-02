<?php

namespace Database\Factories;

use App\Models\renalUti;
use Illuminate\Database\Eloquent\Factories\Factory;

class renalUtiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = renalUti::class;

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
        'treatedV' => $this->faker->randomDigitNotNull,
        'treated' => $this->faker->text,
        'cue' => $this->faker->text,
        'whatdrugs' => $this->faker->text,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
