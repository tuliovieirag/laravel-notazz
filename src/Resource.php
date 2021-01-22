<?php

namespace RocheleEdenis\LaravelNotazz\v2;

class Resource
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        $array = [];
        foreach ($this as $key => $value) {
            if ($value === null) {
                continue;
            }
            $array[strtoupper($key)] = $value;
        }
        return $array;
    }
}
