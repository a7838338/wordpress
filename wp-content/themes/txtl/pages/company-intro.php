<!DOCTYPE html>

<head id="Head">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="PAGE-ENTER" content="RevealTrans(Duration=0,Transition=1)" />
	<meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
	
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css"/>
	<link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/phone_menu.css"/>
	<link rel="stylesheet" type="text/css" href="css/swiper.css"/>
	<link rel="stylesheet" type="text/css" href="css/cssreset.css"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/pad.css" type="text/css" media="(max-width:1024px)">
	<link rel="stylesheet" href="css/phone.css" type="text/css" media="(max-width:640px)">
	<script src="js/wow.min.js"></script>
		
	
	<script>
	window.onload=function(){
		var wow = new WOW(
		  {
			boxClass:     'wow',             //动画元素的CSS类 (默认类名 wow)
			animateClass: 'animated',          //动画CSS类 (默认类名 animated 不建议修改)
			offset:       100,                //距离可视区域多少开始执行动画(默认值 0)
			mobile:       true,               //是否在移动设备上执行动画(默认值 true)
		  }
		);
		wow.init();
		/* 
		3、在css下方js上方写需要动画的元素
		（必须设置为块状或者行内块状！必须设置为块状或者行内块状！必须设置为块状或者行内块状！），并添加class类名。

		<div class="wow slideInLeft" 
			data-wow-duration="2s"   data-wow-duration（动画持续时间）
			data-wow-delay="5s"      data-wow-delay（动画延迟时间）
			data-wow-offset="10"     data-wow-offset（元素的位置露出后距离底部多少像素执行）
			data-wow-iteration="10"> data-wow-iteration（动画执行次数）这四个属性可选可不选。
		</div>
		*/
	}
	</script>

	<title>公司介绍</title>
</head>

<body class="inside-body">
	<!-- 选用mm套件，最大的内容区  -->
	<div id="page" >
		<!-- 移动端   网站头部  -->
		<div class="header" >
			<a href="#menu" class="btn-menu"></a>
			同行同路
			<!--<a href="customer-center.html" class="phone-logo"><img src=""/></a>-->
		</div>
		<!-- 移动端   网站头部  结束 -->	
		
		<!-- 正文区 -->
		<div class="content">
			
			<!-- pc端导航   -->
			<header class="pc-header">
				<a href="index.html" class="pc-header-logo">
					<img src="images/pc-logo.png" alt="" class="pc-logo" />
				</a>
				<nav class="pc-nav">
					<ul class="nav-first-list">
						<li class="nav-first-item current">
							<a href="index.html">
								<span class="cn">首页</span>
								<span class="en">home</span>
							</a>
						</li>
						<li class="nav-first-item ">
							<a href="company-intro.php">
								<span class="cn">关于我们</span>
								<span class="en">about</span>
							</a>
							<ul class="nav-sec-list">
								<li class="nav-sec-item">
									<a href="company-intro.php">
										公司介绍
									</a>
								</li>
								<li class="nav-sec-item">
									<a href="management-idea.html">
										经营理念
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-first-item ">
							<a href="media-acticle.html">
								<span class="cn">专业服务</span>
								<span class="en">service</span>
							</a>
							<ul class="nav-sec-list">
								<li class="nav-sec-item">
									<a href="media-acticle.html">
										策略与购买
									</a>
								</li>
								<li class="nav-sec-item">
									<a href="marketing-acticle.html">
										内容营销
									</a>
								</li>
								<li class="nav-sec-item">
									<a href="marketing-internet-acticle.html">
										互联网营销
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-first-item ">
							<a href="case-list.html">
								<span class="cn">成功案例</span>
								<span class="en">cases</span>
							</a>
						</li>
						<li class="nav-first-item ">
							<a href="news-list.html">
								<span class="cn">媒体资源</span>
								<span class="en">media</span>
							</a>
						</li>
						<li class="nav-first-item ">
							<a href="infor-list.html">
								<span class="cn">行业资讯</span>
								<span class="en">news</span>
							</a>
						</li>
						<li class="nav-first-item ">
							<a href="contact.html">
								<span class="cn">联系我们</span>
								<span class="en">contact</span>
							</a>
						</li>
					</ul>
				</nav>
			</header>
			
			<section class="inside-banner-section">
				<img src="images/about-banner.jpg" alt="" class="inside-banner" />
				<img src="images/banner-title-about.png" alt="" class="banner-title wow fadeInLeft" />
			</section>
			
			<section class="location-section">
				<a href="company-intro.php" class="location-link current">公司简介</a>
				<a href="management-idea.html"  class="location-link">经营理念</a>
				
				<div class="fast-links">
					<span>当前位置:</span>
					<a href="index.html">首页 ></a>
					<a href="#">关于我们 > </a>
					<a href="#">公司简介</a>
				</div>
			</section>
			
			<section class="character-acticle company-intro-acticle">
				<h2 class="character-acticle-title-cn">
					<span><i><em>公司</em>介绍</i></span>
				</h2>
				<h4 class="character-acticle-title-en">Company introduction</h4>
				
				<div class="character-acticle-content">
					<div class="left wow acticle slideInLeft" data-wow-duration="0.5s">
						<h3 class="content-title">深圳同行同路广告有限公司</h3>
						<p class="content-text"><span class="line"></span></p>
						<p class="content-text">&nbsp;&nbsp;</p>
						<p class="content-text">是由具备十几年行业经验，拥有丰富客户渠道和媒体资源优势的资深媒体人创建而成，主营业务为电视媒体广告的强势代理，以节目营销为依托，从事品牌管理、创新植入广告、媒介策略与购买、互联网数字新媒体营销等全媒体整合传播服务，以“品牌智囊，实效传播”为宗旨，按照“媒体运营服务商、媒体内容提供商和文化产业投资商三位一体” 的发展战略，致力为企业提供一体化、专业化全品牌整合传播的广告公司。</p>
					</div>
					<div class="right wow img-box slideInRight" data-wow-duration="0.5s">
						<img src="images/content-img01.png" alt="" class="content-img" />
					</div>
				</div>
			</section>
			
			<footer class="footer">
				Copyright &copy; 2012-2017  同行同路  粤ICP备0000000号
			</footer>
		</div>
		<!-- 正文 区  结束 -->
	</div>
	<!-- 选用mm套件，最大的内容区 结束 -->
		
	<!--  选用mm套件，在手机上的导航菜单  -->
	<nav id="menu">
		<ul>
			<li><a href="index.html">首页</a></li>
			<li>
				<a href="company-intro.php">关于我们</a>
				<ul>
					<li><a href="company-intro.php">公司介绍</a></li>
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

	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery.mmenu.all.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/swiper.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/swiper.animate1.0.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/common.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>