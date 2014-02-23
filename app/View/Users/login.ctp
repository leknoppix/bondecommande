	<h2>Se connecter</h2>
	<?php echo $this->Form->create('User'); ?>
		<?php echo $this->Form->input('username',array('label'=>__('Nom d\'utilisation'),'class'=>'w50')); ?>
		<?php echo $this->Form->input('password',array('label'=>__('Mot de passe'),'class'=>'w50')); ?>
		<?php echo $this->Form->submit(__('Se connecter'), array('class' => 'w100')); ?>
	<?php echo $this->Form->end(); ?>