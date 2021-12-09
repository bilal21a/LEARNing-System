<?php

namespace Database\Seeders;

use App\Models\HrsTime as ModelsHrsTime;
use Illuminate\Database\Seeder;

class HrsTime extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsHrsTime::truncate();

        $hrstime =  [
            [
              'name' => 'no time',
              'value' => 100,
            ],
            [
              'name' => '12:00 am',
              'value' => 0,
            ],
            [
              'name' => '1:00 am',
              'value' => 1,
            ],
            [
              'name' => '2:00 am',
              'value' => 2,
            ],
            [
              'name' => '3:00 am',
              'value' => 3,
            ],
            [
              'name' => '4:00 am',
              'value' => 4,
            ],
            [
              'name' => '5:00 am',
              'value' => 5,
            ],
            [
              'name' => '6:00 am',
              'value' => 6,
            ],
            [
              'name' => '7:00 am',
              'value' => 7,
            ],
            [
              'name' => '8:00 am',
              'value' => 8,
            ],
            [
              'name' => '9:00 am',
              'value' => 9,
            ],
            [
              'name' => '10:00 am',
              'value' => 10,
            ],
            [
              'name' => '11:00 am',
              'value' => 11,
            ],
            [
              'name' => '12:00 pm',
              'value' => 12,
            ],
            [
              'name' => '1:00 pm',
              'value' => 13,
            ],
            [
              'name' => '2:00 pm',
              'value' => 14,
            ],
            [
              'name' => '3:00 pm',
              'value' => 15,
            ],
            [
              'name' => '4:00 pm',
              'value' => 16,
            ],
            [
              'name' => '5:00 pm',
              'value' => 17,
            ],
            [
              'name' => '6:00 pm',
              'value' => 18,
            ],
            [
              'name' => '7:00 pm',
              'value' => 19,
            ],
            [
              'name' => '8:00 pm',
              'value' => 20,
            ],
            [
              'name' => '9:00 pm',
              'value' => 21,
            ],
            [
              'name' => '10:00 pm',
              'value' => 22,
            ],
            [
              'name' => '11:00 pm',
              'value' => 23,
            ]

          ];

          ModelsHrsTime::insert($hrstime);
    }
}
