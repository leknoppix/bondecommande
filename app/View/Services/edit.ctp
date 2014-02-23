<?php echo $this->Html->addCrumb(__('Gestion des services'), array('controller'=>'services','action'=>'index')); ?>
<?php echo $this->Html->addCrumb(__('Modifier un service'), array('controller'=>'services','action'=>'edit',$this->request->pass[0])); ?>
<div class="title">
	<h2><i class="icon-white icon-wrench"></i>&nbsp;&nbsp;<?php echo __('Ajouter un nouveau service'); ?></h2>
</div>	
<div class="action">
	<table>
		<tr>
			<td>
				<?php echo $this->Html->link('<i class="icon-home icon-white"></i>&nbsp;&nbsp;'.__('Retour à la page principale'), '/',array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
			<td>
				<?php echo $this->Html->link('<i class="icon-circle-arrow-left icon-white"></i>&nbsp;&nbsp;'.__('Retour à la page précédente'), array('action' => 'index'),array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
		</tr>
	</table>
	<div class="cb"></div>
	<div id="tabs" class="services">
		<?php echo $this->Form->create('Service'); ?>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name',array('label'=>__('Nom du service'),'class'=>'w30'));
		?>
	</div>
	<?php echo $this->Form->end(array('label'=>__('Modifier ce service'),'class'=>'btn btn-primary submit w100')); ?>
</div>