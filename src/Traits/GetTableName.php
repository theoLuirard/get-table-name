<?php

namespace theoLuirard\getTableName\Traits;

/*
|--------------------------------------------------------------------------
|   getTableName
|--------------------------------------------------------------------------
|
| Define trait to get table name statically
| Define a new static function getTableName
|
*/

trait GetTableName
{
    /**
     * Get the table name of the class
     * 
     * @var bool $withConnection Define if the connection name should be included
     * @return String 
     */
    public static function getTableName(bool $withConnection = false) : string
    {
        $model = new static;
        return ($withConnection ? $model->getConnectionName() . '.' : '') . $model->getTable();
    }

    /**
     * Get the key column name 
     * 
     * @var bool $withTable Define if the table name should be included
     * @return String
     */
    public static function keyName(bool $withTable = false) : string
    {
        $model = new static;
        return ($withTable ? $model->getTable() . '.' : '') . $model->getKeyName();
    }
}
