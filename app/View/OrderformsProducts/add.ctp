<div class="orderformsProducts form">
<?php echo $this->Form->create('OrderformsProduct'); ?>
	<fieldset>
		<legend><?php echo __('Add Orderforms Product'); ?></legend>
	<?php
		echo $this->Form->input('orderform_id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('amount');
		echo $this->Form->input('price');
		echo $this->Form->input('tva');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Orderforms Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orderforms'), array('controller' => 'orderforms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderform'), array('controller' => 'orderforms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
