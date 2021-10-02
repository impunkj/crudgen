<?php

namespace Database\Factories;

use App\Models\cvsMi;
use Illuminate\Database\Eloquent\Factories\Factory;

class cvsMiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cvsMi::class;

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
        'medical' => $this->faker->word,
        'stented' => $this->faker->word,
        'treatMent' => $this->faker->text,
        'twhyy' => $this->faker->randomDigitNotNull,
        'twhmm' => $this->faker->randomDigitNotNull,
        'twhdd' => $this->faker->randomDigitNotNull,
        'stoppedAntiplatelet' => $this->faker->text,
        'whatTreatment' => $this->faker->text,
        'symptomsImproved' => $this->faker->word,
        'cabg' => $this->faker->word,
        'medication' => $this->faker->word,
        'BStentedCABG' => $this->faker->word,
        'typeofGraft' => $this->faker->text,
        'repeatCag' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
