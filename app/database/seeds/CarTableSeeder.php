<?php

class CarTableSeeder extends Seeder {

    public function run()
    {
        DB::table('cars')->delete();

        DB::table('cars')->insert(
            array(
                array('model' => 'Mercedes SLR', 'foto_url' => 'http://www.hdwallpapersinn.com/wp-content/uploads/2012/12/Wallpaper-Nissan-GTR-R35.jpg', 'year' => '2001', 'color' => 'Black'),
                array('model' => 'Nissan Sunny', 'foto_url' => 'http://www.hdwallpapersplus.com/wp-content/uploads/2012/10/2013-Nissan-Skyline-Cars-20.jpg', 'year' => '2003', 'color' => 'Red'),
                array('model' => 'Lamborghini', 'foto_url' => 'http://www.centralcontracts.com/news/wp-content/uploads/lamborghinicar.jpg', 'year' => '2013', 'color' => 'Orange'),
            )
        );
    }

}