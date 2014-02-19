<?php echo $this->Html->addCrumb('Gestion des fournisseurs', array('controller'=>'customers','action'=>'index')); ?>
<?php echo $this->Html->addCrumb('Ajouter un fournisseur', array('controller'=>'customers','action'=>'add')); ?>
<div class="title">
	<h2><i class="icon-white icon-camera"></i> <?php echo __('Ajouter un fournisseur'); ?></h2>
</div>	
<div class="action">
	<table>
		<tr>
			<td>
				<?php echo $this->Html->link('<i class="icon-home icon-white"></i> Retour à la page principale', '/',array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
			<td>
				<?php echo $this->Html->link('<i class="icon-circle-arrow-left icon-white"></i> Retour à la page précédente', array('action' => 'index'),array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
		</tr>
	</table>
	<div class="cb"></div>
	<?php 
				echo $this->Form->create('Customer'); 
			?>
	<div id="tabs" class="customers">
		<ul class="tabs">
			<li><a href="#identite">Identité</a></li>
			<li><a href="#correspondance">Information de correspondance</a></li>
		</ul>
		<div class="tab-pane" id="identite">
			<?php
				echo $this->Form->input('name',array('label'=>'Nom du fournisseur'));
			?>
			<div class="cb"></div>
			<?php
				echo $this->Form->input('address',array('label'=>'Adresse du fournisseur','type'=>'textarea'));
			?>
			<div class="cb"></div>
			<?php
				echo $this->Form->input('zipcode',array('label'=>'Code postal'));
			?>
			<div class="cb"></div>
			<?php
				echo $this->Form->input('city',array('label'=>'Ville',));
			?>
		</div>
		<div class="tab-pane" id="correspondance">
			<?php
				echo $this->Form->input('tel',array('label'=>'Téléphone','required'=>false,'class'=>"span8"));
				echo $this->Form->input('fax',array('label'=>'Fax','required'=>false,'class'=>"span8"));
				echo $this->Form->input('mail',array('label'=>'Adresse mail','required'=>false,'class'=>"span8"));
				echo $this->Form->input('siteinternet',array('label'=>'Site internet','required'=>false,'class'=>"span8"));
			?>
		</div>
	</div>
	<div class="form-actions">
		<?php echo $this->Form->end(array('label'=>'Ajouter ce fournisseur','class'=>'btn btn-primary')); ?>
	</div>
</div>