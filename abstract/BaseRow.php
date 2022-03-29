<?php
    require_once('./../interface/IEntity.php');

abstract class BaseRow extends IEntity{
    protected $id;
    protected $name;

    public function __construct(int $id, string $name)
    {
       $this->id = $id;
       $this->name = $name;
    }
    /**
     * Get Id by Row
     * 
     * @return void
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Get Name by Row
     * 
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Id for Row
     * 
     * @return void
     */
    protected function setId(int $id)
    {
        $this->id = $id;
    }
    
}
