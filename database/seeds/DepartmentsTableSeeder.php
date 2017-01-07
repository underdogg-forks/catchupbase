<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('departments')->delete();

        \DB::table('departments')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Administration',
                    'tags' => '[]',
                    'color' => '#000',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'General',
                    'tags' => '[]',
                    'color' => '#000',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Support',
                    'tags' => '[]',
                    'color' => '#abc',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Sales',
                    'tags' => '[]',
                    'color' => '#000',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Implementation',
                    'tags' => '[]',
                    'color' => '#000',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Management',
                    'tags' => '[]',
                    'color' => '#000',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'First line Support',
                    'tags' => '[]',
                    'color' => '#000',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'name' => 'Second Line support',
                    'tags' => '[]',
                    'color' => '#000',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 9,
                    'name' => 'Development',
                    'tags' => '[]',
                    'color' => '#000',
                    'deleted_at' => NULL,
                ),
        ));


    }
}