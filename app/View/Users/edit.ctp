<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Modification de l\'utilisateur '.$users['User']['prenom'].' '.$users['User']['nom']); ?></legend>
	<div class="tabs">
		<ul>
			<li><a href="#identite">Identité</a></li>
			<li><a href="#password">Mot de passe</a></li>
			<li><a href="#adressage">Coordonnées</a></li>
			<li><a href="#mail">Information mail</a></li>
		</ul>
		<div class="identite">
	<?php
		echo $this->Form->input('nom',array('label'=>'Nom'));
		echo $this->Form->input('prenom',array('label'=>'Prénom'));
		echo $this->Form->input('username',array('label'=>'Nom d\'utilisateur'));
	?>
		</div>
		<div class="password">
	<?php
		echo $this->Form->input('passwordmodif',array('type'=>'password','label'=>'Mot de passe','required'=>false));
		echo $this->Form->input('confirm_password',array('type'=>'password','label'=>'Veuillez à nouveau indiquer le mot de passe'));
	?>
		</div>
		<div class="adressage">
	<?php
		echo $this->Form->input('telephone_fixe',array('label'=>'Téléphone fixe','required'=>false));
		echo $this->Form->input('telephone_mobile',array('label'=>'Téléphone mobile','required'=>false));
		echo $this->Form->input('adresse_postale',array('label'=>'Adresse postale','required'=>false));
		echo $this->Form->input('code_postal',array('label'=>'Code Postal','required'=>false));
		echo $this->Form->input('ville',array('label'=>'Ville','required'=>false));
	?>
		</div>
		<div class="mail">
	<?php
		echo $this->Form->input('mail',array('label'=>'Adresse mail','required'=>false));
		echo $this->Form->input('signature',array('label'=>'Signature pour accompagner vos mails','required'=>false));
	?>
		</div>
	</div>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Enregistrer ce nouveau utilisateur')); ?>
</div>
