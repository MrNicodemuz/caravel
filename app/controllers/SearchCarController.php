<?php

class SearchCarController extends BaseController {

    public function search($query = '')
    {
        if (empty($query)) {
            $query = Input::get('q', '');
        }

        $cars = Car::ofModel($query)->get();

        return View::make('cars')
            ->with('cars', $cars)
            ->with('query', $query)
            ->with('user', '');
    }

    public function usersCars($userId)
    {
        $cars = Car::ofUserId($userId)->get();

        return View::make('cars')
            ->with('cars', $cars)
            ->with('query', '')
            ->with('user', Auth::user()->username);
    }

}