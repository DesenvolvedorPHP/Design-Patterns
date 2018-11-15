<?php

namespace DesignPatterns\Db;

class DbTest extends \PHPUnit_Framework_TestCase
{
    public function testTestarSeAClasseEstaInstanciando()
    {
        $db = new Db;

        $this->assertInstanceOf('DesignPatterns\Db\Db', $db);
    }
}
