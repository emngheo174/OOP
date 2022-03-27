<?php
require_once('C:/xampp/htdocs/Baitap/OOP/OOP/entity/Product.php');
class ProductDemo extends Product
{
    public function __construct($id, $name,  $categoryId){
        parent::__construct($id, $name,  $categoryId);
    }
    public function creatProductTest(int $id, string $name, int $categoryId){
        
        $product =  new Product($id, $name, $categoryId);
        return $product;
    }
    public function printProduct($product){
        return  $product;
   }
}
$create = new ProductDemo(1,'nam',2);
print_r($create -> printProduct($create));
?>
