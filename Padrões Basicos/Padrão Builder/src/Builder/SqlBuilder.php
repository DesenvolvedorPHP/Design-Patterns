<?php

namespace DesignPatterns\Db\Builder;




class SqlBuilder implements BuilderInterface 
{
    
    public  function __construct() 
    {
        $this->query = new Sql;
    }




    public function setTable(string $table)
    {
        
    }
    
    
    public function getSqlAll() :string
    {
        
    }
}
