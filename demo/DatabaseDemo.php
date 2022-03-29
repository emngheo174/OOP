<<<<<<< HEAD
<?php
require_once('C:/xampp/htdocs/Baitap/OOP/OOP/entity/Product.php');
require_once('C:/xampp/htdocs/Baitap/OOP/OOP/dao/Database.php');
class DatabaseDemo extends Database{
    public function insertTableTest($name, $row)
    {
        return $this-> insertTable($name, $row);
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
$a = new Database();
$a -> insertTable('s',2);
print_r($a->producTable);
=======
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
>>>>>>> 2888a187c1dde8e38aed964f8c0cfcdb567b2239
