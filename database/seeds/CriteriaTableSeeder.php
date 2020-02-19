<?php

use App\Models\Criterion;
use Illuminate\Database\Seeder;

class CriteriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 0 = 'Cost', 1 = 'Benefit'
        Criterion::create([
            'name'      => 'Brand',
            'attribute' =>  1,
            'weight'    =>  0.6
        ]);

        Criterion::create([
            'name'      => 'Price',
            'attribute' =>  0,
            'weight'    =>  0.6
        ]);

        Criterion::create([
            'name'      => 'Processor',
            'attribute' =>  1,
            'weight'    =>  0.6
        ]);
    }
}
