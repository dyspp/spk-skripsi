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
        #1
        Criterion::create([
            'name'      => 'Processor Manufacturer',
            'attribute' =>  1,
            'weight'    =>  0.02
        ]);
    
        #2
        Criterion::create([
            'name'      => 'Processor Class',
            'attribute' =>  1,
            'weight'    =>  0.1
        ]);
   
        #3
        Criterion::create([
            'name'      => 'Processor Base Speed',
            'attribute' =>  1,
            'weight'    =>  0.05
        ]);

        #4
        Criterion::create([
            'name'      => 'Processor Core',
            'attribute' =>  1,
            'weight'    =>  0.03
        ]);
    
        #5
        Criterion::create([
            'name'      => 'GPU Manufacturer',
            'attribute' =>  1,
            'weight'    =>  0.02
        ]);
    
        #6
        Criterion::create([
            'name'      => 'GPU Class',
            'attribute' =>  1,
            'weight'    =>  0.08
        ]);
   
        #7
        Criterion::create([
            'name'      => 'GPU Memory',
            'attribute' =>  1,
            'weight'    =>  0.05
        ]);
    
        #8
        Criterion::create([
            'name'      => 'Memory (RAM)',
            'attribute' =>  1,
            'weight'    =>  0.2
        ]);
    
        #9
        Criterion::create([
            'name'      => 'Storage Type',
            'attribute' =>  1,
            'weight'    =>  0.07
        ]);
    
        #10
        Criterion::create([
            'name'      => 'Storage Size',
            'attribute' =>  1,
            'weight'    =>  0.05
        ]);
    
        #11
        Criterion::create([
            'name'      => 'Price',
            'attribute' =>  0,
            'weight'    =>  0.1
        ]);
    
        #12
        Criterion::create([
            'name'      => 'Display Size',
            'attribute' =>  1,
            'weight'    =>  0.02
        ]);
    
        #13
        Criterion::create([
            'name'      => 'Display Resolution',
            'attribute' =>  1,
            'weight'    =>  0.05
        ]);
    
        #14
        Criterion::create([
            'name'      => 'Display Refresh Rate',
            'attribute' =>  1,
            'weight'    =>  0.01
        ]);
    
        #15
        Criterion::create([
            'name'      => 'Brand',
            'attribute' =>  1,
            'weight'    =>  0.04
        ]);
    
        #16
        Criterion::create([
            'name'      => 'Unit Weight',
            'attribute' =>  0,
            'weight'    =>  0.02
        ]);
    
        #17
        Criterion::create([
            'name'      => 'Design',
            'attribute' =>  1,
            'weight'    =>  0.03
        ]);
    
        #18
        Criterion::create([
            'name'      => 'Feature',
            'attribute' =>  1,
            'weight'    =>  0.05
        ]);
    
        #19
        Criterion::create([
            'name'      => 'Backlit Keyboard',
            'attribute' =>  1,
            'weight'    =>  0.01
        ]);

    }
}
