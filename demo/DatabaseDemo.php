<?php
require_once('C:/xampp/htdocs/Baitap/OOP/OOP/entity/Product.php');
require_once('C:/xampp/htdocs/Baitap/OOP/OOP/dao/Database.php');
class DatabaseDemo extends Database{
    public function insertTableTest($name, $row)
    {
        $this -> $name;
    }
    
    /**
     * Test select row from table
     * @return array
     */
    public function selectTableTest($name, $where = null)
    {
        return $this-> selectTable($name, $where);
    }
    /**
     * Test delete
     */
    public function deleteTableTest(string $name, object $row)
    {
        $this->deleteTable($name, $row);
    }

    public function updateTableTest(string $name, object $row)
    {
        $this->updateTable($name, $row);
    }
}
print_r($a->producTable);
