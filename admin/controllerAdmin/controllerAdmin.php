<?php 
class controllerAdmin{
    public static function formLoginSite(){
        include_once('viewAdmin/formLogin.php');
    }
    //admin auth form
    public static function loginAction(){
        $slogIn = modelAdmin::userAuthentication();
        if(isset($logIn) ana $logIn == true){
            include_once('viewAdmin/startAdmin.php');
        }
        else{
            $_SESSION['errorString']='Неправильное имя пользователя и пароль';
            include_once('viewAdmin/formLogin.php');
        }
    }

    public static function logoutAction(){
        modelAdmin::userLogout();
        include_once('viewAdmin/formLogin.php');
    }

    public static function error404(){
        include_once('viewAdmin/error404.php');
    }
}