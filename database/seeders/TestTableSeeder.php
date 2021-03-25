<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=['name'=>'Sujeeb','phone'=>'0404213562','description'=>'This is dummy data.'];
        DB::table('tests')->insert($data);
    }
}
