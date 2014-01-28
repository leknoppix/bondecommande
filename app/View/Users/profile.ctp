<?php echo $this->Html->addCrumb('Mon profil', array('controller'=>'users','action'=>'profile')); ?>
<div class="box-header well" data-original-title>
	<h2><i class="icon-user"></i> <?php echo __('Mon profil'); ?></h2>
</div>	
<div class="box-content">
<div class="span4">
<?php echo $this->Html->link('<i class="icon-home icon-white"></i> Retour à la page principale', '/',array('escape'=>false,'class'=>"btn btn-success")); ?>
</div>
<div class="span4"></div>
<div class="span4">
</div>
<hr/>
	<?php echo $this->Form->create('User',
					array(
						'class' => 'form-horizontal',
						'inputDefaults' => 
							array(
						        'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
						        'div' => array('class' => 'control-group'),
						        'label' => array('class' => 'control-label'),
						        'between' => '<div class="controls">',
						        'after' => '</div>',
						        'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
					    	)
						)
					); ?>
				<fieldset>
				<?php
					echo $this->Form->input('id');
				?>
					<ul class="nav nav-tabs" id="myTab">
						<li><a href="#identite">Mon identité</a></li>
						<li><a href="#password">Mot de passe</a></li>
						<li><a href="#adressage">Coordonnées</a></li>
						<li><a href="#mail">Information mail</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active" id="identite">
							<?php
								echo $this->Form->input('nom',array(
										'label'=>'Votre nom','class'=>"span8"
									)
								);
								echo $this->Form->input('prenom',array('label'=>'Votre prénom','class'=>"span8"));
								echo $this->Form->input('username',array('label'=>'Votre nom d\'utilisateur','class'=>"span8"));
							?>
						</div>
						<div class="tab-pane" id="password">
							<div class="alert alert-error">
								<strong>
									N'utilisez cette partie du formulaire que si vous souhaitez modifier votre mot de passe.
								</strong>
							</div>
							<?php
								echo $this->Form->input('passwordmodif',array('type'=>'password','label'=>'Votre nouveau mot de passe','required'=>false,'class'=>"span8"));
								echo $this->Form->input('confirm_password',array('type'=>'password','label'=>'Veuillez à nouveau indiquer votre mot de passe','class'=>"span8"));
							?>
						</div>
						<div class="tab-pane" id="adressage">
							<?php
								echo $this->Form->input('telephone_fixe',array('label'=>'Votre téléphone fixe','class'=>"span8"));
								echo $this->Form->input('telephone_mobile',array('label'=>'Votre téléphone mobile','class'=>"span8"));
								echo $this->Form->input('adresse_postale',array('label'=>'Votre adresse postale','class'=>"span8"));
								echo $this->Form->input('code_postal',array('label'=>'Code Postal','class'=>"span8"));
								echo $this->Form->input('ville',array('label'=>'Ville','class'=>"span8"));
							?>
						</div>
						<div class="tab-pane" id="mail">
							<?php
								echo $this->Form->input('mail',array('label'=>'Votre adresse mail','class'=>"span8"));
								echo $this->Form->input('signature',
									array(
										'label'=>'Signature pour accompagner vos mails',
										'class'=> 'cleditor',
									));
							?>
						</div>
					</div>
				</div>
				<div class="form-actions">
					<?php echo $this->Form->end(array('label'=>'Modifier votre profil','class'=>'btn btn-primary')); ?>
				</div>
				</fieldset>
</div>