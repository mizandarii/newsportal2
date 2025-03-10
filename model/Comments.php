<?php
class Comments{
    public static function insertComment($c, $id){
        $query="insert into 'comments' ('id', 'news_id', 'text'. 'date') VALUES (null, '".$id."', '".$c"',
        CURRENT_TIMESTAMP)";
        $db = new Database();
        $q = $db ->execution($query);
        return $q;
    }
}