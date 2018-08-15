<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('tickets')->insert([
            ['id' => 1,
             'category' => 'free', 
             'description' => '
                                Visit the speakers at the start level.',
             'price' => 0 ],
            ['id' => 2,
             'category' => 'standart', 
             'description' => '
                                Description of standart category event',
             'price' => 20 ],
            ['id' => 3,
             'category' => 'premium',
             'description' => '
                                Free attendance at all event sessions.
                                Lunch in buffet style during the break.
                                A set of booklets with information about all the speakers of the event.',
             'price' => 50 ]
        ]);
    }
}
