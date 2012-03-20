<?php include('../../sql/consultas.php'); ?>
<?php if(isset($_GET["id"])){delproducto($_GET["id"]); ?>
El producto fue eliminado exitosamente.
<?php } ?>