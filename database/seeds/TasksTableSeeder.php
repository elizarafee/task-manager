<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i < 100; $i++) {

            DB::table('tasks')->insert([
                'title' => $faker->name,
                'description' => $faker->text,
                'created_at' => $faker->dateTime('now', null)
            ]);

        }
    }
}
