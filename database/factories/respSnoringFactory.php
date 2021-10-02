<?php

namespace Database\Factories;

use App\Models\respSnoring;
use Illuminate\Database\Eloquent\Factories\Factory;

class respSnoringFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = respSnoring::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'stopBangScore' => $this->faker->randomDigitNotNull,
        'sleepStudy' => $this->faker->word,
        'cpap' => $this->faker->word,
        'OSAW' => $this->faker->word,
        'duFSleep' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
