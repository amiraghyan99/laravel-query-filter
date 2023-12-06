<?php

namespace Hayem\QueryFilter\Examples;

use Hayem\QueryFilter\AbstractQueryFilter;
use Illuminate\Database\Eloquent\Builder;

class ExampleQueryFilter extends AbstractQueryFilter
{

    protected function apply(Builder $query): void
    {
        $query->where('id', $this->getParam('id'));
    }
}
