<h1>Bienvenu dans l'application pour rédiger des bons de commande</h2>
<nav>
	<ul>
		<li>Bonjour, <?php echo $user['nom'].' '.$user['prenom']; ?></li>
		<li><?php echo $this->Html->link(
				'Mon profil',
				array(
						'controller'=>'users',
						'action'=>'profile',
						'admin'=>true
					)
				); ?></li>
		<li>Actions
			<ul>
				<li>Gestion des bons de commande</li>
				<li>Gestion des membres</li>
				<li>Gestion des services</li>
				<li>Gestion des fournisseurs</li>
			</ul>
		</li>
		<li><?php echo $this->Html->link('Se deconnecter',array('controller'=>'users','action'=>'logout')); ?></li>
	</ul>
</nav>
<hr />
<div class="items-actions">
	<div class="item">
		<p>Gestion des bons de commande</p>
	</div>
	<div class="item">
		<p>Gestion des membres</p>
	</div>
	<div class="item">
		<p>Gestion des services</p>
	</div>
	<div class="item">
		<p>Gestion des fournisseurs</p>
	</div>
</div>