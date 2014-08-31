<?php  $homepage = 1; $pagename = 'home-page';?>
<?php include_once 'common/header.php';?>
	<!-- intro -->
	<div class="section intoview-effect" data-effect="fadeup" data-editme-key="home_brand_story_summary">
    <?php editme("home_brand_story_summary")?>
		<div class="intro" >
			<p class="introtxt" data-editme-body=".introtxt">SHANG XIA IS A BRAND FOR ART OF LIVING
THAT PROMISES A UNIQUE ENCOUNTER WITH THE HERITAGE OF CHINESE DESIGN AND CRAFTSMANSHIP.</p>
			<a href="#" title="" class="introbtn transition-wrap"><span class="transition"><?php echo Yii::t("strings" ,"Brand story")?><br/><br/><?php echo Yii::t("strings", "Brand story")?></span></a>
		</div>
	</div>
	<!-- piclist -->
	<div class="section">
		<ul class="piclist cs-clear">
			<li class="piclistitem intoview-effect" data-effect="fadeup" data-editme-key="home_middle_slide_one">
        <?php editme("home_middle_slide_one", array("title", "link_to") ,array("image"))?>
        		<a href="">
					<img src="../SX/images/homepage01.jpg" width="100%" />
					<p>shang xia is now opening its maison in shanghai</p>
				</a>
			</li>
			<li class="piclistitem intoview-effect" data-effect="fadeup" data-editme-key="home_middle_slide_two">
        <?php editme("home_middle_slide_two" ,array("title", "link_to"), array("image"))?>
        		<a href="">
					<img src="../SX/images/homepage01.jpg" width="100%" />
					<p>shang xia is now opening </p>
				</a>
			</li>
			<li class="piclistitem intoview-effect marginR0" data-effect="fadeup" data-editme-key="home_middle_slide_third">
        <?php editme("home_middle_slide_third" ,array("title", "link_to"), array("image"))?>
        		<a href="">
					<img src="../SX/images/homepage01.jpg" width="100%" />
					<p>shang xia is now opening </p>
				</a>
			</li>
		</ul>
	</div>
	<!-- slide -->
	<div class="slide intoview-effect" data-effect="fadeup">
		<div class="slidebox cs-clear">
			<li href="#" class="slideitem">
				<img src="../SX/images/homepage_demo2.jpg" width="100%" />
				<div class="slidetip">
					<span class="slidetip2-tit">chinese craftmanship</span> <br>
					<span class="slidetip2-index">1/4</span> <br>
					<a href="#" title="" data-video="../SX/video/small" data-a="homepage-watch-video" class="btn btn-white transition-wrap"><i class="transition">Watch video<br/><br/>Watch video</i></a>
				</div>
			</li>
			<li href="#" class="slideitem">
				<img src="../SX/images/homepage_demo2.jpg" width="100%" />
				<div class="slidetip">
					<span class="slidetip2-tit">chinese craftmanship</span> <br>
					<span class="slidetip2-index">2/4</span> <br>
					<a href="#" title="" data-video="../SX/video/small" data-a="homepage-watch-video" class="btn btn-white transition-wrap"><i class="transition">Watch video<br/><br/>Watch video</i></a>
				</div>
			</li>
			<li href="#" class="slideitem">
				<img src="../SX/images/homepage_demo2.jpg" width="100%" />
				<div class="slidetip">
					<span class="slidetip2-tit">chinese craftmanship</span> <br>
					<span class="slidetip2-index">3/4</span> <br>
					<a href="#" title="" data-video="../SX/video/small" data-a="homepage-watch-video" class="btn btn-white transition-wrap"><i class="transition">Watch video<br/><br/>Watch video</i></a>
				</div>
			</li>
			<li href="#" class="slideitem">
				<img src="../SX/images/homepage_demo2.jpg" width="100%" />
				<div class="slidetip">
					<span class="slidetip2-tit">chinese craftmanship</span> <br>
					<span class="slidetip2-index">4/4</span> <br>
					<a href="#" title="" data-video="../SX/video/small" data-a="homepage-watch-video" class="btn btn-white transition-wrap"><i class="transition">Watch video<br/><br/>Watch video</i></a>
				</div>
			</li>
		</div>
		<ul class="slidetab cs-clear">
			<li class="on"></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		<!-- 数量改变需要改变css，或者用js来调整slidebox的宽度和slidetab的位置 -->
	</div>
	<!-- barbg -->
	<div class="barbg intoview-effect" data-effect="fadeup"></div>	

<?php include_once 'common/footer.php';?>
