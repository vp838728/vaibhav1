<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Faker\Factory as faker;
use App\Models\contact;


class contactsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        for($i=1;$i<=10;$i++){
        $data=new contact();
        $data->Name =$faker->Name;
        $data->Email =$faker->Email;
        $data->Message =$faker->text;
        $data->save();
        }
    }
}
