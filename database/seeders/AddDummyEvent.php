<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        $data = [
        	['title'=>'Demo Event-1', 'start'=>'2022-11-10', 'end'=>'2022-11-15'],
        	['title'=>'Demo Event-2', 'start'=>'2022-11-18', 'end'=>'2022-11-22'],
        ];
        foreach ($data as $key => $value) {
        	Event::create($value);
        }
    }
}
