<?php

namespace Database\Factories;

use App\Models\Laboratorydata;
use Illuminate\Database\Eloquent\Factories\Factory;

class LaboratorydataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Laboratorydata::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patientNo' => $this->faker->randomDigitNotNull,
        'GFR' => $this->faker->word,
        'other' => $this->faker->text,
        'Hgb' => $this->faker->word,
        'Glucose' => $this->faker->word,
        'Protein' => $this->faker->word,
        'xRay' => $this->faker->word,
        'HIV' => $this->faker->word,
        'PVC' => $this->faker->word,
        'Urea' => $this->faker->word,
        'Alb' => $this->faker->word,
        'ECG' => $this->faker->word,
        'HBSAg' => $this->faker->word,
        'WBC' => $this->faker->word,
        'Creat' => $this->faker->word,
        'totalBill' => $this->faker->word,
        '2DEcho' => $this->faker->word,
        'HCV' => $this->faker->word,
        'Plate' => $this->faker->word,
        'Na' => $this->faker->word,
        'dirBill' => $this->faker->word,
        'others' => $this->faker->word,
        'stressAngio' => $this->faker->word,
        'PT' => $this->faker->word,
        'K' => $this->faker->word,
        'LDH' => $this->faker->word,
        'other1' => $this->faker->word,
        'allergies' => $this->faker->text,
        'PTT' => $this->faker->word,
        'Ca' => $this->faker->word,
        'alkPhos' => $this->faker->word,
        'other2' => $this->faker->word,
        'INR' => $this->faker->word,
        'Mg' => $this->faker->word,
        'Amylase' => $this->faker->word,
        'other3' => $this->faker->word,
        'status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
