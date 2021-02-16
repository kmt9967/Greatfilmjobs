<?php
/* Smarty version 3.1.29, created on 2020-05-11 02:54:12
  from "/home4/o8txizzi/public_html/dev/themes/thank_you.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5eb8f6940592b3_43276064',
  'file_dependency' => 
  array (
    '3dddf229648192dcaac30277f75a782a75b5def2' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/thank_you.tpl',
      1 => 1577437468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
  ),
),false)) {
function content_5eb8f6940592b3_43276064 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                          
<div class="bodybg scriptolutionpaddingtop15 scriptolutionopages">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842 gray">
		<div class="inner-wrapper scriptolutionwidth842">
			<div class="left-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 scriptolutionwidth800">
                    
                    
                    <div id="scriptolutionOrderingForm" class="scriptolutionpadding20 111"> 
                        <h1 111><strong><?php echo $_smarty_tpl->tpl_vars['lang380']->value;?>
</strong></h1>
                        <?php if ($_smarty_tpl->tpl_vars['OID']->value > "0") {?>
                            <h2><?php echo $_smarty_tpl->tpl_vars['lang381']->value;?>
</h2>
                            <ul style="margin-left:10px; padding:10px;"> 
                                <li style="padding:10px;"><?php echo $_smarty_tpl->tpl_vars['lang382']->value;?>
</li> 
                                <li style="padding:10px;"><?php echo $_smarty_tpl->tpl_vars['lang383']->value;?>
<br /><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['OID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['OID']->value;?>
</a></li> 
                            </ul>
                            <br /> 
                            <br />                             
                            <div align="center"><a style="text-decoration:none; color:#FFF" class="agreenbutton" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['OID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang114']->value;?>
!</a></div> 
                        <?php } else { ?>
                         	<h1 222><strong><?php echo $_smarty_tpl->tpl_vars['lang440']->value;?>
</strong></h1>
                         	<h2><?php echo $_smarty_tpl->tpl_vars['lang441']->value;?>
</h2>
                         	
							<?php echo '<script'; ?>
 language="JavaScript">
                            var countDownInterval=15;
                            var c_reloadwidth=200
                            <?php echo '</script'; ?>
>
                            <ilayer id="c_reload" width=&{c_reloadwidth}; ><layer id="c_reload2" width=&{c_reloadwidth}; left=0 top=0></layer></ilayer>
                            <?php echo '<script'; ?>
>
                            var countDownTime=countDownInterval+1;
                            function countDown(){
                            countDownTime--;
                            if (countDownTime <=0){
                            countDownTime=countDownInterval;
                            clearTimeout(counter)
                            window.location.reload()
                            return
                            }
                            if (document.all)
                            document.all.countDownText.innerText = countDownTime+" ";
                            else if (document.getElementById)
                            document.getElementById("countDownText").innerHTML=countDownTime+" "
                            else if (document.layers){
                            document.c_reload.document.c_reload2.document.write('<?php echo $_smarty_tpl->tpl_vars['lang444']->value;?>
<b id="countDownText">'+countDownTime+'</b> <?php echo $_smarty_tpl->tpl_vars['lang443']->value;?>
. <a href="javascript:window.location.reload()">[<?php echo $_smarty_tpl->tpl_vars['lang442']->value;?>
]</a>')
                            document.c_reload.document.c_reload2.document.close()
                            }
                            counter=setTimeout("countDown()", 1000);
                            }
                            function startit(){
                            if (document.all||document.getElementById)
                            document.write('<?php echo $_smarty_tpl->tpl_vars['lang444']->value;?>
 <b id="countDownText">'+countDownTime+'</b> <?php echo $_smarty_tpl->tpl_vars['lang443']->value;?>
. <a href="javascript:window.location.reload()">[<?php echo $_smarty_tpl->tpl_vars['lang442']->value;?>
]</a>')
                            countDown()
                            }
                            if (document.all||document.getElementById)
                            startit()
                            else
                            window.onload=startit
                            <?php echo '</script'; ?>
>
                            
                        <?php }?>                            
                    </div>
                    
                    
					<div class="clear"></div>
				</div>
			</div>			
			<div class="clear"></div>
		</div>   
	</div>
</div>
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg gray scriptolutionfooter842"></div>
    </div>
</div><?php }
}
