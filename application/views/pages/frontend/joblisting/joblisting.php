<!--<script>
    function search() {
       var keyskills = document.getElementById('keyskills').value;
       var location = document.getElementById('location').value;
       var experience = document.getElementById('experience').value;
       var salarymin = document.getElementById('salarymin').value;
       var salarymax = document.getElementById('salarymax').value;
        alert(keyskills);
        alert(location);
        alert(experience);
        alert(salarymin);
        alert(salarymax);
            $.ajax({
                url: "<?php echo site_url(); ?>/clickacareer/search", //maintains the (controller/function/argument) logic in the MVC pattern
                type: "post",
                data: {keyskills: keyskills,location:location,experience:experience,salarymin:salarymin,salarymax:salarymax},
                success: function (data) {
//                    alert(data);
                    location.reload();
//        console.log(data);
                }
            });
    }
    </script>-->
    
    <style>
    .col-md-3.services-right {
    float: right;}
   .panel-default>.panel-heading {
    border-color: #cacac9;
    color: #fff;
    background-color: #c39f51; 
    text-align:center;
}
    </style>
<!-- banner -->
	
	<!--//banner -->

			<script>
window.onload = function() {
  document.getElementById('jobpage').className = 'active';
};
</script>	
	<div class="banner-bottom"  style="background:#f8f8f8">
		<div class="container">
			<div class="tittle_head_w3ls">
				<!--- <h3 class="tittle">About Us</h3>-->
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="col-md-12 banner_bottom_left">
                
					<form action="<?= site_url('joblisting'); ?>" method="post">
                    <div class="row">
                    <div class="col-sm-3">
                        
                    <label>Keyskills</label>
                     <input type="text" id="keyskills" placeholder="Enter your areas of experties" value="<?php echo $this->input->post('keyskills');?>" name="keyskills" class="form-control">
                     </div>
                     <div class="col-sm-3">
                      <label>Desire Location</label>
                      <input type="text" id="location" placeholder="where you wish to work" value="<?php echo $this->input->post('location');?>" name="location" class="form-control">
                     </div>
                     
                     <div class="col-sm-2">
                      <label>Experience</label>
                     <select class="form-control" id="experience" name="experience">
                     <option value="" selected="selected">Select</option>
                     <!--<option value="0" label="0"<?php if($this->input->post('experience')=='0'){echo 'selected="selected"';}else{}?>>0</option>-->
          <option value="1" label="1"<?php if($this->input->post('experience')=='1'){echo 'selected="selected"';}else{}?>>1</option>
          <option value="2" label="2"<?php if($this->input->post('experience')=='2'){echo 'selected="selected"';}else{}?>>2</option>
          <option value="3" label="3"<?php if($this->input->post('experience')=='3'){echo 'selected="selected"';}else{}?>>3</option>
          <option value="4" label="4"<?php if($this->input->post('experience')=='4'){echo 'selected="selected"';}else{}?>>4</option>
          <option value="5" label="5"<?php if($this->input->post('experience')=='5'){echo 'selected="selected"';}else{}?>>5</option>
          <option value="6" label="6"<?php if($this->input->post('experience')=='6'){echo 'selected="selected"';}else{}?>>6</option>
          <option value="7" label="7"<?php if($this->input->post('experience')=='7'){echo 'selected="selected"';}else{}?>>7</option>
          <option value="8" label="8"<?php if($this->input->post('experience')=='8'){echo 'selected="selected"';}else{}?>>8</option>
          <option value="9" label="9"<?php if($this->input->post('experience')=='9'){echo 'selected="selected"';}else{}?>>9</option>
          <option value="10" label="10"<?php if($this->input->post('experience')=='10'){echo 'selected="selected"';}else{}?>>10</option>
          <option value="11" label="11"<?php if($this->input->post('experience')=='11'){echo 'selected="selected"';}else{}?>>11</option>
          <option value="12" label="12"<?php if($this->input->post('experience')=='12'){echo 'selected="selected"';}else{}?>>12</option>
          <option value="13" label="13"<?php if($this->input->post('experience')=='13'){echo 'selected="selected"';}else{}?>>13</option>
          <option value="14" label="14"<?php if($this->input->post('experience')=='14'){echo 'selected="selected"';}else{}?>>14</option>
          <option value="15" label="15"<?php if($this->input->post('experience')=='15'){echo 'selected="selected"';}else{}?>>15</option>
          <option value="16" label="16"<?php if($this->input->post('experience')=='16'){echo 'selected="selected"';}else{}?>>16</option>
          <option value="17" label="17"<?php if($this->input->post('experience')=='17'){echo 'selected="selected"';}else{}?>>17</option>
          <option value="18" label="18"<?php if($this->input->post('experience')=='18'){echo 'selected="selected"';}else{}?>>18</option>
          <option value="19" label="19"<?php if($this->input->post('experience')=='19'){echo 'selected="selected"';}else{}?>>19</option>
          <option value="20" label="20"<?php if($this->input->post('experience')=='20'){echo 'selected="selected"';}else{}?>>20</option>
          <option value="21" label="21"<?php if($this->input->post('experience')=='21'){echo 'selected="selected"';}else{}?>>21</option>
          <option value="22" label="22"<?php if($this->input->post('experience')=='22'){echo 'selected="selected"';}else{}?>>22</option>
          <option value="23" label="23"<?php if($this->input->post('experience')=='23'){echo 'selected="selected"';}else{}?>>23</option>
          <option value="24" label="24"<?php if($this->input->post('experience')=='24'){echo 'selected="selected"';}else{}?>>24</option>
          <option value="25" label="25"<?php if($this->input->post('experience')=='25'){echo 'selected="selected"';}else{}?>>25</option>
          <option value="26" label="26"<?php if($this->input->post('experience')=='26'){echo 'selected="selected"';}else{}?>>26</option>
          <option value="27" label="27"<?php if($this->input->post('experience')=='27'){echo 'selected="selected"';}else{}?>>27</option>
          <option value="28" label="28"<?php if($this->input->post('experience')=='28'){echo 'selected="selected"';}else{}?>>28</option>
          <option value="29" label="29"<?php if($this->input->post('experience')=='29'){echo 'selected="selected"';}else{}?>>29</option>
          <option value="30" label="30"<?php if($this->input->post('experience')=='30'){echo 'selected="selected"';}else{}?>>30</option>
        </select>
                     </div>
                     <div class="col-sm-3">
                      <div class="col-xs-12">
                     <label>Salary Range</label>
                     </div>
                     <div class="col-xs-6">
                     <select class="form-control" id="salarymin" name="salarymin">
                     <option value="" selected="selected">Min</option>
          <option value="12477" label="&lt; .5">&lt; .5</option>
          <option value="1000" label="1"<?php if($this->input->post('salarymin')=='1000'){echo 'selected="selected"';}else{}?>>1</option>
          <option value="2000" label="2"<?php if($this->input->post('salarymin')=='2000'){echo 'selected="selected"';}else{}?>>2</option>
          <option value="3000" label="3"<?php if($this->input->post('salarymin')=='3000'){echo 'selected="selected"';}else{}?>>3</option>
          <option value="4000" label="4"<?php if($this->input->post('salarymin')=='4000'){echo 'selected="selected"';}else{}?>>4</option>
          <option value="5000" label="5"<?php if($this->input->post('salarymin')=='5000'){echo 'selected="selected"';}else{}?>>5</option>
          <option value="6000" label="6"<?php if($this->input->post('salarymin')=='6000'){echo 'selected="selected"';}else{}?>>6</option>
          <option value="7000" label="7"<?php if($this->input->post('salarymin')=='7000'){echo 'selected="selected"';}else{}?>>7</option>
          <option value="8000" label="8"<?php if($this->input->post('salarymin')=='8000'){echo 'selected="selected"';}else{}?>>8</option>
          <option value="9000" label="9"<?php if($this->input->post('salarymin')=='9000'){echo 'selected="selected"';}else{}?>>9</option>
          <option value="10000" label="10"<?php if($this->input->post('salarymin')=='10000'){echo 'selected="selected"';}else{}?>>10</option>
          <option value="11000" label="11"<?php if($this->input->post('salarymin')=='11000'){echo 'selected="selected"';}else{}?>>11</option>
          <option value="12000" label="12"<?php if($this->input->post('salarymin')=='12000'){echo 'selected="selected"';}else{}?>>12</option>
          <option value="13000" label="13"<?php if($this->input->post('salarymin')=='13000'){echo 'selected="selected"';}else{}?>>13</option>
          <option value="14000" label="14"<?php if($this->input->post('salarymin')=='14000'){echo 'selected="selected"';}else{}?>>14</option>
          <option value="15000" label="15"<?php if($this->input->post('salarymin')=='15000'){echo 'selected="selected"';}else{}?>>15</option>
          <option value="16000" label="16"<?php if($this->input->post('salarymin')=='16000'){echo 'selected="selected"';}else{}?>>16</option>
          <option value="17000" label="17"<?php if($this->input->post('salarymin')=='17000'){echo 'selected="selected"';}else{}?>>17</option>
          <option value="18000" label="18"<?php if($this->input->post('salarymin')=='18000'){echo 'selected="selected"';}else{}?>>18</option>
          <option value="19000" label="19"<?php if($this->input->post('salarymin')=='19000'){echo 'selected="selected"';}else{}?>>19</option>
          <option value="20000" label="20"<?php if($this->input->post('salarymin')=='20000'){echo 'selected="selected"';}else{}?>>20</option>
          <option value="21000" label="21"<?php if($this->input->post('salarymin')=='21000'){echo 'selected="selected"';}else{}?>>21</option>
          <option value="22000" label="22"<?php if($this->input->post('salarymin')=='22000'){echo 'selected="selected"';}else{}?>>22</option>
          <option value="23000" label="23"<?php if($this->input->post('salarymin')=='23000'){echo 'selected="selected"';}else{}?>>23</option>
          <option value="24000" label="24"<?php if($this->input->post('salarymin')=='24000'){echo 'selected="selected"';}else{}?>>24</option>
          <option value="25000" label="25"<?php if($this->input->post('salarymin')=='25000'){echo 'selected="selected"';}else{}?>>25</option>
          <option value="26000" label="26"<?php if($this->input->post('salarymin')=='26000'){echo 'selected="selected"';}else{}?>>26</option>
          <option value="27000" label="27"<?php if($this->input->post('salarymin')=='27000'){echo 'selected="selected"';}else{}?>>27</option>
          <option value="28000" label="28"<?php if($this->input->post('salarymin')=='28000'){echo 'selected="selected"';}else{}?>>28</option>
          <option value="29000" label="29"<?php if($this->input->post('salarymin')=='29000'){echo 'selected="selected"';}else{}?>>29</option>
          <option value="30000" label="30"<?php if($this->input->post('salarymin')=='30000'){echo 'selected="selected"';}else{}?>>30</option>
          <option value="31000" label="31"<?php if($this->input->post('salarymin')=='31000'){echo 'selected="selected"';}else{}?>>31</option>
          <option value="32000" label="32"<?php if($this->input->post('salarymin')=='32000'){echo 'selected="selected"';}else{}?>>32</option>
          <option value="33000" label="33"<?php if($this->input->post('salarymin')=='33000'){echo 'selected="selected"';}else{}?>>33</option>
          <option value="34000" label="34"<?php if($this->input->post('salarymin')=='34000'){echo 'selected="selected"';}else{}?>>34</option>
          <option value="35000" label="35"<?php if($this->input->post('salarymin')=='35000'){echo 'selected="selected"';}else{}?>>35</option>
          <option value="36000" label="36"<?php if($this->input->post('salarymin')=='36000'){echo 'selected="selected"';}else{}?>>36</option>
          <option value="37000" label="37"<?php if($this->input->post('salarymin')=='37000'){echo 'selected="selected"';}else{}?>>37</option>
          <option value="38000" label="38"<?php if($this->input->post('salarymin')=='38000'){echo 'selected="selected"';}else{}?>>38</option>
          <option value="39000" label="39"<?php if($this->input->post('salarymin')=='39000'){echo 'selected="selected"';}else{}?>>39</option>
          <option value="40000" label="40"<?php if($this->input->post('salarymin')=='40000'){echo 'selected="selected"';}else{}?>>40</option>
          <option value="41000" label="41"<?php if($this->input->post('salarymin')=='41000'){echo 'selected="selected"';}else{}?>>41</option>
          <option value="42000" label="42"<?php if($this->input->post('salarymin')=='42000'){echo 'selected="selected"';}else{}?>>42</option>
          <option value="43000" label="43"<?php if($this->input->post('salarymin')=='43000'){echo 'selected="selected"';}else{}?>>43</option>
          <option value="44000" label="44"<?php if($this->input->post('salarymin')=='44000'){echo 'selected="selected"';}else{}?>>44</option>
          <option value="45000" label="45"<?php if($this->input->post('salarymin')=='45000'){echo 'selected="selected"';}else{}?>>45</option>
          <option value="46000" label="46"<?php if($this->input->post('salarymin')=='46000'){echo 'selected="selected"';}else{}?>>46</option>
          <option value="47000" label="47"<?php if($this->input->post('salarymin')=='47000'){echo 'selected="selected"';}else{}?>>47</option>
          <option value="48000" label="48"<?php if($this->input->post('salarymin')=='48000'){echo 'selected="selected"';}else{}?>>48</option>
          <option value="49000" label="49"<?php if($this->input->post('salarymin')=='49000'){echo 'selected="selected"';}else{}?>>49</option>
          <option value="50000" label="50"<?php if($this->input->post('salarymin')=='50000'){echo 'selected="selected"';}else{}?>>50</option>
        </select>
        </div>
         <div class="col-xs-6">
             <select class="form-control" id="salarymax" name="salarymax">
                     <option value="" selected="selected">Max</option>
          <option value="12477" label="&lt; .5">&lt; .5</option>
          <option value="1000" label="1"<?php if($this->input->post('salarymax')=='1000'){echo 'selected="selected"';}else{}?>>1</option>
          <option value="2000" label="2"<?php if($this->input->post('salarymax')=='2000'){echo 'selected="selected"';}else{}?>>2</option>
          <option value="3000" label="3"<?php if($this->input->post('salarymax')=='3000'){echo 'selected="selected"';}else{}?>>3</option>
          <option value="4000" label="4"<?php if($this->input->post('salarymax')=='4000'){echo 'selected="selected"';}else{}?>>4</option>
          <option value="5000" label="5"<?php if($this->input->post('salarymax')=='5000'){echo 'selected="selected"';}else{}?>>5</option>
          <option value="6000" label="6"<?php if($this->input->post('salarymax')=='6000'){echo 'selected="selected"';}else{}?>>6</option>
          <option value="7000" label="7"<?php if($this->input->post('salarymax')=='7000'){echo 'selected="selected"';}else{}?>>7</option>
          <option value="8000" label="8"<?php if($this->input->post('salarymax')=='8000'){echo 'selected="selected"';}else{}?>>8</option>
          <option value="9000" label="9"<?php if($this->input->post('salarymax')=='9000'){echo 'selected="selected"';}else{}?>>9</option>
          <option value="10000" label="10"<?php if($this->input->post('salarymax')=='10000'){echo 'selected="selected"';}else{}?>>10</option>
          <option value="11000" label="11"<?php if($this->input->post('salarymax')=='11000'){echo 'selected="selected"';}else{}?>>11</option>
          <option value="12000" label="12"<?php if($this->input->post('salarymax')=='12000'){echo 'selected="selected"';}else{}?>>12</option>
          <option value="13000" label="13"<?php if($this->input->post('salarymax')=='13000'){echo 'selected="selected"';}else{}?>>13</option>
          <option value="14000" label="14"<?php if($this->input->post('salarymax')=='14000'){echo 'selected="selected"';}else{}?>>14</option>
          <option value="15000" label="15"<?php if($this->input->post('salarymax')=='15000'){echo 'selected="selected"';}else{}?>>15</option>
          <option value="16000" label="16"<?php if($this->input->post('salarymax')=='16'){echo 'selected="selected"';}else{}?>>16</option>
          <option value="17000" label="17"<?php if($this->input->post('salarymax')=='17000'){echo 'selected="selected"';}else{}?>>17</option>
          <option value="18000" label="18"<?php if($this->input->post('salarymax')=='18000'){echo 'selected="selected"';}else{}?>>18</option>
          <option value="19000" label="19"<?php if($this->input->post('salarymax')=='19000'){echo 'selected="selected"';}else{}?>>19</option>
          <option value="20000" label="20"<?php if($this->input->post('salarymax')=='20000'){echo 'selected="selected"';}else{}?>>20</option>
          <option value="21000" label="21"<?php if($this->input->post('salarymax')=='21000'){echo 'selected="selected"';}else{}?>>21</option>
          <option value="22000" label="22"<?php if($this->input->post('salarymax')=='22000'){echo 'selected="selected"';}else{}?>>22</option>
          <option value="23000" label="23"<?php if($this->input->post('salarymax')=='23000'){echo 'selected="selected"';}else{}?>>23</option>
          <option value="24000" label="24"<?php if($this->input->post('salarymax')=='24000'){echo 'selected="selected"';}else{}?>>24</option>
          <option value="25000" label="25"<?php if($this->input->post('salarymax')=='25000'){echo 'selected="selected"';}else{}?>>25</option>
          <option value="26000" label="26"<?php if($this->input->post('salarymax')=='26000'){echo 'selected="selected"';}else{}?>>26</option>
          <option value="27000" label="27"<?php if($this->input->post('salarymax')=='27000'){echo 'selected="selected"';}else{}?>>27</option>
          <option value="28000" label="28"<?php if($this->input->post('salarymax')=='28000'){echo 'selected="selected"';}else{}?>>28</option>
          <option value="29000" label="29"<?php if($this->input->post('salarymax')=='29000'){echo 'selected="selected"';}else{}?>>29</option>
          <option value="30000" label="30"<?php if($this->input->post('salarymax')=='30000'){echo 'selected="selected"';}else{}?>>30</option>
          <option value="31000" label="31"<?php if($this->input->post('salarymax')=='31000'){echo 'selected="selected"';}else{}?>>31</option>
          <option value="32000" label="32"<?php if($this->input->post('salarymax')=='32000'){echo 'selected="selected"';}else{}?>>32</option>
          <option value="33000" label="33"<?php if($this->input->post('salarymax')=='33000'){echo 'selected="selected"';}else{}?>>33</option>
          <option value="34000" label="34"<?php if($this->input->post('salarymax')=='34000'){echo 'selected="selected"';}else{}?>>34</option>
          <option value="35000" label="35"<?php if($this->input->post('salarymax')=='35000'){echo 'selected="selected"';}else{}?>>35</option>
          <option value="36000" label="36"<?php if($this->input->post('salarymax')=='36000'){echo 'selected="selected"';}else{}?>>36</option>
          <option value="37000" label="37"<?php if($this->input->post('salarymax')=='37000'){echo 'selected="selected"';}else{}?>>37</option>
          <option value="38000" label="38"<?php if($this->input->post('salarymax')=='38000'){echo 'selected="selected"';}else{}?>>38</option>
          <option value="39000" label="39"<?php if($this->input->post('salarymax')=='39000'){echo 'selected="selected"';}else{}?>>39</option>
          <option value="40000" label="40"<?php if($this->input->post('salarymax')=='40000'){echo 'selected="selected"';}else{}?>>40</option>
          <option value="41000" label="41"<?php if($this->input->post('salarymax')=='41000'){echo 'selected="selected"';}else{}?>>41</option>
          <option value="42000" label="42"<?php if($this->input->post('salarymax')=='42000'){echo 'selected="selected"';}else{}?>>42</option>
          <option value="43000" label="43"<?php if($this->input->post('salarymax')=='43000'){echo 'selected="selected"';}else{}?>>43</option>
          <option value="44000" label="44"<?php if($this->input->post('salarymax')=='44000'){echo 'selected="selected"';}else{}?>>44</option>
          <option value="45000" label="45"<?php if($this->input->post('salarymax')=='45000'){echo 'selected="selected"';}else{}?>>45</option>
          <option value="46000" label="46"<?php if($this->input->post('salarymax')=='46000'){echo 'selected="selected"';}else{}?>>46</option>
          <option value="47000" label="47"<?php if($this->input->post('salarymax')=='47000'){echo 'selected="selected"';}else{}?>>47</option>
          <option value="48000" label="48"<?php if($this->input->post('salarymax')=='48000'){echo 'selected="selected"';}else{}?>>48</option>
          <option value="49000" label="49"<?php if($this->input->post('salarymax')=='49000'){echo 'selected="selected"';}else{}?>>49</option>
          <option value="50000" label="50"<?php if($this->input->post('salarymax')=='50000'){echo 'selected="selected"';}else{}?>>50</option>
        </select>
                     </div>
                     </div>
                      <div class="col-sm-1">
                      <label>&nbsp;</label>
                      <input type="submit" name="" class="btn btn-primary" value="SEARCH"/>
                      </div>
                     </div>
                    </form>
                    
					<div class="clearfix"> </div>
				</div>
				
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	<!-- //banner-bottom --
	<div class="team_work_agile">
		<h4>Whether we play a large or small role, by working together we achieve our objectives.</h4>
	</div> -->
	<!-- services -->
	
			<div class="container" style="background:#fff;padding:0px;">
			
	<div class="main-content" id="" >

			<div class="inner_sec_grids_info_w3ls">
			<div class="col-md-3 services-right">
			<div class="panel panel-default">
 <div class="panel-heading">Drop your CV here</div>
 <div class="panel-body">We will consider your Profile for future Jobs</div>
<p style="text-align:center; margin-bottom:20px;"><span> <a href="<?= site_url('profile')?>" class="btn btn-primary">Submit Profile</a></span></p>
 </div>
 
			</div>
			
			<!-----------Job list-item----->
                <?php if($objcetgetjob){
                foreach ($objcetgetjob as $value) {?>
                    
               
                 <div class="col-md-9 services-left">
				
                <div class="panel panel-default">
  <div class="panel-body job">
 <a href="<?php echo BASE_URL?>clickacareer/job_description/<?php echo $value->id?>"> <h4 class=""><?php echo $value->title;?></h4></a>
  <h5 class=""><?php echo $value->name;?></h5>
<p><span> <i class="fa fa-folder-open"><?php echo $value->experience_range;?> Yr</i> </span> <span> <i class="fa fa-money"></i> < Rs <?php echo $value->salary_range;?></span> 
<span> <i class="fa fa-map-marker"></i> <?php echo $value->location;?></span></p>
<p>
<?php echo $value->jobs_short_description;?> <span class="pull-right"><a href="<?php echo BASE_URL?>clickacareer/job_description/<?php echo $value->id?>"> View Details....</a></span>
</p>
</div>

  <div class="panel-footer">
  <p><span><strong> Skills :</strong> <?php echo $value->skills;?>,</span> <span class="pull-right"><a href="<?php echo BASE_URL?>clickacareer/profile/<?php echo $value->id?>" class="btn btn-primary">Apply</a></span></p>
  </div>
</div> 

				</div>
				
				
				
                <?php  }} else {?>
    <p align="center">Recored not found</p>
<?php } ?>



	
                <!-----------Job list-item- End---->
                
                <!-----------Job list-item----->
<!--            	<div class="col-md-12 services-left">
				
                <div class="panel panel-default">
  <div class="panel-body job">
 <a href="job-description.html"> <h4 class="">Software Engineer-Fresher</h4></a>
  <h5 class="">Manpower Global</h5>
<p><span> <i class="fa fa-folder-open">0 to 1 Yr</i> </span> <span> <i class="fa fa-money"></i> < Rs 50,000 - 2.5 Lakh/Yr</span> 
<span> <i class="fa fa-map-marker"></i> Noida</span></p>
<p>
The software engineer will work in product design and development team to support various products testing features development using Microsoft technologies ( .Net , C# , SQL server) , JAVA etc.<span class="pull-right"><a href="<?php echo BASE_URL?>clickacareer/job_description"> View Details....</a></span>
</p>
</div>
  <div class="panel-footer">
  <p><span><strong> Skills :</strong> engineering,.net,java,php,</span> <span class="pull-right"><a href="<?php echo BASE_URL?>clickacareer/profile" class="btn btn-primary">Apply</a></span></p>
  </div>
</div>



				</div>-->
				
                <!-----------Job list-item- End---->
								
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
		


<!----------main ends--------->