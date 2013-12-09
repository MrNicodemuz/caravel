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
    
    // Case-insensitive color search
    public function scopeOfColor($query, $color)
    {
        return $query->where('color', 'LIKE', $color);
    }
    
    // This cannot be called "distinct" because it causes infinite recursion
    public function scopeGetDistinct($query)
    {
        //TODO: Add more fields
        return $query->distinct(array('model', 'year', 'color'));
    }
}

