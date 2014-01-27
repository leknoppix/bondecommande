<div class="services form">
<?php echo $this->Form->create('Service'); ?>
	<fieldset>
		<legend>Ajouter un nouveau service</legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end('Ajouter ce service'); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?></li>
	</ul>
</div>
