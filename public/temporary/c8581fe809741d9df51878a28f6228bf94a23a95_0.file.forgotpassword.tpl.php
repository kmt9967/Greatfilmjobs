<?php
/* Smarty version 3.1.29, created on 2020-03-02 18:10:37
  from "/home4/o8txizzi/public_html/themes/forgotpassword.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e5d926d007908_15066589',
  'file_dependency' => 
  array (
    'c8581fe809741d9df51878a28f6228bf94a23a95' => 
    array (
      0 => '/home4/o8txizzi/public_html/themes/forgotpassword.tpl',
      1 => 1577430541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
  ),
),false)) {
function content_5e5d926d007908_15066589 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop50">
		<div class="inner-wrapper">
			<div class="left-side scriptolutionwidth558">
				<div class="whiteBox twoHalfs padding15 scriptolutionwidth516">
					<h1><?php echo $_smarty_tpl->tpl_vars['lang39']->value;?>
</h1>
                    <div id="scriptolutionForm">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/forgotpassword" method="post">  
                            <div class="form-entry">
                                <label for="email"><?php echo $_smarty_tpl->tpl_vars['lang4']->value;?>
</label>
                                <input class="text" id="email" name="email" tabindex="1" type="text" value="" />
                            </div>
                            <div class="row">
                                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang46']->value;?>
" class="scriptolutionbluebutton" />
                            </div>
                            <input type="hidden" name="fpsub" id="fpsub" value="1" />
                        </form>
                    </div>

					<div class="clear"></div>

				</div>
			</div>			
			<div class="right-side scriptolutionwidth390">
				<center><?php echo insert_get_advertisement(array('AID' => 4),$_smarty_tpl);?>
</center>
			</div>
			<div class="clear"></div>

		</div>   
	</div>
</div>
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg"></div>
    </div>
</div><?php }
}
