<?php
class Product
{
    public $categoryId;
    public $id;
    public $name;

    public function __construct(int $id, string $name, int $categoryId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categoryId = $categoryId;
    }
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setId(int $id)
    {
        $this->id = $id;
    }
}
?> 
