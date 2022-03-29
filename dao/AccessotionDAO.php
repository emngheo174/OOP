<?php
require('./../OOP/OOP/dao/Database.php');
require('./../OOP/OOP/entity/Accessotion.php');
require('./OOP/abstract/BaseDao.php');

class AccessotionDao extends BaseDao
{
    /**
     * Insert row to productTable
     * 
     * @param $row
     * @return array
     */
    public function insert($row)
    {
        $this->database->insertTable('accessotionTable', $row);
        print_r($this->database->selectTable('accessotionTable'));
    }

    /**
     * get Accessotion by Name
     * @param $name
     * @return mixed
     */
    public function findByName( $name)
    {
        return $this->database->getTableByName('accessotionTable', $name);
    }

    /**
     * get Accessotion where
     * @return mixed
     */
    public function search()
    {
        return $this->database->selectTable('accessotionTable');
    }

}
