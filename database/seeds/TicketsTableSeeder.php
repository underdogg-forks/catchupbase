<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tickets')->delete();
        
        \DB::table('tickets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Sed repudiandae earum id nam iste.',
                'organization' => 54,
                'contact' => 40,
                'assigned_to' => 7,
                'project' => 36,
                'priority' => 'Normal',
                'status' => 'Open',
                'hours' => 0,
                'description' => 'Laboriosam aliquam magnam qui voluptatibus ut assumenda. Eos nobis fugiat consequatur qui adipisci. Ea a et ipsa quo quo ratione sint aperiam.',
                'solution' => '',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Aut voluptatum maxime harum facilis qui eos voluptatem.',
                'organization' => 33,
                'contact' => 89,
                'assigned_to' => 7,
                'project' => 18,
                'priority' => 'Normal',
                'status' => 'Open',
                'hours' => 0,
                'description' => 'Quidem qui ipsum aut nihil ad quaerat. Ut pariatur omnis autem dolor repellat quas. Sit provident mollitia voluptate.',
                'solution' => '',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Autem quidem amet est earum qui voluptatem cum.',
                'organization' => 65,
                'contact' => 185,
                'assigned_to' => 2,
                'project' => 55,
                'priority' => 'Normal',
                'status' => 'Open',
                'hours' => 0,
                'description' => 'Vel eligendi quo omnis nam eos. Dolorem qui nam sit quis officia sapiente. Esse sed non dolor illum atque nobis mollitia omnis.',
                'solution' => '',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Iste labore praesentium quo ex.',
                'organization' => 60,
                'contact' => 161,
                'assigned_to' => 3,
                'project' => 22,
                'priority' => 'Normal',
                'status' => 'Open',
                'hours' => 0,
                'description' => 'Unde voluptatem ducimus neque qui dolor. Maxime molestias veritatis necessitatibus corporis. Amet ut non et ea facere nihil beatae sed. Iusto ullam eius incidunt quam.',
                'solution' => '',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'In laboriosam ut quisquam unde sunt soluta eum sed.',
                'organization' => 51,
                'contact' => 175,
                'assigned_to' => 7,
                'project' => 39,
                'priority' => 'Normal',
                'status' => 'Open',
                'hours' => 0,
                'description' => 'Unde harum voluptatem non et. Tempore est animi provident ad. Incidunt quod nulla tenetur quidem amet. Velit qui earum corrupti delectus consequatur eius in. Est harum dignissimos maiores aut.',
                'solution' => '',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Impedit est ipsa soluta voluptatem natus perspiciatis repellendus.',
                'organization' => 53,
                'contact' => 101,
                'assigned_to' => 1,
                'project' => 43,
                'priority' => 'Normal',
                'status' => 'Open',
                'hours' => 0,
                'description' => 'Sapiente facere aut voluptatem odio corporis. Molestiae explicabo cumque nisi quasi accusamus quam dignissimos fugiat. Assumenda temporibus sit architecto omnis in doloribus praesentium ad.',
                'solution' => '',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'A libero id quia eveniet.',
                'organization' => 50,
                'contact' => 3,
                'assigned_to' => 5,
                'project' => 62,
                'priority' => 'Normal',
                'status' => 'Open',
                'hours' => 0,
                'description' => 'Ea sequi laborum recusandae ducimus hic. Mollitia delectus corrupti nemo sed excepturi consectetur hic perferendis. Qui est ea earum quidem. Accusamus odit similique itaque voluptatem laudantium porro officia.',
                'solution' => '',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Et vero minus accusantium et sit laborum.',
                'organization' => 50,
                'contact' => 170,
                'assigned_to' => 4,
                'project' => 58,
                'priority' => 'Normal',
                'status' => 'Open',
                'hours' => 0,
                'description' => 'Soluta velit dolorum et tempore molestiae a. Dicta nam neque eum quae sint. Voluptatibus ea ad quam quibusdam sunt excepturi.',
                'solution' => '',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Vel consequuntur omnis voluptatem quam ut numquam voluptas.',
                'organization' => 24,
                'contact' => 140,
                'assigned_to' => 7,
                'project' => 51,
                'priority' => 'Normal',
                'status' => 'Open',
                'hours' => 0,
                'description' => 'Error velit explicabo qui placeat qui dolorem. Iure fugiat non rem aut et expedita. Nostrum cum sint enim repudiandae dolorum voluptatibus. Nobis sunt suscipit deserunt fugit dicta quia. Consequatur quae sed quasi aliquam et fuga.',
                'solution' => '',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Amet ullam omnis a molestiae aliquam.',
                'organization' => 42,
                'contact' => 24,
                'assigned_to' => 4,
                'project' => 65,
                'priority' => 'Normal',
                'status' => 'Open',
                'hours' => 0,
                'description' => 'Porro et nihil numquam in sit aut tempore. Inventore quia ipsum eos voluptate doloribus quidem. Dignissimos eum vel magni facilis placeat sit. Quisquam fugiat dolores consectetur velit sit molestias.',
                'solution' => '',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}