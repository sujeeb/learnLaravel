<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class LawyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=['field1'=>'Sujeeb','field2'=>'0404213562','date'=>'2020/01/02','message'=>'This is dummy data.'];
        DB::table('lawyers')->insert($data);
    }
}
