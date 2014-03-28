<?php echo $this->Html->addCrumb('Gestion des fournisseurs', array('controller' => 'customers', 'action' => 'index')); ?>
<?php echo $this->Html->addCrumb('Ajouter un fournisseur', array('controller' => 'customers', 'action' => 'add')); ?>
	<div class="title">
		<h2><i class="icon-white icon-camera"></i>&nbsp;&nbsp;<?php echo __('Ajouter un fournisseur'); ?></h2>
	</div>	
	<div class="action">
		<table class="w100">
			<tr>
				<td>
					<?php
						echo $this->Html->link('<i class="icon-white icon-home"></i> ' . __('Retour à la page principale'), '/', array('escape' => false, 'class' => "btn btn-info"));
					?>
				</td>
				<td>
					<?php
						echo $this->Html->link('<i class="icon-circle-arrow-left icon-white"></i> ' . __('Retour à la page précédente'), array('action' => 'index'), array('escape' => false, 'class' => "btn btn-info"));
					?>
				</td>
			</tr>
		</table>
	<div class="cb"></div>
	<?php 
		echo $this->Form->create('Customer');
	?>
	<div id="tabs" class="customers">
		<ul class="tabs">
			<li><a href="#identite"><?php echo __('Identité'); ?></a></li>
			<li><a href="#correspondance"><?php echo __('Information de correspondance'); ?></a></li>
		</ul>
		<div class="cb"></div>
		<div class="tab-pane" id="identite">
			<?php
				echo $this->Form->input('name', array('label' => __('Nom du fournisseur'), 'class' => 'w30'));
			?>
			<div class="cb"></div>
			<?php
				echo $this->Form->input('address', array('label' => __('Adresse du fournisseur'), 'class' => 'w30', 'type' => 'textarea'));
			?>
			<div class="cb"></div>
			<?php
				echo $this->Form->input('zipcode', array('label' => __('Code postal'), 'class' => 'w30'));
			?>
			<div class="cb"></div>
			<?php
				echo $this->Form->input('city', array('label' => __('Ville'), 'class' => 'w30'));
			?>
		</div>
		<div class="tab-pane" id="correspondance">
			<?php
				echo $this->Form->input('tel', array('label' => __('Téléphone'), 'required' => false, 'class' => 'w30'));
				echo $this->Form->input('fax', array('label' => __('Fax'), 'required' => false, 'class' => 'w30'));
				echo $this->Form->input('mail', array('label' => __('Adresse mail'), 'required' => false, 'class' => 'w30'));
				echo $this->Form->input('siteinternet', array('label' => __('Site internet'), 'required' => false, 'class' => 'w30'));
			?>
		</div>
	</div>
	<?php
		echo $this->Form->end(array('label' => __('Ajouter ce fournisseur'), 'class' => 'btn btn-primary submit w100'));
	?>
</div>