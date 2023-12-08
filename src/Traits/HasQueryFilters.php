<?php

namespace Hayem\QueryFilter\Traits;

use Illuminate\Container\Container;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pipeline\Pipeline;

trait HasQueryFilters
{
    /**
     * @throws BindingResolutionException
     */
    public function scopeFilters(Builder $builder, array $filters = []): void
    {
        Container::getInstance()->make(Pipeline::class)
            ->send($builder)
            ->through($filters)
            ->thenReturn();
    }

}
