<?php include('../sql/consultas.php'); ?>
<style>
#not div{padding:5px;border:2px solid black;text-align:left;}
</style>
<div onclick="$('#cont').load('/modulos/admin/leidas.php');"
style="width:100px;padding:3px;border:2px solid black;">
Ver leidas
</div>
<br/>
<div style="overflow:auto;height:400px;" id="not">
<?php
$not=getnotificacionesn();
foreach($not as $n){
echo "<div>";
echo "".$n["dia"]."-";
echo "".$n["mes"]."-";
echo "".$n["anio"]."<br/>";
echo "Nombre:<u>".$n["nombre"]."</u><br/>";
echo "Asunto:<b>".$n["asunto"]."</b><br/>";
echo "Email:<b>".$n["email"]."</b> --- ";
echo "Telefono:<b>".$n["telefono"]."</b><br/><br/>";
echo "<button ";
?>onclick="$('#cont').load('/modulos/admin/not.php?id=<?php echo $n["id"]; ?>');"<?php                           
echo " >leer";
echo "</button>";
echo "</div>";
}
?>
</div>