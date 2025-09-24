<script>
    function status(tableIsactiveid) {
//        alert(tableIsactiveid);
        if (confirm("Are you sure to change status ?")) {
            $.ajax({
                url: "<?php echo site_url(); ?>/adminclickacareer/status", //maintains the (controller/function/argument) logic in the MVC pattern
                type: "post",
                data: {tableIsactiveid: tableIsactiveid},
                success: function (data) {
//                    alert(data);
                    location.reload();
//        console.log(data);
                }
            });
        }
    }
    </script>
     <style>
         p{
 margin:20px;
 overflow: hidden;
 text-overflow: ellipsis;
 display: -webkit-box;
 -webkit-line-clamp: 2;
 -webkit-box-orient: vertical;
}
/*        .scroll{
            width: 250px;
            height: 65px;
            overflow: scroll;
        }*/
    </style>
<section id="content">
          <section class="vbox">
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="index.html"><i class="fa fa-home"></i> Show Service</a></li>
                <!--<li><a href="#"></a></li>-->
              </ul>
              <section class="panel panel-default">
                <header class="panel-heading">
                  All Services
                  <a href="<?php echo site_url();?>/adminclickacareer/add_service" class="btn btn-s-md btn-default btn-rounded" style="float: right;    margin-top: -8px;"><i class="fa fa-plus-circle"></i> New Service</a>
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
                        <!--<th width="20"><input type="checkbox"></th>-->
                        <th class="th-sortable" data-toggle="class">Sr No.
                          <span class="th-sort">
                            <i class="fa fa-sort-down text"></i>
                            <i class="fa fa-sort-up text-active"></i>
                            <i class="fa fa-sort"></i>
                          </span>
                        </th>
                        <th>Name</th>
                        <th>Description</th>
           
                        <th>Tags</th>
                         <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $SrNo='1';
                        foreach ($objcetgetservice as $value) {                    
                        
                        ?>
                      <tr>
                        <!--<td><input type="checkbox" name="post[]" value="2"></td>-->
                        <td><?php echo $SrNo;?></td>
                        <td><?php echo $value->title;?><span class="thumb-sm avatar pull-left">
            </span></td>
                        
            <td><p><?php echo $value->description;?></p></td>
                        <td><?php echo $value->tags;?></td>
                       
                        
                        <td>
                            <a href="<?php echo site_url();?>/adminclickacareer/edit_service/<?php echo $value->id;?>"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;
                          <!--<a href="#"><i class="fa fa-trash-o"></i></a>-->
                        </td>
                      </tr>
                        <?php $SrNo++; }?>
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
