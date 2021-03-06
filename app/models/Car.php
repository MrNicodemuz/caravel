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
    
    public function scopeFreeTextSearch($query, $strings)
    {
        foreach (preg_split('/[^a-z0-9\-#]+/i', $strings, -1, PREG_SPLIT_NO_EMPTY) as $string) {
            // Search by year if the input looks like it
            if (preg_match('/^[0-9]{4}$/', $string)) {
                // echo "Year $string\n";
                $query->where('year', '=', $string);
            }
            else {
                // echo "Model '$string'\n";
                $query = $query->where('model', 'LIKE', "%$string%");
            }
        }
        
        return $query;
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
    
    public function scopeOfUserId($query, $id)
    {
        return $query->where('user_id', '=', $id);
    }
    
    // This cannot be called "distinct" because it causes infinite recursion
    public function scopeGetDistinct($query)
    {
        //TODO: Add more fields
        return $query
            ->groupBy('model')
            ->groupBy('year')
            ->groupBy('color');
    }
    
    public function scopeGetDistinctModels($query)
    {
        return $query->groupBy('model');
    }
    
    public function scopeGetDistinctYears($query)
    {
        return $query->groupBy('year');
    }
    
    public function scopeGetDistinctColors($query)
    {
        return $query->groupBy('color');
    }
}

