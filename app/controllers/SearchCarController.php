<?php

class SearchCarController extends BaseController {

    public function search($query = '')
    {
        if (empty($query)) {
            $query = Input::get('q', '');
        }

        $cars = Car::ofModel($query)->get();

        $this->layout->content= View::make('cars')->with('cars', $cars);
    }

}