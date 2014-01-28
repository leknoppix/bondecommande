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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->Html->css(
			array('bootstrap-cerulean.css',
				"bootstrap-responsive.css",
				"charisma-app.css",
				"jquery.cleditor.css")
			);
	?>
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="container">
		<div id="content">
				<div class="navbar">
					<div class="navbar-inner">
						<div class="container-fluid">
							<!-- theme selector ends -->
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							<?php echo $this->Html->link('Bon de commande','/backoffice',array('class'=>"brand")); ?>
							<!-- user dropdown starts -->
							<div class="btn-group pull-right" >
							<?php echo $this->element('menu'); ?>
							</div>
							<!-- user dropdown ends -->
						</div>
					</div>
				</div>
		</div>
	</div>
	<hr />
	<div class="container-fluid">
		<div class="row-fluid" >		
			<!-- left menu starts -->
			<div class="span3 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">MENU</li>
						<li>
							<a class="ajax-link" href="index.html"><i class="icon-home"></i><span class="hidden-tablet"> Gestion des bons de commande</span></a>
						</li>
						<li>
							<?php echo $this->Html->link('<i class="icon-user"></i>&nbsp;<span class="hidden-tablet">Gestion des membres</span>',array('controller'=>'users','action'=>'index'),array('escape'=>false,'class'=>'ajax-link')); ?>
						</li>
						<li>
							<?php echo $this->Html->link('<i class="icon-user"></i>&nbsp;<span class="hidden-tablet">Gestion des services</span>',array('controller'=>'services','action'=>'index'),array('escape'=>false,'class'=>'ajax-link')); ?>
						</li>
						<li>
							<?php echo $this->Html->link('<i class="icon-user"></i>&nbsp;<span class="hidden-tablet">Gestion des fournisseurs</span>',array('controller'=>'customers','action'=>'index'),array('escape'=>false,'class'=>'ajax-link')); ?>
						</li>
					</ul>
				</div>
			</div>
			<div id="content" class="span9">
				<div class="breadcrumb">
					<?php echo $this->Html->getCrumbs(' <span class="divider">/</span> ', 'Accueil'); ?><span class="divider">/</span>
				</div>
				<?php echo $this->Session->flash(); ?>
				<div class="row-fluid sortable">	
					<div class="box span12">
						<?php echo $this->fetch('content'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<?php echo $this->fetch('script'); ?>
	<?php echo $this->Html->script(
		array(
			"jquery-1.7.2.min.js",
			"jquery-ui-1.8.21.custom.min.js",
			"bootstrap-transition.js",
			"bootstrap-alert.js",
			"bootstrap-modal.js",
			"bootstrap-dropdown.js",
			"bootstrap-scrollspy.js",
			"bootstrap-tab.js",
			"jquery.cleditor.min.js",
			"main.js"
		)
	);
	?>
</body>
</html>
