<?php
require('./entity/bai1.php');
class ProductDemo extends Product 
{
    public function __construct(int $id, string $name, int $categoryId){
        parent::__construct($id, $name,  $categoryId);
    }
    public function creatProductTest(){
        
        //return $product;
    }
    public function printProduct(Product $product){
        echo 'Product Id :<br/>';
        return $product;
    }
}
$product = new Product($id,$name,$categoryId);
?>