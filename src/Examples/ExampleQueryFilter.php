<?php

namespace Hayem\QueryFilter\Examples;

use Hayem\QueryFilter\AbstractQueryFilter;
use Illuminate\Database\Eloquent\Builder;

class ExampleQueryFilter extends AbstractQueryFilter
{

    protected function filter(Builder $query): void
    {
        $query->where('id', 10);
    }
}
