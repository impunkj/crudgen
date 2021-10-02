<?php

namespace Database\Factories;

use App\Models\respAsthma;
use Illuminate\Database\Eloquent\Factories\Factory;

class respAsthmaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = respAsthma::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'whatCause' => $this->faker->text,
        'treatment' => $this->faker->text,
        'hlyy' => $this->faker->randomDigitNotNull,
        'hlmm' => $this->faker->randomDigitNotNull,
        'hldd' => $this->faker->randomDigitNotNull,
        'layy' => $this->faker->randomDigitNotNull,
        'lamm' => $this->faker->randomDigitNotNull,
        'ladd' => $this->faker->randomDigitNotNull,
        'howDoyouTreat' => $this->faker->word,
        'urti' => $this->faker->word,
        'advised' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
