<?php
	$s = $this->Session->read('Auth');
	$user= $s['User'];
?>
<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
	<i class="icon-user"></i><span class="hidden-phone"> <?php echo $user['nom'].' '.$user['prenom']; ?></span>
	<span class="caret"></span>
</a>
<ul class="dropdown-menu">
	<li>
		<?php echo $this->Html->link(
								'Mon profil',
								array(
										'controller'=>'users',
										'action'=>'profile'
									)
								); 
							?>
	</li>
	<li class="divider"></li>
	<li><?php echo $this->Html->link('Se deconnecter',array('controller'=>'users','action'=>'logout')); ?></li>
</ul>