<h1>Bienvenu dans l'application pour rédiger des bons de commande</h2>
<nav>
	<ul>
		<li>Bonjour, <?php echo $user['nom'].' '.$user['prenom']; ?></li>
		<li><?php echo $this->Html->link(
				'Mon profil',
				array(
						'controller'=>'users',
						'action'=>'profile'
					)
				); ?></li>
		<li>Actions
			<ul>
				<li>Gestion des bons de commande</li>
				<li><?php echo $this->Html->link('Gestion des membres',array('controller'=>'users','action'=>'index')); ?></li>
				<li><?php echo $this->Html->link('Gestion des services',array('controller'=>'services','action'=>'index')); ?></li>
				<li><?php echo $this->Html->link('Gestion des fournisseurs',array('controller'=>'customers','action'=>'index')); ?></li>
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
		<p><?php echo $this->Html->link('Gestion des membres',array('controller'=>'users','action'=>'index')); ?></p>
	</div>
	<div class="item">
		<p><?php echo $this->Html->link('Gestion des services',array('controller'=>'services','action'=>'index')); ?></p>
	</div>
	<div class="item">
		<p><?php echo $this->Html->link('Gestion des fournisseurs',array('controller'=>'customers','action'=>'index')); ?></p>
	</div>
</div>