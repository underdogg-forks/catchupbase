<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('employees')->delete();

        \DB::table('employees')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'jdoe',
                    'designation' => 'Super Admin',
                    'gender' => 'Male',
                    'mobile' => '8888888888',
                    'mobile2' => '',
                    'email' => 'jdoe@gmail.com',
                    'dept' => 1,
                    'city' => 'Pune',
                    'address' => 'Karve nagar, Pune 411030',
                    'about' => 'About user / biography',
                    'date_birth' => '2016-12-31',
                    'date_hire' => '2016-12-31',
                    'date_left' => '2016-12-31',
                    'salary_cur' => '0.000',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Chris Olliver',
                    'designation' => 'Senior Account Rep',
                    'gender' => 'Male',
                    'mobile' => '6789686876868',
                    'mobile2' => '',
                    'email' => 'chris@email.com',
                    'dept' => 8,
                    'city' => '',
                    'address' => '',
                    'about' => '',
                    'date_birth' => NULL,
                    'date_hire' => NULL,
                    'date_left' => NULL,
                    'salary_cur' => '0.000',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Jim Brennan',
                    'designation' => 'VP Sales',
                    'gender' => 'Male',
                    'mobile' => '678968687686876',
                    'mobile2' => '',
                    'email' => 'jim@email.com',
                    'dept' => 4,
                    'city' => '',
                    'address' => '',
                    'about' => '',
                    'date_birth' => NULL,
                    'date_hire' => NULL,
                    'date_left' => NULL,
                    'salary_cur' => '0.000',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Max Jensen',
                    'designation' => 'First Line Support',
                    'gender' => 'Male',
                    'mobile' => '8997970780800',
                    'mobile2' => '',
                    'email' => 'max@email.com',
                    'dept' => 7,
                    'city' => '',
                    'address' => '',
                    'about' => '',
                    'date_birth' => NULL,
                    'date_hire' => NULL,
                    'date_left' => NULL,
                    'salary_cur' => '0.000',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Sally Bronsen',
                    'designation' => 'Senior Account Rep',
                    'gender' => 'Female',
                    'mobile' => '978686870708979',
                    'mobile2' => '',
                    'email' => 'sally@email.com',
                    'dept' => 4,
                    'city' => '',
                    'address' => '',
                    'about' => '',
                    'date_birth' => NULL,
                    'date_hire' => NULL,
                    'date_left' => NULL,
                    'salary_cur' => '0.000',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Sarah Smith',
                    'designation' => 'Sales Manager West',
                    'gender' => 'Female',
                    'mobile' => '89897979879797',
                    'mobile2' => '',
                    'email' => 'sarah@email.com',
                    'dept' => 4,
                    'city' => '',
                    'address' => '',
                    'about' => '',
                    'date_birth' => NULL,
                    'date_hire' => NULL,
                    'date_left' => NULL,
                    'salary_cur' => '0.000',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Will Westin',
                    'designation' => 'First line support',
                    'gender' => 'Male',
                    'mobile' => '9798070779797',
                    'mobile2' => '',
                    'email' => 'will@email.com',
                    'dept' => 7,
                    'city' => '',
                    'address' => '',
                    'about' => '',
                    'date_birth' => NULL,
                    'date_hire' => NULL,
                    'date_left' => NULL,
                    'salary_cur' => '0.000',
                    'deleted_at' => NULL,
                ),
        ));


    }
}