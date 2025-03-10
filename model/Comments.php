<?php
class Comments{
    public static function insertComment($c, $id){
        $query="insert into 'comments' ('id', 'news_id', 'text'. 'date') VALUES (null, '".$id."', '".$c"',
        CURRENT_TIMESTAMP)";
        $db = new Database();
        $q = $db ->execution($query);
        return $q;
    }

    public static function getCommentByNewsID($id) {
        $query = "select * from comments where news_id = ".(string)$id."=ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getCommetnsCountByNewsID($id){
        $query = "select count(id) as 'count' from comments where news_id = ".(string)$id;
        $db = new Database();
        $arr = $db->getOne($query);
        return $c;
    }
}