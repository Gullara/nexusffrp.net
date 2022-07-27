<?php

/*
* @package phpBB Extension - Basic Footer Socials
* @copyright (c) 2022, ForumFlair, https://forumflair.co.uk
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace forumflair\bscftrscls\migrations;

class bscftrscls_data extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('module.add',		array('acp', 'ACP_CAT_DOT_MODS', 'ACP_BSCFTRSCLS')),
			array('module.add',		array('acp', 'ACP_BSCFTRSCLS', array(
			'module_basename'		=> '\forumflair\bscftrscls\acp\main_module',
			'module_langname'		=> 'ACP_BSCFTRSCLS_SETTINGS',
			'module_mode'			=> 'overview',
			'module_auth'			=> 'ext_forumflair/bscftrscls && acl_a_board',
			))),

			array('config.add',		array('bscftrscls_enbl', '')),

			array('config.add',		array('bscftrscls_sze', '')),
			array('config.add',		array('bscftrscls_crnrs', '')),

			array('config.add',		array('bscftrscls_wbst_enbl', '')),
			array('config.add',		array('bscftrscls_wbst_url', '')),

			array('config.add',		array('bscftrscls_fcbk_enbl', '')),
			array('config.add',		array('bscftrscls_fcbk_url', '')),

			array('config.add',		array('bscftrscls_twtr_enbl', '')),
			array('config.add',		array('bscftrscls_twtr_url', '')),
			
			array('config.add',		array('bscftrscls_insta_enbl', '')),
			array('config.add',		array('bscftrscls_insta_url', '')),

			array('config.add',		array('bscftrscls_pntrst_enbl', '')),
			array('config.add',		array('bscftrscls_pntrst_url', '')),

			array('config.add',		array('bscftrscls_ytube_enbl', '')),
			array('config.add',		array('bscftrscls_ytube_url', '')),

			array('config.add',		array('bscftrscls_drbl_enbl', '')),
			array('config.add',		array('bscftrscls_drbl_url', '')),

			array('config.add',		array('bscftrscls_cdpen_enbl', '')),
			array('config.add',		array('bscftrscls_cdpen_url', '')),
			
			array('config.add',		array('bscftrscls_gthub_enbl', '')),
			array('config.add',		array('bscftrscls_gthub_url', '')),

			array('config.add',		array('bscftrscls_ebay_enbl', '')),
			array('config.add',		array('bscftrscls_ebay_url', '')),

			array('config.add',		array('bscftrscls_pypl_enbl', '')),
			array('config.add',		array('bscftrscls_pypl_url', '')),
		);
	}
}
