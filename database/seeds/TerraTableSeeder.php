<?php

use Illuminate\Database\Seeder;
use App\Terra;

class TerraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Terra::class, 3)->create();
    }
}
