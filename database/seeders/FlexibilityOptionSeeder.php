<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlexibilityOption;

class FlexibilityOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FlexibilityOption::create([
            'name' => '1'
        ]);
        FlexibilityOption::create([
            'name' => '2'
        ]);
        FlexibilityOption::create([
            'name' => '3'
        ]);
    }
}
