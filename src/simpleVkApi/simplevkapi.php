<?php


/**
 * This class it work with vk api
 */
class Simplevkapi
{
	protected $_token;
	protected $_method = 'https://api.vk.com/method/';
	protected $_scope = 'friends,photos,audio,stories,pages,status,notes,messages,wall,ads,offline,docs,groups,notifications,stats,email,market,nohttps,manage';
	protected $_redirect = 'https://oauth.vk.com/blank.html';
	
	function __construct()
	{
		
	}

	public function getToken($app_id, $scope=$this->_scope, $display='page', $redirect=$this->_redirect, $v='5.92')
	{
		$url = 'https://oauth.vk.com/authorize?client_id=' . $app_id . '&display=' . $display . '&redirect_uri=' . $redirect . '&scope=' . $scope . '&response_type=token&v=' . $v;
		return ($url);
	}
}

