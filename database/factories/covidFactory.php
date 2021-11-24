<?php

namespace Database\Factories;

use App\Models\covid;
use Illuminate\Database\Eloquent\Factories\Factory;

class covidFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = covid::class;

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
        'wherePlace' => $this->faker->word,
        'treatment' => $this->faker->text,
        'resp' => $this->faker->word,
        'cvs' => $this->faker->word,
        'renal' => $this->faker->word,
        'anticoafungal' => $this->faker->word,
        'vaccinated' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
