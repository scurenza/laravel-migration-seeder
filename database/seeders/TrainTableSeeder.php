<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new train();
            $train->Agency = $faker->word();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time('H:i');
            $train->departure_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->arrival_time = $faker->time('H:i');
            $train->train_code = $faker->randomNumber(5, true);
            $train->vagons_number = $faker->numberBetween(2, 15);
            $train->in_time = $faker->numberBetween(0, 1);
            $train->cancelled = $faker->numberBetween(0, 1);
            $train->save();
        }
    }
}
