<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Admin",
            "email" => "admin@correo.com",
            "password" => bcrypt("password"),
        ])->assignRole("admin");

        User::create([
            "name" => "Dario Suarez Lazarte",
            "email" => "dsuarezlazarte@gmail.com",
            "password" => bcrypt("123123123"),
        ])->assignRole("admin")->assignRole("admin");

        User::create([
            "name" => "Kevin Alpire Arteaga",
            "email" => "kevin@correo.com",
            "password" => bcrypt("123123123"),
        ])->assignRole("admin")->assignRole("admin");

        User::create([
            "name" => "Alison Tacoo Maturano",
            "email" => "alison@correo.com",
            "password" => bcrypt("123123123"),
        ])->assignRole("admin")->assignRole("admin");

        User::create([
            "name" => "Christian Cuellar",
            "email" => "christian@correo.com",
            "password" => bcrypt("123123123"),
        ])->assignRole("admin");

        User::create([
            "name" => "Gabriel Mercado",
            "email" => "gabriel@correo.com",
            "password" => bcrypt("123123123"),
        ])->assignRole("admin");

        User::create([
            "name" => "cortador de servicio",
            "email" => "cortador_de_servicio@gmail.com",
            "password" => bcrypt("123123123"),
        ])->assignRole("cortador");

    }
}
