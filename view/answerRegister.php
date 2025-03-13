<?php
ob_start();
if(isset ($result)){
    if($result[0]==true)
    {
        ?>
        <div class="container">
            <div class="alert alert-info">
                <strong>Пользователь добавлен. </strong><a href="admin/">Dashbord</a>
            </div>
        </div>
        <?php
    }

    else if($result[0]==false){
        ?>
        <div class="container">
            <div class="alerl alert-warning">
                <strong>Ошшибка!</strong><?php echo $resilt[1];?><a href="registraionFrom">Форма регистрации</a>

            </div>
        </div>
    <?php
    }
}
?>

<?php $content = ob_get_clean(); ?>
<?php include "view/layout.php";