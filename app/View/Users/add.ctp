<?php echo $this->Html->addCrumb('Gestion des membres', array('controller'=>'users','action'=>'index')); ?>
<?php echo $this->Html->addCrumb('Ajouter un utilisateur', array('controller'=>'users','action'=>'edit')); ?>
<div class="title">
	<h2><i class="icon-white icon-user"></i>&nbsp;&nbsp;<?php echo __('Ajouter un utilisateur'); ?></h2>
</div>	
<div class="action">
	<table class="w100">
		<tr>
			<td><?php echo $this->Html->link('<i class="icon-home icon-white"></i>&nbsp;&nbsp;'.__('Retour à la page principale'), '/',array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
			<td><?php echo $this->Html->link('<i class="icon-circle-arrow-left icon-white"></i>&nbsp;&nbsp;'.__('Retour à la page précédente'), array('action' => 'index'),array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
		</tr>
	</table>
	<div class="cb"></div>
	<?php echo $this->Form->create('User'); ?>
				<div id="tabs" class="users">
					<ul class="tabs w100">
						<li><a href="#identite"><?php echo __('Son identité'); ?></a></li>
						<li><a href="#password"><?php echo __('Mot de passe'); ?></a></li>
						<li><a href="#adressage"><?php echo __('Coordonnées'); ?></a></li>
						<li><a href="#mail"><?php echo __('Information mail'); ?></a></li>
					</ul>
					<div class="cb"></div>
					<div class="tab-pane" id="identite">
						<?php
							echo $this->Form->input('nom',array(
									'label'=>__('Son nom'),
									'class'=>'w30'
								)
							);
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('prenom',array('label'=>__('Son prénom'),'class'=>'w30'));
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('username',array('label'=>__('Son nom d\'utilisateur'),'class'=>'w30'));
						?>
					</div>
					<div class="tab-pane" id="password">
						<?php
							echo $this->Form->input('passwordmodif',array('type'=>'password','label'=>__('Le nouveau mot de passe'),'class'=>'w30'));
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('confirm_password',array('type'=>'password','label'=>__('Veuillez à nouveau indiquer le mot de passe'),'class'=>'w30'));
						?>
					</div>
					<div class="tab-pane" id="adressage">
						<?php
							echo $this->Form->input('telephone_fixe',array('label'=>__('Le téléphone fixe'),'class'=>'w30'));
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('telephone_mobile',array('label'=>__('Le téléphone mobile'),'class'=>'w30'));
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('adresse_postale',array('label'=>__('L\'adresse postale'),'class'=>'w30'));
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('code_postal',array('label'=>__('Code Postal'),'class'=>'w30'));
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('ville',array('label'=>__('Ville'),'class'=>'w30'));
						?>
					</div>
					<div class="tab-pane" id="mail">
						<?php
							echo $this->Form->input('mail',array('label'=>__('Adresse mail'),'class'=>'w30'));
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('signature',
								array(
									'label'=>__('Signature pour accompagner les mails'),
									'class'=> 'cleditor w30',
									'type'=>'textarea'
								));
						?>
					</div>
				</div>
				<div class="cb"></div>
				<?php echo $this->Form->end(array('label'=>__('Ajouter un utilisateur'),'class'=>'btn btn-primary submit w100')); ?>
</div>