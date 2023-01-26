<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('passengers')->insert(['id' => '1','name' => 'Deena', 'email' => 'deena.nplus@gmail.com', 'phone' => '6379129411','age' => '21','address' => '2/123 street','created_at'=>NOW(),'updated_at'=>NOW() ]);
        \DB::table('passengers')->insert(['id' => '2','name' => 'Prasanth', 'email' => 'deenaprasantharuchamy@gmail.com', 'phone' => '9715303701','age' => '20','address' => '2/123 street','created_at'=>NOW(),'updated_at'=>NOW() ]);
        \DB::table('passengers')->insert(['id' => '3','name' => 'test', 'email' => '181ct011@gmail.com', 'phone' => '9988776655','age' => '27','address' => '2/123 street','created_at'=>NOW(),'updated_at'=>NOW() ]);

    }
}
