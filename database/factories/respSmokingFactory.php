<?php

namespace Database\Factories;

use App\Models\respSmoking;
use Illuminate\Database\Eloquent\Factories\Factory;

class respSmokingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = respSmoking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'howmany' => $this->faker->text,
        'whenStop' => $this->faker->text,
        'hlyy' => $this->faker->randomDigitNotNull,
        'hlmm' => $this->faker->randomDigitNotNull,
        'hldd' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
