<h1>Chalet des Ravières - Récapitulatif</h1>
<style>
.soldes {
position: absolute;
top: 120px;
left: 100px;
}
.reste {
position: absolute;
top: 400px;
}
td {
text-align: right;
}
</style>
<?php 
	/*
	 * gestion du chalet des ravieres
	 */
App::import('Lib', 'functions'); //imports app/libs/image_manipulation.php

/*	Static datas
 * Jusquen 2011
 * 6101	Ravières 2	711 (CHF)
 * 10000 euros toit
 * 
 * 
 * Dynamic datas
 * Banque crédit agricole
1300  	fred		  RAV CA cpte courant		8'624 	View	Edit	Delete	
1301  	fred		  RAV CA CSL		120'000 	View	Edit	Delete	
1302  	fred		  RAV CA LIV A		18'360 	View	Edit	Delete

6100  	fred		  Entretien / Travaux Chalet			View	Edit	Delete	
6101  	fred		  Ravières 2		24'970 	View	Edit	Delete	
6102  	fred		  Ravières 2, Architecte, J.-M. Perroulaz		4'494 	View	Edit	Delete	

 * Assurance
 * Budget Ravières2	RADEFF Fréderic		
Indemnité immédiate	Indemnité différée	Total
Bâtiment	100705	141676	242381
Contenu	45639		45639
Frais de démolition		20705	20705
Honoraires d'architecte		12244	12244
Cotisation dommages ouvrage		7346	7346
*/
/* def vars */

/*
 * rav1
 * 
 */
$achat=120000;
$reparations=10000;
$frais_rav1=6000;
$total_ravieres1=$achat+$reparations+$frais_rav1;
/*
 *rav2 
 */

 /*
  * divers
 */
$frais2011=600;
/*
 *  * assurances
 */
$construction=100705;
$construction_later=141676;
$contenu=45639;
$demolition=20705;
$architecte=12244;
$dommages=7346;
$budget_now=$construction+$contenu;
$budget_later=$construction_later+$demolition+$architecte+$dommages;
$budget_total=$budget_now+$budget_later;
/*
 * 
print results
 */
echo "<div class=\"reste\"><h2>Ravières 1</h2>";
echo "<table>";
echo "<tr><td>Achat</td><td>" .$achat ."</td></tr>";
echo "<tr><td>Réparations</td><td>" .$reparations ."</td></tr>";
echo "<tr><td>Frais</td><td>" .$frais_rav1 ."</td></tr>";
echo "<tr><td>Total Ravières 1</td><td style=\"font-weight: bold; font-style: underline;\">" .$total_ravieres1 ."</td></tr>";
echo "</table>";

echo "<h2>Ravières 2</h2>";

 echo "<h3>Indemnités assurance</h3>";
echo "
<table>
<tr><th>Libellé</th><th>Indemnité immédiate</th><th>Indemnité différée</th><th>Total</th></tr>
<tr><td>Bâtiment</td><td>".$construction ."</td><td>" .$construction_later ."</td><td>" .($construction+$construction_later) ."</td></tr>";
echo "
<tr><td>Contenu</td><td>" .$contenu ."</td><td></td><td></td></tr>
<tr><td>Frais de démolition</td><td>&nbsp;</td><td>".$demolition ."</td></tr>
<tr><td>Honoraires d'architecte</td><td>&nbsp;</td><td>".$architecte ."</td></tr>
<tr><td>Cotisation dommages ouvrage</td><td>&nbsp;</td><td>".$dommages ."</td></tr>";
echo "
<tr><td>Totaux TTC</td><td>" .$budget_now ."</td><td>" .$budget_later ."</td><td>" .$budget_total ."</td></tr></table>";



/*
 *
* Dynamic datas
 */
global $solde;
global $depenses;
global $solde_euro;
$depenses=0;

 echo "<h3>Dépenses</h3>";
echo "<table>";
echo "<tr><td>Frais 2011</td><td>" .$frais2011 ."</td></tr>";
echo "<tr><td>Entretien / Travaux Chalet</td><td>";
soldecompte_euro(6100, date('Y-m-d'));
//echo $solde;
//$depenses=$depenses+$solde;
echo "</td></tr>";
echo "<tr><td>Galtier + Frais 2012</td><td>";
soldecompte_euro(6101, date('Y-m-d'));
echo $solde;
//echo "soldeuro: " .$solde_euro;

//$depenses=$depenses+$solde;
echo "</td></tr>";
echo "<tr><td>Architecte</td><td>";
soldecompte_euro(6102, date('Y-m-d'));
echo $solde;
$frais_archi=$solde_euro;
echo "frais archi: " .$frais_archi;
echo "</td></tr>";
echo "</table></div>";

$depenses=$depenses-$frais_archi;
//echo "depenses: " .$depenses;
/*
 * Total
 */
echo "<div class=\"soldes\">";

echo "<h3>Soldes</h3>";
echo "<table>";
echo "<tr><th>Libellé</th><th>Dépenses</th><th>Actuel</th><th>Echéance</th><th>Total</th></tr>";
//$depenses=;

echo "<tr><td>Bâtiment</td><td>0</td><td>".$construction ."</td><td>" .$construction_later ."</td><td>" .($construction+$construction_later) ."</td></tr>";
echo "
<tr><td>Contenu</td><td>" .number_format($depenses, 0, '.', '\'') ."</td><td>".$contenu."</td><td></td><td>".number_format(($contenu-$depenses), 0, '.', '\'')."</td></tr>
<tr><td>Frais de démolition</td><td>&nbsp;</td><td>".$demolition ."</td></td><td></td><td>".$demolition ."</td></tr>
<tr><td>Honoraires d'architecte</td><td>" .$frais_archi ."</td><td>".($architecte-$depenses_architecte) ."</td><td></td><td>" .($architecte-$depenses_architecte-$frais_archi) ."</td></tr>
<tr><td>Cotisation dommages ouvrage</td><td>&nbsp;</td><td>".$dommages ."</td><td>&nbsp;</td><td>".$dommages ."</td></tr>";

//echo "<tr><td>Total Assurance</td><td>" .$budget_now ."</td><td>" .$budget_later ."</td><td>" .$budget_total ."</td></tr>";

echo "</table>";
echo "</div>";


/* loop on search results */
/*$i = 0;
foreach ($comptes as $compte):
$solde="";
soldecompte($compte['Compte']['id'], date("Y-m-d"));
echo $solde;
endforeach;
*/
?>

