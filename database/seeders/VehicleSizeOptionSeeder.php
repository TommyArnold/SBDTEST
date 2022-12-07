<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VehicleSizeOption;

class VehicleSizeOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleSizeOption::create([
            'name' => 'Small'
        ]);
        VehicleSizeOption::create([
            'name' => 'Medium'
        ]);
        VehicleSizeOption::create([
            'name' => 'Large'
        ]);
        VehicleSizeOption::create([
            'name' => 'Van'
        ]);
    }
}
