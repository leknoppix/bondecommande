<h1>Se connecter</h1>
<?php echo $this->Form->create('User'); ?>
	<?php echo $this->Form->input('username',array('label'=>'Nom d\'utilisation')); ?>
	<?php echo $this->Form->input('password',array('label'=>'Mot de passe')); ?>
<?php echo $this->Form->end('Se connecter'); ?>