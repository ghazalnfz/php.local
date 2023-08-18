<?php
class DB{

    public $table;
    public static $prefix;
    public function all()
    {
        return "SELECT * FROM {$this->table}";
    }

    public function find($id, $columns = null)
    {
        $columns = !is_null($columns) ? implode(",",$columns) : "*" ;
        return "SELECT {$columns} FROM {$this->table} WHERE id = {$id}";
    }

    public function update($id)
    {
      //  return "UPDATE"
    }

    public function delete($id)
    {
        return "DELETE FROM {$this->table} WHERE id = {$id}";
    }

    private function sort()
    {
        selef::$prefi;
        static::$prefix;
    }

    public static function export()
    {

    }
}
//
//$connection = new DB();
//$connection->table = "users";
//$connection->find(56,array('id','name'));

DB::export();