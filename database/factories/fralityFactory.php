<?php

namespace Database\Factories;

use App\Models\frality;
use Illuminate\Database\Eloquent\Factories\Factory;

class fralityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = frality::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'Ssteroid' => $this->faker->text,
        'sterioid' => $this->faker->text,
        'frailityscore' => $this->faker->word,
        'cognition' => $this->faker->word,
        'ghstatus' => $this->faker->word,
        'describehealth' => $this->faker->word,
        'findependence' => $this->faker->word,
        'socialSupport' => $this->faker->word,
        'medicationusefive' => $this->faker->word,
        'medicationuseprescription' => $this->faker->word,
        'Nutrition' => $this->faker->word,
        'Mood' => $this->faker->word,
        'Continence' => $this->faker->word,
        'Functionalperformance' => $this->faker->word,
        'Totals' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
