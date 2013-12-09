<?php

class Car extends Eloquent
{
    protected $table = 'cars';
    
    // Not using created_at and updated_at columns
    public $timestamps = false;
    
    // This kind of structure is supported by Laravel as well,
    // but I had some issues with it :(
    public static function create(array $data = array())
    {
        $car = new Car;
        
        foreach ($data as $key => $value) {
            $car->$key = $value;
        }
        
        return $car;
    }
    
    public function scopeOfModel($query, $model)
    {
        return $query->where('model', 'LIKE', "$model%");
    }
    
    // For some reason Car::find(3) was returning other ids than 3 as well!
    public function scopeOfId($query, $id)
    {
        return $query->where('id', '=', $id);
    }
}

