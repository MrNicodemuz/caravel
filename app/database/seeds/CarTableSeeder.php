<?php

class CarTableSeeder extends Seeder {

    public function run()
    {
        DB::table('cars')->delete();

        DB::table('cars')->insert(
            array(
                array('model' => 'Mercedes SLR'),
                array('model' => 'Nissan Sunny'),
            )
        );
    }

}