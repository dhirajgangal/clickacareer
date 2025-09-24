<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminclickacareer extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('mazikdeal_model', 'mazikdeal');
	}
    public function index()
	{
		echo 'i am in';
	}
    public function dashboard()
	{
	        $this->load->view('includes/top_header');
                $this->load->view('includes/comman_style');
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $this->load->view('pages/home/home');
                $this->load->view('includes/comman_script');	
	}
        public function job()
	{
	        $this->load->view('includes/top_header');
                $this->load->view('includes/comman_style');
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $data['objcetgetjob'] = $this->mazikdeal->getjob();
                $this->load->view('pages/job/show_job', $data);
                $this->load->view('includes/comman_script');	
	}
        public function add_job()
	{
	        $this->load->view('includes/top_header');
                $this->load->view('includes/comman_style');
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $data['objcetgetautocompany'] = $this->mazikdeal->getautocompany();
                $this->load->view('pages/job/job_registration', $data);
                $this->load->view('includes/comman_script');	
	}
        public function job_insert(){
            $data['objcetgetinsert'] = $this->mazikdeal->insertjob();
            if($data){
                redirect(BASE_URL . 'adminclickacareer/job', 'reload');
            }
        }
        public function edit_job($id)
	{
	        $this->load->view('includes/top_header');
                $this->load->view('includes/comman_style');
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $data['objcetgetautocompany'] = $this->mazikdeal->getautocompany();
                $data['objcetgetgeteditjob'] = $this->mazikdeal->geteditjob($id);
                $this->load->view('pages/job/edit_job', $data);
                $this->load->view('includes/comman_script');	
	}
        public function submit_edit_job(){
            $data['objcetgetedit'] = $this->mazikdeal->submit_edit_job();
            if($data){
                redirect(BASE_URL . 'adminclickacareer/job');
            }
        }
        public function status(){
            $data['objcetstatus'] = $this->mazikdeal->status();
        }
        public function company()
	{
	        $this->load->view('includes/top_header');
                $this->load->view('includes/comman_style');
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $data['objcetgetcompany'] = $this->mazikdeal->getcompany();
                $this->load->view('pages/company/show_company', $data);
                $this->load->view('includes/comman_script');	
	}
        public function add_company()
	{
	        $this->load->view('includes/top_header');
                $this->load->view('includes/comman_style');
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $this->load->view('pages/company/company_registration');
                $this->load->view('includes/comman_script');	
	}
        public function company_insert(){
            $data['objcetgetcompanyinsert'] = $this->mazikdeal->insertcompany();
            if($data){
                redirect(BASE_URL . 'adminclickacareer/company', 'reload');
            }
        }
        public function service()
	{
	        $this->load->view('includes/top_header');
                $this->load->view('includes/comman_style');
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $data['objcetgetservice'] = $this->mazikdeal->getservice();
                $this->load->view('pages/service/show_service', $data);
                $this->load->view('includes/comman_script');	
	}
        public function add_service()
	{
	        $this->load->view('includes/top_header');
                $this->load->view('includes/comman_style');
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $this->load->view('pages/service/service_add');
                $this->load->view('includes/comman_script');	
	}
         public function service_insert(){
            $data['objcetgetserviceinsert'] = $this->mazikdeal->insertservice();
            if($data){
                redirect(BASE_URL . 'adminclickacareer/service', 'reload');
            }
        }
         public function edit_service($id)
	{
	        $this->load->view('includes/top_header');
                $this->load->view('includes/comman_style');
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $data['objcetgetgeteditservice'] = $this->mazikdeal->geteditservice($id);
                $this->load->view('pages/service/edit_service', $data);
                $this->load->view('includes/comman_script');	
	}
        public function submit_edit_service(){
            $data['objcetgeteditservice'] = $this->mazikdeal->submit_edit_service();
            if($data){
                redirect(BASE_URL . 'adminclickacareer/service');
            }
        }
        public function edit_company($id)
	{
	        $this->load->view('includes/top_header');
                $this->load->view('includes/comman_style');
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $data['objcetgetgeteditcompany'] = $this->mazikdeal->geteditcompany($id);
                $this->load->view('pages/company/edit_company', $data);
                $this->load->view('includes/comman_script');	
	}
        public function submit_edit_company(){
            $data['objcetgeteditcompany'] = $this->mazikdeal->submit_edit_company();
            if($data){
                redirect(BASE_URL . 'adminclickacareer/company');
            }
        }
        public function user()
	{
	        $this->load->view('includes/top_header');
                $this->load->view('includes/comman_style');
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $data['objcetgetuser'] = $this->mazikdeal->getuser();
                $this->load->view('pages/user/show_user', $data);
                $this->load->view('includes/comman_script');	
	}
	
	 public function banner()
	{
	        $this->load->view('includes/top_header');
                $this->load->view('includes/comman_style');
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $data['objcetgetbanner'] = $this->mazikdeal->getbanner();
                $this->load->view('pages/banner/show_banner', $data);
                $this->load->view('includes/comman_script');	
	}
        public function add_banner()
	{
	        $this->load->view('includes/top_header');
                $this->load->view('includes/comman_style');
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $this->load->view('pages/banner/banner_add');
                $this->load->view('includes/comman_script');	
	}
     //    public function banner_insert(){
     //       $data['objcetgetbannerinsert'] = $this->mazikdeal->insertbanner();
    //        if($data){
    //            redirect(BASE_URL . 'adminclickacareer/banner', 'reload');
    //        }
   //     }
        
        public function banner_insert(){
        
		$data = array();
		//var_dump($_FILES['fileselect']);
		//
		//exit;
//		if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){
                  $names='';
			$filesCount = count($_FILES['fileselect']['name']);
			for($i = 0; $i < $filesCount; $i++){
				$_FILES['fileselect']['name'] = $_FILES['fileselect']['name'][$i];
				$_FILES['fileselect']['type'] = $_FILES['fileselect']['type'][$i];
				$_FILES['fileselect']['tmp_name'] = $_FILES['fileselect']['tmp_name'][$i];
				$_FILES['fileselect']['error'] = $_FILES['fileselect']['error'][$i];
				$_FILES['fileselect']['size'] = $_FILES['fileselect']['size'][$i];

				$uploadPath = './uploads/';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'gif|jpg|png|jpeg|jpe';
				$config['max_size']	= '300000';
				$config['max_width'] = '1800';
				$config['max_height'] = '1800';
							
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
                                $this->upload->do_upload('fileselect');
                              
				if($this->upload->do_upload('fileselect')){
					$fileData = $this->upload->data();
					
                                        $names = $fileData['file_name'];
                                       
                                        
                        }}
                       
                        
                        if($names==''){ ?>
                            <script>
                            alert('Please Different Type Resume Upload Try again. !!');
                            window.location.replace('banner');
                            </script>
                        <?php }
//                         var_dump($names);  die();
//                $names= implode('', $name_array);
                $long=$this->input->post('long');
                $short=$this->input->post('short');
               
           
//            echo $names;
            $this->load->database();
             $updatequery1 = array(
                'long' => $long,
                'short' => $short,
                'image' => $names,
               );
                    $this->db->insert('banner', $updatequery1);  
			if(!empty($updatequery1)){?>
                <script>
                    alert('Image uploaded successfully !!');
                window.location.replace('banner');
                </script>
                             <?php   }else{?>
                <script>
                    alert('Image not uploaded. Please try again. !!');
                window.location.replace('banner');
                </script>
                             <?php   }?>
                             <?php
    //    }
    
        }
         public function edit_banner($id)
	{
	        $this->load->view('includes/top_header');
                $this->load->view('includes/comman_style');
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $data['objcetgetgeteditbanner'] = $this->mazikdeal->geteditbanner($id);
                $this->load->view('pages/banner/edit_banner', $data);
                $this->load->view('includes/comman_script');	
	}
        public function submit_edit_banner(){
        
        
            $data['objcetgeteditbanner'] = $this->mazikdeal->submit_edit_banner();
            if($data){
                redirect(BASE_URL . 'adminclickacareer/banner');
            }
        }
	
}
