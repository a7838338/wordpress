<!-- wallstreet Main Slider --->
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>
<!-- /Slider Section -->
<section class="index-section">
	<div class="swiper-container index-main-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide index-main-slide index-main-slide1 ">
				<div class="swiper-container index-banner">

					<div class="swiper-wrapper">
						<div class="swiper-slide index-banner-slide " style="background: url(<?php echo get_template_directory_uri(); ?>/images/banner1.jpg) no-repeat center center; background-size: 100% 100%;">
							<div class="index-banner-text index-banner-text1 ani"
								 swiper-animate-effect="slideInLeft"
								 swiper-animate-duration="0.5s"
								 swiper-animate-delay="0s">
								<h2 class="banner-title-cn"><!--品牌智<em>囊</em>，实效传播-->
									<img src="<?php echo get_template_directory_uri(); ?>/images/banner-title-cn.png"/>
								</h2>
								<h3 class="banner-title-en"><!--Brand think tank, effective <em>communication</em>-->
									<img src="<?php echo get_template_directory_uri(); ?>/images/banner-title-en.png"/>
								</h3>
							</div>
						</div>
						<!--								    <div class="swiper-slide index-banner-slide " style="background: url(<?php echo get_template_directory_uri(); ?>/images/banner2.jpg) no-repeat center center; background-size: cover;">
                                                                        <div class="index-banner-text index-banner-text2">
                                                                            <h2 class="banner-title-cn">内容策划、<em>创意执行</em></h2>
                                                                            <h3 class="banner-title-en">Content <em>pla</em>nning, creative execution</h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide index-banner-slide " style="background: url(<?php echo get_template_directory_uri(); ?>/images/banner3.jpg) no-repeat center center; background-size: cover;">
                                                                        <div class="index-banner-text index-banner-text3">
                                                                            <h2 class="banner-title-cn">娱乐+互动，全媒体覆盖</h2>
                                                                            <h3 class="banner-title-en">Entertainment + interaction, all media coverage</h3>
                                                                            <div class="banner-intro">
                                                                                <p>内容营销是在节目内容中植入品牌DNA，将品牌质素与节目</p>
                                                                                <p>内容深度结合，作出一次全方位立体式的营销攻势，演绎品牌好故事。</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                -->
					</div>
					<div class="swiper-pagination index-banner-pagination"></div>

				</div>
			</div>
			<div class="swiper-slide index-main-slide index-main-slide2 " style="background: url(<?php echo get_template_directory_uri(); ?>/images/index-page2-bg.jpg) no-repeat center right; background-size: cover;">
				<div class="main-slide-title ani"
					 swiper-animate-effect="fadeInUp"
					 swiper-animate-duration="0.5s"
					 swiper-animate-delay="0s">
					<div class="line"></div>
					<div class="square">
						<span class="title">关于我们</span>
					</div>
				</div>
				<div class="about-section about-company-section ani"
					 swiper-animate-effect="slideInLeft"
					 swiper-animate-duration="0.5s"
					 swiper-animate-delay="0.2s">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-company.png" class="img"/>
					<div class="text-box">
						<h3>公司简介</h3>
						<p>以“品牌智囊，实效传播”为宗旨，按照“媒体运营服务商、媒体内容提供商</p>
						<p>和文化产业投资商三位一体” 的发展战略，致力为企业提供一体化、</p>
						<p>专业化全品牌整合传播的广告公司。</p>
						<a href="company-intro.html" class="more">查看详情</a>
					</div>
				</div>
				<div class="about-section about-company-section ani"
					 swiper-animate-effect="slideInLeft"
					 swiper-animate-duration="0.5s"
					 swiper-animate-delay="0.5s">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-company2.png" class="img"/>
					<div class="text-box">
						<h3>经营理念</h3>
						<p>广告的基本定律就是让品牌卓而不凡，敬重每一个客户和品牌，全力关注客户</p>
						<p>和品牌的未来，成为客户优先选择的媒体传播合作伙伴，同行同路，</p>
						<p>与品牌一路同行，与你同行同路！</p>
						<a href="management-idea.html" class="more">查看详情</a>
					</div>
				</div>

			</div>

			<div class="swiper-slide index-main-slide index-main-slide3 " style="background: url(<?php echo get_template_directory_uri(); ?>/images/index-page3-bg.jpg) no-repeat center center; background-size: cover;">
				<div class="main-slide-title ani" swiper-animate-effect="fadeInUp"
					 swiper-animate-duration="0.3s"
					 swiper-animate-delay="0s">
					<div class="line"></div>
					<div class="square">
						<span class="title">专业服务</span>
					</div>
				</div>
				<div class="index-service-box">
					<div class="item ani" swiper-animate-effect="slideInLeft"
						 swiper-animate-duration="0.5s"
						 swiper-animate-delay="0s">
						<div class="img-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/images/service-img01.png" alt="" class="defult"/>
							<img src="<?php echo get_template_directory_uri(); ?>/images/service-img01-active.png" alt="" class="active"/>
						</div>
						<h3>媒介策略与购买1</h3>
						<p>拥有全媒体资源整合购买能力，为客户制定科学的媒体投放计划，保障服务效果...</p>
						<a href="media-acticle.html">查看详情</a>
					</div>
					<div class="item ani" swiper-animate-effect="fadeInUp"
						 swiper-animate-duration="0.5s"
						 swiper-animate-delay="0s">
						<div class="img-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/images/service-img02.png" alt="" class="defult"/>
							<img src="<?php echo get_template_directory_uri(); ?>/images/service-img02-active.png" alt="" class="active"/>
						</div>
						<h3>内容营销</h3>
						<p>内容营销是在节目内容中植入品牌DNA，将品牌质素与节目内容深度结合，作出...</p>
						<a href="marketing-acticle.html">查看详情</a>
					</div>
					<div class="item ani" swiper-animate-effect="slideInRight"
						 swiper-animate-duration="0.5s"
						 swiper-animate-delay="0s">
						<div class="img-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/images/service-img03.png" alt="" class="defult"/>
							<img src="<?php echo get_template_directory_uri(); ?>/images/service-img03-active.png" alt="" class="active"/>
						</div>
						<h3>互联网数字精准营销</h3>
						<p>基于消费者兴趣点开展的内容策划、创意执行，领先于市场的社交媒体营销...</p>
						<a href="marketing-internet-acticle.html">查看详情</a>
					</div>
				</div>
			</div>

			<div class="swiper-slide index-main-slide index-main-slide4 " style="background: url(<?php echo get_template_directory_uri(); ?>/images/index-page4-bg.jpg) no-repeat center center; background-size: cover;">
				<div class="main-slide-title ani" swiper-animate-effect="fadeInUp"
					 swiper-animate-duration="0.3s"
					 swiper-animate-delay="0s">
					<div class="line"></div>
					<div class="square">
						<span class="title">成功案例</span>
					</div>
				</div>
				<div class="swiper-pagination case-pagination"></div>
				<div class="swiper-container cases-swiper-container ani" swiper-animate-effect="fadeInUp"
					 swiper-animate-duration="0.5s"
					 swiper-animate-delay="0s">
					<div class="swiper-wrapper ">
						<div class="swiper-slide case-slide case-slide1">
							<a href="case-detail.html">
								<img src="<?php echo get_template_directory_uri(); ?>/images/case-img_03.jpg" alt="" class="case-img"/>
								<div class="hover-box">
									<h3 class="title">梦想的声音</h3>
									<span>+</span>
								</div>
							</a>
						</div>
						<div class="swiper-slide case-slide case-slide2">
							<a href="case-detail.html">
								<img src="<?php echo get_template_directory_uri(); ?>/images/case-img_05.jpg" alt="" class="case-img"/>
								<div class="hover-box">
									<h3 class="title">梦想的声音</h3>
									<span>+</span>
								</div>
							</a>
						</div>
						<div class="swiper-slide case-slide case-slide3">
							<a href="case-detail.html">
								<img src="<?php echo get_template_directory_uri(); ?>/images/case-img_07.jpg" alt="" class="case-img"/>
								<div class="hover-box">
									<h3 class="title">梦想的声音</h3>
									<span>+</span>
								</div>
							</a>
						</div>
						<div class="swiper-slide case-slide case-slide4">
							<a href="case-detail.html">
								<img src="<?php echo get_template_directory_uri(); ?>/images/case-img_09.jpg" alt="" class="case-img"/>
								<div class="hover-box">
									<h3 class="title">梦想的声音</h3>
									<span>+</span>
								</div>
							</a>
						</div>
						<div class="swiper-slide case-slide case-slide5">
							<a href="case-detail.html">
								<img src="<?php echo get_template_directory_uri(); ?>/images/case-img_15.jpg" alt="" class="case-img"/>
								<div class="hover-box">
									<h3 class="title">梦想的声音</h3>
									<span>+</span>
								</div>
							</a>
						</div>
						<div class="swiper-slide case-slide case-slide6">
							<a href="case-detail.html">
								<img src="<?php echo get_template_directory_uri(); ?>/images/case-img_16.jpg" alt="" class="case-img"/>
								<div class="hover-box">
									<h3 class="title">梦想的声音</h3>
									<span>+</span>
								</div>
							</a>
						</div>
						<div class="swiper-slide case-slide case-slide7">
							<a href="case-detail.html">
								<img src="<?php echo get_template_directory_uri(); ?>/images/case-img_17.jpg" alt="" class="case-img"/>
								<div class="hover-box">
									<h3 class="title">梦想的声音</h3>
									<span>+</span>
								</div>
							</a>
						</div>
						<div class="swiper-slide case-slide case-slide8">
							<a href="case-detail.html">
								<img src="<?php echo get_template_directory_uri(); ?>/images/case-img_18.jpg" alt="" class="case-img"/>
								<div class="hover-box">
									<h3 class="title">梦想的声音</h3>
									<span>+</span>
								</div>
							</a>
						</div>
						<div class="swiper-slide case-slide case-slide9">
							<a href="case-detail.html">
								<img src="<?php echo get_template_directory_uri(); ?>/images/case-img_03.jpg" alt="" class="case-img"/>
								<div class="hover-box">
									<h3 class="title">梦想的声音</h3>
									<span>+</span>
								</div>
							</a>
						</div>
						<div class="swiper-slide case-slide case-slide10">
							<a href="case-detail.html">
								<img src="<?php echo get_template_directory_uri(); ?>/images/case-img_03.jpg" alt="" class="case-img"/>
								<div class="hover-box">
									<h3 class="title">梦想的声音</h3>
									<span>+</span>
								</div>
							</a>
						</div>
						<div class="swiper-slide case-slide case-slide11">
							<a href="case-detail.html">
								<img src="<?php echo get_template_directory_uri(); ?>/images/case-img_17.jpg" alt="" class="case-img"/>
								<div class="hover-box">
									<h3 class="title">梦想的声音</h3>
									<span>+</span>
								</div>
							</a>
						</div>
						<div class="swiper-slide case-slide case-slide12">
							<a href="case-detail.html">
								<img src="<?php echo get_template_directory_uri(); ?>/images/case-img_18.jpg" alt="" class="case-img"/>
								<div class="hover-box">
									<h3 class="title">梦想的声音</h3>
									<span>+</span>
								</div>
							</a>
						</div>
					</div>

					<!-- Add Pagination -->

				</div>
				<a class="case-more more-btn" href="case-list.html">
					查看更多
				</a>
			</div>

			<div class="swiper-slide index-main-slide index-main-slide5 " style="background: url(<?php echo get_template_directory_uri(); ?>/images/index-page5-bg.jpg) no-repeat center center; background-size: cover;">
				<div class="main-slide-title ani" swiper-animate-effect="fadeInUp"
					 swiper-animate-duration="0.5s"
					 swiper-animate-delay="0s">
					<div class="line"></div>
					<div class="square">
						<span class="title">电视媒体</span>
					</div>
				</div>
				<div class="swiper-container tv-swiper-container ani" swiper-animate-effect="fadeInDown"
					 swiper-animate-duration="0.5s"
					 swiper-animate-delay="0s">
					<div class="swiper-wrapper ">
						<div class="swiper-slide tv-slide tv-slide1">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tv_jiangshu.jpg" alt="" class="tv-img"/>
							</a>
						</div>
						<div class="swiper-slide tv-slide tv-slide2">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tv_hubei.jpg" alt="" class="tv-img"/>
							</a>
						</div>
						<div class="swiper-slide tv-slide tv-slide3">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tv_shandong.jpg" alt="" class="tv-img"/>
							</a>
						</div>
						<div class="swiper-slide tv-slide tv-slide4">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tv_anhui.jpg" alt="" class="tv-img"/>
							</a>
						</div>
						<div class="swiper-slide tv-slide tv-slide5">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tv_shenzhen.jpg" alt="" class="tv-img"/>
							</a>
						</div>
						<div class="swiper-slide tv-slide tv-slide6">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tv_tianjin.jpg" alt="" class="tv-img"/>
							</a>
						</div>
						<div class="swiper-slide tv-slide tv-slide7">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tv_cctv.jpg" alt="" class="tv-img"/>
							</a>
						</div>
						<div class="swiper-slide tv-slide tv-slide8">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tv_hunan.jpg" alt="" class="tv-img"/>
							</a>
						</div>
						<div class="swiper-slide tv-slide tv-slide9">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tv_dongfang.jpg" alt="" class="tv-img"/>
							</a>
						</div>
						<div class="swiper-slide tv-slide tv-slide10">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/tv_zhejiang.jpg" alt="" class="tv-img"/>
							</a>
						</div>
					</div>

					<!-- Add Pagination -->

				</div>
				<div class="main-slide-title ani" swiper-animate-effect="fadeInUp"
					 swiper-animate-duration="0.5s"
					 swiper-animate-delay="0s">
					<div class="line"></div>
					<div class="square">
						<span class="title">其他媒体</span>
					</div>
				</div>
				<div class="swiper-container media-container ani" swiper-animate-effect="fadeInUp"
					 swiper-animate-duration="0.5s"
					 swiper-animate-delay="0s">
					<div class="swiper-wrapper">
						<div class="swiper-slide media-slide media-slide1">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/media-partner-youku.jpg" alt="" class="medea-img" />
							</a>
						</div>
						<div class="swiper-slide media-slide media-slide2">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/media-partner-qq.jpg" alt="" class="medea-img" />
							</a>
						</div>
						<div class="swiper-slide media-slide media-slide3">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/media-partner-mangguo.jpg" alt="" class="medea-img" />
							</a>
						</div>
						<div class="swiper-slide  media-slide4 media-slide">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/media-partner-leshi.jpg" alt="" class="medea-img" />
							</a>
						</div>
						<div class="swiper-slide media-slide5 media-slide">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/media-partner-iqiyi.jpg" alt="" class="medea-img" />
							</a>
						</div>
						<div class="swiper-slide media-slide6 media-slide">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/media-partner-souhu.jpg" alt="" class="medea-img" />
							</a>
						</div>
						<div class="swiper-slide media-slide7 media-slide">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/media-partner-youku.jpg" alt="" class="medea-img" />
							</a>
						</div>
						<div class="swiper-slide media-slide8 media-slide">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/media-partner-iqiyi.jpg" alt="" class="medea-img" />
							</a>
						</div>
						<div class="swiper-slide media-slide9 media-slide">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/media-partner-souhu.jpg" alt="" class="medea-img" />
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="swiper-slide index-main-slide index-main-slide6 ">
				<footer class="page-footer">
					<div class="footer-top " >
						<h2 class="title">深圳同行同路广告有限公司</h2>
						<h4 class="title-2">致力为客户提供一体化、专业化全品牌整合传播的广告公司</h4>
						<div class="infor-box">
							<div class="infor-box-left">
								<p>
									<span class="phone">0755-88300616</span>
									<span class="email">sztxtl@yeah.net</span>
								</p>
								<p>
									<span class="address">深圳市福田区泰然四路6号天安数码时代大厦A座2101</span>
								</p>
							</div>
							<div class="qr-box wechat-box">
								<img src="<?php echo get_template_directory_uri(); ?>/images/wechat-qrcode.jpg" alt="" />
								<h4>微信公众号</h4>
							</div>
							<div class="qr-box weibo-box">
								<img src="<?php echo get_template_directory_uri(); ?>/images/weibo-qrcode.jpg" alt="" />
								<h4>企业微博</h4>
							</div>
						</div>
					</div>
				</footer>
				<div class="map-box">
					<div id="map" >
						<div  id="allmap"></div>
					</div>
					<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
					<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=67jMQ5DmYTe1TLMBKFUTcZAR"></script>

					<script type="text/javascript">
						$(function () {
							ShowMap('114.0384635728,22.5412560767', '深圳市福田区泰然四路6号天安数码时代大厦A座2101', '深圳同行同路广告有限公司', '0755-88300616', 'sztxtl@yeah.net', '17');
						})
						function getInfo(id) {
							$.ajax({
								type: "POST",
								url: "WebUserControl/Contact/GetInfo.ashx",
								cache: false,
								async: false,
								data: { ID: id },
								success: function (data) {
									data = eval(data);
									var length = data.length;
									if (length > 0) {
										ShowMap(data[0]["Image"], data[0]["NewsTitle"], data[0]["Address"], data[0]["Phone"], data[0]["NewsTags"], data[0]["NewsNum"]);
									}
								}
							});
						}
						function ShowMap(zuobiao, name, addrsee, phone, email, zoom) {
							var arrzuobiao = zuobiao.split(',');
							var map = new BMap.Map("allmap");
							map.centerAndZoom(new BMap.Point(arrzuobiao[0], arrzuobiao[1]), zoom);
							map.addControl(new BMap.NavigationControl());
							var marker = new BMap.Marker(new BMap.Point(arrzuobiao[0], arrzuobiao[1]));
							map.addOverlay(marker);
							/*var infoWindow = new BMap.InfoWindow('<p style="color: #bf0008;font-size:14px;">' + name + '</p><p>地址：' + addrsee + '</p><p>电话：' + phone + '</p><p>邮箱：' + email + '</p>');
							 marker.addEventListener("click", function () {
							 this.openInfoWindow(infoWindow);
							 });*/
							//marker.openInfoWindow(infoWindow);
						}

					</script>
				</div>
			</div>