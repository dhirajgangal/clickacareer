<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
         
        public function __construct(){  
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('mazikdeal_model', 'mazikdeal');
    }
    public function index() 
    {
    if ($this->session->userdata('logged_in')) 
    {
          redirect(BASE_URL . 'adminclickacareer/dashboard');
    }
    if($_POST) 
    {
            $username = $_POST['email'];
            $password = $_POST['password'];
            $userdetails = $this->mazikdeal->loginadmin($username, $password);
    if(count($userdetails) > 0)
    {
    $newdata = array('admin_id' => $userdetails[0]->admin_id,
                     'email' => $userdetails[0]->email,
                     'user_name' => $userdetails[0]->user_name,
                     'role' => $userdetails[0]->role,
                     'logged_in' => TRUE );
    $this->session->set_userdata($newdata);
    if($this->session->userdata("role") == "1")
                      {
        $this->session->set_flashdata('message', 'Successfull !!'); 
        redirect(BASE_URL . 'adminclickacareer/dashboard');}
    }
    else 
    {
        
//            $this->session->set_flashdata('message', 'Please Login !!');
//            $this->session->set_userdata($newdata);
//            
//     $newdata = array('status_message' => "Invalid Username and Password");
//     $this->session->set_userdata($newdata);
    }
    }
    $this->session->set_flashdata('message', 'Invalid Username and Password'); 
    $this->load->view('pages/login/login');
    }
    function logout() 
    {
        $this->session->sess_destroy();
        redirect(IMAGEURL, 301);
    }
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>