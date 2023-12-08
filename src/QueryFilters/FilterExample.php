<?php

namespace Hayem\QueryFilter\QueryFilters;

use Hayem\QueryFilter\AbstractQueryFilter;
use Illuminate\Database\Eloquent\Builder;

class FilterExample extends AbstractQueryFilter
{

    protected function apply(Builder $query): void
    {
        $query->where('id', $this->getParam('id'));
    }
}
