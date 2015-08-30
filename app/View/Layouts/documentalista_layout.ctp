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

$lilDBIDescription = __d('cake_dev', 'LILDBI: Biblioteca Virtual de Salud');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $this->Html->charset("utf-8"); ?>
<title><?php echo "LILDBI WEB"; ?>
</title>
<?php
echo $this->Html->script('jquery');
echo $this->Html->script('bootstrap');
echo $this->Html->script('bootstrap-datepicker');
echo $this->Html->script('codifiers');
echo $this->Html->script('assistant');
echo $this->Html->script('documents');


echo $this->Html->meta('icon');

echo $this->Html->css('bootstrap');
echo $this->Html->css('datepicker');
echo $this->Html->css('custom-styles');


echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');


?>

</head>

<body>
	<div id="container" class="container" style="margin-top: 60px;">
		<div id="header">		
			<div class="row-fluid">
				<div class="span12">
					<div class="navbar navbar-inverse navbar-fixed-top">
						<div class="navbar-inner">
							<div class="container">
								<?php echo $this->Html->link('LiLDBI Web', array('controller' => 'pages', 'action' => 'display', 'home'), array('class' => 'brand')); ?>
								<div class="nav-collapse collapse navbar-responsive-collapse">
									<ul class="nav">
										<li class="dropdown"><a data-toggle="dropdown"
											class="dropdown-toggle" href="#">Documentos <b class="caret"></b>
										</a>
											<ul class="dropdown-menu">
												<li class="dropdown-submenu"><a tabindex="-1" href="#">Nuevo</a>
													<ul class="dropdown-menu">
														<li><?php echo $this->Html->link('Sin Indizacion', array('controller'=>'documents', 'action'=>'add', 'sin_indizacion')); ?>
														</li>
														<li><?php echo $this->Html->link('Con Indizacion', array('controller'=>'documents', 'action'=>'add', 'con_indizacion')); ?>
														</li>
													</ul>
												</li>
												<li><a href="#">Editar</a></li>
												<li><a href="#">Indexar</a></li>
												<li><a href="#">Certificar</a></li>
											</ul>
										</li>
										<li class="dropdown"><a data-toggle="dropdown"
											class="dropdown-toggle" href="#">Utilitarios <b class="caret"></b>
										</a>
											<ul class="dropdown-menu">
												<li><a href="#">Importar</a></li>
												<li><a href="#">Exportar</a></li>
												<li><a href="#">Reorganizar</a></li>
												<li><a href="#">Reinvertir</a></li>
												<li><a href="#">Desbloquear</a></li>
												<li><a href="#">Reiniciar Base</a></li>
											</ul>
										</li>
										<li><a href="#">Configuraci&oacute;n</a></li>
										<li><a href="#">Cambiar Perfil</a></li>
										<li><?php echo $this->Html->link('Salir', array('controller'=>'users', 'action'=>'logout')); ?>
										</li>
										<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
										<li class="divider-vertical"></li>
									</ul>
									<div class="navbar-form pull-right" style="margin-top: 10px;">
										<div class="span20">
											<p style="color: #ffffff;">
												Documentalista:
												<?php echo $current_user['username']; ?>
											</p>
										</div>

									</div>
									</ul>
								</div>
								<!-- /.nav-collapse -->
							</div>
						</div>
						<!-- /navbar-inner -->
					</div>
				</div>
			</div>

		</div>
		<div id="content">


			<?php echo $this->Session->flash('auth', array(
					'element' => 'alert',
					'params' => array('plugin' => 'TwitterBootstrap'),
	)); ?>
			<?php echo $this->Session->flash(); ?>


			<?php echo $this->fetch('content'); ?>


		</div>
		<div id="footer">
			<footer>
			<hr>
				<p height="5" align="center">
					<font face="Verdana" size="1">BIREME/OPS/OMS - Centro
						Latinoamericano y del Caribe de Informaci&oacute;n en Ciencias de
						la Salud</font><br> <font face="Verdana" size="1">LILDBI-Web
							Versi&oacute;n 1.8 - 2013 </font>
				
				</p>
			
			</footer>
		</div>
	</div>
</body>
</html>
