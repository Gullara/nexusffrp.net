<?php

/*
* @package phpBB Extension - Basic Footer Socials
* @copyright (c) 2022, ForumFlair, https://forumflair.co.uk
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_BSCFTRSCLS'						=> 'Basic Footer Socials',

	'ACP_BSCFTRSCLS_SETTINGS'				=> 'Settings',
	'ACP_BSCFTRSCLS_SETTINGS_INFO'			=> 'Here you can configure the Basic Footer Socials extension.',

	'ACP_BSCFTRSCLS_ENBL_SETUP'				=> 'Enable extension',
	'ACP_BSCFTRSCLS_ENBL'					=> 'Enable Basic Footer Socials extension',

	'ACP_BSCFTRSCLS_SCLS_STYLE_SETUP'		=> 'Socials style settings',
	'ACP_BSCFTRSCLS_SCLS_SZE'				=> 'Social icon size',
	'ACP_BSCFTRSCLS_SCLS_SML'				=> 'Small',
	'ACP_BSCFTRSCLS_SCLS_MDM'				=> 'Medium',
	'ACP_BSCFTRSCLS_SCLS_LRG'				=> 'Large',
	'ACP_BSCFTRSCLS_SCLS_CRNRS'				=> 'Social icon corners',
	'ACP_BSCFTRSCLS_SCLS_FLT'				=> 'Flat',
	'ACP_BSCFTRSCLS_SCLS_RNDD'				=> 'Rounded',
	'ACP_BSCFTRSCLS_SCLS_RND'				=> 'Round',

	'ACP_BSCFTRSCLS_SCLS_LINKS_SETUP'		=> 'Social link settings',

	'ACP_BSCFTRSCLS_WBST_ENBL'				=> 'Enable website social',
	'ACP_BSCFTRSCLS_WBST_URL'				=> 'Website URL',
	'ACP_BSCFTRSCLS_WBST_URL_PLCHLDR'		=> 'https://your-website-url-here.co.uk/',

	'ACP_BSCFTRSCLS_FCBK_ENBL'				=> 'Enable Facebook social',
	'ACP_BSCFTRSCLS_FCBK_URL'				=> 'Facebook URL',
	'ACP_BSCFTRSCLS_FCBK_URL_PLCHLDR'		=> 'https://www.facebook.com/your-username-here/',

	'ACP_BSCFTRSCLS_TWTR_ENBL'				=> 'Enable Twitter social',
	'ACP_BSCFTRSCLS_TWTR_URL'				=> 'Twitter URL',
	'ACP_BSCFTRSCLS_TWTR_URL_PLCHLDR'		=> 'https://twitter.com/your-username-here/',

	'ACP_BSCFTRSCLS_INSTA_ENBL'				=> 'Enable InstaGram social',
	'ACP_BSCFTRSCLS_INSTA_URL'				=> 'InstaGram URL',
	'ACP_BSCFTRSCLS_INSTA_URL_PLCHLDR'		=> 'https://www.instagram.com/your-username-here/',

	'ACP_BSCFTRSCLS_PNTRST_ENBL'			=> 'Enable Pinterest social',
	'ACP_BSCFTRSCLS_PNTRST_URL'				=> 'Pinterest URL',
	'ACP_BSCFTRSCLS_PNTRST_URL_PLCHLDR'		=> 'https://www.pinterest.co.uk/your-username-here/',

	'ACP_BSCFTRSCLS_YTUBE_ENBL'				=> 'Enable YouTube social',
	'ACP_BSCFTRSCLS_YTUBE_URL'				=> 'YouTube URL',
	'ACP_BSCFTRSCLS_YTUBE_URL_PLCHLDR'		=> 'https://www.youtube.com/your-channel-url-here/',

	'ACP_BSCFTRSCLS_DRBL_ENBL'				=> 'Enable Dribbble social',
	'ACP_BSCFTRSCLS_DRBL_URL'				=> 'Dribbble URL',
	'ACP_BSCFTRSCLS_DRBL_URL_PLCHLDR'		=> 'https://dribbble.com/your-username-here/',

	'ACP_BSCFTRSCLS_CDPEN_ENBL'				=> 'Enable CodePen social',
	'ACP_BSCFTRSCLS_CDPEN_URL'				=> 'CodePen URL',
	'ACP_BSCFTRSCLS_CDPEN_URL_PLCHLDR'		=> 'https://codepen.io/your-username-here/',

	'ACP_BSCFTRSCLS_GTHUB_ENBL'				=> 'Enable GitHub social',
	'ACP_BSCFTRSCLS_GTHUB_URL'				=> 'GitHub URL',
	'ACP_BSCFTRSCLS_GTHUB_URL_PLCHLDR'		=> 'https://github.com/your-username-here/',

	'ACP_BSCFTRSCLS_EBAY_ENBL'				=> 'Enable eBay social',
	'ACP_BSCFTRSCLS_EBAY_URL'				=> 'eBay URL',
	'ACP_BSCFTRSCLS_EBAY_URL_PLCHLDR'		=> 'https://www.ebay.co.uk/usr/your-username-here/',

	'ACP_BSCFTRSCLS_PYPL_ENBL'				=> 'Enable PayPal social',
	'ACP_BSCFTRSCLS_PYPL_URL'				=> 'PayPal URL',
	'ACP_BSCFTRSCLS_PYPL_URL_PLCHLDR'		=> 'https://www.paypal.com/paypalme/your-username-here/',

	'ACP_BSCFTRSCLS_DSCRD_ENBL'				=> 'Enable Discord social',
	'ACP_BSCFTRSCLS_DSCRD_URL'				=> 'Discord URL',
	'ACP_BSCFTRSCLS_DSCRD_URL_PLCHLDR'		=> 'https://discord.gg/invite-id-here/',

	'ACP_BSCFTRSCLS_SAVED'					=> 'Extension settings updated successfully.',
));
