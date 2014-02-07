<?php echo $this->Html->addCrumb('Gestion des membres', array('controller'=>'users','action'=>'index')); ?>
<?php echo $this->Html->addCrumb('Modifier un utilisateur', array('controller'=>'users','action'=>'edit',$this->request->pass[0]))); ?>
<div class="box-header well" data-original-title>
	<h2><i class="icon-user"></i> <?php echo __('Modifier un utilisateur'); ?></h2>
</div>	
<div class="box-content">
<div class="span4">
<?php echo $this->Html->link('<i class="icon-home icon-white"></i> Retour à la page principale', '/',array('escape'=>false,'class'=>"btn btn-success")); ?>
</div>
<div class="span4"></div>
<div class="span4">
<?php echo $this->Html->link('<i class="icon-circle-arrow-left icon-white"></i> Retour à la page précédente', array('action' => 'index'),array('escape'=>false,'class'=>"btn btn-success")); ?>
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
						<li><a href="#identite">Son identité</a></li>
						<li><a href="#password">Mot de passe</a></li>
						<li><a href="#adressage">Coordonnées</a></li>
						<li><a href="#mail">Information mail</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active" id="identite">
							<?php
								echo $this->Form->input('nom',array(
										'label'=>'Son nom','class'=>"span8"
									)
								);
								echo $this->Form->input('prenom',array('label'=>'Son prénom','class'=>"span8"));
								echo $this->Form->input('username',array('label'=>'Son nom d\'utilisateur','class'=>"span8"));
							?>
						</div>
						<div class="tab-pane" id="password">
							<div class="alert alert-error">
								<strong>
									N'utilisez cette partie du formulaire que si vous souhaitez modifier le mot de passe.
								</strong>
							</div>
							<?php
								echo $this->Form->input('passwordmodif',array('type'=>'password','label'=>'Le nouveau mot de passe','required'=>false,'class'=>"span8"));
								echo $this->Form->input('confirm_password',array('type'=>'password','label'=>'Veuillez à nouveau indiquer le mot de passe','class'=>"span8"));
							?>
						</div>
						<div class="tab-pane" id="adressage">
							<?php
								echo $this->Form->input('telephone_fixe',array('label'=>'Le téléphone fixe','class'=>"span8"));
								echo $this->Form->input('telephone_mobile',array('label'=>'Le téléphone mobile','class'=>"span8"));
								echo $this->Form->input('adresse_postale',array('label'=>'Le adresse postale','class'=>"span8"));
								echo $this->Form->input('code_postal',array('label'=>'Code Postal','class'=>"span8"));
								echo $this->Form->input('ville',array('label'=>'Ville','class'=>"span8"));
							?>
						</div>
						<div class="tab-pane" id="mail">
							<?php
								echo $this->Form->input('mail',array('label'=>'Adresse mail','class'=>"span8"));
								echo $this->Form->input('signature',
									array(
										'label'=>'Signature pour accompagner les mails',
										'class'=> 'cleditor',
									));
							?>
						</div>
					</div>
				</div>
				<div class="form-actions">
					<?php echo $this->Form->end(array('label'=>'Enregistrer les modifications','class'=>'btn btn-primary')); ?>
				</div>
				</fieldset>
</div>