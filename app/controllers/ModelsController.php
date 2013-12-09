<?php

class ModelsController extends BaseController {

    public function getModels()
    {
        $models = Car::getDistinctModels()->get();

        if (empty($models)) {
            return View::make('404');
        }

        return View::make('models')->with(array('models' => $models));
    }
}