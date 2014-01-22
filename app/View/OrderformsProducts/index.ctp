<div class="orderformsProducts index">
	<h2><?php echo __('Orderforms Products'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('orderform_id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('tva'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($orderformsProducts as $orderformsProduct): ?>
	<tr>
		<td><?php echo h($orderformsProduct['OrderformsProduct']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($orderformsProduct['Orderform']['name'], array('controller' => 'orderforms', 'action' => 'view', $orderformsProduct['Orderform']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($orderformsProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $orderformsProduct['Product']['id'])); ?>
		</td>
		<td><?php echo h($orderformsProduct['OrderformsProduct']['amount']); ?>&nbsp;</td>
		<td><?php echo h($orderformsProduct['OrderformsProduct']['price']); ?>&nbsp;</td>
		<td><?php echo h($orderformsProduct['OrderformsProduct']['tva']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $orderformsProduct['OrderformsProduct']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $orderformsProduct['OrderformsProduct']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $orderformsProduct['OrderformsProduct']['id']), null, __('Are you sure you want to delete # %s?', $orderformsProduct['OrderformsProduct']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Orderforms Product'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Orderforms'), array('controller' => 'orderforms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderform'), array('controller' => 'orderforms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
