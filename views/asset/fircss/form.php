<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'FIR submitted successfully!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-orange.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-orange.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-orange" style="background-color:white;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:900px;min-width:150px" method="post"><div class="title"><h2>FIR FORM</h2></div>
	<div class="element-select<?php frmd_add_class("select"); ?>" title="Select State"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="medium"><span><select name="select" required="required">

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-select<?php frmd_add_class("select1"); ?>" title="Select District"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="medium"><span><select name="select1" required="required">

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="Police Station"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input1" required="required" placeholder="FIR number"/><span class="icon-place"></span></div></div>
	<div class="element-date<?php frmd_add_class("date"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" data-format="yyyy-mm-dd" type="date" name="date" required="required" placeholder="Date"/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select3"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="medium"><span><select name="select3" required="required">

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-select<?php frmd_add_class("select2"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="medium"><span><select name="select2" required="required">

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-select<?php frmd_add_class("select4"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="medium"><span><select name="select4" required="required">

		<option value="MONDAY">MONDAY</option>
		<option value="TUESDAY">TUESDAY</option>
		<option value="WEDNESDAY">WEDNESDAY</option>
		<option value="THURSDAY">THURSDAY</option>
		<option value="FRIDAY">FRIDAY</option>
		<option value="SATURDAY">SATURDAY</option>
		<option value="SUNDAY">SUNDAY</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-date<?php frmd_add_class("date1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" data-format="yyyy-mm-dd" type="date" name="date1" required="required" placeholder="Date from"/><span class="icon-place"></span></div></div>
	<div class="element-date<?php frmd_add_class("date2"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" data-format="yyyy-mm-dd" type="date" name="date2" required="required" placeholder="Date to"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input3"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input3" required="required" placeholder="Time"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input2"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input2" required="required" placeholder="to"/><span class="icon-place"></span></div></div>
	<div class="element-date<?php frmd_add_class("date4"); ?>"><label class="title"></label><div class="item-cont"><input class="medium" data-format="yyyy-mm-dd" type="date" name="date4" placeholder="Date"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input4"); ?>"><label class="title"></label><div class="item-cont"><input class="medium" type="text" name="input4" placeholder="Time"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input5"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input5" required="required" placeholder="Direction &amp; distance from Police Station"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input6"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input6" required="required" placeholder="Chowki/Beat/O.P Name &amp;No."/><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" required="required" placeholder="Address of Occurence"></textarea><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input7"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input7" required="required" placeholder="Ward"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input8"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input8" required="required" placeholder=" Nearest identifiable place"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input9"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input9" required="required" placeholder="Village"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input10"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input10" required="required" placeholder="Taluka"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input11"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input11" required="required" placeholder="Post"/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select5"); ?>"><label class="title"></label><div class="item-cont"><div class="medium"><span><select name="select5" >

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-select<?php frmd_add_class("select6"); ?>"><label class="title"></label><div class="item-cont"><div class="medium"><span><select name="select6" >

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-checkbox<?php frmd_add_class("checkbox"); ?>"><label class="title">In case, outside the limit of police station<span class="required">*</span></label>		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="YES"/ required="required"><span>YES</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="NO"/ required="required"><span>NO</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-input<?php frmd_add_class("input12"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input12" placeholder="Name"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input13"); ?>"><label class="title"></label><div class="item-cont"><input class="medium" type="text" name="input13" placeholder="Taluka"/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select8"); ?>"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select8" >

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-select<?php frmd_add_class("select7"); ?>"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select7" >

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-input<?php frmd_add_class("input14"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input14" required="required" placeholder="Name"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input15"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input15" required="required" placeholder="Father's/Husband Name"/><span class="icon-place"></span></div></div>
	<div class="element-date<?php frmd_add_class("date5"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" data-format="yyyy-mm-dd" type="date" name="date5" required="required" placeholder="Date of Birth"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input16"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input16" required="required" placeholder="Age"/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select9"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="medium"><span><select name="select9" required="required">

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-number<?php frmd_add_class("number"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" min="10" max="10" name="number" required="required" placeholder="Phone Number" value=""/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input17"); ?>"><label class="title"></label><div class="item-cont"><input class="medium" type="text" name="input17" placeholder="Passport Number"/><span class="icon-place"></span></div></div>
	<div class="element-date<?php frmd_add_class("date6"); ?>"><label class="title"></label><div class="item-cont"><input class="medium" data-format="yyyy-mm-dd" type="date" name="date6" placeholder="Date of Issue"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input18"); ?>"><label class="title"></label><div class="item-cont"><input class="medium" type="text" name="input18" placeholder="Place of Issue"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input19"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input19" required="required" placeholder="Occupation"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input21"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input21" required="required" placeholder="Religion"/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select10"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="medium"><span><select name="select10" required="required">

		<option value="SC">SC</option>
		<option value="ST">ST</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-input<?php frmd_add_class("input22"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input22" required="required" placeholder="Sub-Caste"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input23"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input23" required="required" placeholder="Ward"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input24"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input24" required="required" placeholder="House Number"/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" min="10" max="10" name="number1" required="required" placeholder="Phone Number" value=""/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input25"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input25" required="required" placeholder="PAN Number"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input26"); ?>"><label class="title"></label><div class="item-cont"><input class="medium" type="text" name="input26" placeholder="Card Number"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input27"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input27" required="required" placeholder="Road"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input28"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input28" required="required" placeholder="Nearest Identifiable Place"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input29"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input29" required="required" placeholder="Village"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input30"); ?>"><label class="title"></label><div class="item-cont"><input class="medium" type="text" name="input30" placeholder="Post"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input31"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input31" required="required" placeholder="Police Station"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input32"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input32" required="required" placeholder="Taluka"/><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="textarea1" cols="20" rows="5" required="required" placeholder="Present Address"></textarea><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea2"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="large" name="textarea2" cols="20" rows="5" required="required" placeholder="Name & Address of Accused"></textarea><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input34"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input34" placeholder="Records for delay in reporting by complaint information"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input33"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input33" placeholder="Particulars of properties stolen &amp; involved"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input35"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input35" placeholder="Total value of properties stolen &amp; involved"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input36"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input36" placeholder="Recovered Properties"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input37"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input37" placeholder="Unnatural/Accident death case if any"/><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea3"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="large" name="textarea3" cols="20" rows="5" required="required" placeholder="First information brief contents"></textarea><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-orange.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>