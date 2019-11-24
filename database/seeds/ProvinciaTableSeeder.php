<?php

use Illuminate\Database\Seeder;
use App\Provincia;

class ProvinciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Provincia::class, 3)->create();
    }
}
