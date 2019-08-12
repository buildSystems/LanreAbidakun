<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert(array(

        // 	//array('name' => 'BuildSystems', 'email' => 'info@buildsystems.io', 'password' => 'info@buildsystems.io',)

        // ));

        factory(\App\User::class, 1)->create();


    }
}
