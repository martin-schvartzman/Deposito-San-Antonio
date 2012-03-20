<?php include('../../sql/consultas.php'); ?>
<?php if(isset($_POST["nombre"])){ newcategoria($_POST["n"],$_POST["k"],$_POST["d"]);?>
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
			La categoria fue ingresada exitosamente.
			</div>
		</div>
	</div>
</center>
</body>
<?php }else{ ?>
<form action="http://admin.depositosanantonio.com.ar/modulos/admin/abm/newcat.php" method="post">
<table>
<tr>
	<td>Nombre:</td>
	<td><input type="text" name="n" /></td>
</tr>
<tr>
	<td>Keywords:</td>
	<td><input type="text" name="k" /></td>
</tr>
</table>
Descripcion:<br/>
<textarea rows="5" cols="50" name="d"></textarea><br/>
<input type="submit" name="nombre"/>
</form>
<?php } ?>