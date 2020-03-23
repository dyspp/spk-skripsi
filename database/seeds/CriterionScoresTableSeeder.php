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
            'description'   =>  'Intel',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  1,
            'description'   =>  'AMD',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  2,
            'description'   =>  'High End',
            'score'         =>  4
        ]);

        CriterionScore::create([
            'criterion_id'  =>  2,
            'description'   =>  'End Mid Range',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  2,
            'description'   =>  'Low Mid Range',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  2,
            'description'   =>  'Low End',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  3,
            'description'   =>  '> 3 GHz',
            'score'         =>  5
        ]);

        CriterionScore::create([
            'criterion_id'  =>  3,
            'description'   =>  '2.6 Ghz - 3 GHz',
            'score'         =>  4
        ]);

        CriterionScore::create([
            'criterion_id'  =>  3,
            'description'   =>  '2.1 GHz - 2.5 GHz',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  3,
            'description'   =>  '1.5 GHz - 2 GHz',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  3,
            'description'   =>  '< 1.5 GHz',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  4,
            'description'   =>  '6 (hexa-core)',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  4,
            'description'   =>  '4 (quad-core)',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  4,
            'description'   =>  '2 (dual-core)',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  5,
            'description'   =>  'Nvidia',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  5,
            'description'   =>  'AMD',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  6,
            'description'   =>  'High End',
            'score'         =>  4
        ]);

        CriterionScore::create([
            'criterion_id'  =>  6,
            'description'   =>  'High Mid Range',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  6,
            'description'   =>  'Low Mid Range',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  6,
            'description'   =>  'Low End',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  7,
            'description'   =>  '6 GB',
            'score'         =>  5
        ]);

        CriterionScore::create([
            'criterion_id'  =>  7,
            'description'   =>  '4 GB',
            'score'         =>  4
        ]);

        CriterionScore::create([
            'criterion_id'  =>  7,
            'description'   =>  '3 GB',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  7,
            'description'   =>  '2 GB',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  7,
            'description'   =>  'System Shared',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  8,
            'description'   =>  '16 GB',
            'score'         =>  4
        ]);

        CriterionScore::create([
            'criterion_id'  =>  8,
            'description'   =>  '8 GB',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  8,
            'description'   =>  '4 GB',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  8,
            'description'   =>  '2 GB',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  9,
            'description'   =>  'SSD + SSHD',
            'score'         =>  6
        ]);

        CriterionScore::create([
            'criterion_id'  =>  9,
            'description'   =>  'SSD + HDD',
            'score'         =>  5
        ]);

        CriterionScore::create([
            'criterion_id'  =>  9,
            'description'   =>  'SSD + Optane',
            'score'         =>  4
        ]);

        CriterionScore::create([
            'criterion_id'  =>  9,
            'description'   =>  'SSD',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  9,
            'description'   =>  'SSHD',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  9,
            'description'   =>  'HDD',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  10,
            'description'   =>  '2000 GB (2 TB)',
            'score'         =>  9
        ]);

        CriterionScore::create([
            'criterion_id'  =>  10,
            'description'   =>  '1512 GB (1 TB + 512 GB)',
            'score'         =>  8
        ]);

        CriterionScore::create([
            'criterion_id'  =>  10,
            'description'   =>  '1256 GB (1 TB + 256 GB)',
            'score'         =>  7
        ]);

        CriterionScore::create([
            'criterion_id'  =>  10,
            'description'   =>  '1128 GB (1 TB + 128 GB)',
            'score'         =>  6
        ]);

        CriterionScore::create([
            'criterion_id'  =>  10,
            'description'   =>  '1000 GB (1 TB)',
            'score'         =>  5
        ]);

        CriterionScore::create([
            'criterion_id'  =>  10,
            'description'   =>  '512 GB',
            'score'         =>  4
        ]);

        CriterionScore::create([
            'criterion_id'  =>  10,
            'description'   =>  '500 GB',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  10,
            'description'   =>  '256 GB',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  10,
            'description'   =>  '128 GB',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  11,
            'description'   =>  '< Rp. 5.000.000',
            'score'         =>  5
        ]);

        CriterionScore::create([
            'criterion_id'  =>  11,
            'description'   =>  'Rp. 5.000.000 - Rp. 7.500.000',
            'score'         =>  4
        ]);

        CriterionScore::create([
            'criterion_id'  =>  11,
            'description'   =>  'Rp. 7.500.001 - Rp. 10.000.000',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  11,
            'description'   =>  'Rp. 10.000.001 - Rp. 15.000.000',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  11,
            'description'   =>  'Rp. 15.000.001 - Rp. 20.000.000',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  12,
            'description'   =>  '15,6"',
            'score'         =>  5
        ]);

        CriterionScore::create([
            'criterion_id'  =>  12,
            'description'   =>  '14"',
            'score'         =>  4
        ]);

        CriterionScore::create([
            'criterion_id'  =>  12,
            'description'   =>  '13,3"',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  12,
            'description'   =>  '12,5"',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  12,
            'description'   =>  '11,6"',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  13,
            'description'   =>  'FHD',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  13,
            'description'   =>  'HD',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  14,
            'description'   =>  '144 Hz',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  14,
            'description'   =>  '120 Hz',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  14,
            'description'   =>  '60 Hz',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  15,
            'description'   =>  'Asus',
            'score'         =>  5
        ]);

        CriterionScore::create([
            'criterion_id'  =>  15,
            'description'   =>  'Acer',
            'score'         =>  4
        ]);

        CriterionScore::create([
            'criterion_id'  =>  15,
            'description'   =>  'Dell',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  15,
            'description'   =>  'Lenovo',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  15,
            'description'   =>  'HP',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  16,
            'description'   =>  '< 1 Kg',
            'score'         =>  5
        ]);

        CriterionScore::create([
            'criterion_id'  =>  16,
            'description'   =>  '1.1 Kg - 1.5 Kg',
            'score'         =>  4
        ]);

        CriterionScore::create([
            'criterion_id'  =>  16,
            'description'   =>  '1.6 Kg - 2.0 Kg',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  16,
            'description'   =>  '2.1 Kg - 2.5 Kg',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  16,
            'description'   =>  '> 2.5 Kg',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  17,
            'description'   =>  'Unique',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  17,
            'description'   =>  'Common',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  18,
            'description'   =>  'Advanced',
            'score'         =>  4
        ]);

        CriterionScore::create([
            'criterion_id'  =>  18,
            'description'   =>  'Common+',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  18,
            'description'   =>  'Common',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  18,
            'description'   =>  'Less Common',
            'score'         =>  1
        ]);

        CriterionScore::create([
            'criterion_id'  =>  19,
            'description'   =>  'Backlit (RGB)',
            'score'         =>  3
        ]);

        CriterionScore::create([
            'criterion_id'  =>  19,
            'description'   =>  'Backlit (Single Color)',
            'score'         =>  2
        ]);

        CriterionScore::create([
            'criterion_id'  =>  19,
            'description'   =>  'None',
            'score'         =>  1
        ]);

    }
}
