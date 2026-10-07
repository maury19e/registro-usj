<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('species')->insert([
            ['name' => 'Perro'],
            ['name' => 'Gato'],
            ['name' => 'Conejo'],
            ['name' => 'Caballo'],
            ['name' => 'Vaca'],
            ['name' => 'Oveja'],
            ['name' => 'Cerdo'],
            ['name' => 'Gallina'],
            ['name' => 'Pato'],
            ['name' => 'Cabra'],
        ]);
    }
}
