<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'fiscal_id' => $this->faker->numberBetween($min = 0, $max = 9000).time(),
            'company' => $this->faker->company,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'contact' => $this->faker->phoneNumber,
            'country' => $this->faker->country,
            'state' => $this->faker->boolean,
            'role' => 'Cliente',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
