<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'first_name' => 'Leo Philip Jan',
            'middle_name' =>'Eleccion',
            'last_name' => 'Cabanig'
        ]);

        DB::table('students')->insert([
            'first_name' => 'Lea Fe',
            'middle_name' =>'Turtal',
            'last_name' => 'Sienes'
        ]);

        DB::table('students')->insert([
            'first_name' => 'Janin',
            'middle_name' =>'Marimon',
            'last_name' => 'Cabanig'
        ]);
    }
}
