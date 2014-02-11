<?php echo $this->Html->addCrumb('Gestion des services', array('controller'=>'services','action'=>'index')); ?>
<div class="box-header well" data-original-title>
	<h2><i class="icon-wrench"></i> <?php echo __('Gestion des services'); ?></h2>
</div>	
<div class="box-content">
<div class="span4">
<?php echo $this->Html->link('<i class="icon-home icon-white"></i> Retour à la page principale', '/',array('escape'=>false,'class'=>"btn btn-success")); ?>
</div>
<div class="span4"></div>
<div class="span4">
<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Ajouter un nouveau service', array('action' => 'add'),array('escape'=>false,'class'=>"btn btn-success")); ?>
</div>
<hr/>
	<table class="table table-striped table-bordered bootstrap-datatable datatable">
	<thead>
		<tr>
				<th>Nom du service</th>
				<th>Edition</th>
				<th>Suppression</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($services as $service): ?>
		<tr>
			<td><?php echo $service['Service']['name']; ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $service['Service']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $service['Service']['id']), null, __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	</table>
</div>
