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

            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data["role"] = $this->session->userdata("role");

            
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
            if ($userID == null) {
                $userID = $this->session->userdata("userID");
            }

            $data["userID"] = $userID;
            $data['users'] = $this->UserModel->getQuery();

            $this->load->view('header', $data);
            $this->load->view('add_indicator', $data);
            $this->load->view('footer');
        }
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

    public function indicator_all($userID = null)
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
