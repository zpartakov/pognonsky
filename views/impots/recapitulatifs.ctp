<?php
App::import('Lib', 'functions'); //imports app/libs/image_manipulation.php
?>
<style>
td {text-align: right;}
</style>

<div class="impots index">
	<h2>Récapitulatifs</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="chiffre">Annee</th>
			<th class="chiffre">Revenus</th>
			<th class="chiffre">Fortune</th>
			<th class="chiffre">AssuranceVie</th>
			<th class="chiffre">Immobilier</th>
			<th class="chiffre">Résultat</th>
			<th class="chiffre">Mensuel</th>
			<th class="chiffre">Rem</th>
	</tr>
	<?php 
	
$sql="SELECT * FROM impots ORDER BY Annee";
$sql=mysql_query($sql);
$i=0;

while($i<mysql_num_rows($sql)){
echo "<tr>";

echo "<td class=\"chiffre\">" .mysql_result($sql,$i,"Annee") ."</td>";
echo "<td class=\"chiffre\">" .mysql_result($sql,$i,"Revenus") ."</td>";
echo "<td class=\"chiffre\">" .number_format(mysql_result($sql,$i,"Fortune"), 0, '.', '\'') ."</td>";
echo "<td class=\"chiffre\">" .number_format(mysql_result($sql,$i,"AssuranceVie"), 0, '.', '\'') ."</td>";
echo "<td class=\"chiffre\">" .number_format(mysql_result($sql,$i,"Immobilier"), 0, '.', '\'') ."</td>";


if($i>0){

/*$oldactifs=mysql_result($sql,($i-1),"Fortune")+mysql_result($sql,($i-1),"AssuranceVie")+mysql_result($sql,($i-1),"Immobilier");
$newactifs=mysql_result($sql,$i,"Fortune")+mysql_result($sql,$i,"AssuranceVie")+mysql_result($sql,$i,"Immobilier");*/

$oldactifs=mysql_result($sql,($i-1),"Fortune")+mysql_result($sql,($i-1),"AssuranceVie");
$newactifs=mysql_result($sql,$i,"Fortune")+mysql_result($sql,$i,"AssuranceVie");


$solde=$newactifs-$oldactifs;
$soldeM=number_format(intval($solde/12), 0, '.', '\'');;
	$solde=number_format($solde, 0, '.', '\'');
}
//echo "<td class=\"chiffre\">" .$oldactifs ."-" .$newactifs ." = " .$solde ."</td>";
echo "<td class=\"chiffre\">" .$solde ."</td>";
echo "<td class=\"chiffre\">" .$soldeM."</td>";


echo "<td class=\"chiffre\">" .mysql_result($sql,$i,"rem") ."</td>";

	echo "</tr>";
	$i++;
}

?>
	</table>
	
</div>

