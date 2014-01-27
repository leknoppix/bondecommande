<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Mon profil'); ?></legend>

	<?php
		echo $this->Form->input('id');
	?>
	<div class="tabs">
		<ul>
			<li><a href="#identite">Mon identité</a></li>
			<li><a href="#password">Mot de passe</a></li>
			<li><a href="#adressage">Coordonnées</a></li>
			<li><a href="#mail">Information mail</a></li>
		</ul>
		<div class="identite">
	<?php
		echo $this->Form->input('nom',array('label'=>'Votre nom'));
		echo $this->Form->input('prenom',array('label'=>'Votre prénom'));
		echo $this->Form->input('username',array('label'=>'Votre nom d\'utilisateur'));
	?>
		</div>
		<div class="password">
	<?php
		echo $this->Form->input('passwordmodif',array('type'=>'password','label'=>'Votre nouveau mot de passe','required'=>false));
		echo $this->Form->input('confirm_password',array('type'=>'password','label'=>'Veuillez à nouveau indiquer votre mot de passe'));
	?>
		</div>
		<div class="adressage">
	<?php
		echo $this->Form->input('telephone_fixe',array('label'=>'Votre téléphone fixe'));
		echo $this->Form->input('telephone_mobile',array('label'=>'Votre téléphone mobile'));
		echo $this->Form->input('adresse_postale',array('label'=>'Votre adresse postale'));
		echo $this->Form->input('code_postal',array('label'=>'Code Postal'));
		echo $this->Form->input('ville',array('label'=>'Ville'));
	?>
		</div>
		<div class="mail">
	<?php
		echo $this->Form->input('mail',array('label'=>'Votre adresse mail'));
		echo $this->Form->input('signature',array('label'=>'Signature pour accompagner vos mails','class'=>"cleditorMain"));
	?>
		</div>
	</div>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Modifier votre profil')); ?>
</div>
