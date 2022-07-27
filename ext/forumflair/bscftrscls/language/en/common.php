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
	'BSCFTRSCLS_WBST'		=> 'Website',
	'BSCFTRSCLS_FCBK'		=> 'Facebook',
	'BSCFTRSCLS_TWTR'		=> 'Twitter',
	'BSCFTRSCLS_INSTA'		=> 'Instagram',
	'BSCFTRSCLS_PNTRST'		=> 'Pinterest',
	'BSCFTRSCLS_YTUBE'		=> 'YouTube',
	'BSCFTRSCLS_DRBL'		=> 'Dribbble',
	'BSCFTRSCLS_CDPEN'		=> 'CodePen',
	'BSCFTRSCLS_GTHUB'		=> 'GitHub',
	'BSCFTRSCLS_EBAY'		=> 'eBay',
	'BSCFTRSCLS_PYPL'		=> 'PayPal',
	'BSCFTRSCLS_DSCRD'		=> 'Discord',
));
