<?php


namespace App\QueryFilters;


class Brend extends Filter
{
    protected function applyFilter($builder)
    {
        return $builder->whereHas('brend', function($query) {
            $query->whereIn('id', explode(',', request('brend')));
        });
    }
}
