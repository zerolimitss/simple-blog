<?php

class Model
{
    public $db;

    public function __construct(){
        $this->db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if($this->db->connect_errno){
            die("Ошибка подключения к бд: " .
                $this->db->connect_errno. $this->db->connect_error);
        }
        $this->db->query("SET NAMES UTF8");
    }

    public function get_query($sql)
    {
        $res = $this->db->query($sql);
        if($res->num_rows == 0){
            return false;
        }
        return $this->fetch($res);
    }

    private function fetch($res)
    {
        $out=[];
        if(!is_object($res)) throw new Exception("Error 404 ");
        while($row = $res->fetch_assoc()){
            $out[]= $row;
        }
        return $out;
    }

    public function real_esc($str)
    {
        return $this->db->real_escape_string($str);
    }

    public function change($sql)
    {
        $this->db->query($sql);
        return $this->db->affected_rows == 1;
    }
}