<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-metro-black.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-metro-black.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-metro-black" style="background-color:#ffffff;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:800px;min-width:150px" method="post"><div class="title"><h2>Cadastro</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="Nome"><label class="title">Nome<span class="required">*</span></label><input class="large" type="text" name="input" required="required"/></div>
	<div class="element-number<?php frmd_add_class("number"); ?>" title="CPF"><label class="title">CPF<span class="required">*</span></label><input class="small" type="text" min="11" max="11" name="number" required="required" value=""/></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>" title="Email"><label class="title">Email<span class="required">*</span></label><input class="medium" type="text" name="input1" required="required"/></div>
	<div class="element-password<?php frmd_add_class("password"); ?>" title="Senha"><label class="title">Senha<span class="required">*</span></label><input class="medium" type="password" name="password" value="" required="required"/></div>
	<div class="element-phone<?php frmd_add_class("phone"); ?>" title="Telefone"><label class="title">Telefone<span class="required">*</span></label><input class="small" type="tel" pattern="\d{3}-\d{3}-\d{4}" maxlength="24" name="phone" required="required" placeholder="XXX-XXX-XXXX" value=""/></div>
	<div class="element-input<?php frmd_add_class("input2"); ?>" title="Cidade"><label class="title">Cidade<span class="required">*</span></label><input class="large" type="text" name="input2" required="required"/></div>
	<div class="element-input<?php frmd_add_class("input3"); ?>" title="Endereço"><label class="title">Endereço<span class="required">*</span></label><input class="large" type="text" name="input3" required="required"/></div>
	<div class="element-multiple<?php frmd_add_class("multiple"); ?>" title="Estado"><label class="title">Estado<span class="required">*</span></label><div class="small"><select data-no-selected="Nothing selected" name="multiple[]" multiple="multiple" required="required">

		<option value="AC">AC</option>
		<option value="AL">AL</option>
		<option value="AP">AP</option>
		<option value="AM">AM</option>
		<option value="BA">BA</option>
		<option value="CE">CE</option>
		<option value="DF">DF</option>
		<option value="ES">ES</option>
		<option value="GO">GO</option>
		<option value="MA">MA</option>
		<option value="MT">MT</option>
		<option value="MS">MS</option>
		<option value="MG">MG</option>
		<option value="PA">PA</option>
		<option value="PB">PB</option>
		<option value="PR">PR</option>
		<option value="PE">PE</option>
		<option value="PI">PI</option>
		<option value="RJ">RJ</option>
		<option value="RN">RN</option>
		<option value="RS">RS</option>
		<option value="RO">RO</option>
		<option value="RR">RR</option>
		<option value="SC">SC</option>
		<option value="SP">SP</option>
		<option value="SE">SE</option>
		<option value="TO">TO</option></select></div></div>
<div class="submit"><input type="submit" value="Enviar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-metro-black.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>