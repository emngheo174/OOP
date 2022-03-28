<?php
    require_once('./../interface/IEntity.php');

abstract class Baserow extends IEntity{
    protected $id;
    protected $name;

    public function __construct(int $id, string $name)
    {
       $this->id = $id;
       $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    protected function setId(int $id)
    {
        $this->id = $id;
    }
}
