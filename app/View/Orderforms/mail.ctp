<?php echo $this->Html->addCrumb(__('Gestion des bons de commande'), array('controller' => 'orderforms', 'action' => 'index')); ?>
<?php echo $this->Html->addCrumb(__('Envoie du bon de commande par email'), array('controller' => 'orderforms', 'action' => 'mail', $this->request->pass[0])); ?>
<div class="title">
	<h2><i class="icon-white icon-barcode"></i>&nbsp;&nbsp;<?php echo __('Envoie du bon de commande par email'); ?></h2>
</div>	
<div class="action">
	<table class="w100">
		<tr>
			<td>
				<?php echo $this->Html->link('<i class="icon-home icon-white"></i>&nbsp;&nbsp;' . __('Retour à la page principale'), '/', array('escape' => false, 'class' => "btn btn-info")); ?>
			</td>
			<td>
				<?php echo $this->Html->link('<i class="icon-circle-arrow-left icon-white"></i>&nbsp;&nbsp;' . __('Retour à la page précédente'), array('action' => 'index'), array('escape' => false, 'class' => "btn btn-info")); ?>
			</td>
		</tr>
	</table>
	<div class="cb"></div>
	<div id="tabs" class="orderform">
		<?php 
			echo $this->Form->create('Orderform');
		?>
		<?php
			//on indique le numéro provisoire du bon de commande
			echo $this->Form->input('destinataire',
				array(
					'label' => __('Adresse mail du destinataire'),
					'readonly' => true,
					'class' => 'w40',
					'value' => $orderform['Customer']['email']
				)
			);
		?>
		<?php
			//on indique le numéro provisoire du bon de commande
			echo $this->Form->input('objet',
				array(
					'label' => __('Sujet du mail'),
					'class' => 'w40',
					'value' => Configure::read('Default.entity') . ': bon de commande n° ' . $orderform['Orderform']['numorder'] 
				)
			);
		?>
		<?php
			//on indique le numéro provisoire du bon de commande
			echo $this->Form->input('message',
				array(
					'label' => __('Contenu du message'),
					'type' => 'textarea',
					'class' => 'w40',
					'value' => "Bonjour,\n\nVous trouverez ci-joint le bon de commande n° ". $orderform['Orderform']['numorder'] . "\n\nCordialement, \n\n" . $orderform['User']['signature']
				)
			);
		?>
		<div class="cb"></div>
	</div>
	<?php echo $this->Form->end(array('label' => __('Envoyer ce mail'), 'class' => 'btn btn-primary submit w100','disabled'=>'disabled')); ?>
</div>