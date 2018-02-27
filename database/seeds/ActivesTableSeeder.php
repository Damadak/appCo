<?php

use Illuminate\Database\Seeder;
use App\Active;

class ActivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('actives')->delete();

      Active::create([

        'product'=>'pomme',
        'quantity'=>2
      ]);
    }
}
