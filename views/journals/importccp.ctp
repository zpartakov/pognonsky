<?
echo "<pre>Tool for import ccp
//activate before using! be carefull to empty ccp table! take only new records
</pre>";

echo "<form METHOD='GET'>Are you ready?
<input type='hidden' name='read' value='yes'>
<input type='submit'>";

if($_GET['read']!="yes"){
	exit;
} else {
	echo 'go on';
}
$sql="SELECT * FROM ccp ORDER BY date";
$sql=mysql_query($sql);
if(!$sql) {
	echo "error sql: " .mysql_error();
	exit;
}
$i=0;

while($i<mysql_num_rows($sql)){
	echo "<br>date: ";
	
	$date=mysql_result($sql,$i,'date');
	$year=substr($date,0,4);
	$month=substr($date,4,2);
	$day=substr($date,6,2);
	echo $date ." -> " .$year ."-".$month ."-".$day;
	$date=$year ."-".$month ."-".$day;
	echo "<br>Libelle: ";
	echo mysql_result($sql,$i,'Libelle');
	echo "<br>Credit: ";
	echo mysql_result($sql,$i,'Credit');
	echo "<br>Debit: ";
	echo mysql_result($sql,$i,'Debit');
	echo "<br>Solde: ";
	echo mysql_result($sql,$i,'Soldes');
	
	if(mysql_result($sql,$i,'Credit')>0) {
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
			'" .$date ."', '1010', '', '" .mysql_result($sql,$i,'Credit') ."', '" .addslashes(mysql_result($sql,$i,'Libelle')) ."', NULL
			);
		";
		
		//echo "<pre>$insere</pre>";
		
		
	} elseif(mysql_result($sql,$i,'Debit')>0) {
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
			'" .$date ."', '', '1010', '" .mysql_result($sql,$i,'Debit') ."', '" .addslashes(mysql_result($sql,$i,'Libelle')) ."', NULL
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

echo "insertion ok<br>";

$sql="TRUNCATE TABLE ccp";
echo $sql;
$sql=mysql_query($sql);
if(!$sql) {
	echo "error sql: " .mysql_error();
	exit;
}
