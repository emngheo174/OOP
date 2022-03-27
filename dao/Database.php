<?php
class Database{
    public $producTable = array();
    public $categoryTable = array();
    public $accessotionTable = array();
    protected $instants = null;
    public function insertTable($name,$row){
        if(!empty($name)){

            $this->producTable[] = $row;
        }
    }
    public function selectTable($name,$where = null){
        if(!empty($where)){
            foreach($this->{$name} as $val){
                return $val;
            }
        }
        return $this->{$name};
    }
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
    public function deleteTable($name,$row){
        if(!empty($id))
        {
            foreach ($this->{$name} as $key=>$value)
            {
                if($this->{$name}[$key]->getId() == $row->getId())
                {
                    unset($this->{$name}[$key]);
                }
            }
            return 1;
        }
        return 0;
    }
}    
$a  = new Database();
$a -> insertTable('producTable',"Ass");
$a -> insertTable('producTable',"Ass111");
$a -> insertTable('producTable',"sadas");
?>
