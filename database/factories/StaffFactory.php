<?php

namespace Database\Factories;

use App\Models\AdminModels\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Staff::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'middle_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->email(),
            'Address' => $this->faker->address,
            'profile_img' => rand(1, 2),
            'staff_role' => rand(1, 2),
            'active_status' => rand(0, 1),
            'dl_status' => rand(0, 1),
        ];
    }
}
