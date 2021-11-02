<?php

namespace Database\Factories\SubMasters;

use App\Models\SubMasters\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Skill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "skill_name"=>$this->faker->randomElement($array = array ('Java','Html','Css','JavaScript','Php','Laravel','Jquery','BootStrap','Android','Kotlin','Flutter','Mysql')),
        ];
    }
}
