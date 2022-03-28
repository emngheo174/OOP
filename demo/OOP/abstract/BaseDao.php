<?php
    require_once('./../interface/IDao.php');
    require_once('./../dao/Database.php');
    require_once('./../entity/Product.php');
    require_once('./../entity/Accessotion.php');
    require_once('./../entity/Category.php');

    abstract class BaseDao extends IDao{
        protected $database;
        public function __construct(){
            $this -> database = Database::getInstants();
        }
        public function getTableName(object $row){
            return strlen(get_class($row)).'Table';
        }
    }
