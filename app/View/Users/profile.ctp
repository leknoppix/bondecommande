<?php echo $this->Html->addCrumb(__('Mon profil'), array('controller'=>'users','action'=>'profile')); ?>
<div class="title">
	<h2><i class="icon-white icon-user"></i>&nbsp;&nbsp;<?php echo __('Mon profil'); ?></h2>
</div>	
<div class="action">
	<table>
		<tr>
			<td>
				<?php echo $this->Html->link('<i class="icon-home icon-white"></i>&nbsp;&nbsp;'.__('Retour à la page principale'), '/',array('escape'=>false,'class'=>"btn btn-info")); ?>
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
						<li><a href="#identite"><?php echo __('Mon identité'); ?></a></li>
						<li><a href="#password"><?php echo __('Mot de passe'); ?></a></li>
						<li><a href="#adressage"><?php echo __('Coordonnées'); ?></a></li>
						<li><a href="#mail"><?php echo __('Information mail'); ?></a></li>
					</ul>
					<div class="cb"></div>
					<div class="tab-pane" id="identite">
						<?php
							echo $this->Form->input('nom',
								array(
									'label'=>__('Votre nom'),
									'class'=>'w30'
								)
							);
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('prenom',
									array(
										'label'=>__('Votre prénom'),
										'class'=>'w30'
									)
								);
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('username',
								array(
									'label'=>__('Votre nom d\'utilisateur'),
									'class'=>'w30'
								)
							);
						?>
					</div>
					<div class="tab-pane" id="password">
						<div class="alert error">
							<strong>
								<?php echo __('N\'utilisez cette partie du formulaire que si vous souhaitez modifier votre mot depasse.'); ?>
							</strong>
						</div>
						<?php
							echo $this->Form->input('passwordmodif',
									array(
										'type'=>'password',
										'label'=>__('Votre nouveau mot de passe'),
										'required'=>false,
										'class'=>'w30'
									)
								);
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('confirm_password',
								array(
									'type'=>'password',
									'label'=>__('Veuillez à nouveau indiquer votre mot de passe'),
									'class'=>'w30'
								)
							);
						?>
					</div>
					<div class="tab-pane" id="adressage">
						<?php
							echo $this->Form->input('telephone_fixe',
								array(
									'label'=>__('Votre téléphone fixe'),
									'class'=>'w30'
								)
							);
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('telephone_mobile',
								array(
									'label'=>__('Votre téléphone mobile'),
									'class'=>'w30'
								)
							);
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('adresse_postale',
								array(
									'label'=>__('Votre adresse postale'),
									'class'=>'w30'
								)
							);
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('code_postal',
								array(
									'label'=>__('Code Postal'),
									'class'=>'w30'
								)
							);
							echo $this->Form->input('ville',
								array(
									'label'=>__('Ville'),
									'class'=>'w30'
								)
							);
						?>
					</div>
					<div class="tab-pane" id="mail">
						<?php
							echo $this->Form->input('mail',
								array(
									'label'=>__('Votre adresse mail'),
									'class'=>'w30'
								)
							);
						?>
						<div class="cb"></div>
						<?php
							echo $this->Form->input('signature',
								array(
									'label'=>__('Signature pour accompagner vos mails'),
									'class'=> 'cleditor w30',
									'type'=>'textarea'
								));
						?>
					</div>
				</div>
				<div class="cb"></div>
				<?php 
					echo $this->Form->end(
						array(
							'label'=>__('Modifier votre profil'),
							'class'=>'btn btn-primary submit w100'
						)
					);
				?>
</div>