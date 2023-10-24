<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;
use Illuminate\Support\Facades\Schema;


class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::disableForeignKeyConstraints();
        Grupo::factory(10)->create();
        Schema::enableForeignKeyConstraints();


    }
}
