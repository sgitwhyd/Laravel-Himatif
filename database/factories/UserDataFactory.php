<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 3),
            'nama_lengkap' => $this->faker->name(),
            'nama_panggilan' => $this->faker->username(),
            'nim' => $this->faker->numerify('L#######'),
            'no_hp' => $this->faker->phoneNumber(),
            'tanggal_lahir' => $this->faker->dateTime(),
            'alamat' => $this->faker->address(),
            'asal_sekolah' => $this->faker->company(),
            'motto' => $this->faker->sentence(),
            'pengalaman' => $this->faker->paragraph(),
            'motivasi' => $this->faker->sentence(),
        ];
    }
}
