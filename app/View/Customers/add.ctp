<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend>Ajouter ce fournisseur</legend>
		<div class="tabs">
		<ul>
			<li><a href="#identite">Identité</a></li>
			<li><a href="#correspondance">Information de correspondance</a></li>
		</ul>
		<div class="identite">
			<?php
				echo $this->Form->input('name',array('label'=>'Nom du fournisseur'));
				echo $this->Form->input('address',array('label'=>'Adresse du fournisseur'));
				echo $this->Form->input('zipcode',array('label'=>'Code postal'));
				echo $this->Form->input('city',array('label'=>'Ville'));
			?>
		</div>
		<div class="correspondance">
			<?php
				echo $this->Form->input('tel',array('label'=>'Téléphone','required'=>false));
				echo $this->Form->input('fax',array('label'=>'Fax','required'=>false));
				echo $this->Form->input('mail',array('label'=>'Adresse mail','required'=>false));
				echo $this->Form->input('siteinternet',array('label'=>'Site internet','required'=>false));
			?>
		</div>
	</div>
	</fieldset>
<?php echo $this->Form->end('Ajouter ce fournisseur'); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
	</ul>
</div>
