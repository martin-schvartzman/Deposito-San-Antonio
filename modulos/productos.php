<center>
<div style="width:510px;">
<?php  
if(!(isset($_GET["cat"]))){
?>
<br/>
Categorias:
<br/>
<?php

function printcat($r){
 echo "<div style='text-align:left;padding-left:40px;margin-top:10px;'>";
 echo "<a href='http://depositosanantonio.com.ar/categoria/".$r["id"]."/".$r["keywords"].".html'  >";
 echo "<u style='font-size:35px'>".$r["nombre"]."</u>";
 echo "</a>";
 echo "<p>".$r["descripcion"]."</p>";
 echo "</div>";
}


 $x=getcategorias();
 foreach($x as $row){
	printcat($row);
 }
 ///////////////////////////////////////////////////////////////////////////////////////////////////////
 }elseif($_GET["cat"]=="cat"){
 echo "<br/><div style='text-align:left;' >";

function printcat($r){
 
 
 
 //echo "<div style='min-height:180px;text-align:left;padding:5px;width:500px;margin-top:10px;background-image:url(\"/imagenes/opred.png\");'>";
 echo "<p  style='min-height:180px;text-align:left;padding:5px;width:500px;margin-top:10px;background-image:url(\"/imagenes/opred.png\");'>";
 echo "<a href='http://depositosanantonio.com.ar/".$r["keycat"]."/producto/".$r["id"]."/".$r["keywords"].".html'  >";
 echo "<u style='font-size:35px'>";
 echo $r["nombre"]."</u>";
 echo "</a>";
 echo "<br/>";
 echo "<a href='http://depositosanantonio.com.ar/".$r["keycat"]."/producto/".$r["id"]."/".$r["keywords"].".html'  >";
 echo "<img src='".$r["foto"]."' alt='".$r["keywords"]."' style='width:100px;float:left;' />";
 echo $r["descripcion"];
 echo "</a></p>";
 //echo "</div>";
 echo "<br/>";
}


 $x=getcategoria($_GET["id"]);
 foreach($x as $row){
	printcat($row);
 }
 echo "</div><br/>";
 ///////////////////////////////////////////////////////////////////////////////////////////////////////
 }elseif($_GET["cat"]=="pro"){
 $id=$_GET["id"];
 $row=getproducto($id);
 echo "<br/>";
 echo "<div style='text-align:left;padding:20px;margin-top:10px;'>";
 echo "<h2><u>".$row["nombre"]."</u></h2><br/>";
 echo "<p>";
 echo "<img src='".$row["foto"]."'  alt='".$row["keywords"]."' style='float:left;width:200px;' />";
 echo $row["descripcion"]."</p>";
 echo "</div>";
 
 
 }
 ?>
 </div>
 </center>