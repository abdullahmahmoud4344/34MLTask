<?php

namespace App\Utilities;


class FilterBuilder
{
    protected $query;
    protected $filters;
    protected $namespace;

    public function __construct($query, $filters, $namespace)
    {
        $this->query = $query;
        $this->filters = $filters;
        $this->namespace = $namespace;
    }
    /**
     * Applies the given filers by instantiating a class with the given filter name
     * and calls the handle function on the given query.
     */
    public function apply()
    {

        foreach ($this->filters as $name => $value) {
            // converting snake case to pascal case
            $normailizedName = str_replace('_', '', ucwords($name, '_'));;

            $class = $this->namespace . "\\{$normailizedName}";
            if (!class_exists($class)) {
                continue;
            }

            if (strlen($value)) {
                (new $class($this->query))->handle($value);
            } else {
                (new $class($this->query))->handle();
            }
        }
        return $this->query;
    }
}
