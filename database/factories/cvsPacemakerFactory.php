<?php

namespace Database\Factories;

use App\Models\cvsPacemaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class cvsPacemakerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cvsPacemaker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'why' => $this->faker->text,
        'pacemakerType' => $this->faker->text,
        'whyy' => $this->faker->date('Y-m-d H:i:s'),
        'whmm' => $this->faker->date('Y-m-d H:i:s'),
        'whdd' => $this->faker->date('Y-m-d H:i:s'),
        'ckpaperwork' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
