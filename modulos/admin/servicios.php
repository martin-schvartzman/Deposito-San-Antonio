<?php include('../sql/consultas.php'); ?>
<style>
#not div{padding:5px;border:2px solid black;text-align:left;}
</style>
<button onclick="$('#cont').load('/modulos/admin/abm/newser.php');">Nuevo</button>
<div id="not">
<?php
$ser=getservicios();
foreach($ser as $s){
echo "<div>";
echo "<u>".$s["nombre"]."</u><br/>";
echo "<p>".$s["descripcion"]."</p><br/>";
echo "<button onclick=";
echo "$('#cont').load('/modulos/admin/abm/editser.php?id=".$s["id"]."');";
echo ">Editar</button>";
echo "<button onclick=";
echo "$('#cont').load('/modulos/admin/abm/delser.php?id=".$s["id"]."');";
echo " >Eliminar </button>";
echo "</div>";
}
?>
</div>