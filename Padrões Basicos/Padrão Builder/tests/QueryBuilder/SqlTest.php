<?php

namespace DesignPatterns\Db\QueryBuilder;


class SqlTest extends \PHPUnit_Framework_TestCase
{
    public function testSelectQeury()
    {
        $sql = new Sql;
        $query = $sql->table('users')
              ->select()
              ->getQuery();
        
      $this->assertEquals('SELECT * FROM users;', $query);
    }
    
    
    public function testSelectQeuryComColunasEmFormatoTexto()
    {
        $sql = new Sql;
        $query = $sql->table('users')
              ->select('username, password')
              ->getQuery();
        
      $this->assertEquals('SELECT username, password FROM users;', $query);
    }
    
    public function testSelectQueryComColunasEmFormatoArray()
    {
        $sql = new Sql;
        $query = $sql->table('users')
            ->select(['username', 'password'])
            ->getQuery();
        $this->assertEquals('SELECT username, password FROM users;', $query);
    }
    
    
}
