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

    public function edit_indicator($id, $userID = null)
    {
        if (null === $this->session->userdata("userID")) {
            $this->load->helper('form');
            $this->load->view('login.php');
        } else {

            $this->load->model("UserModel");
            $this->load->model("Indicator_year_target_currentModel");
            $this->load->model("IndicatorModel");
            $this->load->model("Indicator_yearModel");
            $this->load->model("CategoryModel");

            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data['category'] = $this->CategoryModel->getQuery();
            $data['year_target_current'] = $this->Indicator_year_target_currentModel->getQuery(array("indicator_year_target_currentID = 1"));
            $data['indicator'] = $this->IndicatorModel->getQuery(array("indicatorID = '".$id."'"));
            $data['indicator_year'] = $this->Indicator_yearModel->getQuery();


            $this->load->view('header', $data);
            $this->load->view('edit_indicator', $data);
            $this->load->view('footer');
        }
    }

    public function add_indicator_todb()
    {
        $this->load->model("IndicatorModel");
        $this->load->model("Indicator_yearModel");
        $id = uniqid();
        $in_year = $this->input->post("indicator_year");
        $vdata = array(
            "indicatorID" => $id,
            "indicator_title" => $this->input->post("indicator_title"),
            "cid" => $this->input->post("cid"),
            "uid" => $this->input->post("uid"),
            "description" => $this->input->post("description"),
            "year" => $this->input->post("indicator_year"),
        );

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
            "indicator_year_target" => 0,
        );
        $vdata4 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year - 2,
            "indicator_year_result" => "",
            "indicator_year_target" => 0,
        );
        $vdata5 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year - 3,
            "indicator_year_result" => "",
            "indicator_year_target" => 0,
        );
        $vdata6 = array(
            "indicator_id" => $id,
            "indicator_year" => $in_year - 4,
            "indicator_year_result" => "",
            "indicator_year_target" => 0,
        );

        $this->IndicatorModel->insert($vdata);
        $this->Indicator_yearModel->insert($vdata2);
        $this->Indicator_yearModel->insert($vdata3);
        $this->Indicator_yearModel->insert($vdata4);
        $this->Indicator_yearModel->insert($vdata5);
        $this->Indicator_yearModel->insert($vdata6);
        $id = uniqid();
        echo ("<script LANGUAGE='JavaScript'>
    			window.alert('บันทึกข้อมูลเรียบร้อย');
    			</script>");
        redirect(base_url("index.php/main/add_indicator"), 'refresh');
    }

    public function edit_indicator_todb()
    {
        $this->load->model("IndicatorModel");
        $this->load->model("Indicator_yearModel");
        $id = $this->input->post("indicatorID");
        $cid = $this->input->post("cid");
        $year = $this->input->post("year");

        $vdata = array(
            "indicator_title" => $this->input->post("indicator_title"),
            // "cid" => $this->input->post("cid"),
            "description" => $this->input->post("description"),
        );
        $where = array(
            "indicatorID = '".$id."'"
        );

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


        $this->IndicatorModel->update($vdata, $where);
        $this->Indicator_yearModel->update($vdata2, $where2);
        $this->Indicator_yearModel->update($vdata3, $where3);
        $this->Indicator_yearModel->update($vdata4, $where4);
        $this->Indicator_yearModel->update($vdata5, $where5);
        // echo ("<script LANGUAGE='JavaScript'>
    	// 		window.alert('บันทึกข้อมูลเรียบร้อย');
    	// 		</script>");
        redirect(base_url("index.php/main/indicator_all"."/".$cid."/".$year), 'refresh');
    }

    public function hiden_indicator($id)
    {
        $this->load->model("IndicatorModel");

        $vdata = array(
            "status" => "0",
        );
        $where = array(
            "indicatorID = '".$id."'"
        );

        $this->IndicatorModel->update($vdata, $where);
       
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
            $this->load->model("IndicatorModel");
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
            $data['v_indicator_allModel'] = $this->V_indicator_allModel->getQuery();

            if ($cat == 1) {
                $data['indicator'] = $this->IndicatorModel->getQuery(array("cid = 1 and status =1 and year=" . $year));
            } elseif ($cat == 2) {
                $data['indicator'] = $this->IndicatorModel->getQuery(array("cid = 2 and status =1 and year=" . $year));
            } elseif ($cat == 3) {
                $data['indicator'] = $this->IndicatorModel->getQuery(array("cid = 3 and status =1 and year=" . $year));
            } elseif ($cat == 4) {
                $data['indicator'] = $this->IndicatorModel->getQuery(array("cid = 4 and status =1 and year=" . $year));
            } elseif ($cat == 5) {
                $data['indicator'] = $this->IndicatorModel->getQuery(array("cid = 5 and status =1 and year=" . $year));
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
            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data['users'] = $this->UserModel->getQuery();

            $this->load->view('header', $data);
            $this->load->view('indicator_only', $data);
            $this->load->view('footer');
        }
    }

    public function indicator_all_search($userID = null)
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
            $this->load->view('indicator_all_search', $data);
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
