<?php

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('organizations')->delete();
        
        \DB::table('organizations')->insert(array (
            0 => 
            array (
                'id' => 16,
                'name' => 'Aim Capital Inc',
                'email' => 'info@aimcapitalinc.com',
            'phone' => '(285) 224-0062',
                'website' => 'www.infoim.com',
                'assigned_to' => 1,
                'connected_since' => '2016-10-16',
                'address' => '67321 West Siam St.',
                'city' => 'Salt Lake City',
                'description' => '',
                'profile_image' => 0,
                'profile' => 0,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 17,
                'name' => 'DD Furniture Inc',
                'email' => 'info@ddfurnitureinc.com',
            'phone' => '(727) 419-4578',
                'website' => 'www.qasales.org',
                'assigned_to' => 2,
                'connected_since' => '2016-10-16',
                'address' => '345 Sugar Blvd.',
                'city' => 'San Francisco',
                'description' => '',
                'profile_image' => 0,
                'profile' => 0,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 18,
                'name' => 'A.G. Parr PLC',
                'email' => 'info@a.g.parrplc.com',
            'phone' => '(280) 807-5665',
                'website' => 'www.beansim.de',
                'assigned_to' => 2,
                'connected_since' => '2016-10-16',
                'address' => '1715 Scott Dr',
                'city' => 'Persistance',
                'description' => '',
                'profile_image' => 0,
                'profile' => 0,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 19,
                'name' => 'Complete Holding',
                'email' => 'info@completeholding.com',
            'phone' => '(068) 508-6468',
                'website' => 'www.devdev.name',
                'assigned_to' => 2,
                'connected_since' => '2016-10-16',
                'address' => '123 Anywhere Street',
                'city' => 'Kansas City',
                'description' => '',
                'profile_image' => 0,
                'profile' => 0,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 20,
                'name' => 'TJ O\'Rourke Inc',
                'email' => 'info@tjo\'rourkeinc.com',
            'phone' => '(164) 286-5815',
                'website' => 'www.thesupport.us',
                'assigned_to' => 4,
                'connected_since' => '2016-10-16',
                'address' => '48920 San Carlos Ave',
                'city' => 'Persistance',
                'description' => '',
                'profile_image' => 0,
                'profile' => 0,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 21,
                'name' => 'Grow-Fast Inc',
                'email' => 'info@grow-fastinc.com',
            'phone' => '(745) 213-7261',
                'website' => 'www.sectionsection.us',
                'assigned_to' => 3,
                'connected_since' => '2016-10-16',
                'address' => '111 Silicon Valley Road',
                'city' => 'Santa Fe',
                'description' => '',
                'profile_image' => 0,
                'profile' => 0,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 22,
                'name' => 'Mississippi Bank Group',
                'email' => 'info@mississippibankgroup.com',
            'phone' => '(814) 846-4940',
                'website' => 'www.thekid.co.uk',
                'assigned_to' => 7,
                'connected_since' => '2016-10-16',
                'address' => '123 Anywhere Street',
                'city' => 'Sunnyvale',
                'description' => '',
                'profile_image' => 0,
                'profile' => 0,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 23,
                'name' => 'Chandler Logistics Inc',
                'email' => 'info@chandlerlogisticsinc.com',
            'phone' => '(482) 201-6680',
                'website' => 'www.kidqa.org',
                'assigned_to' => 1,
                'connected_since' => '2016-10-16',
                'address' => '111 Silicon Valley Road',
                'city' => 'Los Angeles',
                'description' => '',
                'profile_image' => 0,
                'profile' => 0,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 24,
                'name' => 'Tri-State Medical Corp',
                'email' => 'info@tri-statemedicalcorp.com',
            'phone' => '(788) 884-7922',
                'website' => 'www.kidinfo.edu',
                'assigned_to' => 6,
                'connected_since' => '2016-10-16',
                'address' => '67321 West Siam St.',
                'city' => 'Denver',
                'description' => '',
                'profile_image' => 0,
                'profile' => 0,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 25,
                'name' => 'Union Bank',
                'email' => 'info@unionbank.com',
            'phone' => '(536) 514-4468',
                'website' => 'www.thesugar.tw',
                'assigned_to' => 2,
                'connected_since' => '2016-10-16',
                'address' => '999 Baker Way',
                'city' => 'Santa Monica',
                'description' => '',
                'profile_image' => 0,
                'profile' => 0,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}