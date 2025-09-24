<section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="#"><i class="fa fa-pencil"></i>Change Password</a></li>
              </ul>
      <section class="panel panel-default m-t-lg bg-white">
        <header class="panel-heading text-center">
          <strong>Change Password</strong>
        </header>
        <form action="<?php echo BASE_URL?>medicodose/ChkChangePassword" method="post" class="form-horizontal" style="margin-top:1%;">
            <div class="form-group">
            <!--<input type="text" name="Staff_id" id="Staff_id">-->
<label class="control-label col-md-4">Current Password </label>
            
 <div class="col-md-4">
     <input class="form-control " type="password" name="OldPassword" id="crpassword" required="">
            </div>
          </div>
            <div class="form-group">
            <label class="control-label col-md-4">New Password </label>
            <button style="background: white; border: none;cursor: pointer;position: absolute;right: 35%;top: 170px;z-index: 99999999;" type="button" id="eye" onclick="if(npassword.type=='text')npassword.type='password'; else npassword.type='text';">
                         <i class="fa fa-eye"></i>
              </button>
            <div class="col-md-4">
                <input class="form-control " name="NewPassword" type="password" id="npassword" minlength="6" required="">
            </div>
          </div>
            <div class="form-group">
            <label class="control-label col-md-4">Confirm Password</label>
            <button style="background: white; border: none;cursor: pointer; position: absolute; right: 35%; top: 223px; z-index: 99999999;" type="button" id="eye" onclick="if(cpassword.type=='text')cpassword.type='password'; else cpassword.type='text';">
                         <i class="fa fa-eye"></i>
              </button>
            <div class="col-md-4">
                <input class="form-control " name="CPassword" type="password" id="cpassword" minlength="6" required="">
            </div>
          </div>
            <div class="form-group">
            <label class="control-label col-md-4"></label>
            <div class="pager">
                <input type="submit" style="background: rgb(60, 118, 61);color: white;"  class="btn btn-primary-outline "  value="Change Password"/>
            </div>
          </div>
        </form>
      </section>
    </div>
     <div id="successMessage"> <?php if ($this->session->flashdata('message')) : ?>
        <p style=" margin-left: 40%;font-size: 18px;font-weight: bold;color: #6eb757">
                <?php echo '<script>alert("'.$this->session->flashdata('message').'");</script>' ?></p>
        <?php endif; ?> </div>
  <!--</section>-->
