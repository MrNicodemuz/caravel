<?php

class CommentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('comments')->delete();

        DB::table('comments')->insert(
            array(
                array('userid' => 1, 'photoid' => 1, 'datetime' => date("Y-m-d H:i:s"), 'content' => 'This car is awesome'),
                array('userid' => 1, 'photoid' => 2, 'datetime' => date("Y-m-d H:i:s"), 'content' => 'This car is horrible'),
                array('userid' => 2, 'photoid' => 1, 'datetime' => date("Y-m-d H:i:s"), 'content' => 'awesome'),
                array('userid' => 2, 'photoid' => 2, 'datetime' => date("Y-m-d H:i:s"), 'content' => 'horrible'),
            )
        );
    }

}