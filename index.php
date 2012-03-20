<?php 
$sub="";
$array=explode(".",$_SERVER['HTTP_HOST']);
if(count($array) == 4 ){
$sub=$array[0];
}

if($sub=="www"){
Header( "HTTP/1.1 301 Moved Permanently" ); 
Header( "Location: http://depositosanantonio.com.ar".$_SERVER['REQUEST_URI'] ); 
}else{

if($sub=="admin")
{ include("admin.php");}else{
include('/modulos/sql/consultas.php');
$cat=isset( $_GET["categoria"])?$_GET["categoria"]:"empresa"; 
visitar($cat,$_SERVER['REMOTE_ADDR'],serialize($_SERVER));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<link rel="shortcut icon" href="/imagenes/dsa.png" type="image/x-icon" /> 
		<link rel="stylesheet" type="text/css" href="/css/main.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<title>Deposito San Antonio - <?php echo $cat; ?></title>
		<meta name="description" content="Compra y venta de materiales ferrosos, chatarra, maquinaria usada. Cotizamos su producto y pagamos en el momento." />
		<meta name="keywords" content="Chapas,Metales,Volquetes,Chatarra" />
		<meta name="author" content="Deposito San Antonio" />
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="google-site-verification" content="e3OUR_hCBsZjA8eKKBADAFZR_acsVLu47vxJJRuf9N0" />
		<meta name="alexaVerifyID" content="I6l2QlXp0Wx9Q_YkbBHj0CpDvOs" />
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22698934-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</head>
	<body>
		<center>
			<div id="main">
				<div class="borde"></div>
				<div id="content">
					<div id="banner">
						<div style="float:left;background-image:url('/imagenes/opred.png');">
							<img src="/imagenes/logo dsa.png" style="height:120px;float:left;" alt="Deposito San Antonio"/>
							<h1 style="float:left;color:#ffaa00;font-size:40px;"><b>Deposito<br/> San Antonio</b></h1>
						</div>
						<div id="contacto">
							<b>Contactenos:</b><br />
							<b>15 6056 8948</b><br /><br />
							<b>deposanantonio @gmail.com</b>

						</div>
					</div>
				</div>
				<div class="borde"></div>
			</div>
			<div id="cont">
				<div id="botones">
					<div><a href="/">Empresa</a></div>
					<div><a href="/compra/">Compra</a></div>
					<div><a href="/servicios/">Servicios</a></div>
					<div><a href="/productos/">Productos</a></div>
					<div><a href="/contacto/">Contacto</a></div>
					<div id="relleno"></div>
				</div>
				<div style="min-height:400px;padding-left:5px;padding-right:5px;font-size:18px;color:#ffaa00;">
				<?php 
				if(isset($_GET["dummie"]))
				include('/modulos/dummies/'.$cat.'.php');
				else
				include('/modulos/'.$cat.'.php'); 
				?>
				</div>
				<div id="pie">
				<div><a href="/mapa/" style="font-size:10px;float:left;"><u>Mapa del sitio</u></a>
				<p  style="float:right;">
    <a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-xhtml10"
        alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
  </p></div><br/><br/>
				
				<a href="http://brainstormwebs.com.ar/"><img src="/imagenes/brainstorm.png" alt="Logo de BrainStorm Dise&ntilde; y Desarrollo" style="width:150px;" /></a>
				<br/>
				</div>
				
				
			</div>

		</center>
	</body>
</html>
<?php } 
}?>