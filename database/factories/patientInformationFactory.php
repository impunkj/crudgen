<?php

namespace Database\Factories;

use App\Models\patientInformation;
use Illuminate\Database\Eloquent\Factories\Factory;

class patientInformationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = patientInformation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dateOfAdmission' => $this->faker->date('Y-m-d H:i:s'),
        'timeOfAdmission' => $this->faker->word,
        'name' => $this->faker->word,
        'dateOfBirth' => $this->faker->date('Y-m-d H:i:s'),
        'gender' => $this->faker->word,
        'IP' => $this->faker->text,
        'proposedOperation' => $this->faker->text,
        'preOperativeDiagnosis' => $this->faker->text,
        'BP' => $this->faker->word,
        'HR' => $this->faker->word,
        'sao2' => $this->faker->word,
        'height' => $this->faker->word,
        'weight' => $this->faker->word,
        'BMI' => $this->faker->word,
        'ASAPhysicalStatus' => $this->faker->word,
        'status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
