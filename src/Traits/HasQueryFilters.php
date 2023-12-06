<?php

namespace Hayem\QueryFilter\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pipeline\Pipeline;

trait HasQueryFilters
{
    public function scopeFilters(Builder $builder , array $filters = []): void
    {
        app(Pipeline::class)
            ->send($builder)
            ->through($filters)
            ->thenReturn();
    }

}
