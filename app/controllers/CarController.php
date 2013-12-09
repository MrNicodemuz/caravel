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
            ->select('comments.id', 'users.username', 'users.email', 'comments.content', 'comments.datetime', 'comments.userid')
            ->where('comments.photoid', '=', $id)
            ->get();
        foreach ($temp as $t) {
            $t->delete = false;
            if ($t->userid === Auth::user()->id) {
                $t->delete = true;
            }
        }
        $this->layout->content = View::make('car')->with(array('car' => $car, 'comments' => $temp));

    }
    
    public function getNew()
    {
        return View::make('newcar');
    }
    
    public function postNew()
    {
        
        Car::create(array(
            'model' => Input::get('model'),
            'year' => Input::get('year'),
            'color' => Input::get('color'),
            'user_id' => Auth::user()->id
        ))->save();
        
        return Redirect::to('/');
    }

}