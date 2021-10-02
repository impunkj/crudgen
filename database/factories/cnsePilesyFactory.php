<?php

namespace Database\Factories;

use App\Models\cnsePilesy;
use Illuminate\Database\Eloquent\Factories\Factory;

class cnsePilesyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cnsePilesy::class;

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
        'lsyy' => $this->faker->randomDigitNotNull,
        'lsmm' => $this->faker->randomDigitNotNull,
        'lsdd' => $this->faker->randomDigitNotNull,
        'medication' => $this->faker->text,
        'Neurologyconsult' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
