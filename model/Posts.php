<?php

class Posts
{
    public $connect;

    public function __construct(){
        $this->connect = new Model();
    }

    public function getAllPosts(){
        $q = "SELECT * FROM posts";
        return $this->connect->get_query($q);
    }

    public function getPost($id){
        $q = "SELECT * FROM posts WHERE id={$id}";
        return $this->connect->get_query($q)[0];
    }

    public function delete($id){
        $q = "DELETE FROM posts WHERE id={$id}";
        return $this->connect->change($q);
    }

    public function update($id, $params){
        $sql = "UPDATE posts ";
        $sql .= "SET title='{$params['title']}',
                     text='{$params['text']}',
                     time_stamp='{$params['time_stamp']}' ";
        if(!empty($params['file']))
            $sql .= ", image='{$params['file']}' ";
        $sql .= " WHERE id=$id";

        return $this->connect->change($sql);
    }

    public function add($params){
        $sql = "INSERT INTO posts (title,text,time_stamp,image)";
        $sql .= "VALUES ('{$params['title']}',
                        '{$params['text']}',
                        '{$params['time_stamp']}',
                        '{$params['file']}'
                        )";
        return $this->connect->change($sql);
    }

    public function deleteImage($id){
        $sql = "UPDATE posts ";
        $sql .= "SET image='' ";
        $sql .= " WHERE id=$id";
        return $this->connect->change($sql);
    }
}