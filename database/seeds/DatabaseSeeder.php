<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TerraTableSeeder::class);
        $this->call(DistritoTableSeeder::class);
        $this->call(ProvinciaTableSeeder::class);
        $this->call(UserSeeder::class);

    }
}
