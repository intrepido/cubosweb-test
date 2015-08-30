<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$Description = __d('cake_dev', 'CUBOS WEB');
?>
<html lang="en">
<head>
<meta charset="utf-8">
<?php //echo $this->Html->charset("utf-8"); ?>
<title><?php echo "CUBOS WEB"; ?></title>
<?php
echo $this->Html->script('jquery');
echo $this->Html->script('bootstrap');
echo $this->Html->script('general');

echo $this->Html->meta('icon');

echo $this->Html->css('bootstrap');
echo $this->Html->css('custom-styles');

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
<style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="brand" href="#">CUBOS WEB</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="active"><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'display', 'home'));?></li>
						<li class="active"><?php echo $this->Html->link('Estadisticas', array('controller' => 'estadisticas', 'action' => 'reporte'));?></li>						
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div id="container" class="container">

		<div id="header"></div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth', array(
					'element' => 'alert',
					'params' => array('plugin' => 'TwitterBootstrap'),
	)); ?>


			<?php echo $this->fetch('content'); ?>

		</div>
		

	</div>

</body>
</html>
