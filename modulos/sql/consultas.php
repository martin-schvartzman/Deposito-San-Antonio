<?php
function check(){return true;}
function conexion(){
$con=mysql_connect("localhost","root");
mysql_select_db("depositosa", $con);
return $con;
}
///////////////////////////////////////////////////////////
function getq($sql){
$con=conexion();
return mysql_query($sql,$con);
}
///////////////////////////////////////////////////////////
function getservicios(){
$sql="select * from servicios";
$query=getq($sql);
$array=array();
$i=0;
while($row=mysql_fetch_array($query)){

$array[$i]=$row;
$i++;

}

return $array;
}
///////////////////////////////////////////////////////////
function getservicio($id){
$sql="select * from servicios where id=".$id;
$query=getq($sql);
return mysql_fetch_array($query);
}
//////////////////////////////////////////////////////////
function getcategorias(){
$sql="select * from categorias";
$query=getq($sql);
$array=array();
$i=0;
while($row=mysql_fetch_array($query)){

$array[$i]=$row;
$i++;

}

return $array;
}
//////////////////////////////////////////////////////////
function getcategoria($id){
$sql="select * from productos where categoria=".$id;
$query=getq($sql);
$array=array();
$i=0;
$kc=getkeycat($id);
while($row=mysql_fetch_array($query)){

$array[$i]=$row;
$array[$i]["keycat"]=$kc;
$i++;

}

return $array;
}
//////////////////////////////////////////////////////////
function getinfocategoria($id){
$sql="select * from categorias where id=".$id;
$query=getq($sql);
return mysql_fetch_array($query);
}
/////////////////////////////////////////////////////////
function getkeycat($id){
$sql="select keywords from categorias where id=".$id;
$query=getq($sql);
$r = mysql_fetch_array($query);
return $r["keywords"];
}
/////////////////////////////////////////////////////////
function getproducto($id){
$sql="select * from productos where id=".$id;
$query=getq($sql);
return mysql_fetch_array($query);
}
/////////////////////////////////////////////////////////
function getproductos($id){
$sql="select * from productos where categoria=".$id;
$query=getq($sql);
$array=array();
$i=0;
while($row=mysql_fetch_array($query)){

$array[$i]=$row;
$i++;

}

return $array;
}
//////////////////////////////////////////////////////////
function notificar($post){
if(check($post)){
$sql="insert into notificaciones  (nombre,email,telefono,asunto,descripcion,usuario,mes,dia,anio) values (
'".$post["nombre"]."',
'".$post["email"]."',
'".$post["telefono"]."',
'".$post["asunto"]."',
'".$post["consulta"]."',
0,
".date("m").",
".date("d").",
".date("Y")."
)";
$query=getq($sql);
}}
///////////////////////////////////////////////////////////
function checkuser($g){
if(!(isset($g["user"])))return false;
$sql="select * from usuarios where nombre='".$g["user"]."' and pass='".$g["pass"]."'";
$query=getq($sql);
$i=0;
while($row=mysql_fetch_array($query)){
$i++;
}
if($i==1)return true;
else return false;

}
//////////////////////////////////////////////////////////
function getnotificacionesl(){
$sql="select * from notificaciones where not usuario=0";
$query=getq($sql);
$array=array();
$i=0;
while($row=mysql_fetch_array($query)){
$array[$i]=$row;
$i++;

}

return $array;
}
//////////////////////////////////////////////////////////
function getnotificacionesn(){
$sql="select * from notificaciones where usuario=0";
$query=getq($sql);
$array=array();
$i=0;
while($row=mysql_fetch_array($query)){
$array[$i]=$row;
$i++;

}

return $array;
}
//////////////////////////////////////////////////////////
function getnotificacion($i){
$sql="select * from notificaciones where id=".$i;
$query=getq($sql);
return mysql_fetch_array($query);
}
/////////////////////////////////////////////////////////
function notifleer($i){
$sql="update notificaciones set usuario=1 where id=".$i;
$query=getq($sql);
}
/////////////////////////////////////////////////////////
function delservicio($i){
$sql="delete from servicios where id=".$i;
$query=getq($sql);
}
/////////////////////////////////////////////////////////
function newservicio($n,$k,$d,$i){
$sql="insert into servicios (nombre,keyword,descripcion,info) values ('".$n."','".$k."','".$d."','".$i."')";
$query=getq($sql);
}
/////////////////////////////////////////////////////////
function editservicio($n,$k,$d,$i,$id){
$sql="update servicios set nombre='".$n."' , keyword='".$k."' , descripcion='".$d."' , info='".$i."' where id=".$id;
$query=getq($sql);
}
/////////////////////////////////////////////////////////
function delcategoria($i){
$sql="delete from categorias where id=".$i;
$query=getq($sql);
$sql="delete from productos where categoria=".$i;
$query=getq($sql);
}
/////////////////////////////////////////////////////////
function newcategoria($n,$k,$d){
$sql="insert into categorias (nombre,keywords,descripcion) values ('".$n."','".$k."','".$d."')";
$query=getq($sql);
}
/////////////////////////////////////////////////////////
function editcategoria($n,$k,$d,$id){
$sql="update categorias set nombre='".$n."' , keywords='".$k."' , descripcion='".$d."'  where id=".$id;
$query=getq($sql);
}
/////////////////////////////////////////////////////////
function delproducto($i){
$sql="delete from productos where id=".$i;
$query=getq($sql);
}
/////////////////////////////////////////////////////////
function newproducto($n,$k,$d,$f,$c){
$sql="insert into productos (nombre,keywords,descripcion,foto,categoria) values ('".$n."','".$k."','".$d."','".$f."','".$c."')";
$query=getq($sql);
}
/////////////////////////////////////////////////////////
function editproducto($n,$k,$d,$f,$id){
$sql="update productos set nombre='".$n."' , keywords='".$k."' , descripcion='".$d."' , foto='".$f."'  where id=".$id;
$query=getq($sql);
}
/////////////////////////////////////////////////////////
function visitar($c,$i,$s){
$sql="insert into visitas (pagina,dia,mes,anio,user,serverinfo) values ('".$c."',".date("d").",".date("m").",".date("y").",'".$i."','".$s."')";
$query=getq($sql);
}
//////////////////////////////////////////////////////////
function visitasdia(){
$sql="select count(distinct user) as total from visitas where dia=".date("d")." and mes=".date("m")." and anio=".date("y");
$query=getq($sql);
$ret = mysql_fetch_array($query);
return $ret["total"];
}
//////////////////////////////////////////////////////////
function visitasmes(){
$sql="select count(distinct user) as total from visitas where mes=".date("m")." and anio=".date("y");
$query=getq($sql);
$ret = mysql_fetch_array($query);
return $ret["total"];
}
//////////////////////////////////////////////////////////
function visitasanio(){
$sql="select count(distinct user) as total from visitas where anio=".date("y");
$query=getq($sql);
$ret = mysql_fetch_array($query);
return $ret["total"];
}
//////////////////////////////////////////////////////////
function visitastotales(){
$sql="select count(distinct user) as total from visitas";
$query=getq($sql);
$ret = mysql_fetch_array($query);
return $ret["total"];
}


