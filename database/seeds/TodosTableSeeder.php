<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->delete();
        $items = array(
            array(
                'name' => 'Pick up Milk',
                'done' => false,    
            ),
            array(
                'name' => 'Walk The Cat',
                'done' => true,
            ),
            array(
                'name' => 'Cook Dinner',
                'done' => false,
            )
        );
        DB::table('todos')->insert($items);
    }
}
