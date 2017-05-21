<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MKindsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_kinds')->insert([
          'name' =>'プログラミング'
        ]);
    }
}
