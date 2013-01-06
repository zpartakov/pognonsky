<?
App::import('Lib', 'functions'); //imports app/libs/image_manipulation.php
?>
<div>
<?php
echo $this->Html->image('design/maison.jpg');



?>
<br/>
<div>
<h1>Récapitulatif</h1>
<h2>Actifs</h2>
<table style="width: 20%;">
	<tr>
		<td> CCP</td>
		<td>
		<?	
connectdb();
#echo phpinfo();
soldecompte('1010', date("Y-m-d")); 

//soldeccp(); exit;
/*echo "solde: " .$solde;
$fortune=$fortune+preg_replace("/'/","",$solde);
echo "fortune: " .$fortune;*/
?></td>
	</tr>
	<tr>
		<td> Raiffeisen</td>
		<td><?			
soldecompte('1020', date("Y-m-d")); 
?>
</td>
	</tr>
</table>
</div>
</div>
