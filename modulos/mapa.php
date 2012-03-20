<center>
<div style="text-align:left;width:300px;padding:10px;">
<ul>
<li><a href="/">Empresa</a></li>
<li><a href="/compra/">Compra</a></li>
<li><a href="/servicios/">Servicios</a><br/>
	<ul><li></li>
	<?php
	$s=getservicios();
	foreach($s as $ser){
	echo "<li>&nbsp;&nbsp;&nbsp;";
	echo "<a href='http://depositosanantonio.com.ar/servicio/".$ser["id"]."/".$ser["keyword"].".html' >";
	echo $ser["nombre"];
	echo "</a></li>";
	}
	?>
	</ul>
</li>
<li><a href="/productos/">Productos</a>
	<ul><li></li>
	<?php
	$s=getcategorias();
	foreach($s as $ser){
	echo "<li>&nbsp;&nbsp;&nbsp;";
	echo "<a href='http://depositosanantonio.com.ar/categoria/".$ser["id"]."/".$ser["keywords"].".html' >";
	echo $ser["nombre"];$p=getproductos($ser["id"]);
		echo "<ul>";echo "<li></li>";
			
			foreach($p as $pro){
			echo "<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<a href='http://depositosanantonio.com.ar/".$ser["keywords"]."/producto/".$pro["id"]."/".$pro["keywords"].".html'>";
			echo $pro["nombre"];
			echo "</a></li>";
			}
		echo "</ul>";
	echo "</a></li>";
	}
	?>
	</ul>
</li>
<li><a href="/contacto/"><b>Contacto</b></a></li>
<!--<li><a href="/acero-inoxidable/acero-perfiles-chapas/comprar-metal.html"><b>Acero Inoxidable</b></a></li>
<li><a href="/aluminio-puertas-ventanas-perfiles-rejas/puertas-aluminio.html"><b>Aluminio</b></a></li>
<li><a href="/bateria-electrica/auto-notebook-moto-12V.html"><b>Bateria</b></a></li>
<li><a href="/bronce-placas-perfiles/bronce.html"><b>Bronce</b></a></li>
<li><a href="/chatarra-volquetes-contenedores/compra-chatarra-hierro-acero-cobre-bronce.html"><b>Chatarra</b></a></li>
<li><a href="/cobre-chapas-perfiles-cables/compra-cobre.html"><b>Cobre</b></a></li>
<li><a href="/demolicion-casa-edificio-excavacion.html"><b>Demolicion</b></a></li>
<li><a href="/maquinas-herramientes-usadas-industriales.html"><b>Maquinas</b></a></li>
<li><a href="/metales-ferrosos/cobre-aluminio-bronce-plomo.html"><b>Metales</b></a></li>-->
</ul>
</div>
</center>