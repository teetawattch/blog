<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class laravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('testuser') -> insert([
            'name' => 'Teetawat',
            'age' => '22',
            'birthday' => '27/04/1999'
        ]);
    }
}
