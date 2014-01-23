<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Mon profil'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nom',array('label'=>'Votre nom'));
		echo $this->Form->input('prenom',array('label'=>'Votre prénom'));
		echo $this->Form->input('username',array('label'=>'Votre nom d\'utilisateur'));
		echo $this->Form->input('password',array('label'=>'Votre nouveau mot de passe'));
		echo $this->Form->input('password2',array('label'=>'Veuillez à nouveau indiquer votre mot de passe'));
		echo $this->Form->input('mail',array('label'=>'Votre adresse mail'));
		echo $this->Form->input('telephone_fixe',array('label'=>'Votre téléphone fixe'));
		echo $this->Form->input('telephone_mobile',array('label'=>'Votre téléphone mobile'));
		echo $this->Form->input('adresse_postale',array('label'=>'Votre adresse postale'));
		echo $this->Form->input('code_postal',array('label'=>'Code Postal'));
		echo $this->Form->input('ville',array('label'=>'Ville'));
		echo $this->Form->input('signature',array('label'=>'Signature pour accompagner vos mails'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'),array('label'=>'Modifier votre profil')); ?>
</div>
