<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User;
        $user->username = "caravel";
        $user->email = "caravel@caravel.com";
        $user->password = "caravel";
        $user->password_confirmation = "caravel";
        $user->confirmed = 0;
        $user->save();
    }

}