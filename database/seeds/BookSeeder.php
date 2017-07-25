<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1; $i<10; $i++)
        {
        	DB::table('books')->insert([
        		'author'=>'user_'.$i,
        		'title'=>'title_'.$i,
        		'user_id'=>1
        	]);
        }
    }
}
