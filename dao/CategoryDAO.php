<<<<<<< HEAD
<?php
    require_once('./../OOP/OOP/entity/Category.php');
    
    
abstract class CategoryDao extends Database{
    protected $database;
    public function __construct()
    {
        $this->database = Database::getInstants();
    }
    public function getTableName(object $row)
    {
        return strtolower(get_class($row)).'Table';
    }

    /**
     * Insert row to categoryTable
     * s
     * @param $row
     * @return array
     */

    public function insert(object $row)
    {
        $this->database->insertTable($this->getTableName($row), $row);
    }
}
=======
<?php
    require_once('./../OOP/OOP/entity/Category.php');
    
    
abstract class CategoryDao extends Database{
    protected $database;
    public function __construct()
    {
        $this->database = Database::getInstants();
    }
    public function getTableName(object $row)
    {
        return strtolower(get_class($row)).'Table';
    }

    /**
     * Insert row to categoryTable
     * @param $row
     * @return array
     */

    public function insert(object $row)
    {
        $this->database->insertTable($this->getTableName($row), $row);
    }
}
>>>>>>> 2888a187c1dde8e38aed964f8c0cfcdb567b2239
