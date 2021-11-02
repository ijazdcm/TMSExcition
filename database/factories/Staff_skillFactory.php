<?php

namespace Database\Factories;

use App\Models\AdminModels\Staff;
use App\Models\Model;
use App\Models\SubMasters\Staff_skill;
use Illuminate\Database\Eloquent\Factories\Factory;

class Staff_skillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Staff_skill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "staff_id" => rand(1, 50),
            "skill_id" => rand(1, 10)
        ];
    }
}
