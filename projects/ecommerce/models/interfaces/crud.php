<?php
   interface Crud {
    public function readAll();
    public function create($object);
    public function update($object);
    public function delete($id);
    public function readById($id);
   }
?>