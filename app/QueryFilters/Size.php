<?php


namespace App\QueryFilters;


use Closure;

class Size extends Filter
{
    protected function applyFilter($builder)
    {
        return $builder->whereHas('sizes', function($query) {
            $query->where('id', request('size'));
        });
    }
}
