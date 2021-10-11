<?php

namespace Database\Factories;

use App\Models\anaesthetichistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class anaesthetichistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = anaesthetichistory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'typeOf' => $this->faker->randomDigitNotNull,
        'preAnaesthHistory' => $this->faker->text,
        'physicalExam' => $this->faker->text,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
