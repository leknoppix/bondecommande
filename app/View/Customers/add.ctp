<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('zipcode');
		echo $this->Form->input('city');
		echo $this->Form->input('tel');
		echo $this->Form->input('fax');
		echo $this->Form->input('mail');
		echo $this->Form->input('siteinternet');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
	</ul>
</div>
