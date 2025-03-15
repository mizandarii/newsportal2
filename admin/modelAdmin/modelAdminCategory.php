<?php
class modelAdminCategory{
    public static function getCategoryList(){
        $sql = "select * from category order by category.name asc";
        $db = new Database();
        $rows = $db->getAl($sql);
        return $rows;
    }
}
?>