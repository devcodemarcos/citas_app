<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sedes = [
            [
                'name' => 'Toluca (1)',
                'address' => 'Calixtlahuaca y la otra en la Calzada al Pacífico, Edomex, Toluca'
            ], 
            [
                'name' => 'Tijuana (2)',
                'address' => 'venida revolucion, Baja California, Tijuana'
            ],
            [
                'name' => 'Guadalajara (3)',
                'address' => 'Av. Alcalde-16 de septiembre, Jalisco, Guadalajara'
            ]
        ];

        foreach ($sedes as $sede) {
            DB::table('sedes')->insert([
                'name' => $sede['name'],
                'address' => $sede['address'],
                'open' => '09:00:00',
                'close' => '17:00:00',
                'created_at' => Carbon::now()
            ]);
        }
    }
}
