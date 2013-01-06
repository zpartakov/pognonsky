<div id="user_menu" class="top_menu">
 <div class="menu_wrapper">
 <ul class="navbar">
 
<li><?php echo $html->link('Journal', '/journals'); ?>
	<ul class="navbar">
	<li><?php echo $html->link('Calculatrice', '/pages/calculatrice'); ?></li>
	</ul>
</li>

<li><?php echo $html->link('Comptes', '/comptes'); ?>
	<ul class="navbar">
	<li><?php echo $html->link('Nouveau Journal', '/journals/add'); ?></li>
	<li><?php echo $html->link('mysql', 'http://129.194.18.197/mysql/index.php?db=akademiach10'); ?></li>
	
	<li><?php echo $html->link('Bilan', '/journals/bilan'); ?></li>
		<li><?php echo $html->link('Ravières', '/comptes/chalet'); ?></li>
		<li><?php echo $html->link('Bilan 2011', '/pages/bilan2011'); ?></li>
		<li><?php echo $html->link('Comptes', '/comptes'); ?></li>
		<li><?php echo $html->link('Devises', '/devises/'); ?></li>
		<li><?php echo $html->link('Màj Journal', '/journals/ajustejournal'); ?></li>
	<li><?php echo $html->link('CCP Import', '/journals/importccp'); ?></li>
	<li><?php echo $html->link('Raiffeisen Import', '/journals/importraiffeisen'); ?></li>
	<li><?php echo $html->link('Plan comptable', '/pages/plan'); ?></li>
	</ul>
</li>
<li><?php echo $html->link('Mouvements', '/impots/recapitulatifs'); ?>
	<ul class="navbar">
	<li><?php echo $html->link('Impots', '/impots/'); ?></li>
	<li><?php echo $html->link('Nouveau global', '/impots/add'); ?></li>
	
	</ul>
</li>


<li><?php echo $html->link('Assurances', '/insurances'); ?>
	<ul class="navbar">
	<li><?php echo $html->link('Factures', '/invoices'); ?></li>
	<li><?php echo $html->link('Membres', '/members'); ?></li>
	</ul>
</li>
<li><a>Admin</a>
	<ul class="navbar">
	<li><?php echo $html->link('Utilisateurs', '/users'); ?></li>
	<li><?php echo $html->link('Rôles', '/roles'); ?></li>
	</ul>
</li>
<li><a>Links</a>
	<ul class="navbar">
	<li><?php echo $html->link('Liens', '/weblinks/'); ?></li>
	<li><?php echo $html->link('Categories', '/categories/'); ?></li>
	</ul>
</li>
</ul>
</div>
</div>
        			

    		
