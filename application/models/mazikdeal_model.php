<?php
class Mazikdeal_model extends CI_Model {
    function loginadmin($username, $password) {
        $this->db->select('*');
        $this->db->from('supper_admin');
        $this->db->where('email', $username);
        $this->db->where('is_active', 1);
        $this->db->where('role', 1);
        $this->db->where('password', $password);
        $this->db->or_where('mobile', $username);
        $query = $this->db->get();
//         $sql = $this->db->last_query();
//         die($sql);
        return $query->result();
    }
    function getjob() {
        $this->db->select('job.id as id,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $query = $this->db->get();
        return $query->result();
    }
     function insertservice(){
        $title=$this->input->post('title');
        $description=$this->input->post('description');
        $tags=$this->input->post('tags');
       
        $data = array(
            'title'=>$title,
            'description'=>$description,
            'tags'=>$tags,
           
        );
        $this->db->insert('service',$data);
        }
    
    function insertjob(){
        $title=$this->input->post('title');
        $company_details=$this->input->post('company_details');
        $experience_range=$this->input->post('experience_range');
        $salary_range=$this->input->post('salary_range');
        $location=$this->input->post('location');
        $skills=$this->input->post('skills');
        $jobs_short_description=$this->input->post('jobs_short_description');
        $long_description=$this->input->post('long_description');
        $job_location=$this->input->post('job_location');
        $industry=$this->input->post('industry');
        $date=date("Y/m/d");
        $data = array(
            'title'=>$title,
            'company_details'=>$company_details,
            'experience_range'=>$experience_range,
            'salary_range'=>$salary_range,
            'location'=>$location,
            'skills'=>$skills,
            'jobs_short_description'=>$jobs_short_description,
            'long_description'=>$long_description,
            'job_location'=>$job_location,
            'industry'=>$industry,
            'date'=>$date,
            'status'=>'1'
        );
        $this->db->insert('job',$data);
        }
    function geteditjob($id) {
        $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    function submit_edit_job(){
        $id=$this->input->post('hdn_job_id');
        $title=$this->input->post('title');
        $company_details=$this->input->post('company_details');
        $experience_range=$this->input->post('experience_range');
        $salary_range=$this->input->post('salary_range');
        $location=$this->input->post('location');
        $skills=$this->input->post('skills');
        $jobs_short_description=$this->input->post('jobs_short_description');
        $long_description=$this->input->post('long_description');
        $job_location=$this->input->post('job_location');
        $industry=$this->input->post('industry');
//        $date=date("Y/m/d");
        $data = array(
            'title'=>$title,
            'company_details'=>$company_details,
            'experience_range'=>$experience_range,
            'salary_range'=>$salary_range,
            'location'=>$location,
            'skills'=>$skills,
            'jobs_short_description'=>$jobs_short_description,
            'long_description'=>$long_description,
            'job_location'=>$job_location,
            'industry'=>$industry,
        );
        $this->db->where('id', $id);
        $this->db->update('job',$data);
        } 
    function status(){
        $tableIsactiveid=$this->input->post('tableIsactiveid');
        $arr=explode('~', $tableIsactiveid);
        $TABLE=$arr[0];
        $STATUS=$arr[1];
        $ID=$arr[2];
        $data = array(
            'status'=>$STATUS,
        );
        $this->db->where('id', $ID);
        $this->db->update($TABLE,$data);
    }
    function getcompany() {
        $this->db->select('*');
        $this->db->from('company_details');
        $query = $this->db->get();
        return $query->result();
    }
       function getservice() {
        $this->db->select('*');
        $this->db->from('service');
        $query = $this->db->get();
        return $query->result();
    }
      function getbanner() {
        $this->db->select('*');
        $this->db->from('banner');
        $query = $this->db->get();
       
        return $query->result();
    }
    function getautocompany() {
        $this->db->select('*');
        $this->db->from('company_details');
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query->result();
    }
    function insertcompany(){
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $telephone=$this->input->post('telephone');
        $industry=$this->input->post('industry');
        $description=$this->input->post('description');
        $date=date("Y/m/d");
        $data = array(
            'name'=>$name,
            'email'=>$email,
            'telephone'=>$telephone,
            'industry'=>$industry,
            'description'=>$description,
            'date'=>$date,
            'status'=>'1'
        );
        $this->db->insert('company_details',$data);
        }
    function geteditcompany($id) {
        $this->db->select('*');
        $this->db->from('company_details');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    function geteditbanner($id) {
        $this->db->select('*');
        $this->db->from('banner');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    function submit_edit_company(){
        $id=$this->input->post('hdn_company_id');
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $telephone=$this->input->post('telephone');
        $industry=$this->input->post('industry');
        $description=$this->input->post('description');
        $data = array(
            'name'=>$name,
            'email'=>$email,
            'telephone'=>$telephone,
            'industry'=>$industry,
            'description'=>$description,
        );
        $this->db->where('id', $id);
        $this->db->update('company_details',$data);
        }
           function geteditservice($id) {
        $this->db->select('*');
        $this->db->from('service');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    
    function submit_edit_service(){
        $id=$this->input->post('id');
        $title=$this->input->post('title');
        $tags=$this->input->post('tags');
        $description=$this->input->post('description');
        $data = array(
            'title'=>$title,
            'tags'=>$tags,
            'description'=>$description,
        );
        $this->db->where('id', $id);
        $this->db->update('service',$data);
        }
        
        function submit_edit_banner(){
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
                        
        $id=$this->input->post('id');
        $short=$this->input->post('short');
        $long=$this->input->post('long');
        $data = array(
            'short'=>$short,
            'long'=>$long,
            'image' => $names,
        );
        $this->db->where('id', $id);
        $this->db->update('banner',$data);
        }
    function getuser() {
        $this->db->select('profile.name as name, profile.mob as mob, profile.email as email, profile.loc as loc, profile.experience as experience, profile.fileselect as fileselect, job.title as title, company_details.name as cname');
        $this->db->from('profile');
        $this->db->join('job', 'job.id = profile.job_id');
        $this->db->join('company_details', 'company_details.id = job.company_details');
        $query = $this->db->get();
        return $query->result();
    }
    function getjobfrontend() {
        $keyskills=$this->input->post('keyskills');
//        explode(' ', $keyskills);
        $location=$this->input->post('location');
        $experience=$this->input->post('experience');
        $salarymin=$this->input->post('salarymin');
        $salarymax=$this->input->post('salarymax');
       if($keyskills!='' && $location=='' && $experience=='' && $salarymin=='' && $salarymax==''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->like('job.skills', $keyskills);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills=='' && $location!='' && $experience=='' && $salarymin=='' && $salarymax==''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->like('job.location', $location);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
      }else if($keyskills=='' && $location=='' && $experience!='' && $salarymin=='' && $salarymax==''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('job.experience_range', $experience);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills=='' && $location=='' && $experience=='' && $salarymin!='' && $salarymax==''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('salary_range', $salarymin);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
      }else if($keyskills=='' && $location=='' && $experience=='' && $salarymin=='' && $salarymax!=''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('salary_range', $salarymax);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills!='' && $location!='' && $experience=='' && $salarymin=='' && $salarymax==''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->like('job.skills', $keyskills);
        $this->db->like('job.location', $location);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills!='' && $location=='' && $experience!='' && $salarymin=='' && $salarymax==''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('job.experience_range', $experience);
        $this->db->like('job.skills', $keyskills);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills!='' && $location=='' && $experience=='' && $salarymin!='' && $salarymax==''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('salary_range', $salarymin);
        $this->db->like('job.skills', $keyskills);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills!='' && $location=='' && $experience=='' && $salarymin=='' && $salarymax!=''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('salary_range', $salarymax);
        $this->db->like('job.skills', $keyskills);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills=='' && $location!='' && $experience!='' && $salarymin=='' && $salarymax==''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('job.experience_range', $experience);
        $this->db->like('job.location', $location);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills=='' && $location!='' && $experience=='' && $salarymin!='' && $salarymax==''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('salary_range', $salarymin);
        $this->db->like('job.location', $location);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills=='' && $location!='' && $experience=='' && $salarymin=='' && $salarymax!=''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('salary_range', $salarymax);
        $this->db->like('job.location', $location);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills=='' && $location=='' && $experience!='' && $salarymin!='' && $salarymax==''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('job.experience_range', $experience);
        $this->db->where('salary_range', $salarymin);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills=='' && $location=='' && $experience!='' && $salarymin=='' && $salarymax!=''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('job.experience_range', $experience);
        $this->db->where('salary_range', $salarymax);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills=='' && $location=='' && $experience=='' && $salarymin!='' && $salarymax!=''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('salary_range', $salarymin);
        $this->db->where('salary_range', $salarymax);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills!='' && $location!='' && $experience!='' && $salarymin!='' && $salarymax!=''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('job.experience_range', $experience);
        $this->db->where('salary_range', $salarymin);
        $this->db->where('salary_range', $salarymax);
        $this->db->like('job.skills', $keyskills);
        $this->db->like('job.location', $location);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills!='' && $location!='' && $experience!='' && $salarymin!='' && $salarymax==''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('job.experience_range', $experience);
        $this->db->where('salary_range', $salarymin);
        $this->db->like('job.skills', $keyskills);
        $this->db->like('job.location', $location);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills!='' && $location!='' && $experience!='' && $salarymin=='' && $salarymax!=''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('job.experience_range', $experience);
        $this->db->where('salary_range', $salarymax);
        $this->db->like('job.skills', $keyskills);
        $this->db->like('job.location', $location);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills!='' && $location!='' && $experience=='' && $salarymin!='' && $salarymax!=''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('salary_range', $salarymin);
        $this->db->where('salary_range', $salarymax);
        $this->db->like('job.skills', $keyskills);
        $this->db->like('job.location', $location);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills!='' && $location=='' && $experience!='' && $salarymin!='' && $salarymax!=''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('job.experience_range', $experience);
        $this->db->where('salary_range', $salarymin);
        $this->db->where('salary_range', $salarymax);
        $this->db->like('job.skills', $keyskills);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills=='' && $location!='' && $experience!='' && $salarymin!='' && $salarymax!=''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('job.experience_range', $experience);
        $this->db->where('salary_range', $salarymin);
        $this->db->where('salary_range', $salarymax);
        $this->db->like('job.location', $location);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills=='' && $location=='' && $experience!='' && $salarymin!='' && $salarymax!=''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('job.experience_range', $experience);
        $this->db->where('salary_range', $salarymin);
        $this->db->where('salary_range', $salarymax);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills!='' && $location=='' && $experience=='' && $salarymin!='' && $salarymax!=''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('salary_range', $salarymin);
        $this->db->where('salary_range', $salarymax);
        $this->db->like('job.skills', $keyskills);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills!='' && $location!='' && $experience=='' && $salarymin=='' && $salarymax!=''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('salary_range', $salarymax);
        $this->db->like('job.skills', $keyskills);
        $this->db->like('job.location', $location);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills!='' && $location!='' && $experience!='' && $salarymin=='' && $salarymax==''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('job.experience_range', $experience);
        $this->db->like('job.skills', $keyskills);
        $this->db->like('job.location', $location);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }else if($keyskills=='' && $location!='' && $experience!='' && $salarymin!='' && $salarymax==''){
           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $this->db->where('job.experience_range', $experience);
        $this->db->where('salary_range', $salarymin);
        $this->db->like('job.location', $location);
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
       }
//        if($keyskills || $location || $experience || $salarymin || $salarymax){
////            echo  $keyskills;
//           $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
//        $this->db->from('job');
//        $this->db->join('company_details', 'job.company_details = company_details.id');
//        $this->db->where('job.status', '1');
//        $this->db->where('job.experience_range', $experience);
//        $this->db->where('salary_range', $salarymin);
//        $this->db->where('salary_range', $salarymax);
//        $this->db->like('job.skills', $keyskills);
//        $this->db->like('job.location', $location);
//        $query = $this->db->get();
//        $sql = $this->db->last_query();
//         echo $sql; 
//        return $query->result();
//        }
        else{
//            echo 'hi';
        $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.status', '1');
        $query = $this->db->get();
        $sql = $this->db->last_query();
//         echo $sql; 
        return $query->result();
        }
        
    }
    function getjobfrontendid($id) {
        $this->db->select('job.id as id,job.company_details as company_details,job.title as title,job.jobs_short_description as jobs_short_description,job.long_description as long_description,job.experience_range as experience_range,job.experience_range as experience_range,job.salary_range as salary_range,job.location as location,job.skills as skills,job.job_location as job_location,job.industry as industry,job.status as status,company_details.name as name,company_details.description as description,company_details.email as email,company_details.telephone as telephone');
        $this->db->from('job');
        $this->db->join('company_details', 'job.company_details = company_details.id');
        $this->db->where('job.id', $id);
        $this->db->where('job.status', '1');
        $query = $this->db->get();
        return $query->result();
    }
    }
