<?php

/*
* @package phpBB Extension - Basic Footer Socials
* @copyright (c) 2022, ForumFlair, https://forumflair.co.uk
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace forumflair\bscftrscls\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'		=> 'load_language_on_setup',
			'core.page_header'		=> 'add_page_bscftrscls',
		);
	}

	protected $user;
	protected $template;
	protected $config;	

	public function __construct(\phpbb\user $user, \phpbb\template\template $template, \phpbb\config\config $config)
	{
		$this->user			= $user;
		$this->template		= $template;
		$this->config		= $config;
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
		'ext_name'		=> 'forumflair/bscftrscls',
		'lang_set'		=> 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function add_page_bscftrscls($event)
	{
		$this->user->add_lang_ext('forumflair/bscftrscls', 'common');

		$this->template->assign_vars(array(
		'BSCFTRSCLS_ENBL'			=> $this->config['bscftrscls_enbl'],

		'BSCFTRSCLS_SZE'			=> $this->config['bscftrscls_sze'],
		'BSCFTRSCLS_CRNRS'			=> $this->config['bscftrscls_crnrs'],

		'BSCFTRSCLS_WBST_ENBL'		=> $this->config['bscftrscls_wbst_enbl'],
		'BSCFTRSCLS_WBST_URL'		=> $this->config['bscftrscls_wbst_url'],

		'BSCFTRSCLS_FCBK_ENBL'		=> $this->config['bscftrscls_fcbk_enbl'],
		'BSCFTRSCLS_FCBK_URL'		=> $this->config['bscftrscls_fcbk_url'],

		'BSCFTRSCLS_TWTR_ENBL'		=> $this->config['bscftrscls_twtr_enbl'],
		'BSCFTRSCLS_TWTR_URL'		=> $this->config['bscftrscls_twtr_url'],

		'BSCFTRSCLS_INSTA_ENBL'		=> $this->config['bscftrscls_insta_enbl'],
		'BSCFTRSCLS_INSTA_URL'		=> $this->config['bscftrscls_insta_url'],

		'BSCFTRSCLS_PNTRST_ENBL'	=> $this->config['bscftrscls_pntrst_enbl'],
		'BSCFTRSCLS_PNTRST_URL'		=> $this->config['bscftrscls_pntrst_url'],

		'BSCFTRSCLS_YTUBE_ENBL'		=> $this->config['bscftrscls_ytube_enbl'],
		'BSCFTRSCLS_YTUBE_URL'		=> $this->config['bscftrscls_ytube_url'],

		'BSCFTRSCLS_DRBL_ENBL'		=> $this->config['bscftrscls_drbl_enbl'],
		'BSCFTRSCLS_DRBL_URL'		=> $this->config['bscftrscls_drbl_url'],

		'BSCFTRSCLS_CDPEN_ENBL'		=> $this->config['bscftrscls_cdpen_enbl'],
		'BSCFTRSCLS_CDPEN_URL'		=> $this->config['bscftrscls_cdpen_url'],

		'BSCFTRSCLS_GTHUB_ENBL'		=> $this->config['bscftrscls_gthub_enbl'],
		'BSCFTRSCLS_GTHUB_URL'		=> $this->config['bscftrscls_gthub_url'],

		'BSCFTRSCLS_EBAY_ENBL'		=> $this->config['bscftrscls_ebay_enbl'],
		'BSCFTRSCLS_EBAY_URL'		=> $this->config['bscftrscls_ebay_url'],

		'BSCFTRSCLS_PYPL_ENBL'		=> $this->config['bscftrscls_pypl_enbl'],
		'BSCFTRSCLS_PYPL_URL'		=> $this->config['bscftrscls_pypl_url'],
		));
	}

}
