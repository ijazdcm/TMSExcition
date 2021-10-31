<?php

namespace Database\Factories;

use App\Models\Projects\project_members;
use Illuminate\Database\Eloquent\Factories\Factory;

class project_membersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = project_members::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "project_id" => rand(1, 20),
            "member_id" => rand(1, 50),
        ];
    }
}
