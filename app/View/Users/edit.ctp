<?php echo $this->Html->addCrumb('Gestion des membres', array('controller'=>'users','action'=>'index')); ?>
<?php echo $this->Html->addCrumb('Modifier un utilisateur', array('controller'=>'users','action'=>'edit',$this->request->pass[0])); ?>
<div class="title">
	<h2><i class="icon-white icon-user"></i>&nbsp;&nbsp;<?php echo __('Modifier un utilisateur'); ?></h2>
</div>	
<div class="action">
	<table>
		<tr>
			<td><?php echo $this->Html->link('<i class="icon-home icon-white"></i>&nbsp;&nbsp;'.__('Retour à la page principale'), '/',array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
			<td><?php echo $this->Html->link('<i class="icon-circle-arrow-left icon-white"></i>&nbsp;&nbsp;'.__('Retour à la page précédente'), array('action' => 'index'),array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
		</tr>
	</table>
	<div class="cb"></div>
	<?php echo $this->Form->create('User'); ?>
				<?php
					echo $this->Form->input('id');
				?>
				<div id="tabs" class="users">
					<ul class="tabs">
						<li><a href="#identite">Son identité</a></li>
						<li><a href="#password">Mot de passe</a></li>
						<li><a href="#adressage">Coordonnées</a></li>
						<li><a href="#mail">Information mail</a></li>
					</ul>
					<div class="cb"></div>
					<div class="tab-pane" id="identite">
						<?php
							echo $this->Form->input('nom',array(
									'label'=>'Son nom'
								)
							);
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('prenom',array('label'=>__('Son prénom')));
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('username',array('label'=>__('Son nom d\'utilisateur')));
						?>
					</div>
					<div class="tab-pane" id="password">
						<div class="alert error">
								<strong>
									N'utilisez cette partie du formulaire que si vous souhaitez modifier le mot de passe.
								</strong>
						</div>
						<?php
							echo $this->Form->input('passwordmodif',array('type'=>'password','label'=>__('Le nouveau mot de passe'),'required'=>false));
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('confirm_password',array('type'=>'password','label'=>__('Veuillez à nouveau indiquer le mot de passe')));
						?>
					</div>
					<div class="tab-pane" id="adressage">
						<?php
							echo $this->Form->input('telephone_fixe',array('label'=>__('Le téléphone fixe')));
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('telephone_mobile',array('label'=>__('Le téléphone mobile')));
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('adresse_postale',array('label'=>__('L\'adresse postale')));
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('code_postal',array('label'=>__('Code Postal')));
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('ville',array('label'=>__('Ville')));
						?>
					</div>
					<div class="tab-pane" id="mail">
						<?php
							echo $this->Form->input('mail',array('label'=>__('Adresse mail')));
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('signature',
								array(
									'label'=>__('Signature pour accompagner les mails'),
									'class'=> 'cleditor',
									'type'=>'textarea'
								));
						?>
					</div>
				</div>
				<div class="cb"></div>

				<?php echo $this->Form->end(array('label'=>__('Enregistrer les modifications'),'class'=>'btn btn-primary submit')); ?>
</div>