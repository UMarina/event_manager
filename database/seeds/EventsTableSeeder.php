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
        DB::table('events')->insert(
             /*[
                'title' => 'GlobalLogic Kyiv Java Career Day' ,
                'date_start' => '2018-08-10',
                'time_start' => '10:00' 
             ],*/
           /* [
                'title' => 'Webinar "Best practices in the organization of corporate training for IT professionals"' ,
                'date_start' => '2018-08-22',
                'time_start' => '11:00' 
             ],*/
          /*  [
                'title' => 'GTP Indie Cup Summer’18' ,
                'date_start' => '2018-09-08',
                'time_start' => '09:30' 
             ],*/
            [
                'title' => 'Angular and Redux. Ngrx as production solution' ,
                'date_start' => '2018-08-15',
                'time_start' => '10:30' 
             ]);
    }
}
