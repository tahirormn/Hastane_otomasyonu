<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaborantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laborant')->insert([
            [
                'ad' => 'Ahmet',
                'soyad' => 'Şaşmaz',
                'tc_identity' => '11111111111',
                'tel_num' => '09837876545',
                'password' => '1111111'
            ],

            [
                'ad' => 'Merve',
                'soyad' => 'Al',
                'tc_identity' => '22222222222',
                'tel_num' => '05037876543',
                'password' => '2222222'
            ],

            [
                'ad' => 'Ayşe',
                'soyad' => 'Göçer',
                'tc_identity' => '33333333333',
                'tel_num' => '04567655453',
                'password' => '3333333'
            ],

        ]);
    }
}
