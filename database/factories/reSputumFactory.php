<?php

namespace Database\Factories;

use App\Models\reSputum;
use Illuminate\Database\Eloquent\Factories\Factory;

class reSputumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = reSputum::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'hlyy' => $this->faker->randomDigitNotNull,
        'hlmm' => $this->faker->randomDigitNotNull,
        'hldd' => $this->faker->randomDigitNotNull,
        'color' => $this->faker->word,
        'treatment' => $this->faker->text,
        'thlyy' => $this->faker->randomDigitNotNull,
        'thlmm' => $this->faker->randomDigitNotNull,
        'thldd' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
