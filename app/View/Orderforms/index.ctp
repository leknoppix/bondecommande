<?php echo $this->Html->addCrumb(__('Gestion des bons de commande'), array('controller' => 'orderforms', 'action' => 'index')); ?>
<div class="title">
	<h2><i class="icon-white icon-barcode"></i>&nbsp;&nbsp;<?php echo __('Gestion des bons de commande'); ?></h2>
</div>	
<div class="action">
	<table class="w100">
		<tr>
			<td class="w50">
				<?php echo $this->Html->link('<i class="icon-home icon-white"></i>&nbsp;&nbsp;' . __('Retour à la page principale'), '/', array('escape' => false, 'class' => "btn btn-info")); ?>
			</td>
			<td class="w50">
				<?php echo $this->Html->link('<i class="icon-plus icon-white"></i>&nbsp;&nbsp;' . __('Ajouter un nouveau bon de commande'), array('action' => 'add'), array('escape' => false, 'class' => "btn btn-info")); ?>
			</td>
		</tr>
	</table>
	<div class="cb"></div>
	<table class="orderforms w100">
	<tr>
			<th class="w15"><?php echo __('Numéro de commande'); ?></th>
			<th class="w15"><?php echo __('Fournisseur'); ?></th>
			<th class="w15"><?php echo __('Date de la commande'); ?></th>
			<th class="w15"><?php echo __('Service'); ?></th>
			<th class="w10"><?php echo __('Aperçu'); ?></th>
			<th class="w5"><?php echo __('PDF'); ?></th>
			<th class="w5"><?php echo __('Email'); ?></th>
			<th class="w10"><?php echo __('Edition'); ?></th>
			<th class="w10"><?php echo __('Suppression'); ?></th>
	</tr>
	<?php
		foreach ($orderforms as $orderform) {
	?>
	<tr <?php if ($orderform['Orderform']['archived'] == 1) { echo "class=\"archived\""; } ?>>
		<td>
			<?php echo $orderform['Orderform']['numorder']; ?>
		</td>
		<td><?php echo $orderform['Customer']['name']; ?></td>
		<td><?php echo $this->Time->format('d/m/Y', $orderform['Orderform']['invoice']); ?></td>
		<td>
			<?php echo $orderform['Service']['name']; ?>
		</td>
		<td>
			<?php echo $this->Html->link('<i class="icon-search icon-white"></i>&nbsp;' . __('Aperçu'), array('action' => 'view', $orderform['Orderform']['id']), array('escape' => false, 'class' => "btn btn-info")); ?>
		</td>
		<td>
			<?php echo $this->Html->link('<i class="icon-book icon-white"></i>&nbsp;' . __('PDF'), array('action' => 'pdf', $orderform['Orderform']['id']), array('escape' => false, 'class' => "btn btn-info")); ?>
		</td>
		<td>
			<?php echo $this->Html->link('<i class="icon-envelope icon-white"></i>&nbsp;' . __('Email'), array('action' => 'mail', $orderform['Orderform']['id']), array('escape' => false, 'class' => "btn btn-info")); ?>
		</td>
		<td>
			<?php echo $this->Html->link('<i class="icon-edit icon-white"></i>&nbsp;' . __('Edition'), array('action' => 'edit', $orderform['Orderform']['id']), array('escape' => false, 'class' => "btn btn-info")); ?>
		</td>
		<td>
			<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i>&nbsp;' . __('Suppression'), array('action' => 'delete', $orderform['Orderform']['id']), array('escape' => false, 'class' => "btn btn-danger"), __('Êtes vous sûr de vouloir supprimer l\'entré # %s?', $orderform['Orderform']['id'])); ?>
		</td>
	</tr>
	<?php
		}
	?>
	</table>
</div>