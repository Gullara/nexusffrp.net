<?php

/*
* @package phpBB Extension - Basic Footer Socials
* @copyright (c) 2022, ForumFlair, https://forumflair.co.uk
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace forumflair\bscftrscls\acp;

class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\forumflair\bscftrscls\acp\main_module',
			'title'		=> 'ACP_BSCFTRSCLS',
			'modes'		=> array(
			'settings'	=> array(
			'title'		=> 'ACP_BSCFTRSCLS_SETTINGS',
			'auth'		=> 'ext_forumflair\bscftrscls && acl_a_board',
			'cat'		=> array('ACP_BSCFTRSCLS')),
			),
		);
	}
}
