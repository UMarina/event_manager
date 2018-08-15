<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            ['id' => 1, 'title' => 'GlobalLogic Kyiv Java Career Day', 'date_time_start' => '2018-08-10 10:00:00'],
            ['id' => 2, 'title' => 'Webinar "Best practices in the organization of corporate training for IT professionals"', 'date_time_start' => '2018-08-22 11:00:00'],
            ['id' => 3, 'title' => 'GTP Indie Cup Summer’18', 'date_time_start' => '2018-09-08 09:30:00'],
            ['id' => 4, 'title' => 'Angular and Redux. Ngrx as production solution', 'date_time_start' => '2018-08-15 10:30:00'],
            ['id' => 5, 'title' => 'ClickHouse Meetup', 'date_time_start' => '2018-08-18 11:00:00'],
            ['id' => 6, 'title' => 'Gamedev Weekend', 'date_time_start' => '2018-08-19 10:30:00'],
            ['id' => 7, 'title' => 'Backend Meetup#4', 'date_time_start' => '2018-08-21 10:00:00']
        ]);
    }
}
