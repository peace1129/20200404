<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('groups')->insert([
         'グループ名' => 'グループA'
      ]);

      DB::table('groups')->insert([
         'グループ名' => 'グループB'
      ]);

      DB::table('groups')->insert([
         'グループ名' => 'グループC'
      ]);
    }
}
