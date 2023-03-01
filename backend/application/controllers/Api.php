<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();

		$this->load->library('session');

	}

    /////หาแค่ปี
	public function findindicator($cid,$param1 = 0)
	{
        $indicator_title = urldecode($param1);
		$this->load->model("Indicator1Model");
        $this->load->model("Indicator2Model");
        $this->load->model("Indicator3Model");
        $this->load->model("Indicator4Model");
        $this->load->model("Indicator5Model");

        if($cid == 1){
			$data = $this->Indicator1Model->getQuery(array("indicator_title LIKE '%".$indicator_title."%'"));
        } elseif ($cid == 2){
			$data = $this->Indicator2Model->getQuery(array("indicator_title LIKE '%".$indicator_title."%'"));
        } elseif($cid == 3){
			$data = $this->Indicator3Model->getQuery(array("indicator_title LIKE '%".$indicator_title."%'"));
        } elseif($cid == 4){
			$data = $this->Indicator4Model->getQuery(array("indicator_title LIKE '%".$indicator_title."%'"));
        } elseif($cid == 5){
			$data = $this->Indicator5Model->getQuery(array("indicator_title LIKE '%".$indicator_title."%'"));
        } 
		
		echo json_encode($data);

	}

	public function findinUser($param1 = 0)
	{
        $name = urldecode($param1);
		$this->load->model("UserModel");

		$data = $this->UserModel->getQuery(array("name LIKE '%".$name."%'"));

		echo json_encode($data);

	}
}
