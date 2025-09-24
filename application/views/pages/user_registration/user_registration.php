<section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="index.html"><i class="fa fa-pencil"></i> User Registration</a></li>
<!--                <li class="active">Workset</li>-->
              </ul>
      <section class="panel panel-default m-t-lg bg-white">
        <header class="panel-heading text-center">
          <strong>User Registration Form</strong>
        </header>
          <form action="<?php echo BASE_URL; ?>medicodose/do_upload" method="POST" enctype="multipart/form-data" class="panel-body wrapper-lg">
          <div class="form-group  col-md-4">
            <label class="control-label">User Id</label> <span id="alreadyexists" style="color: red" ></span>
            <input type="hidden" name="hdn_user_id" id="hdn_user_id" />
            <input type="text" name="user_id" id="user_id" onkeyup="get_user_id(this.value);" placeholder="465S4DFS6F" class="form-control input-lg" minlength="10" maxlength="10" required="">
          </div>
          
          <div class="form-group  col-md-4">
            <label class="control-label">Name</label>
            <input type="text" name="name" placeholder=" Your name " class="form-control input-lg" required="">
          </div>
            <div class="form-group  col-md-4">
            <label class="control-label">Mobile</label>
            <input type="number" name="mobile" placeholder=" Your Mobile Number" class="form-control input-lg" minlength="12" required="">
          </div>
            <div class="form-group  col-md-4">
            <label class="control-label">Emergency Number</label>
            <input type="number" name="emergency_number" placeholder=" Your name or company" class="form-control input-lg" minlength="12" required="">
          </div>
            <div class="form-group  col-md-4">
            <label class="control-label"> Category</label>
            <select class="form-control input-lg" name="category_id" required="">
                <option value="">Select Category</option>
                <option value="1"> Category1</option>
                <option value="2"> Category2</option>
                <option value="3"> Category3</option>
            </select>
          </div>
            <div class="form-group  col-md-4">
            <label class="control-label">Photo</label>
            <input type="file" name="userFiles[]" class="form-control input-lg" required="">
          </div>
            <div class="form-group col-md-6">
            <label class="control-label">Password</label>
            <input type="password" name="password" placeholder="**********" class="form-control input-lg " minlength="6" required="">
          </div>
          <div class="form-group col-md-6">
            <label class="control-label">Confirm Password</label>
            <input type="password" name="cpassword" id="inputPassword" placeholder="Type again password" minlength="6" required="" class="form-control input-lg ">
          </div>
            <div class="form-group  col-md-6">
            <label class="control-label">Short info</label>
            <textarea type="number" name="short_info" placeholder=" Your Short info or Company" required="" class="form-control input-lg"></textarea>
          </div>
            <div class="form-group  col-md-6">
            <label class="control-label">Address</label>
            <textarea type="text" name="address" placeholder=" Your address" class="form-control input-lg" required=""></textarea>
          </div>
<!--          <div class="checkbox form-group col-md-12">
            <label>
              <input type="checkbox"> Agree the <a href="#">terms and policy</a>
            </label>
          </div>-->
          <button type="submit" class="btn btn-primary">Sign up</button>
          <div class="line line-dashed"></div>
          <!--<p class="text-muted text-center"><small>Already have an account?</small></p>-->
          <!--<a href="<?php // echo site_url();?>/medicodose/dashboard" class="btn btn-default btn-block">Back</a>-->
        </form>
      </section>
    </div>
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
