<?php


namespace App\QueryFilters;


class Sort extends Filter
{

    protected function applyFilter($builder)
    {

        $requestArray = explode(',', request('sort'));

        return $builder->orderBy($requestArray[0], $requestArray[1]);
    }
}
