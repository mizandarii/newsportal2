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

elseif($path == 'newsAdmin'){
    $response=controllerAdminNews::NewsList();
}

elseif($path=='newsAdd'){
    $response=controllerAdminNews::NewsList();
}

elseif($path == 'newsAddResult'){
    $response = controllerAdminNews::newsAddResult();
}

elseif($path=='newsEdit' && isset($_GET['id'])){
    $response=controllerAdminNews::newsEditForm($_GET['id']);
}

elseif($path == 'newsEditResult' && isset($_GET['id'])){
    $response=controllerAdminNews::newsEditResult($_GET['id']);
}
else{
    //page does not exist
    $response = controllerAdmin::error404();
}