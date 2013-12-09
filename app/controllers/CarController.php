<?php

class CarController extends BaseController {

    public function getIndex($id)
    {
        $car = Car::find($id);
        
        if (null === $car) {
            return View::make('404');
        }

        $this->layout->content= View::make('car')->with('car', $car)
    }

}