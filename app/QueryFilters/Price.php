<?php


namespace App\QueryFilters;


class Price extends Filter
{
    protected function applyFilter($builder)
    {

        $between = explode(',' , request('price'));
        $min = min($between);
        $max = max($between);
        return $builder->whereBetween('price', [$min, $max]);
    }
}
