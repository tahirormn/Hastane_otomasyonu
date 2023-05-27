<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'dep_id'=>48,
                'dep_ad'=>'Cerrahi Onkolojisi'
            ],

            [
                'dep_id'=>46,
                'dep_ad'=>'Çocuk İmmünolojisi ve Alerji Hastalıkları'
            ],

            [
                'dep_id'=>44,
                'dep_ad'=>'Çocuk Sağlığı ve Hastalıkları'
            ],

            [
                'dep_id'=>42,
                'dep_ad'=>'Deri ve Zührevi Hastalıkları (Cildiye)'
            ],

            [
                'dep_id'=>40,
                'dep_ad'=>'Diş Hekimliği (Genel Diş)'
            ],

            [
                'dep_id'=>38,
                'dep_ad'=>'Enfeksiyon Hastalıkları ve Klinik Mikrobiyoloji'
            ],

            [
                'dep_id'=>36,
                'dep_ad'=>'Fiziksel Tıp ve Rehabilitasyon'
            ],

            [
                'dep_id'=>34,
                'dep_ad'=>'Gastroenteroloji'
            ],

            [
                'dep_id'=>32,
                'dep_ad'=>'Genel Cerrahi'
            ],

            [
                'dep_id'=>30,
                'dep_ad'=>'Göğüs Cerrahisi'
            ],

            [
                'dep_id'=>28,
                'dep_ad'=>'Göğüs Hastalıkları'
            ],

            [
                'dep_id'=>26,
                'dep_ad'=>'Göz Hastalıkları'
            ],

            [
                'dep_id'=>24,
                'dep_ad'=>'İç Hastalıkları (Dahiliye)'
            ],

            [
                'dep_id'=>22,
                'dep_ad'=>'İmmünoloji ve Alerji Hastalıkları'
            ],

            [
                'dep_id'=>20,
                'dep_ad'=>'Kadın Hastalıkları ve Doğum'
            ],

            [
                'dep_id'=>18,
                'dep_ad'=>'Kalp ve Damar Cerrahisi'
            ],

            [
                'dep_id'=>16,
                'dep_ad'=>'Kardiyoloji'
            ],

            [
                'dep_id'=>14,
                'dep_ad'=>'Kulak Burun Boğaz Hastalıkları'
            ],

            [
                'dep_id'=>12,
                'dep_ad'=>'Nöroloji'
            ],

            [
                'dep_id'=>10,
                'dep_ad'=>'Ortopedi ve Travmatoloji'
            ],

            [
                'dep_id'=>8,
                'dep_ad'=>'Plastik, Rekonstrüktif ve Estetik Cerrahi'
            ],

            [
                'dep_id'=>6,
                'dep_ad'=>'Romatoloji'
            ],

            [
                'dep_id'=>4,
                'dep_ad'=>'Ruh Sağlığı ve Hastalıkları (Psikiyatri)'
            ],

            [
                'dep_id'=>2,
                'dep_ad'=>'Sigarayı Bıraktırma Kliniği'
            ],
        ]);
    }
}
