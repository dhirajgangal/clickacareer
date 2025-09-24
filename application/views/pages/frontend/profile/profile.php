	<!-- banner -->
	
	<!--//banner -->
        <style>
            .txt[type="number"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt[type="email"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
        </style>
	
	<div class="banner-bottom"  style="background:#f8f8f8">
		<div class="container">
			<div class="tittle_head_w3ls">
				<!--- <h3 class="tittle">About Us</h3>-->
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="col-md-12 banner_bottom_left">
					<h4 class="text-center">Submit Your <span>Profile</span></h4>
					
					<div class="clearfix"> </div>
				</div>
				
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	<!-- //banner-bottom --
	<div class="team_work_agile">
		<h4>Whether we play a large or small role, by working together we achieve our objectives.</h4>
	</div>
	<!-- services -->
			<div class="container" style="background:#fff;padding:0px;">
	<div class="" id="" >

			<div class="inner_sec_grids_info_w3ls">
			<div class="row">
				
               
               
               <div class="col-md-8 msg">
				<div class="form_main">
               
                <div class="form">
                <form action="<?php echo BASE_URL; ?>clickacareer/insert_profile" method="POST" enctype="multipart/form-data" id="contactFrm" name="contactFrm">
                <label>Your Name</label>
                <input type="hidden" required="" value="<?php echo $this->uri->segment(3);?>" name="job_id" class="txt">
                    <input type="text" required="" placeholder="Please input your Name" value="" name="name" class="txt">
                       <label>Mobile No</label>
                       <input type="number"  placeholder="Please input your mobile No" value="" name="mob" class="txt" min="10"  required="">
                      <label>Email</label>
                    <input type="email" required="" placeholder="Please input your Email" value="" name="email" class="txt">
                         <label>Current Location</label>
                    <input type="text" required="" placeholder="Enter your current location" value="" name="loc" class="txt">
                      <label>Experience</label>
                      <select class="form-control" name="experience" required="">
                     <option value='' selected="selected">Select</option>
                      <option value="Fresher" label="Fresher">Fresher</option>
                      <option value="1" label="1">1</option>
                      <option value="2" label="2">2</option>
                      <option value="3" label="3">3</option>
                      <option value="4" label="4">4</option>
                      <option value="5" label="5">5</option>
                      <option value="6" label="6">6</option>
                      <option value="7" label="7">7</option>
                      <option value="8" label="8">8</option>
                      <option value="9" label="9">9</option>
                      <option value="10" label="10">10</option>
                      <option value="11" label="11">11</option>
                      <option value="12" label="12">12</option>
                      <option value="13" label="13">13</option>
                      <option value="14" label="14">14</option>
                      <option value="15" label="15">15</option>
                      <option value="16" label="16">16</option>
                      <option value="17" label="17">17</option>
                      <option value="18" label="18">18</option>
                      <option value="19" label="19">19</option>
                      <option value="20" label="20">20</option>
                      <option value="21" label="21">21</option>
                      <option value="22" label="22">22</option>
                      <option value="23" label="23">23</option>
                      <option value="24" label="24">24</option>
                      <option value="25" label="25">25</option>
                      <option value="26" label="26">26</option>
                      <option value="27" label="27">27</option>
                      <option value="28" label="28">28</option>
                      <option value="29" label="29">29</option>
                      <option value="30" label="30">30</option>
                    </select>
                  
                     <div class="form-inputs upload">
     						<p>Upload your resume</p>
                                                <input type="file" id="fileselect" name="fileselect[]" multiple="multiple" required=""/>
     							<div id="filedrag">Upload Resume</div>
                                                        <p style="color: red">only gif, jpg, png, jpeg, jpe, pdf, doc, docx, rtf, text and txt upload file</p>
    				</div>
                      <label>Functional Area </label>
                      <select class="form-control" name="functional_area" >
                      <option value='' selected="selected">Select</option>
                      <option value="Accounts / Finance / Tax / CS / Audit" >Accounts / Finance / Tax / CS / Audit</option>
                      <option value="Architecture / Interior Design" >Architecture / Interior Design</option>
                      <option value="Web / Graphic Design / Visualiser" >Web / Graphic Design / Visualiser</option>
                      <option value="Hotels / Restaurants" >Hotels / Restaurants</option>
                      <option value="Content / Journalism">Content / Journalism</option>
                      <option value="Banking / Insurance" >Banking / Insurance</option>
                      <option value="Corporate Planning / Consulting" >Corporate Planning / Consulting</option>
                      <option value="ITES / BPO / KPO / Customer Service / Operations" >ITES / BPO / KPO / Customer Service / Operations</option>
                      <option value="Self Employed / Consultants" >Self Employed / Consultants</option>
                      <option value="Export / Import / Merchandising" >Export / Import / Merchandising</option>
                      <option value="Secretary / Front Office / Data Entry" >Secretary / Front Office / Data Entry</option>
                      <option value="HR / Administration / IR" >HR / Administration / IR</option>
                      <option value="Legal" >Legal</option>
                      <option value="Purchase / Logistics / Supply Chain" >Purchase / Logistics / Supply Chain</option>
                      <option value="Marketing / Advertising / MR / PR" >Marketing / Advertising / MR / PR</option>
                      <option value="Pharma / Biotech / Healthcare / Medical / R&amp;D" >Pharma / Biotech / Healthcare / Medical / R&amp;D</option>
                    </select>
                      <label>Industry  </label>
                      <select class="form-control" name="industry" >
                      <option value='' selected="selected">Select</option>
                      <option value="Accounting/Finance" >Accounting/Finance</option>
                      <option value="Advertising/PR/MR/Events" >Advertising/PR/MR/Events</option>
                      <option value="Agriculture/Dairy" >Agriculture/Dairy</option>
                      <option value="Animation" >Animation</option>
                      <option value="Architecture/Interior Designing" >Architecture/Interior Designing</option>
                      <option value="Auto/Auto Ancillary" >Auto/Auto Ancillary</option>
                      <option value="Aviation / Aerospace Firms" >Aviation / Aerospace Firms</option>
                      <option value="Banking/Financial Services/Broking" >Banking/Financial Services/Broking</option>
                      <option value="BPO/ITES" >BPO/ITES</option>
                      <option value="Brewery / Distillery" >Brewery / Distillery</option>
                      <option value="Broadcasting" >Broadcasting</option>
                      <option value="Ceramics /Sanitary ware" >Ceramics /Sanitary ware</option>
                      <option value="Chemicals/PetroChemical/Plastic/Rubber" >Chemicals/PetroChemical/Plastic/Rubber</option>
                      <option value="Construction/Engineering/Cement/Metals" >Construction/Engineering/Cement/Metals</option>
                      <option value="Consumer Durables" >Consumer Durables</option>
                      <option value="Courier/Transportation/Freight" >Courier/Transportation/Freight</option>
                    </select>
                      <label>KeySkills</label>
                    <input type="text" placeholder="Please input your KeySkills " value="" name="keyskills" class="txt">
                     <input type="submit" value="submit" name="submit" >
                </form>
				</div>
            </div>
			
                     
                </div>
                </div>
                </div>
								
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
    <br><br>
	<!-- //services -->
	

<!----------main ends--------->