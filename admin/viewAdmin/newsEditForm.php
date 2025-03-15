<?php ob_start(); ?>

<div class="container" style="min-height:400px;">
    <div class="col-md">
        <h2>News Edit</h2>
        <?php
        if(isset($test)){
        if(isset==true)
        {
?>
        <div class="alert aler-info">
            <strong>Запись изменена.</strong><a href="newsAdmin">Список новостей</a>
            <div>
                <?php}
                else if($test=false)
                {
                    ?>
                    <div class="alert alert-warning">
                        <strong>Ошибка изменения записи!</strong><a href="newsAdmin">Список новостей</a>
                </div>
                <?php
                }
        }
        else{
            ?>
            <form method="POST" action="newsEditResults?id=<?php echo $id; ?>" enctype="multipart/form-data">
    <table class="table table-bordered">
        <tr>
            <td>News title</td>
            <td><input type="text" name="title" class="form-control" required 
                value=<?php echo $detail['title']; ?></td>
        </tr>
        <tr>
            <td>News text</td>
            <td><textarea rows="5" name="text" class="form-control" required><?php echo $detail['text']; ?></textarea></td>
        </tr>
        <tr>
            <td>
                <select name="idCategory" class="form-control">
                    <?php
                    foreach($arr as $row){
                        echo '<option value="' ./$row['id']. '"';
                        if ($row['id']==$detail['category_id']) echo 'selected';
                        echo '>'.$row['name'].'</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>OldPicture</td>
            <td><div>
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($detail['picture']).'"width=150/>';?>
            </div></td>
        </tr>
        <tr>
            <td>Pciture</td>
            <td><div>
                <input type="file" name="picture" style="color:black;">
            </div></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="save">
                    <span class="glyphicon glyphicon-plus"></span>изменить
                </button>
                <a href="newsAdmin" class="btn btn-large btn-success">
                    <i class="glyphicon glyphicon-backward"></i>&nbsp;Назад к списку
                                </a>
            </td>
        </tr>
</form>
<?php
}
?>
</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php"; ?>