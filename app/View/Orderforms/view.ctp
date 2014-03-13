<?php echo $this->Html->addCrumb(__('Gestion des bons de commande'), array('controller'=>'orderforms','action'=>'index')); ?>
<?php echo $this->Html->addCrumb(__('Aperçu d\'un bon de commande'), array('controller'=>'orderforms','action'=>'view',$this->request->pass[0])); ?>
<div class="title">
	<h2><i class="icon-white icon-barcode"></i>&nbsp;&nbsp;<?php echo __('Aperçu d\'un bon de commande'); ?></h2>
</div>
<div class="action orderforms">
	<div class="head upper big">
		Bon de commande
	</div>
	<br /><br /><br /><br />
	<div class="correspondance">
		<div class="w30 inline adresse">
			<?php
				echo Configure::read('Default.entity');
			?><br /><br />
			<?php
				echo Configure::read('Default.address');
			?><br />
			<?php
				echo Configure::read('Default.complementadress');
			?><br /><br />
			<?php
				echo Configure::read('Default.zipcode');
			?> <?php
				echo Configure::read('Default.city');
			?>
		</div>
		<div class="w30 inline">
		</div>
		<div class="w39 inline">
			<p>
				<?php echo $orderform['Customer']['name']; ?><br /><br />
				<?php echo $orderform['Customer']['address']; ?><br /><br />
				<?php echo $orderform['Customer']['zipcode']; ?> <?php echo $orderform['Customer']['city']; ?>
		</div>
		<div class="cb"></div>
	</div>
</div>
DEBUG
<?php
	debug($orderform);
?>