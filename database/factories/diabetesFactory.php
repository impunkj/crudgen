<?php

namespace Database\Factories;

use App\Models\diabetes;
use Illuminate\Database\Eloquent\Factories\Factory;

class diabetesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = diabetes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'typeOfD' => $this->faker->word,
        'sugarCheckHome' => $this->faker->word,
        'howmuch' => $this->faker->word,
        'whatTreatment' => $this->faker->text,
        'rxtreat' => $this->faker->word,
        'complications' => $this->faker->word,
        'dietcontrol' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
