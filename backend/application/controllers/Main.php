<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->library('upload');
        $this->load->helper('url');
    }

    public function index()
    {
        if (null === $this->session->userdata("userID")) {
            $this->load->helper('form');
            $this->load->view('login.php');
        } else {
            redirect(site_url('main/dashboard'));
        }
    }

    public function dashboard($userID = null)
    {
        if (null === $this->session->userdata("userID")) {
            $this->load->helper('form');
            $this->load->view('login.php');
        } else {

            $this->load->model("UserModel");
            $this->load->model("Indicator_year_target_currentModel");

            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data["role"] = $this->session->userdata("role");
            $data['year_target_current'] = $this->Indicator_year_target_currentModel->getQuery(array("indicator_year_target_currentID = 1"));


            $this->load->view('header', $data);
            $this->load->view('dashboard', $data);
            $this->load->view('footer');
        }
    }



    public function search($userID = null)
    {
        if (null === $this->session->userdata("userID")) {
            $this->load->helper('form');
            $this->load->view('login.php');
        } else {

            $this->load->model("UserModel");

            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;

            $this->load->view('header', $data);
            $this->load->view('search', $data);
            $this->load->view('footer');
        }
    }


    public function user_all($userID = null)
    {
        if (null === $this->session->userdata("userID")) {
            $this->load->helper('form');
            $this->load->view('login.php');
        } else {

            $this->load->model("UserModel");
            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data['users'] = $this->UserModel->getQuery();

            $this->load->view('header', $data);
            $this->load->view('user_all', $data);
            $this->load->view('footer');
        }
    }

    public function user_add($userID = null)
    {
        if (null === $this->session->userdata("userID")) {
            $this->load->helper('form');
            $this->load->view('login.php');
        } else {

            $this->load->model("UserModel");
            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data['users'] = $this->UserModel->getQuery();

            $this->load->view('header', $data);
            $this->load->view('user_add', $data);
            $this->load->view('footer');
        }
    }

    public function add_user_todb()
    {
        $this->load->model("UserModel");

        $vdata = array(
            "name" => $this->input->post("name"),
            "username" => $this->input->post("username"),
            "role" => $this->input->post("role"),
        );

        $this->UserModel->insert($vdata);
        echo ("<script LANGUAGE='JavaScript'>
    			window.alert('บันทึกข้อมูลเรียบร้อย');
    			</script>");
        redirect(base_url("index.php/main/user_all"), 'refresh');
    }

    public function user_edit($id, $userID = null)
    {
        if (null === $this->session->userdata("userID")) {
            $this->load->helper('form');
            $this->load->view('login.php');
        } else {

            $this->load->model("UserModel");
            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data['users'] = $this->UserModel->getQuery();
            $data['user'] = $this->UserModel->getQuery(array("userID =" . $id));

            $this->load->view('header', $data);
            $this->load->view('user_edit', $data);
            $this->load->view('footer');
        }
    }

    public function edit_user_todb()
    {
        $this->load->model("UserModel");

        $vdata = array(
            "name" => $this->input->post("name"),
            "username" => $this->input->post("username"),
            "role" => $this->input->post("role"),
        );

        $where = array(
            "userID =" . $this->input->post("userID"),
        );

        $this->UserModel->update($vdata, $where);
        echo ("<script LANGUAGE='JavaScript'>
    			window.alert('บันทึกข้อมูลเรียบร้อย');
    			</script>");
        redirect(base_url("index.php/main/user_all"), 'refresh');
    }

    public function del_user_db($id)
    {
        $this->load->model("UserModel");
        $vdata = array("userID =" . $id);
        echo ("<script LANGUAGE='JavaScript'>
    			window.alert('ลบข้อมูลเรียบร้อย');
    			</script>");
        $this->UserModel->delete($vdata);
    }

    public function add_indicator($userID = null)
    {
        if (null === $this->session->userdata("userID")) {
            $this->load->helper('form');
            $this->load->view('login.php');
        } else {

            $this->load->model("UserModel");
            $this->load->model("Indicator_year_target_currentModel");
            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data['users'] = $this->UserModel->getQuery();
            $data['year_target_current'] = $this->Indicator_year_target_currentModel->getQuery(array("indicator_year_target_currentID = 1"));

            $this->load->view('header', $data);
            $this->load->view('add_indicator', $data);
            $this->load->view('footer');
        }
    }

    public function edit_indicator($cat,$id, $userID = null)
    {
        if (null === $this->session->userdata("userID")) {
            $this->load->helper('form');
            $this->load->view('login.php');
        } else {

            $this->load->model("UserModel");
            $this->load->model("Indicator_year_target_currentModel");
            $this->load->model("Indicator1Model");
            $this->load->model("Indicator2Model");
            $this->load->model("Indicator3Model");
            $this->load->model("Indicator4Model");
            $this->load->model("Indicator5Model");
            $this->load->model("Indicator_yearModel");
            $this->load->model("CategoryModel");

            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data['category'] = $this->CategoryModel->getQuery();
            $data['year_target_current'] = $this->Indicator_year_target_currentModel->getQuery(array("indicator_year_target_currentID = 1"));
            $data['indicator_year'] = $this->Indicator_yearModel->getQuery();

            if ($cat == 1) {
                $data['indicator'] = $this->Indicator1Model->getQuery(array("indicatorID = '".$id."'"));
            } elseif ($cat == 2) {
                $data['indicator'] = $this->Indicator2Model->getQuery(array("indicatorID = '".$id."'"));
            } elseif ($cat == 3) {
                $data['indicator'] = $this->Indicator3Model->getQuery(array("indicatorID = '".$id."'"));
            } elseif ($cat == 4) {
                $data['indicator'] = $this->Indicator4Model->getQuery(array("indicatorID = '".$id."'"));
            } elseif ($cat == 5) {
                $data['indicator'] = $this->Indicator5Model->getQuery(array("indicatorID = '".$id."'"));
            }

            $this->load->view('header', $data);
            $this->load->view('edit_indicator', $data);
            $this->load->view('footer');
        }
    }

    public function add_indicator_todb()
    {
        $this->load->model("Indicator1Model");
        $this->load->model("Indicator2Model");
        $this->load->model("Indicator3Model");
        $this->load->model("Indicator4Model");
        $this->load->model("Indicator5Model");
        $this->load->model("Indicator_yearModel");
        $in_year = $this->input->post("indicator_year");

        $id = $in_year.uniqid();

        $cid = $this->input->post("cid");
        $vdata = array(
            "indicatorID" => $id,
            "indicator_title" => $this->input->post("indicator_title"),
            "cid" => $this->input->post("cid"),
            "uid" => $this->input->post("uid"),
            "description" => $this->input->post("description"),
            "year" => $this->input->post("indicator_year"),
        );


        if($cid == 1){
            $this->Indicator1Model->insert($vdata);

        } elseif ($cid == 2){
            $this->Indicator2Model->insert($vdata);

        } elseif($cid == 3){
            $this->Indicator3Model->insert($vdata);

        } elseif($cid == 4){
            $this->Indicator4Model->insert($vdata);

        } elseif($cid == 5){
            $this->Indicator5Model->insert($vdata);
        } 
        

        $vdata2 = array(
            "indicator_id" => $id,
            "indicator_year" => $this->input->post("indicator_year"),
            "indicator_year_result" => $this->input->post("indicator_year_result"),
            "indicator_year_target" => $this->input->post("indicator_year_target"),
        );

        $vdata3 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year - 1,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata4 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year - 2,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata5 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year - 3,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata6 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year - 4,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata61 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year - 5,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata62 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year - 6,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata7 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year +1,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata8 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year +2,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata9 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year +3,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata10 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year +4,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata11 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year +5,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata12 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year +6,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata13 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year +7,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata14 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year +8,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata15 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year +9,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata16 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year +10,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata17 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year +11,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata18 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year +12,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata19 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year +13,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );
        $vdata20 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year +14,
            "indicator_year_result" => "",
            "indicator_year_target" => "",
        );

        $this->Indicator_yearModel->insert($vdata2);
        $this->Indicator_yearModel->insert($vdata3);
        $this->Indicator_yearModel->insert($vdata4);
        $this->Indicator_yearModel->insert($vdata5);
        $this->Indicator_yearModel->insert($vdata6);
        $this->Indicator_yearModel->insert($vdata61);
        $this->Indicator_yearModel->insert($vdata62);
        $this->Indicator_yearModel->insert($vdata7);
        $this->Indicator_yearModel->insert($vdata8);
        $this->Indicator_yearModel->insert($vdata9);
        $this->Indicator_yearModel->insert($vdata10);
        $this->Indicator_yearModel->insert($vdata11);
        $this->Indicator_yearModel->insert($vdata12);
        $this->Indicator_yearModel->insert($vdata13);
        $this->Indicator_yearModel->insert($vdata14);
        $this->Indicator_yearModel->insert($vdata15);
        $this->Indicator_yearModel->insert($vdata16);
        // $this->Indicator_yearModel->insert($vdata17);
        // $this->Indicator_yearModel->insert($vdata18);
        // $this->Indicator_yearModel->insert($vdata19);
        // $this->Indicator_yearModel->insert($vdata20);
        $id = $in_year.uniqid();
        echo ("<script LANGUAGE='JavaScript'>
    			window.alert('บันทึกข้อมูลเรียบร้อย');
    			</script>");
        redirect(base_url("index.php/main/add_indicator#add"), 'refresh');
    }

    public function add_user_indicator_todb()
    {
        $this->load->model("User_indicatorModel");


        $vdata = array(
            "indicator_id" => $this->input->post("indicator_id"),
            "name" => $this->input->post("name"),
            "uid" => $this->input->post("uid"),
        );

        $this->User_indicatorModel->insert($vdata);
        
    }

    public function edit_indicator_todb()
    {
        $this->load->model("Indicator1Model");
        $this->load->model("Indicator2Model");
        $this->load->model("Indicator3Model");
        $this->load->model("Indicator4Model");
        $this->load->model("Indicator5Model");
        $this->load->model("Indicator_yearModel");
        $id = $this->input->post("indicatorID");
        $cid = $this->input->post("cid");
        $year = $this->input->post("year");

        $vdata = array(
            "indicator_title" => $this->input->post("indicator_title"),
            "description" => $this->input->post("description"),
        );
        $where = array(
            "indicatorID = '".$id."'"
        );

        if($cid == 1){
            $this->Indicator1Model->update($vdata, $where);

        } elseif ($cid == 2){
            $this->Indicator2Model->update($vdata, $where);

        } elseif($cid == 3){
            $this->Indicator3Model->update($vdata, $where);

        } elseif($cid == 4){
            $this->Indicator4Model->update($vdata, $where);

        } elseif($cid == 5){
            $this->Indicator5Model->update($vdata, $where);
        } 

        $vdata2 = array(
            "indicator_year_result" => $this->input->post("year4"),
        );
        $where2 = array(
            "indicator_yearID =".$this->input->post("id_year4")
        );

        $vdata3 = array(
            "indicator_year_result" => $this->input->post("year3"),
        );
        $where3 = array(
            "indicator_yearID =".$this->input->post("id_year3")
        );

        $vdata4 = array(
            "indicator_year_result" => $this->input->post("year2"),
        );
        $where4 = array(
            "indicator_yearID =".$this->input->post("id_year2")
        );

        $vdata5 = array(
            "indicator_year_result" => $this->input->post("year1"),
            "indicator_year_target" => $this->input->post("target"),
        );
        $where5 = array(
            "indicator_yearID =". $this->input->post("id_year1")
        );


        $this->Indicator_yearModel->update($vdata2, $where2);
        $this->Indicator_yearModel->update($vdata3, $where3);
        $this->Indicator_yearModel->update($vdata4, $where4);
        $this->Indicator_yearModel->update($vdata5, $where5);
        // echo ("<script LANGUAGE='JavaScript'>
    	// 		window.alert('บันทึกข้อมูลเรียบร้อย');
    	// 		</script>");
        redirect(base_url("index.php/main/indicator_all"."/".$cid."/".$year), 'refresh');
    }

    public function update_numbercat_indicator()
    {
        $this->load->model("Indicator1Model");
        $this->load->model("Indicator2Model");
        $this->load->model("Indicator3Model");
        $this->load->model("Indicator4Model");
        $this->load->model("Indicator5Model");

        
        $id = $this->input->post("indicatorID");
        $cid = $this->input->post("cid");
        $number_cat = $this->input->post("number_cat");
        $year = $this->input->post("year");

        $vdata = array(
            "number_cat" => $number_cat,
        );
        $where = array(
            "indicatorID = '".$id."'"
        );

        if($cid == 1){
            $this->Indicator1Model->update($vdata, $where);

        } elseif ($cid == 2){
            $this->Indicator2Model->update($vdata, $where);

        } elseif($cid == 3){
            $this->Indicator3Model->update($vdata, $where);

        } elseif($cid == 4){
            $this->Indicator4Model->update($vdata, $where);

        } elseif($cid == 5){
            $this->Indicator5Model->update($vdata, $where);
        } 

        // redirect(base_url("index.php/main/indicator_all"."/".$cid."/".$year), 'refresh');
    }


    public function hiden_indicator($cid,$id)
    {
        $this->load->model("Indicator1Model");
        $this->load->model("Indicator2Model");
        $this->load->model("Indicator3Model");
        $this->load->model("Indicator4Model");
        $this->load->model("Indicator5Model");

        $vdata = array(
            "status" => "0",
        );
        $where = array(
            "indicatorID = '".$id."'"
        );
        if($cid == 1){
            $this->Indicator1Model->update($vdata, $where);

        } elseif ($cid == 2){
            $this->Indicator2Model->update($vdata, $where);

        } elseif($cid == 3){
            $this->Indicator3Model->update($vdata, $where);

        } elseif($cid == 4){
            $this->Indicator4Model->update($vdata, $where);

        } elseif($cid == 5){
            $this->Indicator5Model->update($vdata, $where);
        } 

       
    }

    public function ajax_sortDetail()
	{
		header('Content-Type: application/json; charset=utf-8');
		$this->load->model("UserModel");
		$query = $this->UserModel->sortDetail();
		echo json_encode(array("success" => true));
	}
    public function ajax_getUsers()
	{
		header('Content-Type: application/json; charset=utf-8');
		$this->load->model("UserModel");
		$users = array();
		$query = $this->UserModel->getUsers();
		foreach ($query->result() as $row) {
			if ($row->name !== NULL) {
				$user = array("id" => $row->userID, "name" => $row->name);
				array_push($users, $user);
			}
		}
		echo json_encode($users);
	}

    public function add_user_indicator($userID = null)
    {
        if (null === $this->session->userdata("userID")) {
            $this->load->helper('form');
            $this->load->view('login.php');
        } else {

            $this->load->model("UserModel");
            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data['users'] = $this->UserModel->getQuery();

            $this->load->view('header', $data);
            $this->load->view('add_user_indicator', $data);
            $this->load->view('footer');
        }
    }

    public function indicator_all($cat, $year, $userID = null)
    {
        if (null === $this->session->userdata("userID")) {
            $this->load->helper('form');
            $this->load->view('login.php');
        } else {

            $this->load->model("UserModel");
            $this->load->model("Indicator1Model");
            $this->load->model("Indicator2Model");
            $this->load->model("Indicator3Model");
            $this->load->model("Indicator4Model");
            $this->load->model("Indicator5Model");
            $this->load->model("Indicator_yearModel");
            $this->load->model("V_indicator_allModel");
            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data["cat"] = $cat;
            $data["year"] = $year;
            $data['users'] = $this->UserModel->getQuery();
            $data['indicator_year'] = $this->Indicator_yearModel->getQuery();

            if ($cat == 1) {
                $data['indicator'] = $this->Indicator1Model->getQuery(array("cid = 1 and status =1 and year <=".$year));
            } elseif ($cat == 2) {
                $data['indicator'] = $this->Indicator2Model->getQuery(array("cid = 2 and status =1 and year <=".$year));
            } elseif ($cat == 3) {
                $data['indicator'] = $this->Indicator3Model->getQuery(array("cid = 3 and status =1 and year <=".$year));
            } elseif ($cat == 4) {
                $data['indicator'] = $this->Indicator4Model->getQuery(array("cid = 4 and status =1 and year <=".$year));
            } elseif ($cat == 5) {
                $data['indicator'] = $this->Indicator5Model->getQuery(array("cid = 5 and status =1 and year <=".$year));
            }

            $this->load->view('header', $data);
            $this->load->view('indicator_all', $data);
            $this->load->view('footer');
        }
    }

    public function indicator_only($userID = null)
    {
        if (null === $this->session->userdata("userID")) {
            $this->load->helper('form');
            $this->load->view('login.php');
        } else {

            $this->load->model("UserModel");
            $this->load->model("Indicator1Model");
            $this->load->model("Indicator2Model");
            $this->load->model("Indicator3Model");
            $this->load->model("Indicator4Model");
            $this->load->model("Indicator5Model");
            $this->load->model("User_indicatorModel");
            $this->load->model("Indicator_yearModel");

            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data['indicator_user'] = $this->User_indicatorModel->getQuery(array("uid =".$userID));
            $data['indicator1'] = $this->Indicator1Model->getQuery(array("status =1 "));
            $data['indicator2'] = $this->Indicator2Model->getQuery(array("status =1 "));
            $data['indicator3'] = $this->Indicator3Model->getQuery(array("status =1 "));
            $data['indicator4'] = $this->Indicator4Model->getQuery(array("status =1 "));
            $data['indicator5'] = $this->Indicator5Model->getQuery(array("status =1 "));
            $data['indicator_year'] = $this->Indicator_yearModel->getQuery();


            $this->load->view('header', $data);
            $this->load->view('indicator_only', $data);
            $this->load->view('footer');
        }
    }

    public function indicator_all_search($cat, $year, $userID = null)
    {
        if (null === $this->session->userdata("userID")) {
            $this->load->helper('form');
            $this->load->view('login.php');
        } else {

            $this->load->model("UserModel");
            $this->load->model("Indicator1Model");
            $this->load->model("Indicator2Model");
            $this->load->model("Indicator3Model");
            $this->load->model("Indicator4Model");
            $this->load->model("Indicator5Model");
            $this->load->model("Indicator_yearModel");
            $this->load->model("V_indicator_allModel");
            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data["cat"] = $cat;
            $data["year"] = $year;
            $data['users'] = $this->UserModel->getQuery();
            $data['indicator_year'] = $this->Indicator_yearModel->getQuery();

            if ($cat == 1) {
                $data['indicator'] = $this->Indicator1Model->getQuery(array("cid = 1 and status =1 and year <=".$year));
            } elseif ($cat == 2) {
                $data['indicator'] = $this->Indicator2Model->getQuery(array("cid = 2 and status =1 and year <=".$year));
            } elseif ($cat == 3) {
                $data['indicator'] = $this->Indicator3Model->getQuery(array("cid = 3 and status =1 and year <=".$year));
            } elseif ($cat == 4) {
                $data['indicator'] = $this->Indicator4Model->getQuery(array("cid = 4 and status =1 and year <=".$year));
            } elseif ($cat == 5) {
                $data['indicator'] = $this->Indicator5Model->getQuery(array("cid = 5 and status =1 and year <=".$year));
            }

            $this->load->view('header', $data);
            $this->load->view('indicator_all_search', $data);
            $this->load->view('footer');
        }
    }

    public function report_indicator($cat, $year, $userID = null)
    {
        if (null === $this->session->userdata("userID")) {
            $this->load->helper('form');
            $this->load->view('login.php');
        } else {

            $this->load->model("UserModel");
            $this->load->model("Indicator1Model");
            $this->load->model("Indicator2Model");
            $this->load->model("Indicator3Model");
            $this->load->model("Indicator4Model");
            $this->load->model("Indicator5Model");
            $this->load->model("Indicator_yearModel");
            $this->load->model("V_indicator_allModel");
            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data["cat"] = $cat;
            $data["year"] = $year;
            $data['users'] = $this->UserModel->getQuery();
            $data['indicator_year'] = $this->Indicator_yearModel->getQuery();

            if ($cat == 1) {
                $data['indicator'] = $this->Indicator1Model->getQuery(array("cid = 1 and status =1 and year <=".$year));
            } elseif ($cat == 2) {
                $data['indicator'] = $this->Indicator2Model->getQuery(array("cid = 2 and status =1 and year <=".$year));
            } elseif ($cat == 3) {
                $data['indicator'] = $this->Indicator3Model->getQuery(array("cid = 3 and status =1 and year <=".$year));
            } elseif ($cat == 4) {
                $data['indicator'] = $this->Indicator4Model->getQuery(array("cid = 4 and status =1 and year <=".$year));
            } elseif ($cat == 5) {
                $data['indicator'] = $this->Indicator5Model->getQuery(array("cid = 5 and status =1 and year <=".$year));
            }

            $this->load->view('header', $data);
            $this->load->view('report_indicator', $data);
            $this->load->view('footer');
        }
    }

    public function edit_indicator_year_target_current()
    {
        $this->load->model("Indicator_year_target_currentModel");

        $vdata = array(
            "indicator_year_target_current" => $this->input->post("indicator_year_target_current")
        );

        $where = array(
            "indicator_year_target_currentID = 1"
        );

        $this->Indicator_year_target_currentModel->update($vdata, $where);
        // redirect(base_url("index.php/main/dashboard"), 'refresh');
    }



    public function login_fail()
    {
        echo "Login fail";
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('main'));
    }

    public function login()
    {

        if ($this->input->post()) {
            $data["username"] = $this->input->post("staff_uname");
            $data["password"] = $this->input->post("staff_pass");
            $this->load->config("ldapconfig");
            $data["ldapconfig"] = $this->config->item("ldapubu");
            $this->load->library('ldap', $data);
            $login = $this->ldap->authen();
            //$login= true;
            $this->load->model("UserModel");
            if ($login && $this->UserModel->getUserSession()) {
                redirect(site_url('main/dashboard'));
            } else {
                redirect(site_url('main'));
            }
        } else {
            redirect(site_url('main'));
        }
    }
}
