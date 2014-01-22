<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Mon profil'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('password2');
		echo $this->Form->input('mail');
		echo $this->Form->input('telephone_fixe');
		echo $this->Form->input('telephone_mobile');
		echo $this->Form->input('adresse_postale');
		echo $this->Form->input('code_postal');
		echo $this->Form->input('ville');
		echo $this->Form->input('signature');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
