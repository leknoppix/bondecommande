<?php
	$s = $this->Session->read('Auth');
	$user= $s['User'];
?>
<div class="bandeau">
	<a href="#" class="button profile">
	<?php echo $this->Html->image('user.png'); ?>
	</a>
	&nbsp;
	&nbsp;
	Bonjour,
	<?php echo $user['nom'].' '.$user['prenom']; ?>&nbsp;&nbsp;|&nbsp;&nbsp;
	<?php echo $this->Html->link(
		'Mon profil',
		array(
				'controller'=>'users',
				'action'=>'profile'
		)
	); 
	?>&nbsp;&nbsp;|&nbsp;&nbsp; 
	<?php echo $this->Html->link('Se deconnecter',array('controller'=>'users','action'=>'logout')); ?></li>
</div>