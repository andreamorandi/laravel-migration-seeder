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
        for ($i = 0; $i < 50; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->date() . " " . $faker->time();
            $newTrain->arrival_time = $faker->date() . " " . $faker->time();
            $newTrain->train_code = $faker->bothify('??#####');
            $newTrain->carriages_number = $faker->numberBetween(1, 15);
            $newTrain->on_time = $faker->randomElement([true, false]);
            $newTrain->canceled = $faker->randomElement([true, false]);
            $newTrain->save();
        }
    }
}
