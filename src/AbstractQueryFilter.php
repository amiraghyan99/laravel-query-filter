<?php

namespace Hayem\QueryFilter;

use Illuminate\Database\Eloquent\Builder;

abstract class AbstractQueryFilter
{
    abstract protected function filter(Builder $query): void;

    private function handle(Builder $query, $next)
    {
        $this->filter($query);

        return $next($query);
    }

}
