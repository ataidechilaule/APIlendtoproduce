<?php

use Illuminate\Database\Seeder;
use App\Distrito;

class DistritoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Distrito::class, 3)->create();
    }
}
