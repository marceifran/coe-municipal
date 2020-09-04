<?php

define('EMAIL_FOR_REPORTS', 'quilinomunicipalidad.sug@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Gracias por rellenar el formulario.');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-dark.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-dark.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-dark" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Declaracion Jurada (tipo2)</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="Nombre y Apellido"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input1" placeholder="Dni"/><span class="icon-place"></span></div></div>
	<div class="element-email<?php frmd_add_class("email"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="email" name="email" value="" placeholder="Email"/><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title"></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" placeholder="Domicilio y Barrio"></textarea><span class="icon-place"></span></div></div>
	<div class="element-date<?php frmd_add_class("date1"); ?>"><label class="title"></label><div class="item-cont"><input class="large" data-format="yyyy-mm-dd" type="date" name="date1" placeholder="Fecha de Salida"/><span class="icon-place"></span></div></div>
	<div class="element-date<?php frmd_add_class("date"); ?>"><label class="title"></label><div class="item-cont"><input class="large" data-format="yyyy-mm-dd" type="date" name="date" placeholder="Fecha de llegada"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input2"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input2" placeholder="Destino"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input3"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input3" placeholder="Motivo del Viaje"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input4"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input4" placeholder="A donde va?"/><span class="icon-place"></span></div></div>
	<div class="element-checkbox<?php frmd_add_class("checkbox"); ?>"><label class="title">Viaja acompañado?</label>		<div class="column column1"><label><input type="checkbox" name="checkbox[]" value="Si"/ ><span>Si</span></label><label><input type="checkbox" name="checkbox[]" value="No"/ ><span>No</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-textarea<?php frmd_add_class("textarea1"); ?>"><label class="title"></label><div class="item-cont"><textarea class="medium" name="textarea1" cols="20" rows="5" placeholder="Nombres y dni de los acompañantes"></textarea><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea2"); ?>"><label class="title"></label><div class="item-cont"><textarea class="medium" name="textarea2" cols="20" rows="5" placeholder="Marca y modelo del vehiculo"></textarea><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input5"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input5" placeholder="Patente"/><span class="icon-place"></span></div></div>
	<div class="element-email<?php frmd_add_class("email1"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="email" name="email1" value="" placeholder="Email"/><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea3"); ?>"><label class="title"></label><div class="item-cont"><textarea class="medium" name="textarea3" cols="20" rows="5" placeholder="Observaciones"></textarea><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Enviar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-dark.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>