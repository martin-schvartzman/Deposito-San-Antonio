<?php include('../../sql/consultas.php'); ?>
<?php if(isset($_GET["id"])){delservicio($_GET["id"]); ?>
El servicio fue eliminado exitosamente.
<?php } ?>