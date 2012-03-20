<?php  session_start();include('/modulos/sql/consultas.php'); if(checkuser($_POST)){?>
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
	$("#cont").html("Cargando...");
	<?php 
	if(!(isset($_GET["cat"]))){
	?>
	$("#cont").load("/modulos/admin/noleidas.php");
	<?php }else{ ?>
	$("#cont").load("/modulos/admin/<?php echo $_GET["cat"]; ?>.php");
	<?php } ?>
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
	
	$("#visitas").click(function (){
	
		$("#cont").html("Cargando...");
		$("#cont").load("/modulos/admin/visitas.php");
	
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
				<div id="visitas">
				visitas
				</div>
			</div>
			<div id="cont">
			</div>
		</div>
	</div>
</center>
</body>
<?php }else{ ?>
<style>
body{background-image:url('/imagenes/bck.png');}
#main{margin:40px;min-height:400px;width:80%;border:3px solid black;background-color:grey;padding:40px;}
</style>


<body>
<center>
	<div id="main">
		<div>
			<form action="" method="post" >
			<table>
<tr>
	<td>User:</td>
	<td><input type="text" name="user" /></td>
</tr>
<tr>
	<td>Pass:</td>
	<td><input type="password" name="pass" /></td>
</tr>
</table>
<input type="submit" />
			</form>
		</div>
	</div>
</center>
</body>
<?php } ?>
