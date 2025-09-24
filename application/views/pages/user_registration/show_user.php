<script>
    function status(tableIsactiveid) {
//        alert(tableIsactiveid);
        if (confirm("Are you sure to change status ?")) {
            $.ajax({
                url: "<?php echo BASE_URL; ?>medicodose/status", //maintains the (controller/function/argument) logic in the MVC pattern
                type: "post",
                data: {tableIsactiveid: tableIsactiveid},
                success: function (data) {
                    //alert(data);
                    location.reload();
//        console.log(data);
                }
            });
        }
    }
    </script>
<section id="content">
          <section class="vbox">
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#">UI kit</a></li>
              </ul>
              <section class="panel panel-default">
                <header class="panel-heading">
                  All Users
                  <a href="<?php echo site_url();?>/medicodose/signup" class="btn btn-s-md btn-default btn-rounded" style="float: right;    margin-top: -8px;"><i class="fa fa-plus-circle"></i> New User</a>
                </header>
                <div class="row wrapper">
                  <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control input-s-sm inline v-middle">
                      <option value="0">10</option>
                      <option value="1">All</option>
<!--                      <option value="2">Bulk edit</option>
                      <option value="3">Export</option>-->
                    </select>
                    <!--<button class="btn btn-sm btn-default">Apply</button>-->                
                  </div>
                  <div class="col-sm-4 m-b-xs">
                    <div class="btn-group" data-toggle="buttons">
<!--                      <label class="btn btn-sm btn-default active">
                        <input type="radio" name="options" id="option1"> Day
                      </label>
                      <label class="btn btn-sm btn-default">
                        <input type="radio" name="options" id="option2"> Week
                      </label>
                      <label class="btn btn-sm btn-default">
                        <input type="radio" name="options" id="option2"> Month
                      </label>-->
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search" style="width: 200px;    margin-left: 45px;">
<!--                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                      </span>-->
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                        <th width="20"><input type="checkbox"></th>
                        <th class="th-sortable" data-toggle="class">Sr No.
                          <span class="th-sort">
                            <i class="fa fa-sort-down text"></i>
                            <i class="fa fa-sort-up text-active"></i>
                            <i class="fa fa-sort"></i>
                          </span>
                        </th>
                        <th>Photo</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th width="30">Token Code</th>
                        <th>Mobile No.</th>
                        <th>Emergency No.</th>
                        <th>Category</th>
                        <th>Status</th>
                         <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $SrNo='1';
                        foreach ($object_get_user as $value) {                    
                        
                        ?>
                      <tr>
                        <td><input type="checkbox" name="post[]" value="2"></td>
                        <td><?php echo $SrNo;?></td>
                        <td><span class="thumb-sm avatar pull-left">
                                <img src="<?php echo base_url();?>uploads/users_photo/<?php echo $value->photo;?>">
            </span></td>
                        
                        <td><?php echo $value->user_id;?></td>
                        <td><?php echo $value->name;?></td>
                        <td><?php echo $value->token_code;?></td>
                        <td><?php echo $value->mobile;?></td>
                        <td><?php echo $value->emergency_number;?></td>
                        <td><?php echo $value->category_id;?></td>
                        <td><?php 
                        if ($value->is_active == 1) { ?>
                            <span class="label label-success" style="position: absolute;margin-top: 6px;"><a class="table-actions" style="cursor: pointer;color: white;"  onclick="status('ci_user~0~<?php echo $value->id; ?>')">Active
                                    </a></span>
                            <?php } else { ?>
                            <span class="label label-danger" style="position: absolute;margin-top: 6px;"><a class="table-actions" style="cursor: pointer;color: white;"  onclick="status('ci_user~1~<?php echo $value->id; ?>')">InActive
                                    </a></span>
                        <?php } ?></td>
                        <td>
                            <a href="#"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;
                          <a href="#"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                        <?php }?>
                    </tbody>
                  </table>
                </div>
                <footer class="panel-footer">
                  <div class="row">
                    <div class="col-sm-4 text-right text-center-xs">                
                      <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </footer>
              </section>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
