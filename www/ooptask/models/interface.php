<?php
interface dbFunctions {
public function select();
public function insert($value);
public function search($word);
public function order($row, $way);
public static function getList();
}
?>