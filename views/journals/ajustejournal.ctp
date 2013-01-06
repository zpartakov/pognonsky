<?
#echo "activate before using! be carefull to empty ccp table!"; exit;
$sql="SELECT * FROM journals WHERE cc = '0' OR cd = '0'";
$sql=mysql_query($sql);
if(!$sql) {
	echo "error sql: " .mysql_error();
	exit;
}
$i=0;
echo "<h1>Comptes à compléter: " .mysql_num_rows($sql) ."</h1>";

while($i<mysql_num_rows($sql)){
	$insere="";
	echo "<br>id: ";
	echo mysql_result($sql,$i,'id');	
	echo "<br>date: ";
	echo mysql_result($sql,$i,'date');
	echo "<br>Libelle: ";
	echo mysql_result($sql,$i,'lib');
	$lib=mysql_result($sql,$i,'lib');
	echo "<br>Credit: ";
	echo mysql_result($sql,$i,'cc');
	echo "<br>Debit: ";
	echo mysql_result($sql,$i,'cd');
	echo "<br>Montant: ";
	echo mysql_result($sql,$i,'mont');
//retraits	
	if(preg_match("/^Retrait/i",$lib)||preg_match("/^Recouvrement/",$lib)) {
		$insere="UPDATE journals SET cc='6999' WHERE id=" .mysql_result($sql,$i,'id');
//interets		
	} elseif(preg_match("/Intérêts?/",$lib)) {
		$insere="UPDATE journals SET cd='7410' WHERE id=" .mysql_result($sql,$i,'id');
//Syndicat SIT 
	}	 elseif(preg_match("/SYNDICAT INTERPROFESSIONNEL/",$lib)) {
		$insere="UPDATE journals SET cc='6816' WHERE id=" .mysql_result($sql,$i,'id');
//impot		
	}	 elseif(preg_match("/Impôt?/",$lib)||preg_match("/ACCOMPTES PROVISIONNELS IFD/",$lib)) {
		$insere="UPDATE journals SET cc='8000' WHERE id=" .mysql_result($sql,$i,'id');
//loyer
	}	 elseif(preg_match("/SOCIETE PRIVEE DE GERANCE/",$lib)) {
		if(mysql_result($sql,$i,'mont')<6203) {
					$insere="UPDATE journals SET cc='6000' WHERE id=" .mysql_result($sql,$i,'id');

		}else {
		$insere="UPDATE journals SET cc='6000' WHERE id=" .mysql_result($sql,$i,'id');
		}
		
//telecoms
		}	 elseif(preg_match("/Orange/i",$lib)) {
		$insere="UPDATE journals SET cc='6510' WHERE id=" .mysql_result($sql,$i,'id');
		}	 elseif(preg_match("/SUNRISE/i",$lib)) {
		$insere="UPDATE journals SET cc='6511' WHERE id=" .mysql_result($sql,$i,'id');
	
//info
	}	 elseif(preg_match("/INTERDISCOUNT/i",$lib)) {
		$insere="UPDATE journals SET cc='6570' WHERE id=" .mysql_result($sql,$i,'id');
	
//dons
 
	}	 elseif(preg_match("/MediCuba/i",$lib)) {
		$insere="UPDATE journals SET cc='6810' WHERE id=" .mysql_result($sql,$i,'id');
	}	 elseif(preg_match("/Centrale sanitaire/i",$lib)) {
		$insere="UPDATE journals SET cc='6805' WHERE id=" .mysql_result($sql,$i,'id');
		
//salaire		 
		}	 elseif(preg_match("/VERSEMENT OFFICE DU PERSONNEL DE L ETAT DE GENEVE/i",$lib)) {
		$insere="UPDATE journals SET cd='3200' WHERE id=" .mysql_result($sql,$i,'id');		
		}	 elseif(preg_match("/VIREMENT DE SIC/i",$lib)) {
		$insere="UPDATE journals SET cd='3200' WHERE id=" .mysql_result($sql,$i,'id');
	
//courses
	}	 elseif(preg_match("/MANOR/i",$lib)) {
		$insere="UPDATE journals SET cc='4203' WHERE id=" .mysql_result($sql,$i,'id');
}	 elseif(preg_match("/MUSTAFA IBRAHIM/i",$lib)) {
		$insere="UPDATE journals SET cc='4211' WHERE id=" .mysql_result($sql,$i,'id');
	}	 elseif(preg_match("/Cocagne/i",$lib)) {
		$insere="UPDATE journals SET cc='6806' WHERE id=" .mysql_result($sql,$i,'id');
	}	 elseif(preg_match("/Migros/i",$lib)) {
		$insere="UPDATE journals SET cc='4200' WHERE id=" .mysql_result($sql,$i,'id');
	}	 elseif(preg_match("/Uchi/",$lib)||preg_match("/Uchito/i",$lib)) {
		$insere="UPDATE journals SET cc='4206' WHERE id=" .mysql_result($sql,$i,'id');
	}	 elseif(preg_match("/Aligro/i",$lib)) {
		$insere="UPDATE journals SET cc='4202' WHERE id=" .mysql_result($sql,$i,'id');
	}	 elseif(preg_match("/COOP/",$lib)) {
		$insere="UPDATE journals SET cc='4201' WHERE id=" .mysql_result($sql,$i,'id');
	}	 elseif(preg_match("/Denner/i",$lib)) {
		$insere="UPDATE journals SET cc='4210' WHERE id=" .mysql_result($sql,$i,'id');
	}	 elseif(preg_match("/TSCHIN-TA-NI/i",$lib)) {
		$insere="UPDATE journals SET cc='4205' WHERE id=" .mysql_result($sql,$i,'id');
	}	 elseif(preg_match("/ACHAT.SERVICE/i",$lib)) { //migros
		$insere="UPDATE journals SET cc='4200' WHERE id=" .mysql_result($sql,$i,'id');
		
//AF
	}	 elseif(preg_match("/SERVICE CANTONAL D'ALLOCATIONS FAMILIALES/i",$lib)) {
		$insere="UPDATE journals SET cd='3210' WHERE id=" .mysql_result($sql,$i,'id');
		//$insere="UPDATE journals SET cd='5210' WHERE id=" .mysql_result($sql,$i,'id');
		
//assurances
	}	 elseif(preg_match("/Assura CAISSE/i",$lib)) {
		$insere="UPDATE journals SET cc='6301' WHERE id=" .mysql_result($sql,$i,'id');
	}	 elseif(preg_match("/ORDRE DEBIT DIRECT/i",$lib)&&mysql_result($sql,$i,'mont')=="51.00") {
		$insere="UPDATE journals SET cc='6301' WHERE id=" .mysql_result($sql,$i,'id');
	}	 elseif(preg_match("/ORDRE DEBIT DIRECT/i",$lib)&&mysql_result($sql,$i,'mont')=="370.90") {
		$insere="UPDATE journals SET cc='6301' WHERE id=" .mysql_result($sql,$i,'id');
	}	 elseif(preg_match("/ORDRE DEBIT DIRECT/i",$lib)&&mysql_result($sql,$i,'mont')=="344.70") {
		$insere="UPDATE journals SET cc='6301' WHERE id=" .mysql_result($sql,$i,'id');
		
		
		
//remb assura
}	 elseif(preg_match("/VIREMENT DU COMPTE.*Assura/i",$lib)) {
		$insere="UPDATE journals SET cd='6301' WHERE id=" .mysql_result($sql,$i,'id');

//auto
}	 elseif(preg_match("/SCHWEIZ. NATIONAL- VERSICHERUNGS/i",$lib)||preg_match("/AGIP/i",$lib)||preg_match("/AVIA Station/i",$lib)||preg_match("/BP/",$lib)||preg_match("/Débit BP/i",$lib)||preg_match("/Essence/i",$lib)||preg_match("/Janin/i",$lib)) {
		$insere="UPDATE journals SET cc='1530' WHERE id=" .mysql_result($sql,$i,'id');
//enfants
//6052  	Enfants div
}	 elseif(preg_match("/VLEKOVA/i",$lib)||preg_match("/PRE EN BULLE/i",$lib)) {
		$insere="UPDATE journals SET cc='6052' WHERE id=" .mysql_result($sql,$i,'id');

// Violon Irina 
}	 elseif(preg_match("/VIOLON/i",$lib)) {
		$insere="UPDATE journals SET cc='6857' WHERE id=" .mysql_result($sql,$i,'id');
		 
//libr - cult
}	 elseif(preg_match("/Payot/i",$lib)) {
		$insere="UPDATE journals SET cc='6860' WHERE id=" .mysql_result($sql,$i,'id');
//vins
}	 elseif(preg_match("/Blavignac/i",$lib)) {
		$insere="UPDATE journals SET cc='4209' WHERE id=" .mysql_result($sql,$i,'id');
}	 elseif(preg_match("/Cinema/i",$lib)) {
		$insere="UPDATE journals SET cc='6850' WHERE id=" .mysql_result($sql,$i,'id');

//banque frais		
}	 elseif(preg_match("/Ordre e-banking/i",$lib)||preg_match("/Frais annuels/i",$lib)||preg_match("/EXTRAIT DE COMPTE MENSUEL SUR PAPIER/i",$lib)||preg_match("/RETRAIT D'ARGENT COMPTANT AU BANCOMAT/i",$lib)) {
		$insere="UPDATE journals SET cc='6572' WHERE id=" .mysql_result($sql,$i,'id');

//energie
}	 elseif(preg_match("/SIG SERVICES INDUSTRIELS DE GENÈVE/i",$lib)) {
		$insere="UPDATE journals SET cc='6400' WHERE id=" .mysql_result($sql,$i,'id');

//Sorties 
}	 elseif(preg_match("/PIZZERIA/i",$lib)||preg_match("/restaurant/i",$lib)) {
		$insere="UPDATE journals SET cc='6855' WHERE id=" .mysql_result($sql,$i,'id');

//sports
}	 elseif(preg_match("/sport/i",$lib)||preg_match("/decathlon/i",$lib)||preg_match("/vellas/i",$lib)) {
		$insere="UPDATE journals SET cc='6061' WHERE id=" .mysql_result($sql,$i,'id');

	
//6856  	fred 	Vacances 	
	}	 elseif(preg_match("/Hotel/i",$lib)) {
		$insere="UPDATE journals SET cc='6856' WHERE id=" .mysql_result($sql,$i,'id');

	}
	
		echo "<pre>$insere</pre>";
		
if(strlen($insere)>0) {	 
	$insere=mysql_query($insere);
	if(!$insere) {
	echo "error sql: " .mysql_error();
	exit;
	}
}
	echo "<hr>";
	$i++;
}
