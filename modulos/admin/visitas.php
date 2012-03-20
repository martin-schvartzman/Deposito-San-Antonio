<?php include('../sql/consultas.php'); ?>
<center>
Visitas de este dia:
<?php
echo " ".visitasdia();
echo "<br/><br/>";
?>
Visitas de este mes:
<?php
echo " ".visitasmes();
echo "<br/><br/>";
?>
Visitas de este a&ntilde;o:
<?php
echo " ".visitasanio();
echo "<br/><br/>";
?>
Total de visitas:
<?php
echo " ".visitastotales();
echo "<br/><br/>";
?>
</center>