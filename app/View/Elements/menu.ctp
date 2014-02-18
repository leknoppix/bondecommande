<?php
	$s = $this->Session->read('Auth');
	$user= $s['User'];
?>
<div class="bandeau">
	<a href="#" class="button profile">
	<?php echo $this->Html->image('user.png'); ?>
	</a>
	Bonjour,
	<?php echo $user['nom'].' '.$user['prenom']; ?>  |
	<?php echo $this->Html->link(
		'Mon profil',
		array(
				'controller'=>'users',
				'action'=>'profile'
		)
	); 
	?> | 
	<?php echo $this->Html->link('Se deconnecter',array('controller'=>'users','action'=>'logout')); ?></li>
</div>