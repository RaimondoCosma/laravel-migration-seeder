<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            $new_train = new Train();
            $new_train->agency = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_date = $faker->date();
            $new_train->arrival_date = $faker->date();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->numberBetween(1000, 9999);
            $new_train->cabin_numbers = $faker->numberBetween(1,12);
            $new_train->on_schedule = $faker->numberBetween(0,1);
            $new_train->is_deleted = $faker->numberBetween(0,1);
            $new_train->save();
        }
    }
}