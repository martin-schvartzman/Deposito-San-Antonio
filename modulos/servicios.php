<?php  
if(!(isset($_GET["id"]))){
?>
<br/><p style="text-align:left;padding-left:30px;">Brindamos completos servicios relacionados a la chatarra,
 hierro y acero. Comuníquenos su necesidad que le ofreceremos 
 una respuesta. No dude en 
 <a href ="/contacto-metales-perfiles-chatarra-acero.html" style="color:white;">comunicarse</a>
 por su caso.</p><br/><br/>

 <?php
function printservice($row){
 
 echo "<div style='text-align:left;padding:20px;'>";
 echo "<h2><u>".$row["nombre"]."</u></h2><br/>";
 echo "<p>".$row["descripcion"]."</p>";
 echo "<a href='http://depositosanantonio.com.ar/servicio/".$row["id"]."/".$row["keyword"].".html' ";
 echo "style='font-size:15px;background-image:url(\"/imagenes/opred.png\");'";
 echo " >mas info...</a>";
 echo "</div>";
}

 $x=getservicios();
 foreach($x as $row){
	printservice($row);
 }
 







/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 }elseif(isset($_GET["id"])){ 
 $id=$_GET["id"];
 $row=getservicio($id);
 echo "<br/><br/>";
 echo "<div style='text-align:left;padding:20px;'>";
 echo "<h2><u>".$row["nombre"]."</u></h2><br/>";
 echo "<p>".$row["info"]."</p>";
 echo "</div>";
 }
 ?>