<?php
/*header('Content-type: text/x-csv; charset= UTF-8');
header('Content-Disposition: attachment; filename="export.csv"');*/

   // Define column headers for CSV file, in same array format as the data itself
                $Equipement= array(
					'id' => 'id',
					'Annee' => 'Année',
					'Revenus' => 'Revenus', 
					'Fortune' => 'Fortune',
					'AssuranceVie' => 'AssuranceVie',
					'Immobilier' => 'Immobilier'
				
                );

    foreach($Equipement as $field=>$libelle) {
        // Loop through every value in a row
    echo $libelle.";";
}
 echo "\n";


	$sql="SELECT * FROM bilans ORDER BY Annee";

#echo $sql;
$sql=mysql_query($sql);
if(!$sql) { echo "SQL error: " .mysql_error(); }

$i=0;
while($i<mysql_num_rows($sql)){
	
	  foreach($Equipement as $field=>$libelle) {
        // Loop through every value in a row
		echo mysql_result($sql,$i,$field).";";
		}
		echo "\n";
	$i++;
	}

    // Loop through the data array
  

	  
?>
