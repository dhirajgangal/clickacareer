<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title>ClickACareer | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.css" type="text/css" />
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
 <script>
   setTimeout(function() {
    $('#successMessage').fadeOut('fast');
}, 1000);  
     
//$(function() {
//    setTimeout(function() {
//            $('#successMessage').hide();
//    }, 1000);
//});
</script>
</head>
<body>
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      
      <section class="panel panel-default bg-white m-t-lg">
<a class="navbar-brand block" href="#">ClickACareer</a>
        <header class="panel-heading text-center">
          <strong><div id="successMessage" style=" position: absolute; margin-top: -1%; width: 31%; margin-left: -1.2%"> <?php if ($this->session->flashdata('message')) { ?>
                        <p style="font-size: 14px;font-weight: bold;color: red;position: absolute;margin-left: 20%; margin-top: 1%;">
                                <?php echo $this->session->flashdata('message');  ?></p>
        <?php }  else {?>
                           <p style="font-size: 14px;font-weight: bold;color: red;position: absolute;margin-left: 30%; margin-top: 1%;">
                                <?php echo 'You have logged out.';  ?></p>
                      <?php } ?>
                </div></strong>
        </header>
          
        <form method="post" action="<?php echo BASE_URL?>login" class="panel-body wrapper-lg">
          <div class="form-group">
            <label class="control-label">Your ID</label>
            <input type="text"  name="email" placeholder="Mobile or Email" class="form-control input-lg" required="">
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <button style="background: white; border: none;cursor: pointer;position: absolute;margin-left: 20%; margin-top: 2.5%;" type="button" id="eye" onclick="if(password.type=='text')password.type='password'; else password.type='text';">
                         <i class="fa fa-eye"></i>
              </button>
            <input type="password" id="password" name="password" placeholder="Password" minlength="6" required="" class="form-control input-lg">
          </div>
          <input class="btn btn-lg btn-primary btn-block" type="submit" value="Log in">
          <div class="line line-dashed"></div>
          </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <!--<small>Web app framework base on Bootstrap<br>&copy; 2013</small>-->
      </p>
    </div>
  </footer>
  <!-- / footer -->
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
  <!-- App -->
  <script src="<?php echo base_url();?>assets/js/app.js"></script>
  <script src="<?php echo base_url();?>assets/js/app.plugin.js"></script>
  <script src="<?php echo base_url();?>assets/js/slimscroll/jquery.slimscroll.min.js"></script>
  
</body>
</html>