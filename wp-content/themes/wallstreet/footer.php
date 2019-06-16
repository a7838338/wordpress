<!-- Footer Widget Secton -->
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>

<div class="swiper-slide index-main-slide index-main-slide7 ">
	<p class="footer-copy">
		Copyright &copy; 2012-2017  同行同路  粤ICP备0000000号
	</p>
</div>
</div>
<!-- Add Pagination -->
<!--<div class="swiper-pagination index-page-pagination"></div>-->
</div>
</section>

</div>
<!-- 正文 区  结束 -->
</div>
<!-- 选用mm套件，最大的内容区 结束 -->
<!--  选用mm套件，在手机上的导航菜单  -->
<nav id="menu">
	<ul>
		<li><a href="index.html">首页</a></li>
		<li>
			<a href="company-intro.html">关于我们</a>
			<ul>
				<li><a href="company-intro.html">公司介绍</a></li>
				<li><a href="management-idea.html">经营理念</a></li>
			</ul>
		</li>
		<li>
			<a href="media-acticle.html">专业服务</a>
			<ul>
				<li><a href="media-acticle.html">策略与购买</a></li>
				<li><a href="marketing-acticle.html">内容营销</a></li>
				<li><a href="marketing-internet-acticle.html">互联网营销</a></li>
			</ul>
		</li>
		<li><a href="case-list.html">成功案例</a></li>
		<li><a href="news-list.html">媒体资源</a></li>
		<li><a href="infor-list.html">行业资讯</a></li>
		<li><a href="contact.html">联系我们</a></li>

	</ul>
</nav>
<!--  选用mm套件，在手机上的导航菜单  结束-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mmenu.all.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.animate1.0.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js" type="text/javascript" charset="utf-8"></script>
<script>
	var page_swiper = new Swiper('.index-main-container', {
		slidesPerView: 'auto',
		direction: 'vertical', //垂直方向
		speed: 700,
		pagination : '.index-page-pagination',
		paginationType : 'bullets',
		paginationClickable :true,
		mousewheelControl : true,
		mousewheelForceToAxis : true, // 鼠标滚轮只有垂直滚动才会起效
		mousewheelReleaseOnEdges : true, // Swiper处于边缘位置时（第一个或最后一个slide），Swiper释放鼠标滚轮事件，鼠标可以控制页面滚动。
		mousewheelInvert : true, //鼠标滚轮控制方向反转。
		keyboardControl : true,
		/*onSlideChangeStart: function(swiper){
		 if (page_swiper.isEnd) {
		 var a = page_swiper.translate;
		 $(page_swiper.slides[9]).css({'opacity': 0.5});
		 //var s = a + 450;
		 //page_swiper.slideTo(0, 1000, false);//切换到第一个slide，速度为1秒

		 }
		 },*/
		onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
			swiperAnimateCache(swiper); //隐藏动画元素
			swiperAnimate(swiper); //初始化完成开始动画
		},
		onSlideChangeEnd: function(swiper){
			swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
		}
	});
	var banner_swiper = new Swiper('.index-banner', {
		direction: 'horizontal',
		autoplay: 5000, //可选选项，自动滑动
		pagination : '.index-banner-pagination',
		paginationType : 'bullets',
		paginationClickable :true,
		keyboardControl : true,
		effect : 'fade',
		fade: {
			crossFade: false,
		},
		onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
			swiperAnimateCache(swiper); //隐藏动画元素
			swiperAnimate(swiper); //初始化完成开始动画
		},
		onSlideChangeEnd: function(swiper){
			swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
		}
	});
	var cases_swiper = new Swiper('.cases-swiper-container', {
		pagination: '.case-pagination',
		paginationClickable: true,
		paginationBulletRender: function (cases_swiper, index, className) {
			return '<span class="' + className + '">' + (index + 1) + '</span>';
		},
		slidesPerView: 4,
		slidesPerColumn: 2,
		spaceBetween: 15,
		breakpoints:{
			1025: {
				width: 960,
				slidesPerView: 3,
				slidesPerColumn: 2
			},
			769: {
				width: 720,
				slidesPerView: 2,
				slidesPerColumn: 3
			},
			640: {
				width: 360,
				slidesPerView: 2,
				slidesPerColumn: 3
			},
		}

	});
	var tv_swiper = new Swiper('.tv-swiper-container', {
		slidesPerView: 5,
		slidesPerColumn: 2,
		spaceBetween: 15,
		autoplay:true,
		speed:4500,
		loop:true,
		breakpoints:{
			1025: {
				width: 960,
				slidesPerView: 3,
				slidesPerColumn: 2
			},
			769: {
				width: 720,
				slidesPerView: 2,
				slidesPerColumn: 3
			},
			640: {
				width: 360,
				slidesPerView: 2,
				slidesPerColumn: 2
			},
		}

	});
	var media_swiper = new Swiper('.media-container', {
		slidesPerView: 6,
		slidesPerColumn: 1,
		autoplay:true,
		speed:5000,
		loop:true,
		freeMode : false,
		spaceBetween: 15,
		breakpoints:{
			1025: {
				width: 960,
				slidesPerView: 4,
			},
			769: {
				width: 720,
				slidesPerView: 3,
			},
			640: {
				width: 360,
				slidesPerView: 2,
			},
		}

	});
</script>
</body>
</html>