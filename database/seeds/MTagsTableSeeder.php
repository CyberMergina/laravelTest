<?php

use Illuminate\Database\Seeder;

class MTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('m_tags')->insert(['m_kinds_id' => 1, 'name' => 'PHP']);
      DB::table('m_tags')->insert(['m_kinds_id' => 2, 'name' => 'JavaScript']);
      DB::table('m_tags')->insert(['m_kinds_id' => 3, 'name' => 'HTML']);
      DB::table('m_tags')->insert(['m_kinds_id' => 4, 'name' => 'CSS']);
      DB::table('m_tags')->insert(['m_kinds_id' => 5, 'name' => 'Ruby']);

    }
}
