<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                [
                    'name' => '映画',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'name' => 'ドラマ',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'name' => 'アニメ',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'name' => 'MV',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'name' => 'バラエティー',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'name' => 'その他',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
            ]);
    }
}
