<?php include('../sql/consultas.php'); ?>
<style>
#not div{padding:5px;border:2px solid black;text-align:left;}
</style>
<div onclick="$('#cont').load('/modulos/admin/noleidas.php');"
style="width:100px;padding:3px;border:2px solid black;">
Ver no leidas
</div>
<br/>
<div style="overflow:auto;height:400px;" id="not">
<?php
$not=getnotificacionesl();
foreach($not as $n){
echo "<div>";
echo "".$n["dia"]."-";
echo "".$n["mes"]."-";
echo "".$n["anio"]."<br/>";
echo "<u>".$n["nombre"]."</u><br/>";
echo "<b>".$n["asunto"]."</b><br/>";
echo "<b>".$n["email"]."</b> --- ";
echo "<b>".$n["telefono"]."</b><br/><br/>";
echo "<button ";
?>onclick="$('#cont').load('/modulos/admin/not.php?id=<?php echo $n["id"]; ?>');"<?php
echo " >leer";
echo "</button>";
echo "</div>";
}
?>
</div>