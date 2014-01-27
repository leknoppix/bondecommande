<div class="services index">
	<h2><?php echo __('Services'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>NOM DU SERVICE</th>
			<th class="actions">ACTION</th>
	</tr>
	<?php foreach ($services as $service): ?>
	<tr>
		<td><?php echo h($service['Service']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $service['Service']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $service['Service']['id']), null, __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link('NOUVEAU SERVICE', array('action' => 'add')); ?></li>
	</ul>
</div>
