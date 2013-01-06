<?
//echo "activate before using! be carefull to empty raiffeisen table!"; exit;
$no_cpte="1020";
$sql="SELECT * FROM raiffeisen ORDER BY date";
$sql=mysql_query($sql);
if(!$sql) {
	echo "error sql: " .mysql_error();
	exit;
}
$i=0;
while($i<mysql_num_rows($sql)){
	$date=mysql_result($sql,$i,'date');
	echo "<br>date: ";
	echo $date;
	echo "<br>Libelle: ";
	$lib=mysql_result($sql,$i,'Libelle');
	echo $lib;
	echo "<br>Credit / Débit: ";
	$montant=mysql_result($sql,$i,'cd');
	echo $montant;
	echo "<br>Solde: ";
	$solde=mysql_result($sql,$i,'bal');
	echo $solde;
	
	if($montant>0) {
		echo "<font color=red> CREDIT</font>";
		$insere="INSERT INTO journals (
			`date` ,
			`cc` ,
			`cd` ,
			`mont` ,
			`lib` ,
			`id`
			)
			VALUES (
			'" .$date ."', '".$no_cpte."', '', '" .$montant ."', '" .addslashes($lib) ."', NULL
			);
		";
		
		//echo "<pre>$insere</pre>";
		
		
	} elseif($montant<0) {
		echo " Debit";
				$insere="INSERT INTO journals (
			`date` ,
			`cc` ,
			`cd` ,
			`mont` ,
			`lib` ,
			`id`
			)
			VALUES (
			'" .$date ."', '', '".$no_cpte."', '" .$montant ."', '" .addslashes($lib) ."', NULL
			);
		";
		
		echo "<pre>$insere</pre>";
		
	} 
	$insere=mysql_query($insere);
	if(!$insere) {
	echo "error sql: " .mysql_error();
	exit;
}
	echo "<hr>";
	$i++;
}
