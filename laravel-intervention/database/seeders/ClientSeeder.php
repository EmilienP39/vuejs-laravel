<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'id' => 1,
            'nom' => 'ratinier',
            'prenom' => 'toufick',
            'telephone' => '060606',
            'email' => 'mail@gmail.com',
            'adresse' => 'dtc',
            'ville' => 'Montcuq',
            'cp' => '55000'
        ]);
        DB::table('clients')->insert([
            'id' => 2,
            'nom' => 'ratinier',
            'prenom' => 'mère toufick',
            'telephone' => '060606',
            'email' => 'mail@gmail.com',
            'adresse' => 'dtc',
            'ville' => 'Montcuq',
            'cp' => '55000'
        ]);
        DB::table('clients')->insert([
            'id' => 3,
            'nom' => 'ratinier',
            'prenom' => 'père toufick',
            'telephone' => '060606',
            'email' => 'mail@gmail.com',
            'adresse' => 'dtc',
            'ville' => 'Montcuq',
            'cp' => '55000'
        ]);
    }
}
