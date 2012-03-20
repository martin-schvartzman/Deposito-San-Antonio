<?php if(isset($_POST["send"])){ 
notificar($_POST);
 ?>


<br/><br/>Su consulta fue realizada con exito.<br/> Si ingreso correctamente sus datos recibira una respuesta en breve.<br/><br/>

<?php }else{ ?>
<br/><h2><u>Contactenos</u></h2><br/>
<p style="text-align:left;">Realice su consulta cualquiera sea el material que desee vender , servicio que requiera o pedido de productos que rápidamente recibirá una respuesta.</p><br/>
<p style="text-align:left;">Es conveniente que nos informe sobre la ubicación y cantidad del material para poder realizar una cotización estimada.</p><br/>
<form action="" method="post" style="text-align:left;padding-left:95px;">
<table>
<tr><td>Nombre:</td><td><input type="text" name="nombre" style="width:300px;"/></td></tr>
<tr><td>E-mail:</td><td><input type="text" name="email" style="width:300px;"/></td></tr>
<tr><td>Telefono:</td><td><input type="text" name="telefono" style="width:300px;"/></td></tr>
<tr><td>Asunto:</td><td><input type="text" name="asunto" style="width:300px;" value="<?php echo isset($_POST["asunto"])?$_POST["asunto"]:""; ?>" /></td></tr>
</table>
Consulta:<br/>
<textarea cols="50" rows="10" name="consulta"></textarea><br/><br/>
<input type="submit" name="send" value="Enviar consulta" style="border: 2px outset buttonface;cursor:pointer;" /><br/><br/>

</form>
<?php } ?>