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
            'father_name' => $this->faker->name($gender ='male'),
            'mother_name' => $this->faker->name($gender ='female'),
            'adhar_number' => $this->faker->numberBetween($min = 10000000000, $max = 99999999999),
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'age' => rand(18,35),
            'gender' => $this->faker->randomElement($array = array ('Male','Female','Trasnsgender')),
            'martial_status' => $this->faker->randomElement($array = array ('UnMarried','Married')),
            'staff_role' => rand(1, 2),
            'Address' => $this->faker->address,
            'profile_img' => rand(0, 1),
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->freeEmail,
            'father_phone_number' => $this->faker->phoneNumber,
            'mother_phone_number' => $this->faker->phoneNumber,
            'experienceRadioBtn' =>  $this->faker->randomElement($array = array ('on','off')),
            'previous_company_name' => $this->faker->company,
            'previous_company_salary' => rand(10000,100000),
            'education_qualification' =>$this->faker->randomElement($array = array ('BCA','MCA','BE-CS','BE-MECH','ME-CS')),
            'experience' => rand(0, 3),
            'doj' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
