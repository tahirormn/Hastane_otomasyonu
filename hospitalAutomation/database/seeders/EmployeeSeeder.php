<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([

            [
                'name'=>'Ahmet',
                'surname'=>'Güven',
                'tel_num'=>'5524353445',
                'email'=>'ahmetgüven@gmail.com',
                'job_id'=>24,
                'dep_id'=>48
            ],

            [
                'name'=>'Melis',
                'surname'=>'Aksu',
                'tel_num'=>'01233138767',
                'email'=>'melisaksu@gmail.com',
                'job_id'=>23,
                'dep_id'=>46
            ],

            [
                'name'=>'Samet',
                'surname'=>'Aktaş',
                'tel_num'=>'04847466477',
                'email'=>'sametaktas@gmail.com',
                'job_id'=>22,
                'dep_id'=>44
            ],

            [
                'name'=>'Fatma',
                'surname'=>'Güzel',
                'tel_num'=>'02324458907',
                'email'=>'fatmagüzel@gmail.com',
                'job_id'=>21,
                'dep_id'=>42
            ],

            [
                'name'=>'Cem',
                'surname'=>'Durmaz',
                'tel_num'=>'09874764234',
                'email'=>'cemdurmaz@gmail.com',
                'job_id'=>20,
                'dep_id'=>40
            ],

            [
                'name'=>'Cemre',
                'surname'=>'Su',
                'tel_num'=>'03487612134',
                'email'=>'cemresu@gmail.com',
                'job_id'=>19,
                'dep_id'=>38
            ],

            [
                'name'=>'Kadir',
                'surname'=>'Koç',
                'tel_num'=>'09874131340',
                'email'=>'kadirkoc@gmail.com',
                'job_id'=>18,
                'dep_id'=>36
            ],

            [
                'name'=>'Meltem',
                'surname'=>'Ata',
                'tel_num'=>'08964123123',
                'email'=>'meltemata@gmail.com',
                'job_id'=>17,
                'dep_id'=>34
            ],

            [
                'name'=>'Serkan',
                'surname'=>'Tumtumlu',
                'tel_num'=>'045676253453',
                'email'=>'serkantutumlu@gmail.com',
                'job_id'=>16,
                'dep_id'=>32
            ],

            [
                'name'=>'Tuğçe',
                'surname'=>'Yılmaz',
                'tel_num'=>'05435353450',
                'email'=>'tugceyilmaz@gmail.com',
                'job_id'=>15,
                'dep_id'=>30
            ],

            [
                'name'=>'Fatih',
                'surname'=>'Ak',
                'tel_num'=>'04476543213',
                'email'=>'fatihak@gmail.com',
                'job_id'=>14,
                'dep_id'=>28
            ],

            [
                'name'=>'Hasibe',
                'surname'=>'Çelik',
                'tel_num'=>'02343488890',
                'email'=>'hasibecelik@gmail.com',
                'job_id'=>13,
                'dep_id'=>26
            ],

            [
                'name'=>'Mehmet',
                'surname'=>'Tur',
                'tel_num'=>'04555433467',
                'email'=>'mehtertur@gmail.com',
                'job_id'=>12,
                'dep_id'=>24
            ],

            [
                'name'=>'Ayşe',
                'surname'=>'Gül',
                'tel_num'=>'05467658478',
                'email'=>'aysegül@gmail.com',
                'job_id'=>11,
                'dep_id'=>22
            ],

            [
                'name'=>'Hakan',
                'surname'=>'Arslan',
                'tel_num'=>'05674768760',
                'email'=>'hakanarslan@gmail.com',
                'job_id'=>10,
                'dep_id'=>20
            ],

            [
                'name'=>'Sema',
                'surname'=>'Nur',
                'tel_num'=>'05467650989',
                'email'=>'semanur@gmail.com',
                'job_id'=>9,
                'dep_id'=>18
            ],

            [
                'name'=>'Cenk',
                'surname'=>'Tosun',
                'tel_num'=>'05467356750',
                'email'=>'cenktosun@gmail.com',
                'job_id'=>8,
                'dep_id'=>16
            ],

            [
                'name'=>'Buse',
                'surname'=>'Güz',
                'tel_num'=>'05687567460',
                'email'=>'buseguz@gmail.com',
                'job_id'=>7,
                'dep_id'=>14
            ],

            [
                'name'=>'Ferhat',
                'surname'=>'Akar',
                'tel_num'=>'04566345646',
                'email'=>'ferhatakar@gmail.com',
                'job_id'=>6,
                'dep_id'=>12
            ],

            [
                'name'=>'Hatice',
                'surname'=>'Güneş',
                'tel_num'=>'05786463563',
                'email'=>'haticegunes@gmail.com',
                'job_id'=>5,
                'dep_id'=>10
            ],

            [
                'name'=>'Tuğrul',
                'surname'=>'Mert',
                'tel_num'=>'05236345601',
                'email'=>'tugrulmert@gmail.com',
                'job_id'=>4,
                'dep_id'=>8,
            ],

            [
                'name'=>'Sanem',
                'surname'=>'Akseven',
                'tel_num'=>'09876345602',
                'email'=>'sanemakseven@gmail.com',
                'job_id'=>3,
                'dep_id'=>6
            ],

            [
                'name'=>'Ömer',
                'surname'=>'Alparslan',
                'tel_num'=>'08766345630',
                'email'=>'omeralp@gmail.com',
                'job_id'=>2,
                'dep_id'=>4
            ],

            [
                'name'=>'Çisem',
                'surname'=>'Bilge',
                'tel_num'=>'07564634560',
                'email'=>'cisembilge@gmail.com',
                'job_id'=>1,
                'dep_id'=>2
            ]

        ]);

    }
}
