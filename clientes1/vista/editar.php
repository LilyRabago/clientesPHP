<?php
require_once("layouts/header.php");
?>
<h1 class="text-center">EDITAR</h1>
<form action="" method="get">
    <?php
        if(!empty($dato)):
        foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
        <input type="text" value="<?php echo $v['nombre'] ?>" name="nombre"> <br>
        <input type="text" value="<?php echo $v['rfc'] ?>" name="rfc"> <br>
        <input type="text" value="<?php echo $v['domicilio'] ?>" name="domicilio"> <br>
        <input type="hidden" value="<?php echo $v['id'] ?>" name="id"> <br>
        <input type="submit" class="btn" name="btn" value="ACTUALIZAR"> <br>
        <input type="hidden" name="m" value="actualizar">
        <?php
        endforeach;
    endforeach;
    ?>
</form>

<?php
require_once("layouts/footer.php");