<?php
class controllAdminNews{
    public static function NewsList(){
        $arr=modelAdminNews::getNewsList();
        include_once 'viewAdmin/newsList.php'
    }
}