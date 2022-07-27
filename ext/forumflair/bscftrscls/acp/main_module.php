<?php

/*
* @package phpBB Extension - Basic Footer Socials
* @copyright (c) 2022, ForumFlair, https://forumflair.co.uk
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace forumflair\bscftrscls\acp;

class main_module
{

var $u_action;

	function main($id, $mode)
	{
		global $user, $template, $request, $config;

		$this->tpl_name 	= 'acp_bscftrscls';
		$this->page_title 	= $user->lang('ACP_BSCFTRSCLS_SETTINGS');
		$form_name 		 	= 'acp_bscftrscls';

		add_form_key($form_name);

		$submit = $request->is_set_post('submit');
		if ($submit)
		{
		if (!check_form_key('acp_bscftrscls'))
		{
		trigger_error('FORM_INVALID');
		}

		$config->set('bscftrscls_enbl',				$request->variable('bscftrscls_enbl', 0));

		$config->set('bscftrscls_sze',				$request->variable('bscftrscls_sze', 0));
		$config->set('bscftrscls_crnrs',			$request->variable('bscftrscls_crnrs', 0));

		$config->set('bscftrscls_wbst_enbl',		$request->variable('bscftrscls_wbst_enbl', 0));
		$config->set('bscftrscls_wbst_url',			$request->variable('bscftrscls_wbst_url', ''));

		$config->set('bscftrscls_fcbk_enbl',		$request->variable('bscftrscls_fcbk_enbl', 0));
		$config->set('bscftrscls_fcbk_url',			$request->variable('bscftrscls_fcbk_url', ''));

		$config->set('bscftrscls_twtr_enbl',		$request->variable('bscftrscls_twtr_enbl', 0));
		$config->set('bscftrscls_twtr_url',			$request->variable('bscftrscls_twtr_url', ''));

		$config->set('bscftrscls_insta_enbl',		$request->variable('bscftrscls_insta_enbl', 0));
		$config->set('bscftrscls_insta_url',		$request->variable('bscftrscls_insta_url', ''));

		$config->set('bscftrscls_pntrst_enbl',		$request->variable('bscftrscls_pntrst_enbl', 0));
		$config->set('bscftrscls_pntrst_url',		$request->variable('bscftrscls_pntrst_url', ''));

		$config->set('bscftrscls_ytube_enbl',		$request->variable('bscftrscls_ytube_enbl', 0));
		$config->set('bscftrscls_ytube_url',		$request->variable('bscftrscls_ytube_url', ''));

		$config->set('bscftrscls_drbl_enbl',		$request->variable('bscftrscls_drbl_enbl', 0));
		$config->set('bscftrscls_drbl_url',			$request->variable('bscftrscls_drbl_url', ''));

		$config->set('bscftrscls_cdpen_enbl',		$request->variable('bscftrscls_cdpen_enbl', 0));
		$config->set('bscftrscls_cdpen_url',		$request->variable('bscftrscls_cdpen_url', ''));

		$config->set('bscftrscls_gthub_enbl',		$request->variable('bscftrscls_gthub_enbl', 0));
		$config->set('bscftrscls_gthub_url',		$request->variable('bscftrscls_gthub_url', ''));

		$config->set('bscftrscls_ebay_enbl',		$request->variable('bscftrscls_ebay_enbl', 0));
		$config->set('bscftrscls_ebay_url',			$request->variable('bscftrscls_ebay_url', ''));

		$config->set('bscftrscls_pypl_enbl',		$request->variable('bscftrscls_pypl_enbl', 0));
		$config->set('bscftrscls_pypl_url',			$request->variable('bscftrscls_pypl_url', ''));

		$config->set('bscftrscls_dscrd_enbl',		$request->variable('bscftrscls_dscrd_enbl', 0));
		$config->set('bscftrscls_dscrd_url',		$request->variable('bscftrscls_dscrd_url', ''));

		trigger_error($user->lang('ACP_BSCFTRSCLS_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(

			'BSCFTRSCLS_ENBL'			=> $config['bscftrscls_enbl'],

			'BSCFTRSCLS_SZE'			=> $config['bscftrscls_sze'],
			'BSCFTRSCLS_CRNRS'			=> $config['bscftrscls_crnrs'],

			'BSCFTRSCLS_WBST_ENBL'		=> $config['bscftrscls_wbst_enbl'],
			'BSCFTRSCLS_WBST_URL'		=> $config['bscftrscls_wbst_url'],

			'BSCFTRSCLS_FCBK_ENBL'		=> $config['bscftrscls_fcbk_enbl'],
			'BSCFTRSCLS_FCBK_URL'		=> $config['bscftrscls_fcbk_url'],

			'BSCFTRSCLS_TWTR_ENBL'		=> $config['bscftrscls_twtr_enbl'],
			'BSCFTRSCLS_TWTR_URL'		=> $config['bscftrscls_twtr_url'],

			'BSCFTRSCLS_INSTA_ENBL'		=> $config['bscftrscls_insta_enbl'],
			'BSCFTRSCLS_INSTA_URL'		=> $config['bscftrscls_insta_url'],

			'BSCFTRSCLS_PNTRST_ENBL'	=> $config['bscftrscls_pntrst_enbl'],
			'BSCFTRSCLS_PNTRST_URL'		=> $config['bscftrscls_pntrst_url'],

			'BSCFTRSCLS_YTUBE_ENBL'		=> $config['bscftrscls_ytube_enbl'],
			'BSCFTRSCLS_YTUBE_URL'		=> $config['bscftrscls_ytube_url'],

			'BSCFTRSCLS_DRBL_ENBL'		=> $config['bscftrscls_drbl_enbl'],
			'BSCFTRSCLS_DRBL_URL'		=> $config['bscftrscls_drbl_url'],

			'BSCFTRSCLS_CDPEN_ENBL'		=> $config['bscftrscls_cdpen_enbl'],
			'BSCFTRSCLS_CDPEN_URL'		=> $config['bscftrscls_cdpen_url'],

			'BSCFTRSCLS_GTHUB_ENBL'		=> $config['bscftrscls_gthub_enbl'],
			'BSCFTRSCLS_GTHUB_URL'		=> $config['bscftrscls_gthub_url'],

			'BSCFTRSCLS_EBAY_ENBL'		=> $config['bscftrscls_ebay_enbl'],
			'BSCFTRSCLS_EBAY_URL'		=> $config['bscftrscls_ebay_url'],

			'BSCFTRSCLS_PYPL_ENBL'		=> $config['bscftrscls_pypl_enbl'],
			'BSCFTRSCLS_PYPL_URL'		=> $config['bscftrscls_pypl_url'],

			'BSCFTRSCLS_DSCRD_ENBL'		=> $config['bscftrscls_dscrd_enbl'],
			'BSCFTRSCLS_DSCRD_URL'		=> $config['bscftrscls_dscrd_url'],

			'U_ACTION'					=> $this->u_action,
		));
	}
}
