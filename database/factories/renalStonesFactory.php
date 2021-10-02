<?php

namespace Database\Factories;

use App\Models\renalStones;
use Illuminate\Database\Eloquent\Factories\Factory;

class renalStonesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = renalStones::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'SurgeryNeeded' => $this->faker->word,
        'status' => $this->faker->randomDigitNotNull,
        'whatSurgery' => $this->faker->text,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
