<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();

        $this->load->model('CompanyModel');
		$this->load->library('session');

	}

    /////หาแค่ปี
	public function findCompanyName($param1 = 0)
	{
        $namecomp = urldecode($param1);
        $data = $this->CompanyModel->getQuery(array("name LIKE '%".$namecomp."%'"));
        echo json_encode($data);

	}
}
