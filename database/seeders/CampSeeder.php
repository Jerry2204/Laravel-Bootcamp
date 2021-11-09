<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class CampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gigih Belajar',
                'slug' => 'gigih-belajar',
                'price' => 350,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'title' => 'Siap Belajar',
                'slug' => 'siap-belajar',
                'price' => 500,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ];

        foreach ($camps as $camp) {
            Camp::create($camp);
        }
    }
}
