<?php

use Illuminate\Database\Seeder;

class peopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '岩城',
            'mailaddress' => 'aa@aa.com',
            'age' => 21
        ];
        DB::table('people')->insert($param);
    }
}
