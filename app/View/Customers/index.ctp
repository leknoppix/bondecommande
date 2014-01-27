<div class="customers index">
	<h2><?php echo __('Customers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>NOM DU FOURNISSEUR</th>
			<th>ADRESSE</th>
			<th>CODE POSTAL</th>
			<th>VILLE</th>
			<th class="actions">ACTIONS</th>
	</tr>
	<?php foreach ($customers as $customer): ?>
	<tr>
		<td><?php echo $customer['Customer']['name']; ?></td>
		<td><?php echo $customer['Customer']['address']; ?></td>
		<td><?php echo $customer['Customer']['zipcode']; ?></td>
		<td><?php echo $customer['Customer']['city']; ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customer['Customer']['id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?></li>
	</ul>
</div>
