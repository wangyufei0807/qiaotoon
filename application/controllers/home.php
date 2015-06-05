<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	/**
	 * [首页]
	 * @return [type] [description]
	 */
	public function index()
	{
        $this->display('index/index.html');
	}
}
