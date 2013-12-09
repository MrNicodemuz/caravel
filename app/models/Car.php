<?php

class Car extends Eloquent
{
    protected $table = 'cars';
    
    public function scopeOfModel($query, $model)
    {
        return $query->where('model', 'LIKE', "$model%");
    }
}

