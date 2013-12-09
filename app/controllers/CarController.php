<?php

class CarController extends BaseController {

    public function getIndex($id)
    {
        $car = Car::find($id);

        if (null === $car) {
            return View::make('404');
        }

        $comments = Comment::where('photoid', '=', $id)->take(10)->get();

        $this->layout->content = View::make('car')->with(array('car' => $car, 'comments' => $comments));

    }
    
    public function getNew()
    {
        return View::make('newcar');
    }
    
    public function postNew()
    {
    }

}