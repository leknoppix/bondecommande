<?php echo $this->Html->addCrumb('Gestion des fournisseurs', array('controller'=>'customers','action'=>'index')); ?>
<?php echo $this->Html->addCrumb('Ajouter un fournisseur', array('controller'=>'customers','action'=>'add')); ?>
<div class="box-header well" data-original-title>
	<h2><i class="icon-camera"></i> <?php echo __('Ajouter un fournisseur'); ?></h2>
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

			<?php 
				echo $this->Form->create('Customer',
					array(
						'class' => 'form-horizontal',
						'inputDefaults' => 
							array(
						        'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
						        'div' => array('class' => 'control-group'),
						        'label' => array('class' => 'control-label'),
						        'between' => '<div class="controls">',
						        'after' => '</div>',
						        'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')
						        ),
					    	)
						)
				); 
			?>
	<fieldset>
		<ul class="nav nav-tabs" id="myTab">
			<li><a href="#identite">Identité</a></li>
			<li><a href="#correspondance">Information de correspondance</a></li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane active" id="identite">
				<?php
					echo $this->Form->input('name',array('label'=>'Nom du fournisseur','class'=>"span8"));
					echo $this->Form->input('address',array('label'=>'Adresse du fournisseur','class'=>"span8"));
					echo $this->Form->input('zipcode',array('label'=>'Code postal','class'=>"span8"));
					echo $this->Form->input('city',array('label'=>'Ville','class'=>"span8"));
				?>
			</div>
			<div class="tab-pane" id="correspondance">
				<?php
					echo $this->Form->input('tel',array('label'=>'Téléphone','required'=>false,'class'=>"span8"));
					echo $this->Form->input('fax',array('label'=>'Fax','required'=>false,'class'=>"span8"));
					echo $this->Form->input('mail',array('label'=>'Adresse mail','required'=>false,'class'=>"span8"));
					echo $this->Form->input('siteinternet',array('label'=>'Site internet','required'=>false,'class'=>"span8"));
				?>
			</div>
		</div>
	<div class="form-actions">
		<?php echo $this->Form->end(array('label'=>'Ajouter ce fournisseur','class'=>'btn btn-primary')); ?>
	</div>
	</fieldset>
</div>