<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vehicles;
use App\Models\Parties; 
use App\Models\Keis;
use App\Models\Inspections;
use App\Models\Documents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    public function run(): void
    {

$this->call([

            UserSeeder::class,
            VehiclesSeeder::class,
            PartiesSeeder::class,
            KeisSeeder::class,
            InspectionsSeeder::class,
            DocumentsSeeder::class,

        ]);
}
}
