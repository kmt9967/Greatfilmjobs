<?php
/* Smarty version 3.1.29, created on 2020-02-24 06:11:20
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/new_js.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53af581a3545_48183446',
  'file_dependency' => 
  array (
    'ed5af819b325235d8f899f87d3adce8735869579' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/new_js.tpl',
      1 => 1577430506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53af581a3545_48183446 ($_smarty_tpl) {
?>
									
                                    <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
                                    function scriptolutiontoggle(obj, obbox) 
									{										
										if(obbox == 'multipleme')							
										{
											$('#extrasmore').hide();
											$('#shipmore').hide();
											if ($('#multipleme').is(":checked")) 
											{
												$('#multiplemore').show();
												if ($('#extrasme').is(":checked")) 
												{
													$("#extrasme").removeAttr("checked");
												}
												if ($('#shipme').is(":checked")) 
												{
													$("#shipme").removeAttr("checked");
												}
											}
											else
											{
												$('#multiplemore').hide();
											}
											
										}
										else if(obbox == 'extrasme')							
										{
											$('#multiplemore').hide();
											$('#shipmore').hide();
											if ($('#extrasme').is(":checked")) 
											{
												$('#extrasmore').show();
												if ($('#multipleme').is(":checked")) 
												{
													$("#multipleme").removeAttr("checked");
												}
												if ($('#shipme').is(":checked")) 
												{
													$("#shipme").removeAttr("checked");
												}
											}
											else
											{
												$('#extrasmore').hide();
											}
										}
										else if(obbox == 'shipme')							
										{
											$('#multiplemore').hide();
											$('#extrasmore').hide();
											if ($('#shipme').is(":checked")) 
											{
												$('#shipmore').show();
												if ($('#multipleme').is(":checked")) 
												{
													$("#multipleme").removeAttr("checked");
												}
												if ($('#extrasme').is(":checked")) 
												{
													$("#extrasme").removeAttr("checked");
												}
											}
											else
											{
												$('#shipmore').hide();
											}
										}
                                    }
                                    <?php echo '</script'; ?>
>
                                    <?php }
}
