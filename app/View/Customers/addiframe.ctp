<div class="title">
		<h2><i class="icon-white icon-camera"></i>&nbsp;&nbsp;<?php echo __('Ajouter un fournisseur'); ?></h2>
</div>	
<div class="action">
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
				echo $this->Form->input('name',array('label'=>__('Nom du fournisseur'),'class'=>'founisseurclass'));
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
	<?php echo $this->Form->end(array('label'=>__('Ajouter ce fournisseur'),'class'=>'btn btn-primary submit')); ?>
</div>
<?php
	$this->Html->css('fancy/jquery.fancybox.css', null, array('inline' => false));
	$this->Html->script('fancy/jquery.fancybox.js', array('inline' => false));
?>
<?php if($this->request->is('post')==true) { ?>
<?php
	$this->Html->scriptStart(array('inline' => false));
		echo "$(function() {\n";
		echo 'parent.$("#OpenformCustomerId").append(new Option("'.$this->request->data['Customer']['name'].'","'.$this->request->data['Customer']['id'].'"));'."\n";
		echo 'parent.$(\'#OpenformCustomerId option[value='.$this->request->data['Customer']['id'].']\').attr(\'selected\',\'selected\');'."\n";
		echo "\tparent.$.fancybox.close(true);\n";
		echo "});\n";
	$this->Html->scriptEnd();
?>
<?php
	}
?>