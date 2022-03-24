<?php
class Product
{
    public $categoryId;

    public function __construct(int $id, string $name, int $categoryId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categoryId = $categoryId;
    }
}
?> 
