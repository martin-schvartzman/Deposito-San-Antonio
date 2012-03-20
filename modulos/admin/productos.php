<?php include('../sql/consultas.php'); ?>
<style>
#not div{padding:5px;border:2px solid black;text-align:left;}
#infoproductos div{min-height:120px;padding:5px;}
</style>
<div id="not">
<div>
<select id="categoria">
<?php
$ser=getcategorias();
foreach($ser as $s){
echo "<option value='".$s["id"]."'>";
echo $s["nombre"];
echo "</option>";
}
?>
</select>
<button onclick="var x=$('#categoria').val();$('#infoproductos').load('/modulos/admin/abm/infopro.php?id=' + x);">Ver</button>
<button onclick="var x=$('#categoria').val();$('#cont').load('/modulos/admin/abm/newpro.php?id=' + x);">Nuevo</button>
</div>
<div id="infoproductos">
</div>
</div>