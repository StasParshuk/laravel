<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $role =  Role::customer()->first();


        return [
            'role_id'=> $role->id,
            'name' => fake()->firstName(),
            'surname' => fake()->lastName,
            'birthdate'=> fake()->date,
            'email' => fake()->unique()-> safeEmail(),
            'phone'=> fake()->e164PhoneNumber,
            'email_verified_at' => now(),
            'password' => Hash::make("test1234"),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function admin()
    {
        return $this->state(function (array $attributes) {
            return [
                "role_id" => Role::admin()->first()->id
            ];
        });
    }
    public function withEmail( string $email)
    {
        return $this->state(function (array $attributes) use ($email) {
            return [
                "email" => $email
            ];
        });
    }
}
