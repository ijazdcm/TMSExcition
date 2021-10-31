<?php

namespace Database\Factories;

use App\Models\AdminModels\Projects;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Projects::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "project_tittle" => $this->faker->catchPhrase,
            "client_name" => $this->faker->name(),
            "days" => rand(45, 60),
            "description" => $this->faker->text,
            "start_date" => $this->faker->date('Y-m-d'),
            "end_date" => $this->faker->date('Y-m-d'),
            "current_status" => 1,
            "completion_percentage" => 0,
        ];
    }
}
