<?php include('../../sql/consultas.php'); ?>
<?php if(isset($_GET["id"])){delcategoria($_GET["id"]); ?>
La categoria fue eliminada exitosamente.
<?php } ?>