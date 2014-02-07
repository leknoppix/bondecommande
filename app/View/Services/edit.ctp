<?php echo $this->Html->addCrumb('Gestion des services', array('controller'=>'services','action'=>'index')); ?>
<?php echo $this->Html->addCrumb('Modifier un service', array('controller'=>'services','action'=>'edit',$this->request->pass[0])); ?>
<div class="box-header well" data-original-title>
	<h2><i class="icon-user"></i> <?php echo __('Modifier un service'); ?></h2>
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
<?php echo $this->Form->create('Service',
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
					); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('label'=>'Nom du service','class'=>"span8"));
	?>
	<div class="form-actions">
		<?php echo $this->Form->end(array('label'=>'Modifier ce service','class'=>'btn btn-primary')); ?>
	</div>
	</fieldset>
</div>