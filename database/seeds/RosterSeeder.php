<?php

use Illuminate\Database\Seeder;

class RosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('rosters')->insert([
         '氏名' => 'お名前太郎',
         '性別' => '1',
         '住所' => '金沢市',
         '都道府県' => '石川県',
         'グループ名' => 'グループA'
      ]);

      DB::table('rosters')->insert([
         '氏名' => 'お名前花子',
         '性別' => '2',
         '住所' => '高岡市',
         '都道府県' => '富山県',
         'グループ名' => ''
      ]);
    }
}
