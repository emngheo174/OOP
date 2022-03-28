<?php
class Database{
    public $producTable = array();
    public $categoryTable = array();
    public $accessotionTable = array();
    protected static $instants = null;

    /**
     * Get database from instant
     * @param $classData
     * @return $instant
     */

    public static function getInstants($className ='Database'){
        if(!empty(self::$instants)){
            return self::$instants = new $className();
        }
        return self::$instants;
    }
    /**
     * Insert row to table
     * @param $name
     * @param $row
     * @return array
     */

    public function insertTable($name,$row){
        if(!empty($name)){

            $this->producTable[] = $row;
        }
    }
    /**
     * Select table with name
     * @param $name
     * @return array
     */

    public function selectTable($name,$where = null){
        if(!empty($where)){
            foreach($this->{$name} as $val){
                return $val;
            }
        }
        return $this->{$name};
    }
    /**
     * Update row to table
     * @param $name
     * @param $row
     * @return array
     */

    public function updateTable($name,$row){
        if(!empty($name))
        {
            foreach ($this->{$name} as $key=>$value)
            {
                if($this->{$name}[$key]->getId() == $row->getId())
                {
                    $this->{$name}[$key] = $row;
                }
            }
            return 1;
        }
        return 0;
    }
    /**
     * Delete row to table
     * @param $name
     * @param $row
     * @return array
     */

    public function deleteTable($name,$row){
        if(!empty($id))
        {
            foreach ($this->{$name} as $key=>$value)
            {
                if($this->{$name}[$key] == $row)
                {
                    unset($this->{$name}[$key]);
                }
            }
            return 1;
        }
        return 0;
    }

    /**
     * Update table by Id
     * @param $id
     * @param $row
     * @return boolen
     */
    public function updateTableById($id, $row)
    {
        if(is_subclass_of($row, 'BaseRow'))
        {
            switch(get_class($row))
            {
                case 'Product' :
                    foreach($this->productTable as $key=>$product)
                    {
                        if($product->getId() == $id)
                        {
                            $this->productTable[$key] = $row;
                        }
                    }
                    break;
                case 'Category' :
                    foreach($this->categoryTable as $key=>$category)
                    {
                        if($category->getId() == $id)
                        {
                            $this->categoryTable[$key] = $row;
                        }
                    }
                    break;
                case 'Accessotion' :
                    foreach($this->accessotionTable as $key=>$accessotion)
                    {
                        if($accessotion->getId() == $id)
                        {
                            $this->accessotionTable[$key] = $row;
                        }
                    }
                    break;
            }
            return 1;
        }
        return 0;
    }

    /**
     * Get table by Name
     * @param $nameTable
     * @param $row
     * @return array
     */
    public function getTableByName($nameTable, $name)
    {
        foreach($this->{$nameTable} as $row)
        {
            if($row->getName() == $name)
            {
                return $row;
            }
        }
        return 0;
    }   
}    
$a  = new Database();
$a -> insertTable('producTable',"A");
$a -> insertTable('producTable',"B");
$a -> insertTable('producTable',"C");
$a -> deleteTable('C',2);
