<div class="services form">
<?php echo $this->Form->create('Service'); ?>
	<fieldset>
		<legend>Modifier le service</legend>
	<?php
	echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end('Enregistrer la modification'); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Service.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Service.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?></li>
	</ul>
</div>
