<?php
interface IEntity {
    /**
     * Insert row to Table
     * @param object $row
     * @return void
     */
    public function insert(object $row);

    /**
     * Update row to Table
     * @param object $row
     * @return void
     */
    public function update(object $row);

    /**
     * Delete row from Table
     * @param object $row
     * @return void
     */
    public function delete(object $row);

    /**
     * Find all row from Table
     * @param object $row
     * @return void
     */
    public function findAll(string $name);

    public function findById(string $name,int $id);
}
