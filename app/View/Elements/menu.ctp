<?php
	$s = $this->Session->read('Auth');
	$user = $s['User'];
?>
<div class="bandeau">
	<a href="#" class="button profile">
	<?php echo $this->Html->image('user.png'); ?>
	</a>
	&nbsp;
	&nbsp;
	<?php echo __('Bonjour'); ?>,
	<?php echo $user['nom'] . ' ' . $user['prenom']; ?>&nbsp;&nbsp;|&nbsp;&nbsp;
	<?php echo $this->Html->link(
		__('Mon profil'),
		array(
				'controller' => 'users',
				'action' => 'profile'
		)
	);
	?>&nbsp;&nbsp;|&nbsp;&nbsp; 
	<?php echo $this->Html->link('<i class="icon-lock icon-white"></i>&nbsp;&nbsp;' . __('Se deconnecter'), array('controller' => 'users', 'action' => 'logout'), array('escape' => false)); ?></li>
</div>