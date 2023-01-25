<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('booking')->insert(['id' => '1','passenger_id' => '1', 'train_id' => '1', 'cancelled' => '0','confirm' => '0','pending' => '1','created_at'=>NOW(),'updated_at'=>NOW() ]);
        \DB::table('booking')->insert(['id' => '2','passenger_id' => '2', 'train_id' => '1', 'cancelled' => '0','confirm' => '0','pending' => '1','created_at'=>NOW(),'updated_at'=>NOW() ]);
        \DB::table('booking')->insert(['id' => '3','passenger_id' => '3', 'train_id' => '1', 'cancelled' => '0','confirm' => '0','pending' => '1','created_at'=>NOW(),'updated_at'=>NOW() ]);

    }
}
