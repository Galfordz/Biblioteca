<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TablaRollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $rolls = ['administrador','editor','supervisor'];

       foreach($rolls as $key => $value){
           DB::table('roll')->insert([
               'nombre' => $value,
               'created_at' => Carbon::now()->format('Y-m-d H:i:s')
           ]);
       }
    }
}
