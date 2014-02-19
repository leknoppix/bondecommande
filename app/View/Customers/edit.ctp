<?php echo $this->Html->addCrumb(__('Gestion des fournisseurs'), array('controller'=>'customers','action'=>'index')); ?>
<?php echo $this->Html->addCrumb(__('Modifier un fournisseur'), array('controller'=>'customers','action'=>'edit',$this->request->pass[0])); ?>
<div class="title">
	<h2><i class="icon-white icon-camera"></i>&nbsp;&nbsp;<?php echo __('Modifier un fournisseur'); ?></h2>
</div>
<div class="action">
	<table>
		<tr>
			<td>
				<?php echo $this->Html->link('<i class="icon-white icon-home"></i> '.__('Retour à la page principale'), '/',array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
			<td>
				<?php echo $this->Html->link('<i class="icon-circle-arrow-left icon-white"></i> '.__('Retour à la page précédente'), array('action' => 'index'),array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
		</tr>
	</table>
	<div class="cb"></div>
			<?php 
				echo $this->Form->create('Customer'); 
			?>
			<?php echo $this->Form->input('id'); ?>
	<div id="tabs" class="customers">
		<ul class="tabs">
			<li><a href="#identite"><?php echo __('Identité'); ?></a></li>
			<li><a href="#correspondance"><?php echo __('Information de correspondance'); ?></a></li>
		</ul>
		<div class="cb"></div>
		<div class="tab-pane" id="identite">
			<?php
				echo $this->Form->input('name',array('label'=>__('Nom du fournisseur')));
			?>
			<div class="cb"></div>
			<?php
				echo $this->Form->input('address',array('label'=>__('Adresse du fournisseur'),'type'=>'textarea'));
			?>
			<div class="cb"></div>
			<?php
				echo $this->Form->input('zipcode',array('label'=>__('Code postal')));
			?>
			<div class="cb"></div>
			<?php
				echo $this->Form->input('city',array('label'=>__('Ville')));
			?>
		</div>
		<div class="tab-pane" id="correspondance">
			<?php
				echo $this->Form->input('tel',array('label'=>__('Téléphone'),'required'=>false));
				echo $this->Form->input('fax',array('label'=>__('Fax'),'required'=>false));
				echo $this->Form->input('mail',array('label'=>__('Adresse mail'),'required'=>false));
				echo $this->Form->input('siteinternet',array('label'=>__('Site internet'),'required'=>false));
			?>
		</div>
	</div>
	<?php echo $this->Form->end(array('label'=>__('Modifier ce fournisseur'),'class'=>'btn btn-primary submit')); ?>
</div>