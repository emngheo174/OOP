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
}

