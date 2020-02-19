<?php

use App\Models\Alternative;
use Illuminate\Database\Seeder;

class AlternativesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alternative::create([
            'name'          =>  'X550VX',
            'image'         =>  '1.jpg',
            'brand'         =>  'Asus',
            'price'         =>  10000000,
            'processor'     =>  'Intel Core i7-6700HQ up to 3.5 GHz',
            'gpu'           =>  'Nvidia GTX 950m 2 GB',
            'ram'           =>  8,
            'storage'       =>  'HDD / 1 TB',
            'screen'        =>  'HD / 768p / 60 Hz',
            'unit_weight'   =>  2.3,
            'features'      =>  'SD-Card Reader / USB 3.0 Ports (x2) / USB 2.0 Port (x1) / HDMI Port / VGA Port / Audio Jack'
        ]);
    }
}
