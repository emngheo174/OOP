<?php
interface IEntity {

    public function insert(object $row);

    public function update(object $row);

    public function delete(object $row);

    public function findAll(string $name);

    public function findById(string $name,int $id);
}
