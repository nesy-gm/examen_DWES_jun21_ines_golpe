<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComunidadUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Comunidad_User::factory()
                ->count(15)
                ->create();
    }
}
