<?php

class CarController extends BaseController {

    public function getIndex($id)
    {
        $car = Car::find($id);

        if (null === $car) {
            return View::make('404');
        }

        $temp = DB::table('comments')
            ->join('users', 'comments.userid', '=', 'users.id')
            ->select('users.id', 'users.username', 'users.email', 'comments.content', 'comments.datetime')
            ->where('comments.photoid', '=', $id)
            ->get();

        $this->layout->content = View::make('car')->with(array('car' => $car, 'comments' => $temp));

    }

}