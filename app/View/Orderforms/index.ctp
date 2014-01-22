<div class="orderforms index">
	<h2><?php echo __('Orderforms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('service_id'); ?></th>
			<th><?php echo $this->Paginator->sort('etat'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($orderforms as $orderform): ?>
	<tr>
		<td><?php echo h($orderform['Orderform']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($orderform['User']['name'], array('controller' => 'users', 'action' => 'view', $orderform['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($orderform['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $orderform['Customer']['id'])); ?>
		</td>
		<td><?php echo h($orderform['Orderform']['date']); ?>&nbsp;</td>
		<td><?php echo h($orderform['Orderform']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($orderform['Service']['name'], array('controller' => 'services', 'action' => 'view', $orderform['Service']['id'])); ?>
		</td>
		<td><?php echo h($orderform['Orderform']['etat']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $orderform['Orderform']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $orderform['Orderform']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $orderform['Orderform']['id']), null, __('Are you sure you want to delete # %s?', $orderform['Orderform']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Orderform'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
