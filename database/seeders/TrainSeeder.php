<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('trains')->insert(['id' => '1','name' => 'CHENNAI EXP', 'train_number' => '#02672', 'available_seats' => '100','status' => '1','created_at'=>NOW(),'updated_at'=>NOW() ]);
        \DB::table('trains')->insert(['id' => '2','name' => 'MAS INTERCITY', 'train_number' => '#02674', 'available_seats' => '100','status' => '1','created_at'=>NOW(),'updated_at'=>NOW() ]);
        \DB::table('trains')->insert(['id' => '3','name' => 'KCVL KRBA EXP', 'train_number' => '#02678', 'available_seats' => '100','status' => '1','created_at'=>NOW(),'updated_at'=>NOW() ]);
        \DB::table('trains')->insert(['id' => '4','name' => 'MAS SF AC EXP', 'train_number' => '#02680', 'available_seats' => '100','status' => '1','created_at'=>NOW(),'updated_at'=>NOW() ]);
        \DB::table('trains')->insert(['id' => '5','name' => 'AHILYANAGARI EX', 'train_number' => '#02624', 'available_seats' => '100','status' => '1','created_at'=>NOW(),'updated_at'=>NOW() ]);
        \DB::table('trains')->insert(['id' => '6','name' => 'RAPTISAGAR EXP', 'train_number' => '#02640', 'available_seats' => '100','status' => '1','created_at'=>NOW(),'updated_at'=>NOW() ]);
        \DB::table('trains')->insert(['id' => '7','name' => 'RAPTISAGAR EXP', 'train_number' => '#02648', 'available_seats' => '100','status' => '1','created_at'=>NOW(),'updated_at'=>NOW() ]);
        \DB::table('trains')->insert(['id' => '8','name' => 'CBE MAS SHATABDI', 'train_number' => '#02620', 'available_seats' => '100','status' => '1','created_at'=>NOW(),'updated_at'=>NOW() ]);
        \DB::table('trains')->insert(['id' => '9','name' => 'CBE MAS EXP', 'train_number' => '#02607', 'available_seats' => '100','status' => '1','created_at'=>NOW(),'updated_at'=>NOW() ]);
      
    }
}
