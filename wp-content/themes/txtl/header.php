<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/cssreset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.mmenu.all.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pad.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/phone.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/phone_menu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="content">
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
                    <a href="pages/company-intro.php">
                        <span class="cn">关于我们</span>
                        <span class="en">about</span>
                    </a>
                    <ul class="nav-sec-list">
                        <li class="nav-sec-item">
                            <a href="company-intro.html">
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
