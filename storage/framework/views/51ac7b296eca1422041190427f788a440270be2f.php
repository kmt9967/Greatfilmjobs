
<?php $__env->startSection('content'); ?>
<div class='scriptolution_notice'>
    <p>There are no jobs in this category yet.</p>
</div>

<div class="bodybg topspace">

	<div class="tagcloud" style="background:url(/images/scriptolution-cat-imgs/<?php echo e($pic); ?>) no-repeat;">
        
        <h2><?php echo e($name); ?></h2>
        <ul>
        	                                </ul>
    </div>
	<div class="inshadow">
		<div class="whitebox">
        	
                        <div class="scriptolution-response-sidebar" id="scriptolution-response-sidebar" align="center">
            	<a class="agreenbutton" href="javascript:void();" onclick="scriptolution_newtoggle('options-by-scriptolution-dotcom');">Options</a>
            </div>
            <div style="clear:both"></div>
            
            <div class="leftbar" id="options-by-scriptolution-dotcom">
                <div class="allmusic">
                    <h3>Category</h3>
                    <ul id="scriptolutiondontshowcats" class="scriptolutionhide">        
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      
                             <li><a href="/categories/<?php echo e(str_replace(' ', '', htmlspecialchars_decode($x->name))); ?>"><?php echo e(htmlspecialchars_decode($x->name)); ?></a></li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                             <div class="showmorebtn"><a href="javascript:void(0)" onclick="scriptolution_newhide('scriptolutiondontshowcats');scriptolution_newshow('scriptolutionshowcats');">Show less</a></div>
                    </ul>
                    <ul id="scriptolutionshowcats">
                    	<li><a href="/categories/AnimatronicsPuppets"><font color="#689c2c">Animatronics  Puppets</font></a></li>
                        <div class="showmorebtn"><a href="javascript:void(0)" onclick="scriptolution_newhide('scriptolutionshowcats');scriptolution_newshow('scriptolutiondontshowcats');">Show more</a></div>
                    </ul>
                </div>
                <div class="border"></div>
                <div class="options">
                    <h3>Delivery Time</h3>
                    <label><input name="scriptolutiondeliverytime" type="radio" value="1"  onchange="window.location.href = '/categories/AnimatronicsPuppets?s=&p=&sdeliverytime=1&stoprated=0'" /> Up to 24 hours</label>
                    <label><input name="scriptolutiondeliverytime" type="radio" value="3"  onchange="window.location.href = '/categories/AnimatronicsPuppets?s=&p=&sdeliverytime=3&stoprated=0'" /> Up to 3 days</label>
                    <label><input name="scriptolutiondeliverytime" type="radio" value="5"  onchange="window.location.href = '/categories/AnimatronicsPuppets?s=&p=&sdeliverytime=5&stoprated=0'" /> Up to 5 days</label>
                    <label><input name="scriptolutiondeliverytime" type="radio" value="7"  onchange="window.location.href = '/categories/AnimatronicsPuppets?s=&p=&sdeliverytime=7&stoprated=0'" /> Up to 7 days</label>
                    <label><input name="scriptolutiondeliverytime" type="radio" value="0" checked="checked" onchange="window.location.href = '/categories/AnimatronicsPuppets?s=&p=&stoprated=0'" /> Any</label>
                </div>
                <div class="border"></div>
                <div class="options">
                    <h3>Seller</h3>
                                        <label><input name="scriptolutiontoprated" type="checkbox" value="1"  onchange="window.location.href = '/categories/AnimatronicsPuppets?s=&p=&sdeliverytime=0&stoprated=1'" /> Top Rated Seller</label>
                                    </div>
                <div class="border"></div>
                <center></center>
            </div>
            <div class="songslist">
                <div class="cusongtitle">
                	<h3>Filter by:</h3>
                    <p>
                                                <a href="/categories/AnimatronicsPuppets?s=dz&sdeliverytime=0&stoprated=0" class="active">Date</a> 
                                                                        <a href="/categories/AnimatronicsPuppets?s=p&sdeliverytime=0&stoprated=0" >Popularity</a> 
                                                                        <a href="/categories/AnimatronicsPuppets?s=r&sdeliverytime=0&stoprated=0" >Rating</a>
                         
                                                <a href="/categories/AnimatronicsPuppets?s=c&sdeliverytime=0&stoprated=0" >Price</a> 
                                                                        <a href="/categories/AnimatronicsPuppets?s=e&sdeliverytime=0&stoprated=0" >Express Jobs</a> 
                                                             
                    </p>
                    <div class="topright">
                                                <a href="/categories/AnimatronicsPuppets?page=0"><img src="/images/leftbox.png" /></a>
                        <a href="/categories/AnimatronicsPuppets?page=0&sdisplay=list"><img src="/images/rightbox_hover.png" /></a>
                                            </div>
                    <div class="clear"></div>
                </div>
                
                
                
                <div class="cuscriptolutionongtitle">
                    <p>
                                                <a href="/categories/AnimatronicsPuppets?s=dz&sdeliverytime=0&stoprated=0" class="active">Date</a> 
                                                                        <a href="/categories/AnimatronicsPuppets?s=p&sdeliverytime=0&stoprated=0" >Popularity</a> 
                                                                        <a href="/categories/AnimatronicsPuppets?s=r&sdeliverytime=0&stoprated=0" >Rating</a>
                         
                                                <a href="/categories/AnimatronicsPuppets?s=c&sdeliverytime=0&stoprated=0" >Price</a> 
                                                                        <a href="/categories/AnimatronicsPuppets?s=e&sdeliverytime=0&stoprated=0" >Express Jobs</a> 
                                                             
                    </p>
                    <div class="clear"></div>
                </div>
                
                
                <div class="cusongslist">
                                        						                
                                        <div class="clear"></div>
                </div>
                <div align="center">
                    <div class="paging">
                        <div class="p1">
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            	<div class="rss-link"><a href="/rss?c=32">RSS feed</a></div>
            	<div class="clear" style="padding-bottom:20px;"></div>
            </div>
    		<div class="clear"></div>	
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\greatfilmjob\resources\views/categories/single_categories.blade.php ENDPATH**/ ?>