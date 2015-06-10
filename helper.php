<?php
/**
 * @copyright	Copyright (c) 2015 R2H (http://www.r2h.nl). All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

/**
 * R2H - FB Page Plugin Helper Class.
 *
 * @package		Joomla.Site
 * @subpakage	r2h.fbpageplugin
 */
class modR2H_fbpagepluginHelper {

	public static function constructScript(&$params) {

		$fb_appid = $params->get('fb_appid', 'XXXXXXXXXXXXXXXX');

		$fb_script = "
		window.fbAsyncInit = function() {
	    FB.init({
	    	appId      : '" . $fb_appid . "',
	    	xfbml      : true,
	    	version    : 'v2.3'
	    	});
	  	};

	  	(function(d, s, id){
	    	var js, fjs = d.getElementsByTagName(s)[0];
	    	if (d.getElementById(id)) {return;}
	    	js = d.createElement(s); js.id = id;
	    	js.src = \"//connect.facebook.net/en_US/sdk.js\";
	    	fjs.parentNode.insertBefore(js, fjs);
	   	}(document, 'script', 'facebook-jssdk'));";

	   return $fb_script;

	}

	public static function checkWidth(&$params) {

		$fb_width = $params->get('fb_width', 500);

			if( ($fb_width <= 180) || ($fb_width >= 500)) {
				$fb_width = 500;
			}

		return $fb_width;

	}

	public static function checkHeight(&$params) {

		$fb_height = $params->get('fb_height', 200);

			if($fb_height <= 130) {
				$fb_height = 200;
			}

		return $fb_height;

	}

}