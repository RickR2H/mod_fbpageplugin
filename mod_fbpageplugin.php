<?php
/**
 * @copyright	@copyright	Copyright (c) 2015 R2H (http://www.r2h.nl). All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// include the helper.php file only once
require_once dirname(__FILE__) . '/helper.php';

// Joomla variables
$document 			= JFactory::getDocument();
$config 			= JFactory::getConfig();

// module variabled
$fb_name 			= $params->get('fb_name', $config->get('sitename'));
$fb_appid 			= $params->get('fb_appid', 'XXXXXXXXXXXXXXXX');
$fb_href 			= $params->get('fb_href', 'http://#');
$fb_hide_cover		= $params->get('fb_hide_cover', false);
$fb_show_facepile 	= $params->get('fb_show_facepile', false);
$fb_show_posts 		= $params->get('fb_show_posts', false);

// parse the module parameter to the method constructScript and build script
$fb_scriptfile		= modR2H_fbpagepluginHelper::constructScript($params);

// parse the module parameter to the method checkWidth and check the width
$fb_width			= modR2H_fbpagepluginHelper::checkWidth($params);

// parse the module parameter to the method checkHeight and check height
$fb_height			= modR2H_fbpagepluginHelper::checkHeight($params);

// Add builded script to the head
$document->addScriptDeclaration($fb_scriptfile);

// get the module class suffix
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

// generate the layout
require(JModuleHelper::getLayoutPath('mod_fbpageplugin', $params->get('layout', 'default')));