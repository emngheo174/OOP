<?php
require('C:\xampp\htdocs\Baitap\OOP\OOP\dao\Database.php');
require('C:\xampp\htdocs\Baitap\OOP\OOP\entity\Product.php');
require('C:\xampp\htdocs\Baitap\OOP\OOP\abstract\BaseDao.php');

class ProductDao extends BaseDao
{
    /**
     * Insert row to productTable
     * 
     * @param $row
     * @return array
     */
    public function insert($row)
    {
        $this->database->insertTable('productTable', $row);
        print_r($this->database->selectTable('productTable'));
    }

    /**
     * Select row to Product table
     * 
     * @param $row
     * @return array
     */
    public function select($row)
    {
        return $this->database->selectTable('productTable', $row);
    }

    /**
     * Update row to Product table
     * 
     * @param $row
     * @return array
     */
    public function update($row)
    {
        return $this->database->updateTable('productTable', $row);
    }

    /**
     * Delete row to Product table
     * 
     * @param $row
     * @return void
     */
    public function delete($row)
    {
        return $this->database->deleteTable('productTable', $row);
    }

}
