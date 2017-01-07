<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('projects')->delete();

        \DB::table('projects')->insert(array(
            0 =>
                array(
                    'id' => 16,
                    'name' => 'Aim Capital Inc',
                    'start_date' => NULL,
                    'target_end_date' => NULL,
                    'actual_end_date' => NULL,
                    'assigned_to' => 6,
                    'status' => 'in progress',
                    'type' => 1,
                    'relation_id' => 53,
                    'target_budget' => 0,
                    'project_url' => '',
                    'priority' => 'normal',
                    'description' => '',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 17,
                    'name' => 'DD Furniture Inc',
                    'start_date' => NULL,
                    'target_end_date' => NULL,
                    'actual_end_date' => NULL,
                    'assigned_to' => 4,
                    'status' => 'in progress',
                    'type' => 1,
                    'relation_id' => 36,
                    'target_budget' => 0,
                    'project_url' => '',
                    'priority' => 'normal',
                    'description' => '',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 18,
                    'name' => 'A.G. Parr PLC',
                    'start_date' => NULL,
                    'target_end_date' => NULL,
                    'actual_end_date' => NULL,
                    'assigned_to' => 6,
                    'status' => 'in progress',
                    'type' => 1,
                    'relation_id' => 57,
                    'target_budget' => 0,
                    'project_url' => '',
                    'priority' => 'normal',
                    'description' => '',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 19,
                    'name' => 'Complete Holding',
                    'start_date' => NULL,
                    'target_end_date' => NULL,
                    'actual_end_date' => NULL,
                    'assigned_to' => 6,
                    'status' => 'in progress',
                    'type' => 1,
                    'relation_id' => 22,
                    'target_budget' => 0,
                    'project_url' => '',
                    'priority' => 'normal',
                    'description' => '',
                    'deleted_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 20,
                    'name' => 'TJ O\'Rourke Inc',
                    'start_date' => NULL,
                    'target_end_date' => NULL,
                    'actual_end_date' => NULL,
                    'assigned_to' => 7,
                    'status' => 'in progress',
                    'type' => 1,
                    'relation_id' => 23,
                    'target_budget' => 0,
                    'project_url' => '',
                    'priority' => 'normal',
                    'description' => '',
                    'deleted_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 21,
                    'name' => 'Grow-Fast Inc',
                    'start_date' => NULL,
                    'target_end_date' => NULL,
                    'actual_end_date' => NULL,
                    'assigned_to' => 4,
                    'status' => 'in progress',
                    'type' => 1,
                    'relation_id' => 53,
                    'target_budget' => 0,
                    'project_url' => '',
                    'priority' => 'normal',
                    'description' => '',
                    'deleted_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 22,
                    'name' => 'Mississippi Bank Group',
                    'start_date' => NULL,
                    'target_end_date' => NULL,
                    'actual_end_date' => NULL,
                    'assigned_to' => 1,
                    'status' => 'in progress',
                    'type' => 1,
                    'relation_id' => 45,
                    'target_budget' => 0,
                    'project_url' => '',
                    'priority' => 'normal',
                    'description' => '',
                    'deleted_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 23,
                    'name' => 'Chandler Logistics Inc',
                    'start_date' => NULL,
                    'target_end_date' => NULL,
                    'actual_end_date' => NULL,
                    'assigned_to' => 6,
                    'status' => 'in progress',
                    'type' => 1,
                    'relation_id' => 20,
                    'target_budget' => 0,
                    'project_url' => '',
                    'priority' => 'normal',
                    'description' => '',
                    'deleted_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 24,
                    'name' => 'Tri-State Medical Corp',
                    'start_date' => NULL,
                    'target_end_date' => NULL,
                    'actual_end_date' => NULL,
                    'assigned_to' => 5,
                    'status' => 'in progress',
                    'type' => 1,
                    'relation_id' => 26,
                    'target_budget' => 0,
                    'project_url' => '',
                    'priority' => 'normal',
                    'description' => '',
                    'deleted_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 25,
                    'name' => 'Union Bank',
                    'start_date' => NULL,
                    'target_end_date' => NULL,
                    'actual_end_date' => NULL,
                    'assigned_to' => 1,
                    'status' => 'in progress',
                    'type' => 1,
                    'relation_id' => 59,
                    'target_budget' => 0,
                    'project_url' => '',
                    'priority' => 'normal',
                    'description' => '',
                    'deleted_at' => NULL,
                ),
        ));


    }
}