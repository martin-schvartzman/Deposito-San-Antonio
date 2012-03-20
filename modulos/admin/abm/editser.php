<?php include('../../sql/consultas.php'); ?>
<?php if(isset($_POST["nombre"])){ editservicio($_POST["n"],$_POST["k"],$_POST["d"],$_POST["i"],$_POST["id"]); ?>
<style>
body{background-image:url('/imagenes/bck.png');}
#main{margin:40px;min-height:400px;width:80%;border:3px solid black;background-color:grey;padding:40px;}
#botones{height:30px;}
#botones div{float:left;border-right:2px solid black;background-color:white;color:black;padding:5px;}
#botones div:hover{background-color:black;color:white;}
#cont{border:2px solid black;min-height:200px;background-color:white;padding:20px;}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>
$(document).ready(function (){

	$("#notificaciones").click(function (){
	
		$("#cont").html("Cargando...");
		$("#cont").load("/modulos/admin/noleidas.php");
	
	});

	$("#servicios").click(function (){
	
		$("#cont").html("Cargando...");
		$("#cont").load("/modulos/admin/servicios.php");
	
	});
	
	$("#categorias").click(function (){
	
		$("#cont").html("Cargando...");
		$("#cont").load("/modulos/admin/categorias.php");
	
	});
	
	$("#productos").click(function (){
	
		$("#cont").html("Cargando...");
		$("#cont").load("/modulos/admin/productos.php");
	
	});
});
</script>
<body>
<center>
	<div id="main">
		<div>
			<div id="botones">
				<div id="notificaciones">
				notificaciones
				</div>
				<div id="servicios">
				servicios
				</div>
				<div id="categorias">
				categorias
				</div>
				<div id="productos">
				productos
				</div>
			</div>
			<div id="cont">
			El servicio fue editado exitosamente.
			</div>
		</div>
	</div>
</center>
</body>
<?php }else{ $s=getservicio($_GET["id"]);?>
<form action="http://admin.depositosanantonio.com.ar/modulos/admin/abm/editser.php" method="post">
<table>
<tr>
	<td>Nombre:</td>
	<td><input type="text" name="n" value="<?php echo $s["nombre"]; ?>" /></td>
</tr>
<tr>
	<td>Keywords:</td>
	<td><input type="text" name="k" value="<?php echo $s["keyword"]; ?>" /></td>
</tr>
</table>
Descripcion:<br/>
<textarea rows="5" cols="50" name="d"><?php echo $s["descripcion"]; ?></textarea><br/>
Info:<br/>
<textarea rows="20" cols="50" name="i"><?php echo $s["info"]; ?></textarea><br/>
<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
<input type="submit" name="nombre"/>
</form>
<?php } ?>