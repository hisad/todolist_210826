<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = ['test','game','study'];
        foreach ($contents as $content) {
          DB::table('todos')->insert([
            'content' => $content,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
          ]);
        }
    }
}
