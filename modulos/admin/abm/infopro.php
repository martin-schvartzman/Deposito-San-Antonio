<?php include('../../sql/consultas.php');?>
<?php
$ser=getproductos($_GET["id"]);
foreach($ser as $s){
echo "<div>";
echo "<u>".$s["nombre"]."</u><br/>";
echo "<p>".$s["descripcion"]."</p><br/>";
echo "<button onclick=";
echo "$('#cont').load('/modulos/admin/abm/editpro.php?id=".$s["id"]."');";
echo ">Editar</button>";
echo "<button onclick=";
echo "$('#cont').load('/modulos/admin/abm/delpro.php?id=".$s["id"]."');";
echo " >Eliminar </button>";
echo "</div>";
}
?>