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
        <title>Bon de Commande
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
                echo $this->Html->meta('icon');
                echo $this->fetch('meta');
                echo $this->fetch('css');
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
        <div class="container-fluid">
                <div class="row-fluid">
                
                        <div class="row-fluid">
                                <div class="span12 center login-header">
                                        <h2>Application bon de commande</h2>
                                </div>
                        </div>
                </div>
                <div class="row-fluid">
                        <div class="well span5 center login-box">
                                <?php echo $this->Session->flash(); ?>
                                <?php echo $this->fetch('content'); ?>
                        </div>
                </div>
        </div>
        <?php echo $this->Html->link(
                $this->Html->image('cake.power.gif', array('alt' => 'Créer grâce au Framework CakePHP', 'border' => '0')),
                                        'http://www.cakephp.org/',
                array('target' => '_blank', 'escape' => false)
        );
        ?>
        <?php echo $this->element('sql_dump'); ?>
        <?php echo $this->fetch('script'); ?>
        <?php echo $this->Html->script(
                array(
                        "jquery-1.7.2.min.js",
                        "jquery-ui-1.8.21.custom.min.js",
                        "bootstrap-transition.js",
                        "bootstrap-alert.js",
                        "js/bootstrap-modal.js",
                        "bootstrap-dropdown.js",
                        "bootstrap-scrollspy.js",
                        "bootstrap-tab.js",
                        "jquery.cleditor.min.js"
                )
        );
        ?>
</body>
</html>