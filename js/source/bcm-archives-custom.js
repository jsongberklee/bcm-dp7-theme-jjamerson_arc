// to replace/attache Onelogin logout link
/*
jQuery(document).ready(function(){
	jQuery("#block-menu-menu-menu-login-menu ul.menu li:nth-child(2) a").attr("href", "/user/logout?current=https://berklee.onelogin.com/logout");
});
*/
/*
Swap the logo to the mobile version 
*/
jQuery(window).bind("load resize",function(e){
	var $bcmW = jQuery(e.target).width();
	if($bcmW < 768) jQuery('#logo>img').attr('src', '/sites/all/themes/jjamerson_arc/logo-arc-mobile.svg');
	else jQuery('#logo>img').attr('src', '/sites/all/themes/jjamerson_arc/logo.png');
});