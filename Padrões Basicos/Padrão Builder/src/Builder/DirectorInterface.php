<?php

namespace DesignPatterns\Db\Builder;

interface DirectorInterface 
{
    public function __construct(BuilderInterface $builder = null);
    public function getAllString() :string;
}

