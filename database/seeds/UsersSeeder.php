<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '田中',
            'email' => 'bb@bb.com',
            'password' => 'bbbbb'
        ];
               
        DB::table('users')->insert($param);
    }
}
