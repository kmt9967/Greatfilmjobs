<?php
/* Smarty version 3.1.29, created on 2020-02-24 07:26:37
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53c0fd1faca1_33319285',
  'file_dependency' => 
  array (
    '8d86f8f88e277c11897430bdb27f91edee28a969' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/view.tpl',
      1 => 1578209506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
    'file:view_image_box.tpl' => 1,
    'file:view_yt.tpl' => 1,
    'file:view_extra.tpl' => 1,
    'file:scriptolution_bit_related.tpl' => 2,
    'file:scriptolution_order_selection.tpl' => 1,
    'file:view_instant.tpl' => 1,
  ),
),false)) {
function content_5e53c0fd1faca1_33319285 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home4/o8txizzi/dev.greatfilmjobs.com/scriptolution/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) require_once '/home4/o8txizzi/dev.greatfilmjobs.com/scriptolution/libs/plugins/modifier.replace.php';
?>
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/bxslider/jquery.bxslider.css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.customSelect.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/bxslider/jquery.bxslider.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	$(document).ready(function(){
		sQuery('#carousel').bxSlider();
		sQuery('.scriptolutionpopup').click(function(event) {
			var width  = 575,
				height = 450,
				left   = (sQuery(window).width()  - width)  / 2,
				top    = (sQuery(window).height() - height) / 2,
				url    = this.href,
				opts   = 'status=1' +
						 ',width='  + width  +
						 ',height=' + height +
						 ',top='    + top    +
						 ',left='   + left;
			window.open(url, 'scriptolutionwindow', opts);
			return false;
		  });
	});
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->tpl_vars['p']->value['gtitle']),$_smarty_tpl), true);?>
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop50">
		<div class="inner-wrapper">
			<div class="contentArea">
				<h1><?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['gtitle']);?>
 <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang589']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value['price']*stripslashes($_SESSION['cur']);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo $_smarty_tpl->tpl_vars['p']->value['price']*stripslashes($_SESSION['cur']);
}?></h1>
                <?php if ($_smarty_tpl->tpl_vars['enablescriptolutionlocations']->value == "1") {
if ($_smarty_tpl->tpl_vars['p']->value['scriptolutionjoblocation'] != '') {?>
                <div class="gig-scriptolutionlocation"><i class="fa fa-map-marker"></i> <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['scriptolutionjoblocation']);?>
</div>
                <?php }
}?>
				<div class="gig-meta"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang360']->value, 'UTF-8');?>
 <?php echo mb_strtoupper(smarty_modifier_date_format($_smarty_tpl->tpl_vars['p']->value['time_added'],"%A %B %e %Y"), 'UTF-8');?>
, <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang119']->value, 'UTF-8');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['seo']);?>
"><?php echo mb_strtoupper(stripslashes($_smarty_tpl->tpl_vars['p']->value['name']), 'UTF-8');?>
</a></div>
				<div class="gig-social">
					<div class="left">
						<ul class="social">
                        	<?php $_smarty_tpl->assign('takento' , insert_get_short_url (array('value' => 'a', 'PID' => $_smarty_tpl->tpl_vars['p']->value['PID'], 'seo' => $_smarty_tpl->tpl_vars['p']->value['seo'], 'short' => $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['short'], 'title' => $_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl), true);?>
							<li><a href="https://www.facebook.com/dialog/feed?app_id=<?php echo $_smarty_tpl->tpl_vars['FACEBOOK_APP_ID']->value;?>
&display=popup&link=<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo smarty_modifier_replace(stripslashes($_smarty_tpl->tpl_vars['p']->value['seo']),' ','+');?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&picture=<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/<?php echo $_smarty_tpl->tpl_vars['p']->value['p1'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['gtitle']);?>
 <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang589']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['price']);
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang63']->value;
echo stripslashes($_smarty_tpl->tpl_vars['p']->value['price']);
}?>&description=<?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['gtitle']);?>
 <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang589']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['price']);
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang63']->value;
echo stripslashes($_smarty_tpl->tpl_vars['p']->value['price']);
}?>&redirect_uri=<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo smarty_modifier_replace(stripslashes($_smarty_tpl->tpl_vars['p']->value['seo']),' ','+');?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="facebook scriptolutionpopup"><span class="hide">Facebook</span></a></li>
							<li><a href="https://twitter.com/share?url=<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo smarty_modifier_replace(stripslashes($_smarty_tpl->tpl_vars['p']->value['seo']),' ','+');?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&amp;text=<?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['gtitle']);?>
 <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang589']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['price']);
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang63']->value;
echo stripslashes($_smarty_tpl->tpl_vars['p']->value['price']);
}?>" class="twitter scriptolutionpopup"><span class="hide">Twitter</span></a></li>
							<li><a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&media=<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t2/<?php echo $_smarty_tpl->tpl_vars['p']->value['p1'];?>
&description=<?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['gtitle']);?>
 <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang589']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['price']);
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang63']->value;
echo stripslashes($_smarty_tpl->tpl_vars['p']->value['price']);
}?>" class="pinterest scriptolutionpopup"><span class="hide">Pinterest</span></a></li>
							<li><a href="mailto:?subject=<?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['gtitle']);?>
 <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang589']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['price']);
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang63']->value;
echo stripslashes($_smarty_tpl->tpl_vars['p']->value['price']);
}?>&amp;body=<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="scriptolutionemail"><span class="hide">E-Mail</span></a></li>
                            <li><g:plusone size="medium" count="false" href="<?php echo $_smarty_tpl->tpl_vars['takento']->value;?>
"></g:plusone></li>
                            <li>
                                <a class="addthis_button" addthis:url="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" addthis:title="<?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['gtitle']);?>
 <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang589']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['price']);
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang63']->value;
echo stripslashes($_smarty_tpl->tpl_vars['p']->value['price']);
}?>" href="https://www.addthis.com/bookmark.php?v=250&amp;pub="><img src="https://s7.addthis.com/static/btn/sm-share-en.gif" width="83" height="16" alt="Bookmark and Share"></a>
                                
                                <?php echo '<script'; ?>
 type="text/javascript">
                                var addthis_config = {
                                    services_exclude: 'email, facebook, twitter, print'
                                }
                                <?php echo '</script'; ?>
>
                                <?php echo '<script'; ?>
 type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#pub="><?php echo '</script'; ?>
>
                                
                            </li>
                        </ul>
					</div>
                    <?php if ($_SESSION['USERID'] != '') {?>                     
                    
                    <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
                    sQuery(document).ready(function() {
                        sQuery('#scriptolution_heart_<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
').click(function() {
                        	sQuery.post('<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bookmark?id=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['PID']);?>
&do=add', sQuery(this).serialize(),function(data){
								sQuery('#sbookmark1').hide();
								sQuery('#sbookmark2').show();
                        	});
                        	return false;
                        });
						
						sQuery('#scriptolution_unheart_<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
').click(function() {
                        	sQuery.post('<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bookmark?id=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['PID']);?>
&do=rem', sQuery(this).serialize(),function(data){
								sQuery('#sbookmark2').hide();
								sQuery('#sbookmark1').show();
                        	});
                        	return false;
                        });
                    });
                    <?php echo '</script'; ?>
>
                    
                    <?php $_smarty_tpl->assign('liked' , insert_like_cnt (array('value' => 'var', 'pid' => $_smarty_tpl->tpl_vars['p']->value['PID']),$_smarty_tpl), true);?>
                    <div class="right">
						<dl id="bookmark" class="dropdown cleanStyle">
							<dt id="sbookmark1" <?php if ($_smarty_tpl->tpl_vars['liked']->value == "1") {?>style="display:none;"<?php }?>><a class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang574']->value;?>
" href="javascript(void);" id="scriptolution_heart_<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
"><span><i class="icon-red-heart"></i></span></a></dt>
                            <dt id="sbookmark2" <?php if ($_smarty_tpl->tpl_vars['liked']->value != "1") {?>style="display:none;"<?php }?>><a class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang574']->value;?>
" href="javascript(void);" id="scriptolution_unheart_<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
"><span><i class="icon-white-heart"></i></span></a></dt>
						</dl>
					</div>
                    <?php } else { ?>
                    <div class="right scriptolutionbookmark">
                    	<a class="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang574']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/login"><span><i class="icon-white-heart"></i></span></a>
                    </div>
                    <?php }?>
				</div>
				<div class="clear"></div>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view_image_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<div class="gig-description" <?php if ($_smarty_tpl->tpl_vars['rtl']->value != "1") {?>align="left"<?php }?>>
					<p <?php if ($_smarty_tpl->tpl_vars['rtl']->value == "1") {?>class="scriptolutionrtl"<?php } else { ?>align="left"<?php }?> style="overflow: hidden;"><?php echo html_entity_decode(stripslashes($_smarty_tpl->tpl_vars['p']->value['gdesc']),@constant('ENT_QUOTES'),'utf-8');?>
</p>
                    <?php if ($_smarty_tpl->tpl_vars['p']->value['youtube'] != '') {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view_yt.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
				</div>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view_extra.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
                <div id="scriptolutionbarnreviews">
                    <div class="scriptolutionbar">
                        <div class="whiteBox inside">
                            <div class="block inside">
                                <span class="number"><?php echo $_smarty_tpl->tpl_vars['grat']->value;?>
</span>
                                <span class="descr"><?php echo $_smarty_tpl->tpl_vars['lang476']->value;?>
</span>
                            </div>
                            <div class="block inside">
                                <span class="number"><?php echo $_smarty_tpl->tpl_vars['brat']->value;?>
</span>
                                <span class="descr"><?php echo $_smarty_tpl->tpl_vars['lang477']->value;?>
</span>
                            </div>
                            <div class="block inside last">
                                <span class="number"><?php echo $_smarty_tpl->tpl_vars['ftot']->value;?>
</span>
                                <span class="descr"><?php echo $_smarty_tpl->tpl_vars['lang478']->value;?>
</span>
                            </div>
                        </div>
                    </div>
                    <div class="gig-reviews">
                        <div class="left">
                            <h2><?php echo $_smarty_tpl->tpl_vars['lang143']->value;?>
</h2>
                        </div>
                        <div class="right">
                        </div>
                        <div class="clear"></div>
                        <ul class="gig-reviews-list">
                            <?php if (count($_smarty_tpl->tpl_vars['f']->value) > 0) {?>
                            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['f']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <li>
                                <?php if ($_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['good'] == "1") {?>
                                <span class="thumbsUp"></span>
                                <?php } else { ?>
                                <span class="thumbsDown"></span>
                                <?php }?>
                                <?php $_smarty_tpl->assign('fprofilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']),$_smarty_tpl), true);?>
                                <span class="review-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['membersprofilepicurl']->value;?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['fprofilepicture']->value;?>
" /></span>
                                <span class="comment">
                                    <span class="comment-meta"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'])),$_smarty_tpl);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']);?>
</a></span>
                                    <span class="comment-comment">
                                        <?php echo stripslashes($_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['comment']);?>
								
                                    </span>
                                </span>
                            </li>
                            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                            <?php }?>
                        </ul>
                        <!-- <p class="centerMe"><a href="#" class="whiteBtn"><span></span></a></p> -->
                    </div>	                
                	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_bit_related.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
			</div>
			
			<div class="sidebarArea fffffffffffffffffffffff">  
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_order_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				
				<ul class="gig-details">
					<li class="gig-rating">
                    	<?php $_smarty_tpl->assign('scriptolutionstars' , insert_scriptolution_rating_stars_big (array('value' => 'a', 'scriptolutionpid' => $_smarty_tpl->tpl_vars['p']->value['PID']),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['scriptolutionstars']->value;?>

					</li>
					<li>
						<span class="rating-positive">
							<?php if (count($_smarty_tpl->tpl_vars['f']->value) == "0") {
echo $_smarty_tpl->tpl_vars['lang471']->value;
} else {
$_smarty_tpl->assign('percent' , insert_get_rating (array('value' => 'a', 'b' => $_smarty_tpl->tpl_vars['brat']->value, 'g' => $_smarty_tpl->tpl_vars['grat']->value),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['percent']->value;?>
&#37;<?php }?>
							<span class="label"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang568']->value, 'UTF-8');?>
</span>
						</span>
						<span class="rating-middle">
							<?php echo $_smarty_tpl->tpl_vars['lang414']->value;?>

						</span>
						<span class="rating-votes">
							<?php echo $_smarty_tpl->tpl_vars['scriptolutiontotalvotes']->value;?>

							<span class="label"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang569']->value, 'UTF-8');?>
</span>
						</span>
					</li>
                    <?php if ($_smarty_tpl->tpl_vars['p']->value['days'] == "0") {?>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view_instant.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <?php } else { ?>
					<li>
						<i class="icon-clock"></i>
						<span class="big"><?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['days']);?>
</span>
						<span class="small"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang131']->value, 'UTF-8');?>
<br/><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang474']->value, 'UTF-8');?>
</span>
					</li>
                    <?php }?>
					<li>
						<i class="icon-queue"></i>
						<span class="big"><?php echo $_smarty_tpl->tpl_vars['quecount']->value;?>
</span>
						<span class="small"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang475']->value, 'UTF-8');?>
<br/><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang473']->value, 'UTF-8');?>
</span>
					</li>
					<li class="small"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang576']->value, 'UTF-8');?>
</li>
				</ul>
				<div class="clear"></div>				
				<div class="profile-info">
					<?php $_smarty_tpl->assign('profilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->tpl_vars['p']->value['USERID']),$_smarty_tpl), true);?>
					<div class="profile-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['membersprofilepicurl']->value;?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['profilepicture']->value;?>
?<?php echo time();?>
" width="50px" height="50px" /></div>
					<div class="user-info">
						<h3><?php echo $_smarty_tpl->tpl_vars['lang414']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['p']->value['username'])),$_smarty_tpl);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['username']);?>
</a></h3>
						<h4>
							<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang573']->value, 'UTF-8');?>
: <?php $_smarty_tpl->assign('userc' , insert_country_code_to_country (array('value' => 'a', 'code' => $_smarty_tpl->tpl_vars['p']->value['country']),$_smarty_tpl), true);
echo mb_strtoupper($_smarty_tpl->tpl_vars['userc']->value, 'UTF-8');?>

							<br/>
							<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang572']->value, 'UTF-8');?>
: <?php echo mb_strtoupper(smarty_modifier_date_format($_smarty_tpl->tpl_vars['p']->value['addtime'],"%B %e %Y"), 'UTF-8');?>

							<span class="countryflag"><span class="country <?php echo $_smarty_tpl->tpl_vars['p']->value['country'];?>
"></span></span>
						</h4>
					</div>
					<div class="user-language">
                    	<?php if ($_SESSION['USERID'] != $_smarty_tpl->tpl_vars['p']->value['USERID']) {?>
                        <?php if ($_SESSION['USERID'] > "0") {?>
						<strong><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['p']->value['username'])),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['cvseo']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang142']->value;?>
</a></strong>
                        <?php } else { ?>
                        <strong><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/login?r=<?php $_smarty_tpl->assign('rurl2' , insert_get_redirect2 (array('value' => 'a', 'uname' => $_smarty_tpl->tpl_vars['p']->value['username'], 'pid' => $_smarty_tpl->tpl_vars['p']->value['PID']),$_smarty_tpl), true);
echo stripslashes($_smarty_tpl->tpl_vars['rurl2']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['lang142']->value;?>
</a></strong>
                        <?php }?>
                        <?php }?>
					</div>
                    <?php $_smarty_tpl->assign('mpercent' , insert_get_percent (array('value' => 'a', 'userid' => $_smarty_tpl->tpl_vars['p']->value['USERID']),$_smarty_tpl), true);?>
                    <div style="clear:both; padding-top:15px;"></div>
					<div class="user-level">
                    	<?php if ($_smarty_tpl->tpl_vars['enable_levels']->value == "1") {?>
                        	<?php if ($_smarty_tpl->tpl_vars['p']->value['level'] == "1") {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/scriptolution_level1.png" />
                            <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['level'] == "2") {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/scriptolution_level2.png" />
                            <?php } elseif ($_smarty_tpl->tpl_vars['p']->value['level'] == "3") {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/scriptolution_level3.png" />
                            <?php }?>
                        <?php }?>
						<span class="big"><?php if ($_smarty_tpl->tpl_vars['mpercent']->value != '') {
echo $_smarty_tpl->tpl_vars['mpercent']->value;?>
&#37;<?php } else {
echo $_smarty_tpl->tpl_vars['lang471']->value;
}?></span>
						<span class="small"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang570']->value, 'UTF-8');?>
<br/><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang571']->value, 'UTF-8');?>
</span>
					</div>
				</div>
				<div class="clear"></div>
				<div class="relatedTopics">
					<h3><?php echo $_smarty_tpl->tpl_vars['lang76']->value;?>
</h3>
					<ul class="tags">
                    	<?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tags']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_1_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tags']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['tags']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
</a></li>
                        <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
					</ul>
				</div>				
				<div class="sidebarAds">
					<center><?php echo insert_get_advertisement(array('AID' => 5),$_smarty_tpl);?>
</center>
				</div>
			</div>
            
            
            
            
            <div id="scriptolutionbarnreviewsmobile">
            	<div class="contentArea">
                	<div>
                        <div class="scriptolutionbar">
                            <div class="whiteBox inside">
                                <div class="block inside">
                                    <span class="number"><?php echo $_smarty_tpl->tpl_vars['grat']->value;?>
</span>
                                    <span class="descr"><?php echo $_smarty_tpl->tpl_vars['lang476']->value;?>
</span>
                                </div>
                                <div class="block inside">
                                    <span class="number"><?php echo $_smarty_tpl->tpl_vars['brat']->value;?>
</span>
                                    <span class="descr"><?php echo $_smarty_tpl->tpl_vars['lang477']->value;?>
</span>
                                </div>
                                <div class="block inside last">
                                    <span class="number"><?php echo $_smarty_tpl->tpl_vars['ftot']->value;?>
</span>
                                    <span class="descr"><?php echo $_smarty_tpl->tpl_vars['lang478']->value;?>
</span>
                                </div>
                            </div>
                        </div>
                        <div class="gig-reviews">
                            <div class="left">
                                <h2><?php echo $_smarty_tpl->tpl_vars['lang143']->value;?>
</h2>
                            </div>
                            <div class="right">
                            </div>
                            <div class="clear"></div>
                            <ul class="gig-reviews-list">
                                <?php if (count($_smarty_tpl->tpl_vars['f']->value) > 0) {?>
                                <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['f']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_2_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                <li>
                                    <?php if ($_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['good'] == "1") {?>
                                    <span class="thumbsUp"></span>
                                    <?php } else { ?>
                                    <span class="thumbsDown"></span>
                                    <?php }?>
                                    <?php $_smarty_tpl->assign('fprofilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']),$_smarty_tpl), true);?>
                                    <span class="review-avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['membersprofilepicurl']->value;?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['fprofilepicture']->value;?>
" /></span>
                                    <span class="comment">
                                        <span class="comment-meta"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'])),$_smarty_tpl);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']);?>
</a></span>
                                        <span class="comment-comment">
                                            <?php echo stripslashes($_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['comment']);?>
								
                                        </span>
                                    </span>
                                </li>
                                <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
                                <?php }?>
                            </ul>
                            <!-- <p class="centerMe"><a href="#" class="whiteBtn"><span></span></a></p> -->
                        </div>	                
                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_bit_related.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                    </div>
                </div>
            </div>
            
            
            
            
            			
			<div class="clear"></div>
			<div class="more-user-gigs">
				<h3><?php echo $_smarty_tpl->tpl_vars['lang137']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['username']);?>
</h3>
				<?php
$__section_i_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['u']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total != 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_3_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<div class="user-gig <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null)%5 == 0) {?>last<?php }?>">
					<div class="gig-thumb">
						<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['u']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['u']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['utitle']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t/<?php echo $_smarty_tpl->tpl_vars['u']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p1'];?>
" width="180" height="112" /></a>
					</div>
					<span class="user-gig-excerpt"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['u']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['u']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['utitle']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['u']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']);?>
 <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang589']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*stripslashes($_SESSION['cur']);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo $_smarty_tpl->tpl_vars['u']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*stripslashes($_SESSION['cur']);
}?></a></span>
                    <br />
                    <span class="user-cat"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->tpl_vars['u']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['u']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']);?>
</a></span>
				</div>
				<?php
}
}
if ($__section_i_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_3_saved;
}
?>				
			</div>
		</div>    
	</div>
</div><?php }
}
