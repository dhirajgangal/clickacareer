<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/ckeditor/samples/js/sample.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/ckeditor/samples/css/samples.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="index.html"><i class="fa fa-pencil"></i> Add Banner</a></li>
<!--                <li class="active">Workset</li>-->
              </ul>
      <section class="panel panel-default m-t-lg bg-white">
        <header class="panel-heading text-center">
          <strong>Add Banner</strong>
        </header>
          <form action="<?php echo BASE_URL; ?>adminclickacareer/banner_insert" method="POST" enctype="multipart/form-data" class="panel-body wrapper-lg">
          <div class="form-group  col-md-6">
            <label class="control-label">Long Caption</label> <span id="alreadyexists" style="color: red" ></span>
            <input type="text" name="long" id="" placeholder="Long Caption" class="form-control input-lg" required="">
          </div>
          
     
            <div class="form-group  col-md-6">
            <label class="control-label">Short Caption</label>
            <input type="text" name="short" placeholder="Short Caption" class="form-control input-lg"  required="">
          </div>
           <div class="form-group  col-md-4">
            <label class="control-label">Image</label>
            <input type="file" name="fileselect[]" multiple="" placeholder="" class="form-control input-lg" required="">
          </div>
  <label class="control-label">&nbsp;&nbsp;</label>
          <button type="submit" class="btn btn-primary">Add Banner</button>
          <div class="line line-dashed"></div>
          <!--<p class="text-muted text-center"><small>Already have an account?</small></p>-->
          <!--<a href="<?php // echo site_url();?>/medicodose/dashboard" class="btn btn-default btn-block">Back</a>-->
        </form>
      </section>
    </div>
    <script>
	initSample();
</script>
   
  <!--</section>-->
