<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
        	DB::table('users')->insert([
        		'name'=>'user_'.$i,
        		'email'=>'user_'.$i.'@abc.xyz',
        		'password'=>bcrypt(123456)
        	]);
        }
    }
}
