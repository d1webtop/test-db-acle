<?php

namespace TestDbAcle\Psv;

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
    
    function addTable(\TestDbAcle\Psv\Table\Table $table)
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

    function toArray()
    {
        $out = array();
        foreach ($this->getTableNames() as $table) {
            $out[$table] = $this->getTable($table)->toArray();
        }
        return $out;
    }

    function getTableNames()
    {
        return array_keys($this->tables);
    }
}