<style>
.cake-debug {
	display: none;
}
</style><?
#$title_for_layout="Bilan";
App::import('Lib', 'functions'); //imports app/libs/image_manipulation.php

if(!$_GET['date']) {
	$date=date("Y-m-d");
}
Configure::write('debug', 0);
?>
<br/>
<h1>Pertes et profits au <? echo $date;?></h1>
<table style="width: 50%">
	<tr>
		<td><h2>Recettes</h2>
 </td>
	</tr>
<?
/*calcul des recettes*/

$recettes=0;
global $leGrandSolde;
choixcomptes(3200,3299,$date,-1);
$recettes=$recettes+$leGrandSolde;

choixcomptes(7400,7410,$date,-1);

$recettes=$recettes+$leGrandSolde;
$recettessauve=$recettes;

echo "<tr><td colspan=\"2\"><h2>Total recettes</td><td style=\"text-align: right\">" .number_format($recettes, 0, '.', '\'') ."</h2></td></tr>";

?>
<!-- <tr><td><h2>Cumul</h2></td><td><? #echo $cumul;?></td></tr>-->
</table>
<h2>calculer les soldes des comptes actifs</h2>
<table>
<?
/*calcul des soldes*/

$recettes=0;
global $leGrandSolde;
depenses(1000,1500,$date,-1);

$recettes=$recettes+$leGrandSolde;


echo "<tr><td colspan=\"2\"><h2>Total soldes</td><td style=\"text-align: right\">" .number_format($recettes, 0, '.', '\'') ."</h2></td></tr>";
?>
</table>
<table>
<tr><td><h2>Dépenses</h2></td></tr>
<?
/*calcul des depenses*/
$depenses=0;
global $leGrandSolde;

choixcomptes(4200,7000,$date,1);
$depenses=$depenses+$leGrandSolde;
echo "<tr><td colspan=\"2\"><h2>Total dépenses</td><td style=\"text-align: right\">" .number_format($depenses, 0, '.', '\'')  ."</h2></td></tr>";
echo "<tr><td colspan=\"2\"><h1>Résultat</td><td style=\"text-align: right\">" ."-" .number_format(($recettessauve-$depenses), 0, '.', '\'')  ."</h1></td></tr>";
	echo "</table>";

?>
</table>
<hr style=" margin-top: 30px; margin-bottom: 30px;"/>
<h1>Bilan au <? echo $date;?></h1>
...




