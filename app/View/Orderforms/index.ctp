<?php echo $this->Html->addCrumb(__('Gestion des bons de commande'), array('controller'=>'services','action'=>'index')); ?>
<div class="title">
	<h2><i class="icon-white icon-barcode"></i>&nbsp;&nbsp;<?php echo __('Gestion des bons de commande'); ?></h2>
</div>	
<div class="action">
	<table>
		<tr>
			<td class="w50">
				<?php echo $this->Html->link('<i class="icon-home icon-white"></i>&nbsp;&nbsp;'.__('Retour à la page principale'), '/',array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
			<td class="w50">
				<?php echo $this->Html->link('<i class="icon-plus icon-white"></i>&nbsp;&nbsp;'.__('Ajouter un nouveau bon de commande'), array('action' => 'add'),array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
		</tr>
	</table>
	<div class="cb"></div>
	<table class="orderforms">
	<tr>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('service_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($orderforms as $orderform): ?>
	<tr>
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
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $orderform['Orderform']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $orderform['Orderform']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $orderform['Orderform']['id']), null, __('Are you sure you want to delete # %s?', $orderform['Orderform']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>