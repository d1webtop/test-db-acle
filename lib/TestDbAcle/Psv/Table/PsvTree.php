<?php

namespace TestDbAcle\Psv\Table;

/**
 * @TODO this is currently covered implicitly by PsvParseTest
 */
class PsvTree 
{
    protected $tables;
    function __construct(array $tables = array())
    {
        $this->tables = $tables;
    }
    
    function addTable(Table $table)
    {
        return $this->tables[$table->getName()] = $table;
    }
    
    
    function getTable($name)
    {
        return $this->tables[$name];
    }
    
    function getTables()
    {
        return $this->tables;
    }
}