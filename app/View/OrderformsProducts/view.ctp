<div class="orderformsProducts view">
<h2><?php echo __('Orderforms Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($orderformsProduct['OrderformsProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orderform'); ?></dt>
		<dd>
			<?php echo $this->Html->link($orderformsProduct['Orderform']['name'], array('controller' => 'orderforms', 'action' => 'view', $orderformsProduct['Orderform']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($orderformsProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $orderformsProduct['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($orderformsProduct['OrderformsProduct']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($orderformsProduct['OrderformsProduct']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tva'); ?></dt>
		<dd>
			<?php echo h($orderformsProduct['OrderformsProduct']['tva']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orderforms Product'), array('action' => 'edit', $orderformsProduct['OrderformsProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orderforms Product'), array('action' => 'delete', $orderformsProduct['OrderformsProduct']['id']), null, __('Are you sure you want to delete # %s?', $orderformsProduct['OrderformsProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderforms Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderforms Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderforms'), array('controller' => 'orderforms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderform'), array('controller' => 'orderforms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
