<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Anggota;


class anggotaFactory extends Factory
{
    protected $model = Anggota::class;

    public function definition(): array
    {
        return [
            'nama_lengkap' => $this->faker->unique()->name,
            'alamat' => $this->faker->address,
            'no_hp' => $this->faker->phoneNumber,
            'user_id' => $this->faker->numberBetween(1,5),
            'divisi_id' => $this->faker->numberBetween(1,5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
