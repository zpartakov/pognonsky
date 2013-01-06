<?
	/* FONCTIONS LIEES AU BILAN 
	 * */
	 
function bilan() {
$array=array(
'2011',
'2012'
);

$size=count($array);
//echo $size; exit;
	for ($ij=0; $ij < $size; $ij++) {
		$annee= $array[$ij];
		
	global $recettes,$leGrandSolde;
	$leGrandSolde=0; $recettes=0;
	//recettes
	$sql="SELECT * FROM bilans 
	WHERE annee LIKE '".$annee."' AND type LIKE 'Recettes' ORDER BY 'lib'";
	;
#	echo "<pre>$sql</pre>";
	$sql=mysql_query($sql);
	if(!$sql) {
		echo "error sql: " .mysql_error();
		exit;
	}
	$i=0;
echo "<h1>Recettes" ."</h1><table>
		  <tr>
			  <th>annee</th>
			  <th>Libellé</th>
			  <th>Montant</th>
		  </tr>
		";

	while($i<mysql_num_rows($sql)){
		echo "<tr><td>";
		echo mysql_result($sql,$i,'annee');
		echo "</td><td>";
		echo "<a href=\"/intranet/accounting/bilans/edit/" .mysql_result($sql,$i,'id') ."\">".mysql_result($sql,$i,'lib')."</a>";
		echo "</td><td style=\"text-align: right\">";
		echo normalisermontant(mysql_result($sql,$i,'montant'));
		$recettes=$recettes+mysql_result($sql,$i,'montant');
#		echo normalisermontant($solde);
		//echo number_format($solde, 0, '.', '\'');
		echo "</td></tr>";
		$i++;
	}
	echo "<tr><td>&nbsp;</td><td>Total</td><td style=\"text-align: right;\">" .number_format($recettes, 0, '.', '\'') ."</td></tr>";
	echo "</table>";
}	


}
	 
	 
/* FONCTIONS LIEES AU JOURNAL 
 * 
 * */	
function extraitcompte($compte,$debut,$fin) {
	$debut="2007-01-01";
	$sumcc=0;$sumcd=0;
	$sql="SELECT SUM(mont) AS cc FROM journals 
	WHERE date < '". $debut ."' 
	AND cc=" .$compte;
	#echo "<pre>$sql</pre>";
	$sql=mysql_query($sql);
	if(!$sql) {
		echo "error sql: " .mysql_error();
		exit;
	}
	$cc=mysql_result($sql,0,'cc');

	#echo "<pre>cc: $cc</pre>";
	$sql="SELECT SUM(mont) AS cd FROM journals 
	WHERE date < '". $debut ."' 
	AND cd=" .$compte;
	#echo "<pre>$sql</pre>";
	$sql=mysql_query($sql);
	if(!$sql) {
		echo "error sql: " .mysql_error();
		exit;
	}
	$cd=mysql_result($sql,0,'cd');
#£	$sumcd=$sumcd+$cd;

	#echo "<pre>cd: $cd</pre>";
$solde=$cc-$cd;	
	#echo "<pre>solde: $solde</pre>";
	$sql="SELECT * FROM journals 
	WHERE date >= '". $debut ."' 
	AND (cc=" .$compte ." OR cd=" .$compte .") 
	ORDER BY date";
#	echo "<pre>$sql</pre>";
	$sql=mysql_query($sql);
	if(!$sql) {
		echo "error sql: " .mysql_error();
		exit;
	}
	$i=0;
echo "<h1>Extrait du compte " .$compte ." du " .$debut . " au " .$fin ."</h1><table>
		  <tr>
			  <th>Date</th>
			  <th>Libellé</th>
			  <th>Crédit</th>
			  <th>Débit</th>
			  <th>Montant</th>
			  <th>Solde (" .$solde .")</th>
		  </tr>
		";

	while($i<mysql_num_rows($sql)){
	if($compte==mysql_result($sql,$i,'cc')) {
		$sumcc=$sumcc+mysql_result($sql,$i,'mont');
	}
	if($compte==mysql_result($sql,$i,'cd')) {
		$sumcd=$sumcd+mysql_result($sql,$i,'mont');
	}
		echo "<tr><td>";
		echo mysql_result($sql,$i,'date');
		echo "</td><td>";
		echo "<a href=\"/intranet/comptes/accounting/journals/edit/" .mysql_result($sql,$i,'id') ."\">".mysql_result($sql,$i,'lib')."</a>";
		echo "</td><td><a href=\"/intranet/comptes/accounting/comptes/view/";
		echo mysql_result($sql,$i,'cc');
		echo "\">";
		echo mysql_result($sql,$i,'cc');
		echo "</a></td><td><a href=\"/intranet/comptes/accounting/comptes/view/";
		echo mysql_result($sql,$i,'cd');
		echo "\">";
				echo mysql_result($sql,$i,'cd');
		
		echo "</a></td><td style=\"text-align: right\">";
		echo normalisermontant(mysql_result($sql,$i,'mont'));
		echo "</td><td style=\"text-align: right\">";
		if($compte==mysql_result($sql,$i,'cc')) {
			$solde=$solde+mysql_result($sql,$i,'mont');
		}else{
			$solde=$solde-mysql_result($sql,$i,'mont');
			}
#		echo normalisermontant($solde);
		echo number_format($solde, 0, '.', '\'');
		echo "</td></tr>";
		$i++;
	}
	echo "<tr><td>&nbsp;</td><td>Total</td><td style=\"text-align: right;\">" .$sumcc ."</td><td style=\"text-align: right\">" .$sumcd ."</td><td>&nbsp;</td><td style=\"text-align: right;\">" .number_format(($sumcc-$sumcd), 0, '.', '\'') ."</td></tr>";
	echo "</table>";
}


function soldeccp() {

}	
	
function soldecompte($compte, $date) {
	$debut="2007-01-01";
	$sumcc=0; $sumcd=0;
	$sql="SELECT SUM(mont) AS cc FROM journals 
	WHERE date <= '". $date ."' 
	AND cc=" .$compte;
	$sql=mysql_query($sql);
	if(!$sql) {
		echo "error sql: " .mysql_error();
		exit;
	}
	$cc=mysql_result($sql,0,'cc');
	$sql="SELECT SUM(mont) AS cd FROM journals 
	WHERE date <= '". $date ."' 
	AND cd=" .$compte;
	#echo "<pre>$sql</pre>";
	$sql=mysql_query($sql);
	if(!$sql) {
		echo "error sql: " .mysql_error();
		exit;
	}
	$cd=mysql_result($sql,0,'cd');
	$solde=$cc-$cd;	
		$lesolde=$solde;
	if($solde!=0){
	//echo number_format($lesolde, 2, '.', '\'');
	$soldeori=$solde;
	$solde=number_format($lesolde, 0, '.', '\'');
	

	
	echo $solde;
	if($compte=="1010") { //ccp current
			$sql="SELECT SUM(Debit) AS cd, SUM(Credit) AS cc  FROM ccp ";
	$sql=mysql_query($sql);
	if(!$sql) {
		echo "error sql: " .mysql_error();
		exit;
	}
	echo "<br/><em>en cours ";
	echo mysql_result($sql,0,'cc')-mysql_result($sql,0,'cd');
	$soldef=($soldeori+(mysql_result($sql,0,'cc') - mysql_result($sql,0,'cd')));
		$soldef=number_format($soldef, 0, '.', '\'');
	
	//echo $soldeori;
	
	echo " </em> <strong>solde: " .$soldef .".-</strong><br />";
	}
}
}

/* solde compte en euros
 *
 */
function soldecompte_euro($compte, $date) {
	global $depenses;
	global $solde_euro;
	$tx_chge=1.2;
	$debut="2007-01-01";
	$sumcc=0; $sumcd=0;
	$sql="SELECT SUM(mont) AS cc FROM journals
	WHERE date <= '". $date ."'
	AND cc=" .$compte;
	$sql=mysql_query($sql);
	if(!$sql) {
		echo "error sql: " .mysql_error();
		exit;
	}
	$cc=mysql_result($sql,0,'cc');
	$sql="SELECT SUM(mont) AS cd FROM journals
	WHERE date <= '". $date ."'
	AND cd=" .$compte;
	#echo "<pre>$sql</pre>";
	$sql=mysql_query($sql);
	if(!$sql) {
		echo "error sql: " .mysql_error();
		exit;
	}
	$cd=mysql_result($sql,0,'cd');
	$solde=$cc-$cd;
	$lesolde=$solde;
	if($solde!=0){
		//echo number_format($lesolde, 2, '.', '\'');
		$soldeori=$solde;
		$solde=$solde/$tx_chge;
		$solde_euro=$solde;
		$depenses=$depenses+$solde;
		$solde=number_format($solde, 0, '.', '\'');
		echo $solde;
		return $solde_euro;
	}
}

/*
 * une fonction pour calculer les bilans et pertes et profits
 * */
function choixcomptes($debut,$fin,$date, $sens) {
	global $leGrandSolde;
	$leGrandSolde=0;
	$sqlc="SELECT * FROM comptes 
	WHERE id >= " .$debut  ."
	AND id <= " .$fin ." ORDER BY id";
	#echo "<br>$sqlc<br>";
	$sqlc=mysql_query($sqlc);
	if(!$sqlc) {
		echo "error sql: " .mysql_error();
		exit;
	}
		$ic=0;
	while($ic<mysql_num_rows($sqlc)){
		#echo mysql_result($sqlc,$ic,'id');
		#echo " - ";
		#echo mysql_result($sqlc,$ic,'lib');
	$compte=mysql_result($sqlc,$ic,'id');
		$debut="2007-01-01";
	$sumcc=0; $sumcd=0;
	$sql="SELECT SUM(mont) AS cc FROM journals 
	WHERE date <= '". $date ."' 
	AND cc=" .$compte;
	$sql=mysql_query($sql);
	if(!$sql) {
		echo "error sql: " .mysql_error();
		exit;
	}
	$cc=mysql_result($sql,0,'cc');
	$sql="SELECT SUM(mont) AS cd FROM journals 
	WHERE date <= '". $date ."' 
	AND cd=" .$compte;
	#echo "<pre>$sql</pre>";
	$sql=mysql_query($sql);
	if(!$sql) {
		echo "error sql: " .mysql_error();
		exit;
	}
	$cd=mysql_result($sql,0,'cd');
	$solde=$cc-$cd;	
		$lesolde=$solde;
	if($solde!=0){
	//echo number_format($lesolde, 2, '.', '\'');
	if($solde<0) {$solde=$solde*(-1);}
	if($lesolde<0) {$lesolde=$lesolde*(-1);}
	$leGrandSolde=$leGrandSolde+$solde;
	$solde=number_format($lesolde, 0, '.', '\'');
	echo "
	<tr>
		<td style=\"width: 50px\"><a href=\"../comptes/view/" 
		.mysql_result($sqlc,$ic,'id') ."\">" 
		.mysql_result($sqlc,$ic,'id') ."</a></td><td>" 
		.mysql_result($sqlc,$ic,'lib') 
		."</td><td style=\"text-align: right\">" .$solde ."</td></tr>";
	}
	$ic++;
	}
	return $leGrandSolde;
}

/*
 * une fonction pour calculer les dépenses sur les comptes actifs
 * */
function depenses($debut,$fin,$date, $sens) {
	global $leGrandSolde;
	$leGrandSolde=0;
	$sqlc="SELECT * FROM comptes 
	WHERE id >= " .$debut  ."
	AND id <= " .$fin ." ORDER BY id";
	#echo "<br>$sqlc<br>";
	$sqlc=mysql_query($sqlc);
	if(!$sqlc) {
		echo "error sql: " .mysql_error();
		exit;
	}
		$ic=0;
	while($ic<mysql_num_rows($sqlc)){
		#echo mysql_result($sqlc,$ic,'id');
		#echo " - ";
		#echo mysql_result($sqlc,$ic,'lib');
	$compte=mysql_result($sqlc,$ic,'id');
		$debut="2007-01-01";
	$sumcc=0; $sumcd=0;
	$sql="SELECT SUM(mont) AS cc FROM journals 
	WHERE date <= '". $date ."' 
	AND cc=" .$compte;
	$sql=mysql_query($sql);
	if(!$sql) {
		echo "error sql: " .mysql_error();
		exit;
	}
	$cc=mysql_result($sql,0,'cc');
	$sql="SELECT SUM(mont) AS cd FROM journals 
	WHERE date <= '". $date ."' 
	AND cd=" .$compte;
	#echo "<pre>$sql</pre>";
	$sql=mysql_query($sql);
	if(!$sql) {
		echo "error sql: " .mysql_error();
		exit;
	}
	$cd=mysql_result($sql,0,'cd');
	$solde=$cd;	
		$lesolde=$solde;
	if($solde!=0){
	//echo number_format($lesolde, 2, '.', '\'');
	if($solde<0) {$solde=$solde*(-1);}
	if($lesolde<0) {$lesolde=$lesolde*(-1);}
	$leGrandSolde=$leGrandSolde+$solde;
	$solde=number_format($lesolde, 0, '.', '\'');
	echo "
	<tr>
		<td style=\"width: 50px\"><a href=\"../comptes/view/" 
		.mysql_result($sqlc,$ic,'id') ."\">" 
		.mysql_result($sqlc,$ic,'id') ."</a></td><td>" 
		.mysql_result($sqlc,$ic,'lib') 
		."</td><td style=\"text-align: right\">" .$cd ."</td></tr>";
		
		/*		."</td><td style=\"text-align: right\">" .$solde ."</td></tr>";
*/
	}
	$ic++;
	}
	return $leGrandSolde;
}
/* FONCTIONS COMMUNES 
 * 
 * */
/* function to extract urls from variables */
function urlise($chaine) { 
	#echo "test urlize: <br>" .$chaine ."<hr>";
	#$chaine=ereg_replace("(http://)(([[:punct:]]|[[:alnum:]]=?)*)","<a href=\"\\0\">\\0</a>",$chaine);
	$chaine = preg_replace("/(https:\/\/)(([[:punct:]]|[[:alnum:]]=?)*)/","<a target=\"_blank\" href=\"\\0\">\\0</a>",$chaine);
	$chaine=preg_replace("/(http:\/\/)(([[:punct:]]|[[:alnum:]]=?)*)/","<a target=\"_blank\" href=\"\\0\">\\0</a>",$chaine);
	//now replace emails
	if(!preg_match("/[a-zA-Z0-9]*\.[a-zA-Z0-9]*@/",$chaine)){
	#$chaine = ereg_replace('[-a-zA-Z0-9!#$%&\'*+/=?^_`{|}~]+@([.]?[a-zA-Z0-9_/-])*','<a href="mailto:\\0">\\0</a>',$chaine);
	#$chaine = preg_replace('/[-a-zA-Z0-9!#$%&\'*+/=?^_`{|}~]+@([.]?[a-zA-Z0-9_\/-])*/','<a href="mailto:\\0">\\0</a>',$chaine);
	}else {
	$chaine = preg_replace('/[-a-zA-Z0-9]*\.?[-a-zA-Z0-9!#$%&\'*+\/=?^_`{|}~]+@([.]?[a-zA-Z0-9_\/-])*/','<a href="mailto:\\0">\\0</a>',$chaine);	
	}

	echo nl2br($chaine);
}
function melto($chaine) { 
	#echo "test urlize: <br>" .$chaine ."<hr>";
	#$chaine=ereg_replace("(http://)(([[:punct:]]|[[:alnum:]]=?)*)","<a href=\"\\0\">\\0</a>",$chaine);
	$chaine = "<a href=\"mailto:" .$chaine ."\">".$chaine ."</a>";
	echo $chaine;
}
function connectdb() {
$path=dirname($_SERVER["SCRIPT_FILENAME"]);
$path=preg_replace("/accounting.*$/","",$path);
require_once($path."accounting/app/config/database.php");
mysql_connect($host,$login,$password);
mysql_query("USE " .$database);
}	

	function normalisermontant($montant) {
#		echo preg_replace("(/^(.*)([0-9][0-9][0-9])\.(.*)$/","$1'$2.$3",$montant);
$montant100=$montant*100;
$montant= preg_replace("/^(.*)([0-9][0-9])$/","$1.$2",$montant100);
###$montant=preg_replace("/^(.*)([0-9][0-9][0-9])([0-9][0-9][0-9])\.(.*)$/","$1'$2'$3.$4",$montant);
$montant=preg_replace("/^(.*[0-9])([0-9][0-9][0-9])\.(.*)$/","$1'$2.$3",$montant);
		echo $montant;
		
		#echo preg_replace("/^(.*)\.([0-9])$/","$1.$20",$montant);
	}

?>
