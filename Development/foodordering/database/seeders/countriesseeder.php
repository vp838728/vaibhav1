<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\countrie;
use Faker\Factory as faker;

class countriesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker=Faker::create();
       for($i=0;$i<10;$i++){
        $data=new countrie();
        $data->name=$faker->name;
        $data->save();
       }
    }
}
