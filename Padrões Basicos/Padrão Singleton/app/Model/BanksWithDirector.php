<?php

namespace App\Model;

use DesignPatterns\Db\Builder\DirectorAbstract;

class Banks extends DirectorAbstract
{
    protected $table = 'banks_activated';
}
