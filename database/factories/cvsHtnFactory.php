<?php

namespace Database\Factories;

use App\Models\cvsHtn;
use Illuminate\Database\Eloquent\Factories\Factory;

class cvsHtnFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cvsHtn::class;

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
        'stress' => $this->faker->randomDigitNotNull,
        'treatment' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
