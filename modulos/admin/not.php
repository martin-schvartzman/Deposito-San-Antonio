<?php include('../sql/consultas.php'); ?>
<div>
<div style="width:100px;border:2px solid black;padding:4px;"
onclick="$('#cont').load('/modulos/admin/leidas.php');"
>
Volver
</div>
<?php if(isset($_GET["id"])){

$id=$_GET["id"];
$not=getnotificacion($id);
notifleer($id);
echo "".$not["dia"]."-";
echo "".$not["mes"]."-";
echo "".$not["anio"]."<br/>";
echo "Asunto: ".$not["asunto"]."<br/><br/>";
echo "Nombre: ".$not["nombre"]."<br/><br/>";
echo "Email: ".$not["email"]."<br/><br/>";
echo "Telefono: ".$not["telefono"]."<br/><br/>";
echo "Descripcion: ".$not["descripcion"]."<br/><br/>";

} ?>

</div>
