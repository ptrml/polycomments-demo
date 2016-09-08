<?php

namespace App\Interfaces;


interface SearchableInterface
{
    /**
     * Implements search, returns first result
     *
     * @param $query
     * @return string
     */
    public function search($query);
}