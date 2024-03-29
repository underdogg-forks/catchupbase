<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contacts')->delete();

        \DB::table('contacts')->insert(array(
            0 =>
                array(
                    'id' => 2,
                    'designation' => '',
                    'first_name' => 'Staci',
                    'last_name' => 'Deanda',
                    'title' => 'VP Operations',
                    'relation_id' => 49,
                    'phone_primary' => '(087) 782-6165',
                    'email' => 'stacideanda@email.com',
                    'lead_source' => 1,
                    'department' => '',
                    'phone_secondary' => '(223) 311-6533',
                    'home_phone' => '(727) 201-9453',
                    'email2' => '',
                    'dob' => NULL,
                    'assistant' => '',
                    'assistant_phone' => '',
                    'assigned_to' => 3,
                    'address' => '48920 San Carlos Ave',
                    'city' => 'San Mateo',
                    'country' => 'USA',
                    'description' => '',
                    'profile_picture' => '[]',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 3,
                    'designation' => '',
                    'first_name' => 'Raymon',
                    'last_name' => 'Garza',
                    'title' => 'Senior Product Manager',
                    'relation_id' => 30,
                    'phone_primary' => '(448) 790-2277',
                    'email' => 'raymongarza@email.com',
                    'lead_source' => 1,
                    'department' => '',
                    'phone_secondary' => '(733) 909-9638',
                    'home_phone' => '(828) 977-1521',
                    'email2' => '',
                    'dob' => NULL,
                    'assistant' => '',
                    'assistant_phone' => '',
                    'assigned_to' => 6,
                    'address' => '48920 San Carlos Ave',
                    'city' => 'Persistance',
                    'country' => 'USA',
                    'description' => '',
                    'profile_picture' => '[]',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 4,
                    'designation' => '',
                    'first_name' => 'Hollie',
                    'last_name' => 'Standridge',
                    'title' => 'IT Developer',
                    'relation_id' => 52,
                    'phone_primary' => '(380) 392-6601',
                    'email' => 'holliestandridge@email.com',
                    'lead_source' => 1,
                    'department' => '',
                    'phone_secondary' => '(306) 571-5977',
                    'home_phone' => '(663) 345-9174',
                    'email2' => '',
                    'dob' => NULL,
                    'assistant' => '',
                    'assistant_phone' => '',
                    'assigned_to' => 2,
                    'address' => '9 IBM Path',
                    'city' => 'Sunnyvale',
                    'country' => 'USA',
                    'description' => '',
                    'profile_picture' => '[]',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 5,
                    'designation' => '',
                    'first_name' => 'Brittany',
                    'last_name' => 'Staub',
                    'title' => 'IT Developer',
                    'relation_id' => 62,
                    'phone_primary' => '(225) 334-3073',
                    'email' => 'brittanystaub@email.com',
                    'lead_source' => 1,
                    'department' => '',
                    'phone_secondary' => '(385) 584-7580',
                    'home_phone' => '(915) 039-0358',
                    'email2' => '',
                    'dob' => NULL,
                    'assistant' => '',
                    'assistant_phone' => '',
                    'assigned_to' => 1,
                    'address' => '321 University Ave.',
                    'city' => 'Persistance',
                    'country' => 'USA',
                    'description' => '',
                    'profile_picture' => '[]',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 6,
                    'designation' => '',
                    'first_name' => 'Jay',
                    'last_name' => 'Wetzel',
                    'title' => 'VP Sales',
                    'relation_id' => 56,
                    'phone_primary' => '(836) 681-0666',
                    'email' => 'jaywetzel@email.com',
                    'lead_source' => 1,
                    'department' => '',
                    'phone_secondary' => '(350) 619-0271',
                    'home_phone' => '(009) 159-9849',
                    'email2' => '',
                    'dob' => NULL,
                    'assistant' => '',
                    'assistant_phone' => '',
                    'assigned_to' => 1,
                    'address' => '999 Baker Way',
                    'city' => 'Persistance',
                    'country' => 'USA',
                    'description' => '',
                    'profile_picture' => '[]',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 7,
                    'designation' => '',
                    'first_name' => 'Darin',
                    'last_name' => 'Fike',
                    'title' => 'Director Operations',
                    'relation_id' => 23,
                    'phone_primary' => '(430) 818-0313',
                    'email' => 'darinfike@email.com',
                    'lead_source' => 1,
                    'department' => '',
                    'phone_secondary' => '(376) 770-2269',
                    'home_phone' => '(521) 861-6384',
                    'email2' => '',
                    'dob' => NULL,
                    'assistant' => '',
                    'assistant_phone' => '',
                    'assigned_to' => 2,
                    'address' => '999 Baker Way',
                    'city' => 'Denver',
                    'country' => 'USA',
                    'description' => '',
                    'profile_picture' => '[]',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 8,
                    'designation' => '',
                    'first_name' => 'Pam',
                    'last_name' => 'Claybrooks',
                    'title' => 'VP Sales',
                    'relation_id' => 21,
                    'phone_primary' => '(942) 607-1050',
                    'email' => 'pamclaybrooks@email.com',
                    'lead_source' => 1,
                    'department' => '',
                    'phone_secondary' => '(258) 014-1967',
                    'home_phone' => '(081) 590-1794',
                    'email2' => '',
                    'dob' => NULL,
                    'assistant' => '',
                    'assistant_phone' => '',
                    'assigned_to' => 5,
                    'address' => '67321 West Siam St.',
                    'city' => 'Santa Fe',
                    'country' => 'USA',
                    'description' => '',
                    'profile_picture' => '[]',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 9,
                    'designation' => '',
                    'first_name' => 'Caroline',
                    'last_name' => 'Friar',
                    'title' => 'Director Operations',
                    'relation_id' => 55,
                    'phone_primary' => '(936) 849-8429',
                    'email' => 'carolinefriar@email.com',
                    'lead_source' => 1,
                    'department' => '',
                    'phone_secondary' => '(899) 577-3010',
                    'home_phone' => '(489) 904-4797',
                    'email2' => '',
                    'dob' => NULL,
                    'assistant' => '',
                    'assistant_phone' => '',
                    'assigned_to' => 2,
                    'address' => '345 Sugar Blvd.',
                    'city' => 'Cupertino',
                    'country' => 'USA',
                    'description' => '',
                    'profile_picture' => '[]',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 10,
                    'designation' => '',
                    'first_name' => 'Jocelyn',
                    'last_name' => 'Sams',
                    'title' => 'VP Operations',
                    'relation_id' => 51,
                    'phone_primary' => '(490) 098-9428',
                    'email' => 'jocelynsams@email.com',
                    'lead_source' => 1,
                    'department' => '',
                    'phone_secondary' => '(583) 610-3193',
                    'home_phone' => '(374) 562-7028',
                    'email2' => '',
                    'dob' => NULL,
                    'assistant' => '',
                    'assistant_phone' => '',
                    'assigned_to' => 5,
                    'address' => '777 West Filmore Ln',
                    'city' => 'San Francisco',
                    'country' => 'USA',
                    'description' => '',
                    'profile_picture' => '[]',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 11,
                    'designation' => '',
                    'first_name' => 'Lelia',
                    'last_name' => 'Dickenson',
                    'title' => 'IT Developer',
                    'relation_id' => 59,
                    'phone_primary' => '(249) 200-2385',
                    'email' => 'leliadickenson@email.com',
                    'lead_source' => 1,
                    'department' => '',
                    'phone_secondary' => '(875) 330-1803',
                    'home_phone' => '(504) 612-4190',
                    'email2' => '',
                    'dob' => NULL,
                    'assistant' => '',
                    'assistant_phone' => '',
                    'assigned_to' => 7,
                    'address' => '999 Baker Way',
                    'city' => 'Denver',
                    'country' => 'USA',
                    'description' => '',
                    'profile_picture' => '[]',
                    'deleted_at' => NULL,
                ),
        ));
    }
}