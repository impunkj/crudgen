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
        'totalBill' => $this->faker->word,
        'dirBill' => $this->faker->word,
        'alkPhos' => $this->faker->word,
        'sgot' => $this->faker->word,
        'sgpt' => $this->faker->word,
        'Ldh' => $this->faker->word,
        'Urea' => $this->faker->word,
        'Creatine' => $this->faker->word,
        'Na' => $this->faker->word,
        'K' => $this->faker->word,
        'Ca' => $this->faker->word,
        'Mg' => $this->faker->word,
        'Hb' => $this->faker->word,
        'WBC' => $this->faker->word,
        'Platelets' => $this->faker->word,
        'Pcv' => $this->faker->word,
        'Alb' => $this->faker->word,
        'Protein' => $this->faker->word,
        'APTT' => $this->faker->randomDigitNotNull,
        'PT' => $this->faker->randomDigitNotNull,
        'INR' => $this->faker->word,
        'Rbs' => $this->faker->word,
        'Ppbs' => $this->faker->word,
        'Hba' => $this->faker->word,
        'hiv' => $this->faker->randomDigitNotNull,
        'hbsag' => $this->faker->randomDigitNotNull,
        'hcv' => $this->faker->randomDigitNotNull,
        'rtpcr' => $this->faker->randomDigitNotNull,
        'other1' => $this->faker->word,
        'other2' => $this->faker->word,
        'other3' => $this->faker->word,
        'other4' => $this->faker->word,
        'Ecg' => $this->faker->word,
        'cardiacEcho' => $this->faker->text,
        'ChestXray' => $this->faker->text,
        'Other' => $this->faker->text,
        'status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
