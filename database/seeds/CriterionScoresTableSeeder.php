<?php

use App\Models\CriterionScore;
use Illuminate\Database\Seeder;

class CriterionScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CriterionScore::create([
            'criterion_id'  =>  1,
            'description'   =>  'Asus',
            'score'         =>  10
        ]);

        CriterionScore::create([
            'criterion_id'  =>  1,
            'description'   =>  'MSI',
            'score'         =>  8
        ]);

        CriterionScore::create([
            'criterion_id'  =>  1,
            'description'   =>  'Lenovo',
            'score'         =>  6
        ]);

        CriterionScore::create([
            'criterion_id'  =>  2,
            'description'   =>  '< 10.000.000',
            'score'         =>  10
        ]);

        CriterionScore::create([
            'criterion_id'  =>  2,
            'description'   =>  '10.000.000 - 15.000.000',
            'score'         =>  8
        ]);

        CriterionScore::create([
            'criterion_id'  =>  2,
            'description'   =>  '15.000.000 - 20.000.000',
            'score'         =>  6
        ]);

        CriterionScore::create([
            'criterion_id'  =>  2,
            'description'   =>  '> 20.000.000',
            'score'         =>  4
        ]);

        CriterionScore::create([
            'criterion_id'  =>  3,
            'description'   =>  'Intel',
            'score'         =>  10
        ]);

        CriterionScore::create([
            'criterion_id'  =>  3,
            'description'   =>  'AMD',
            'score'         =>  8
        ]);
    }
}
