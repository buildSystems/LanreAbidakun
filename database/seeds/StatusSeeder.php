<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('statuses')->insert(array(

        	array("status" => "Active"),

        	array("status" => "Suspended"),

        	array("status" => "deleted")
        ));
    }
}
