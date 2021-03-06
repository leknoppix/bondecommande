<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('Application bon de commande'); ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->Html->css(
			array('style')
			);
		echo $this->fetch('css');
		echo $this->Html->css('jquery-ui.css');
	?>
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="container">
		<header>
			<?php echo $this->element('menu'); ?>
		</header>
		<div id="sidebar">	
				<ul>
					<li>
						<?php echo $this->Html->link('<i class="icon-white icon-barcode"></i>&nbsp;&nbsp;<span class="hidden-tablet">' . __('Gestion des bons de commande') . '</span>', array('controller' => 'orderforms', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link')); ?>
					</li>
					<li>
						<?php echo $this->Html->link('<i class="icon-white icon-user"></i>&nbsp;&nbsp;<span class="hidden-tablet">' . __('Gestion des membres') . '</span>', array('controller' => 'users', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link')); ?>
					</li>
					<li>
						<?php echo $this->Html->link('<i class="icon-white icon-wrench"></i>&nbsp;&nbsp;<span class="hidden-tablet">' . __('Gestion des services') . '</span>', array('controller' => 'services', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link')); ?>
					</li>
					<li>
						<?php echo $this->Html->link('<i class="icon-white icon-camera"></i>&nbsp;&nbsp;<span class="hidden-tablet">' . __('Gestion des fournisseurs') . '</span>', array('controller' => 'customers', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link')); ?>
					</li>
				</ul>
		</div>
			<div id="content">
				<?php echo $this->Session->flash(); ?>
				<div class="breadcrumb">
					<?php echo $this->Html->getCrumbs('&nbsp;&nbsp;<span class="divider">/</span>&nbsp;&nbsp;', __('Accueil')); ?>
				</div>
				<div class="bloc">
					<div class="content">
						<?php echo $this->fetch('content'); ?>
						<div class="cb"></div>
					</div>
				</div>
				<div class="bloc">
					<div class="content">
						<?php echo $this->element('sql_dump'); ?>
						<div class="cb"></div>
					</div>
				</div> 
			</div>
		</div>
	<?php echo $this->Html->script(
		array(
			"jquery.min.js",
			"jquery-ui.js",
		)
	);
	echo $this->fetch('script');
	echo $this->Html->script("main.js");
	?>
</body>
</html>
