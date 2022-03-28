<?php
require('./../OOP/OOP/dao/Database.php');
require('./../OOP/OOP/entity/Product.php');
require('./OOP/abstract/BaseDao.php');

class ProductDao extends BaseDao
{
    /**
     * Insert row to productTable
     * @param $row
     * @return array
     */
    public function insert($row)
    {
        $this->database->insertTable('productTable', $row);
        print_r($this->database->selectTable('productTable'));
    }
}

$productDao = new ProductDao();
$product = new Product(2, 'Abc', 2);
$productDao->insert($product);

