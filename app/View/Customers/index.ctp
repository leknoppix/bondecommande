<?php echo $this->Html->addCrumb(__('Gestion des fournisseurs'), array('controller'=>'customers','action'=>'index')); ?>
<div class="title">
	<?php echo __('Gestion des fournisseurs'); ?>
</div>
<div class="action">
	<table>
		<tr>
			<td>
				<?php echo $this->Html->link('<i class="icon-white icon-home"></i> Retour à la page principale', '/',array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
			<td>

			</td>
			<td>
				<?php echo $this->Html->link('<i class="icon-white icon-plus"></i> Ajouter un nouvel fournisseur', array('action' => 'add'),array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
		</tr>
	</table>
	<div class="cb"></div>
	<table class="customers">
		<thead>
			<tr>
				<th><?php echo __('Nom du fournisseur'); ?></th>
				<th><?php echo __('Ville'); ?></th>
				<th><?php echo __('Edition'); ?></th>
				<th><?php echo __('Suppression'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($customers as $customer): ?>
			<tr>
				<td><?php echo $customer['Customer']['name']; ?></td>
				<td><?php echo $customer['Customer']['city']; ?></td>
				<td>
					<?php echo $this->Html->link('<i class="icon-white icon-edit"></i> '.__('Edition'), array('action' => 'edit', $customer['Customer']['id']),array('escape'=>false,'class'=>"btn btn-info")); ?>
				</td>
				<td>
					<?php echo $this->Form->postLink('<i class="icon-white icon-trash"></i> '.__('Suppression'), array('action' => 'delete', $customer['Customer']['id']), array('escape'=>false,'class'=>"btn btn-danger"), __('Êtes-vous sûr de supprimer l\'entrée n° # %s?', $customer['Customer']['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>