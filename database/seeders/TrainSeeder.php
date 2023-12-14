<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $new_train = new Train();

            $new_train->company = $faker->randomElement(['Trenitalia', 'trenord', 'Frecciarossa', 'Frecciargento', 'Italo', 'Frecciabianca']);
            $new_train->train_station_start = $faker->city();
            $new_train->train_station_last = $faker->city();

            $departure = $faker->dateTimeBetween('-1 week', '+1 week');
            do {
                $arrival = $faker->dateTimeBetween('-1 week', '+1 week');
            } while ($arrival < $departure);
            
            $new_train->departure = $departure;
            $new_train->arrival = $arrival;

            $new_train->train_code = $faker->unique()->bothify('???####?????');
            $new_train->wagons_number = $faker->numberBetween(5, 25);
            
            $deleted = $faker->randomElement([false, true]);
            if($deleted == true) {
                $on_time = false;
            } else {
                $on_time = $faker->randomElement([false, true]);
            }
            $new_train->on_time = $on_time;
            $new_train->deleted = $deleted;

            $new_train->save();
        }
    }
}
