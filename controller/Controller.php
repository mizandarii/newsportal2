<?php

class Controller{
    public static function StartSite(){
        $arr = News::getLast10News();
        include_once 'view/start.php';
    }

    public static function AllCategory(){
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }

    public static function AllNews(){
        $arr = News::getAllNews();
        include_once 'view/allnews.php';
    }

    public static function NewsByCatID($id) {
        $arr = Mews::getNewsByCategoryID($id);
        include_once 'view/catnews.php';
    }
    public static function NewsByID($id) {
        $arr = Mews::getNewsByID($id);
        include_once 'view/readnews.php';
    }
    public static function error404() {
        include_once 'view/error404.php';
    }

    public static function InsertComment($c, $id)
    Comments::InsertComment($c, $id);
    //self::newsById($id);
    header('Location:news?id='.id.'#ctable');

    //comments list
    public static function Comments($newsid){
        $arr = Comments::getCommentByNewsID($newsid);
        ViewComments::CommentsByNews($arr);
        }

    //comments qnt
    public static function CommentsCount($newsid){
        $arr = Comments::getCommentsCountByNewsID($newsid);
        ViewCommments::CommentsCount($arr);
    }

    //link to comments list
    public static function CommentsCountWithAncor($newsid){
        $arr = Comments::getCommentsCountByNewsID($newsid);
        viewComments::CommentsCountWithAncor($arr);
    }

}