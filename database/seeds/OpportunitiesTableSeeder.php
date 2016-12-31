<?php

use Illuminate\Database\Seeder;

class OpportunitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('opportunities')->delete();
        
        \DB::table('opportunities')->insert(array (
            0 => 
            array (
                'id' => 32,
                'name' => 'Underwater Mining Inc. - 1000 units',
                'organization' => 61,
                'contact' => 147,
                'amount' => 50000,
                'expected_close_date' => NULL,
                'next_step' => '',
                'assigned_to' => 1,
                'type' => '',
                'lead_id' => 0,
                'lead_source' => 'Campaign',
                'sales_stage' => 'Qualification',
                'probability' => 10,
                'forecast_amount' => 5000,
                'description' => '',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 33,
                'name' => 'B.H. Edwards Inc - 1000 units',
                'organization' => 62,
                'contact' => 17,
                'amount' => 50000,
                'expected_close_date' => NULL,
                'next_step' => '',
                'assigned_to' => 1,
                'type' => 'Existing Business',
                'lead_id' => 0,
                'lead_source' => 'Employee',
                'sales_stage' => 'Proposal/Price Quote',
                'probability' => 70,
                'forecast_amount' => 35000,
                'description' => '',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 34,
                'name' => 'Overhead & Underfoot Ltd. - 1000 units',
                'organization' => 64,
                'contact' => 134,
                'amount' => 10000,
                'expected_close_date' => NULL,
                'next_step' => '',
                'assigned_to' => 1,
                'type' => 'New Business',
                'lead_id' => 0,
                'lead_source' => '',
                'sales_stage' => 'Closed Lost',
                'probability' => 60,
                'forecast_amount' => 6000,
                'description' => '',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 35,
                'name' => '360 Vacations - 1000 units',
                'organization' => 65,
                'contact' => 44,
                'amount' => 50000,
                'expected_close_date' => NULL,
                'next_step' => '',
                'assigned_to' => 2,
                'type' => 'Existing Business',
                'lead_id' => 0,
                'lead_source' => 'Web Site',
                'sales_stage' => 'Perception Analysis',
                'probability' => 10,
                'forecast_amount' => 5000,
                'description' => '',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 36,
                'name' => 'Sea Region Inc - 1000 units',
                'organization' => 42,
                'contact' => 73,
                'amount' => 25000,
                'expected_close_date' => NULL,
                'next_step' => '',
                'assigned_to' => 2,
                'type' => '',
                'lead_id' => 0,
                'lead_source' => 'Word of mouth',
                'sales_stage' => 'Perception Analysis',
                'probability' => 60,
                'forecast_amount' => 15000,
                'description' => '',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 37,
                'name' => 'Chandler Logistics Inc - 1000 units',
                'organization' => 23,
                'contact' => 106,
                'amount' => 75000,
                'expected_close_date' => NULL,
                'next_step' => '',
                'assigned_to' => 6,
                'type' => 'Existing Business',
                'lead_id' => 0,
                'lead_source' => 'Self Generated',
                'sales_stage' => 'Needs Analysis',
                'probability' => 60,
                'forecast_amount' => 45000,
                'description' => '',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 38,
                'name' => 'Super Star Holdings Inc - 1000 units',
                'organization' => 39,
                'contact' => 44,
                'amount' => 10000,
                'expected_close_date' => NULL,
                'next_step' => '',
                'assigned_to' => 3,
                'type' => 'New Business',
                'lead_id' => 0,
                'lead_source' => 'Direct Mail',
                'sales_stage' => 'Negotiation/Review',
                'probability' => 60,
                'forecast_amount' => 6000,
                'description' => '',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 39,
                'name' => 'Tri-State Medical Corp - 1000 units',
                'organization' => 24,
                'contact' => 199,
                'amount' => 25000,
                'expected_close_date' => NULL,
                'next_step' => '',
                'assigned_to' => 4,
                'type' => '',
                'lead_id' => 0,
                'lead_source' => 'Other',
                'sales_stage' => 'Closed Lost',
                'probability' => 60,
                'forecast_amount' => 15000,
                'description' => '',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 40,
                'name' => 'JAB Funds Ltd. - 1000 units',
                'organization' => 49,
                'contact' => 29,
                'amount' => 25000,
                'expected_close_date' => NULL,
                'next_step' => '',
                'assigned_to' => 4,
                'type' => '',
                'lead_id' => 0,
                'lead_source' => 'Direct Mail',
                'sales_stage' => 'Perception Analysis',
                'probability' => 70,
                'forecast_amount' => 17500,
                'description' => '',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 41,
                'name' => 'Aim Capital Inc - 1000 units',
                'organization' => 16,
                'contact' => 97,
                'amount' => 50000,
                'expected_close_date' => NULL,
                'next_step' => '',
                'assigned_to' => 5,
                'type' => 'Existing Business',
                'lead_id' => 0,
                'lead_source' => 'Partner',
                'sales_stage' => 'Value Proposition',
                'probability' => 10,
                'forecast_amount' => 5000,
                'description' => '',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}