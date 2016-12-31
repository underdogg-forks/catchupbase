<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ndrost',
                'context_id' => 1,
                'email' => 'drosbeds@xs4all.nl',
                'password' => '$2y$10$fiCP/bn1tt6.zsf/zsHTTe6VhWvpJlFA2EFGZxFsHtURu6zSOOwp2',
                'type' => 'Employee',
                'remember_token' => 'wCqxHFvzFToEXPvPTVsld55DCGy90MP4ddG0BYljElkojr055kwNKHYf4biv',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Chris Olliver',
                'context_id' => 2,
                'email' => 'admin@email.com',
                'password' => 'pass',
                'type' => 'Employee',
                'remember_token' => 'token',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Jim Brennan',
                'context_id' => 3,
                'email' => 'chris@email.com',
                'password' => 'pass',
                'type' => 'Employee',
                'remember_token' => 'token',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Max Jensen',
                'context_id' => 4,
                'email' => 'jim@email.com',
                'password' => 'pass',
                'type' => 'Employee',
                'remember_token' => 'token',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Sally Bronsen',
                'context_id' => 5,
                'email' => 'max@email.com',
                'password' => 'pass',
                'type' => 'Employee',
                'remember_token' => 'token',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Sarah Smith',
                'context_id' => 6,
                'email' => 'sally@email.com',
                'password' => 'pass',
                'type' => 'Employee',
                'remember_token' => 'token',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Will Westin',
                'context_id' => 7,
                'email' => 'sarah@email.com',
                'password' => 'pass',
                'type' => 'Employee',
                'remember_token' => 'token',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'will',
                'context_id' => 8,
                'email' => 'will@email.com',
                'password' => 'pass',
                'type' => 'Employee',
                'remember_token' => 'token',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}