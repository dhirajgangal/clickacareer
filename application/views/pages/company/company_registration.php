<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/ckeditor/samples/js/sample.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/ckeditor/samples/css/samples.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="index.html"><i class="fa fa-pencil"></i> Add Company</a></li>
<!--                <li class="active">Workset</li>-->
              </ul>
      <section class="panel panel-default m-t-lg bg-white">
        <header class="panel-heading text-center">
          <strong>Add Company Form</strong>
        </header>
          <form action="<?php echo BASE_URL; ?>adminclickacareer/company_insert" method="POST" enctype="multipart/form-data" class="panel-body wrapper-lg">
          <div class="form-group  col-md-6">
            <label class="control-label">Title</label> <span id="alreadyexists" style="color: red" ></span>
            <!--<input type="hidden" name="hdn_user_id" id="hdn_user_id" />-->
            <input type="text" name="name" id="" placeholder="Company Name" class="form-control input-lg" required="">
          </div>
          
<!--          <div class="form-group  col-md-4">
            <label class="control-label">Company Description</label>
            <input type="text" name="description" placeholder=" Company Description " class="form-control input-lg" required="">
          </div>-->
            <div class="form-group  col-md-6">
            <label class="control-label">Company Email</label>
            <input type="text" name="email" placeholder=" Company Email" class="form-control input-lg"  required="">
          </div>
            <div class="form-group  col-md-6">
            <label class="control-label">Telephone</label>
            <input type="text" name="telephone" placeholder=" Telephone" class="form-control input-lg"  required="">
          </div>
               <div class="form-group  col-md-6">
            <label class="control-label">Industry</label>
            <input type="text" name="industry" placeholder=" Industry" class="form-control input-lg" required="">
          </div>
          <div class="form-group  col-md-12">
            <label class="control-label">Company Description</label>
            <textarea id="editor" name="description" placeholder=" Company Description" required="" class="form-control input-lg"></textarea>
          </div>
<!--               <div class="form-group  col-md-4">
            <label class="control-label">Skills</label>
            <input type="text" name="skills" placeholder=" Skills" class="form-control input-lg"  required="">
          </div>
              <div class="form-group  col-md-6">
            <label class="control-label">Jobs Short description</label>
            <textarea type="text" name="jobs_short_description" placeholder=" Jobs Short description" required="" class="form-control input-lg"></textarea>
          </div>
            <div class="form-group  col-md-6">
            <label class="control-label">Long Description</label>
            <textarea type="text" name="long_description" placeholder=" Long Description" class="form-control input-lg" required=""></textarea>
          </div>
              <div class="form-group  col-md-6">
            <label class="control-label">Job Location</label>
            <input type="text" name="job_location" placeholder=" Job Location" class="form-control input-lg"  required="">
          </div>
              <div class="form-group  col-md-6">
            <label class="control-label">Industry</label>
            <input type="text" name="industry" placeholder=" Industry" class="form-control input-lg" required="">
          </div>-->
            
<!--          <div class="checkbox form-group col-md-12">
            <label>
              <input type="checkbox"> Agree the <a href="#">terms and policy</a>
            </label>
          </div>-->
          <button type="submit" class="btn btn-primary">Add Company</button>
          <div class="line line-dashed"></div>
          <!--<p class="text-muted text-center"><small>Already have an account?</small></p>-->
          <!--<a href="<?php // echo site_url();?>/medicodose/dashboard" class="btn btn-default btn-block">Back</a>-->
        </form>
      </section>
    </div>
    <script>
	initSample();
</script>
    <script>
    function get_user_id(searchKey) {
        //alert(searchKey);
//        var str = searchKey;
        $.ajax({
            url: "<?php echo BASE_URL; ?>medicodose/get_user_id_exists",
            type: 'POST',
            dataType: 'json',
            data: {value: searchKey},
            success: function (data) {
//                alert(data.status);
                if (data.status) {
                    $("#hdn_user_id").val(data.userData.user_id);
                    if(data.userData.user_id!=''){
                      $('#alreadyexists').html('* User id already exists');  
                    }else{
                        $('#alreadyexists').html(); 
                    }
                } else {
//                    alert('1');
                      document.getElementById("hdn_user_id").value = '';
                      document.getElementById("alreadyexists").innerHTML = '';
                    // Some code to run when nothing is found
                }
            }
        });
      }
      </script>
  <!--</section>-->
