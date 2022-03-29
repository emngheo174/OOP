<?php
require_once('./../dao/ProductDAO.php');
require_once('./../entity/Product.php');

class ProductDaoDemo extends ProductDao
{
    /**
     * Test insert row to product table
     * 
     * @param $row
     * @return array
     */
    public function insertTest($row)
    {
        $this->insert($row);
    }

    /**
     * Test select row from product table
     * 
     * @param $row
     * @return array
     */
    public function selectTest($row)
    {
        print_r($this->select($row));
    }

    /**
     * Test update row to product table
     * 
     * @param $row
     * @return array
     */
    public function updateTest($row)
    {
        print_r($this->update($row));
    }

    /**
     * Test delete row to product table
     * 
     * @param $row
     * @return array
     */
    public function deleteTest($row)
    {
        print_r($this->delete($row));
    }
}

$database = new ProductDao();

for($i=1; $i<=10 ; $i++)
{
    $product = new Product($i, 'Iphone '.$i, 2);
    $database->insert($product);

}
$product = new Product(1, 'Samsung', 3);
$database->insert($product);

