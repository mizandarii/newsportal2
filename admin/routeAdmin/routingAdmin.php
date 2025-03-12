<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/'. $host)[$num];

if($path == '' OR $path == 'index.php')
{
    //main page
    $response = controllerAdmin::formLoginSite();
}
elseif($path == 'login')
{
    //login
    $response = controllerAdmin::loginAction();
}
elseif($path=='logout')
{
    //lpgout
    $response = controllerAdmin::logoutAction();
}

elseif($path == 'logout'){
    $response=controllerAdminNews::NewsList();

}
else{
    //page does not exist
    $response = controllerAdmin::error404();
}