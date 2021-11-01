<?php

namespace Database\Factories;

use App\Models\physicalExam;
use Illuminate\Database\Eloquent\Factories\Factory;

class physicalExamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = physicalExam::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'airway' => $this->faker->word,
        'mp' => $this->faker->randomDigitNotNull,
        'mouthOpening' => $this->faker->word,
        'mentohyoidDistance' => $this->faker->word,
        'neck' => $this->faker->text,
        'teeth' => $this->faker->text,
        'lungs' => $this->faker->text,
        'heart' => $this->faker->text,
        'cns' => $this->faker->word,
        'pupils' => $this->faker->text,
        'e' => $this->faker->word,
        'v' => $this->faker->word,
        'm' => $this->faker->word,
        'other' => $this->faker->word,
        'venous' => $this->faker->word,
        'spineExam' => $this->faker->word,
        'anaesthesiaPlan' => $this->faker->word,
        'proposedPost' => $this->faker->word,
        'PeriPop' => $this->faker->word,
        'willtakeBlood' => $this->faker->word,
        'pregnant' => $this->faker->randomDigitNotNull,
        'currentmedications' => $this->faker->text,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
