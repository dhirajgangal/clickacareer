<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clickacareer extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('mazikdeal_model', 'mazikdeal');
	}
    public function index()
	{
                 $this->load->view('pages/frontend/includes/styleandscript');
                 $this->load->view('pages/frontend/includes/header');
		 $this->load->view('pages/frontend/home/home');
                 $this->load->view('pages/frontend/includes/footer');
		 
	}
    public function about()
	{
                 $this->load->view('pages/frontend/includes/styleandscript');
                 $this->load->view('pages/frontend/includes/header');
		 $this->load->view('pages/frontend/about/about');
                 $this->load->view('pages/frontend/includes/footer');
	}
    public function contact()
	{
                 $this->load->view('pages/frontend/includes/styleandscript');
                 $this->load->view('pages/frontend/includes/header');
		 $this->load->view('pages/frontend/contact/contact');
                 $this->load->view('pages/frontend/includes/footer');
		
	}
    public function job_description($id)
	{
                 $this->load->view('pages/frontend/includes/styleandscript');
                 $this->load->view('pages/frontend/includes/header');
                 $data['objcetgetjob'] = $this->mazikdeal->getjobfrontendid($id);
		 $this->load->view('pages/frontend/job_description/job_description',$data);
                 $this->load->view('pages/frontend/includes/footer');
	}
    public function joblisting()
	{
                 $this->load->view('pages/frontend/includes/styleandscript');
                 $this->load->view('pages/frontend/includes/header');
                 $data['objcetgetjob'] = $this->mazikdeal->getjobfrontend();
		 $this->load->view('pages/frontend/joblisting/joblisting',$data);
                 $this->load->view('pages/frontend/includes/footer');
	}
    public function leadershipteam()
	{
                 $this->load->view('pages/frontend/includes/styleandscript');
                 $this->load->view('pages/frontend/includes/header');
		 $this->load->view('pages/frontend/leadershipteam/leadershipteam');
                 $this->load->view('pages/frontend/includes/footer');
	}
    public function ourstory()
	{
                 $this->load->view('pages/frontend/includes/styleandscript');
                 $this->load->view('pages/frontend/includes/header');
		 $this->load->view('pages/frontend/ourstory/ourstory');
                 $this->load->view('pages/frontend/includes/footer');
		 
	}
    public function services()
	{
                 $this->load->view('pages/frontend/includes/styleandscript');
                 $this->load->view('pages/frontend/includes/header');
		 $this->load->view('pages/frontend/services/services');
                 $this->load->view('pages/frontend/includes/footer');
		 
	}
    public function profile()
	{
                 $this->load->view('pages/frontend/includes/styleandscript');
                 $this->load->view('pages/frontend/includes/header');
		 $this->load->view('pages/frontend/profile/profile');
                 $this->load->view('pages/frontend/includes/footer');
                
	}
    public function insert_profile()
        {
		$data = array();
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
				$config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
				$config['max_size']	= '4096';
				$config['max_width'] = '1024';
				$config['max_height'] = '1024';
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
                                $this->upload->do_upload('fileselect');
				if($this->upload->do_upload('fileselect')){
					$fileData = $this->upload->data();
                                                                                
                                        $names = $fileData['file_name'];
                           
                        }}
                        if($names==''){ ?>
                            <script>
                            alert('Please Defferent Type Resume Upload Try again. !!');
                            window.location.replace('profile');
                            </script>
                        <?php }
//                         var_dump($names);  die();
//                $names= implode('', $name_array);
                $name=$this->input->post('name');
                $job_id=$this->input->post('job_id');
                $mob=$this->input->post('mob');
                $email=$this->input->post('email');
                $functional_area=$this->input->post('functional_area');
                $industry=$this->input->post('industry');
                $keyskills=$this->input->post('keyskills');
                $loc=$this->input->post('loc');
                $experience=$this->input->post('experience');
                $date=date("Y/m/d");
//            echo $names;
            $this->load->database();
             $updatequery1 = array(
                'name' => $name,
                'mob' => $mob,
                'email' => $email,
                'loc' => $loc,
                'functional_area' =>$functional_area,
                'industry' => $industry,
                'keyskills' => $keyskills,
                'experience' => $experience,
                'fileselect' => $names,
                'job_id' =>$job_id,
                'date' => $date,
                'status' => '1');
                    $this->db->insert('profile', $updatequery1);  
			if(!empty($updatequery1)){?>
                <script>
                    alert('Resume upload success !!');
                window.location.replace('profile');
                </script>
                             <?php   }else{?>
                <script>
                    alert('Resume not upload. Please try again. !!');
                window.location.replace('profile');
                </script>
                               <?php }
        }
    
        
}
