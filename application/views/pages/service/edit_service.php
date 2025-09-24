<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/ckeditor/samples/js/sample.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/ckeditor/samples/css/samples.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="index.html"><i class="fa fa-pencil"></i> Edit Job</a></li>
<!--                <li class="active">Workset</li>-->
              </ul>
      <section class="panel panel-default m-t-lg bg-white">
        <header class="panel-heading text-center">
          <strong>Edit Job Form</strong>
        </header>
          <form action="<?php echo BASE_URL; ?>adminclickacareer/submit_edit_service" method="POST" enctype="multipart/form-data" class="panel-body wrapper-lg">
          <?php foreach ($objcetgetgeteditservice as $value) { ?>
     
           <div class="form-group  col-md-6">
            <label class="control-label">Title</label> <span id="alreadyexists" style="color: red" ></span>
            <input type="hidden" name="id" id="id" value="<?php echo $value->id;?>" />
            <input type="text" name="title" id="" value="<?php echo $value->title;?>" placeholder="Service Title" class="form-control input-lg" required="">
          </div>
          
     
            <div class="form-group  col-md-6">
            <label class="control-label">Tags</label>
            <input type="text" name="tags" placeholder="Tags" value="<?php echo $value->tags;?>" class="form-control input-lg"  required="">
          </div>
           <div class="form-group  col-md-4">
            <label class="control-label">Description</label>
            <textarea type="text" name="description" placeholder="Service Description " class="form-control input-lg" required=""><?php echo $value->description;?></textarea>
          </div>
  <label class="control-label">&nbsp;&nbsp;</label>
  <?php }?>
          <button type="submit" class="btn btn-primary">Edit Service</button>
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
