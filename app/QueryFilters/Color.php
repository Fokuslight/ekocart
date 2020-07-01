<?php


namespace App\QueryFilters;


use Closure;

class Color extends Filter
{

    protected function applyFilter($builder)
    {
        return $builder->whereHas('color', function($query) {
            $query->where('id', request('color'));
        });
    }
}
