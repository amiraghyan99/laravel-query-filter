<?php

namespace Hayem\QueryFilter;

use Illuminate\Database\Eloquent\Builder;

abstract class AbstractQueryFilter
{
    private array $params = [];

    abstract protected function apply(Builder $query): void;

    public static function use(): self
    {
        return new static(func_get_args());
    }

//    private function __construct(array $params)
//    {
//        $this->params = $params;
//    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function getParam(string $key): mixed
    {
        if (!array_key_exists($key, $this->getParams()))
            throw new \Exception("Key '${key}' not found in list [ " . implode(', ', array_keys($this->getParams())) . " ] " . static::class. "::class");

        return $this->getParams()[$key];
    }


    public function handle(Builder $query, $next, ...$args)
    {
        $this->apply($query);

        return $next($query);
    }

}
