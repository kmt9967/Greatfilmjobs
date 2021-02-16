<?php
/* Smarty version 3.1.29, created on 2020-03-02 11:30:32
  from "/home4/o8txizzi/public_html/themes/view_vjs.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e5d34a80610a2_57130039',
  'file_dependency' => 
  array (
    'c247f3d462367ce8b24805ef7e29ae73b03e257a' => 
    array (
      0 => '/home4/o8txizzi/public_html/themes/view_vjs.tpl',
      1 => 1577430542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5d34a80610a2_57130039 ($_smarty_tpl) {
?>
                                                        <?php $_smarty_tpl->assign('ykey' , insert_youtube_key (array('value' => 'a', 'yt' => $_smarty_tpl->tpl_vars['p']->value['youtube']),$_smarty_tpl), true);?>
                                                        <li class="carouselItem">
                                                            <div class="carouselImage">
                                                            	<iframe width="678" height="458" src="//www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['ykey']->value;?>
" frameborder="0" allowfullscreen></iframe>                                                            
                                                            </div>
                                                        </li><?php }
}
