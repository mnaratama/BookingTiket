<?php  $this->load->view('layout_admin/header');?>
<?php  $this->load->view('layout_admin/menu_samping');?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data Tables
          <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Data tables</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">

          <div class="box">
              <div class="box-header">
                <h3 class="box-title">Edit data</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
              <?php foreach ($tb_trasportation as $t) {
               
              ?>
              <!-- form start -->
            <form  action=<?php echo base_url("crud/update_rute"); ?> method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Code</label>
                    <input type="hidden" class="form-control" name="id" value=<?php echo $t->id;?>  />
                  <input type="text" class="form-control" name="code" value=<?php echo $r->code;?> />
                </div>
                 <div class="form-group">
                  <label>Description</label>
                  <input type="text" class="form-control" name="description"  value=<?php echo $r->description;?> />
                </div>
                  <div class="form-group">
                  <label >Seat_qty</label>
                  <input type="text" class="form-control" name="seat_qty" value=<?php echo $r->seat_qty;?> />
                </div>
                <div class="form-group">
                  <label> transportation_type_id</label>
                  <select class="form-control" name=" transportation_type_id">
                    <option <?php if($r->price==='250000'){echo "selected";} ?> value="250000">Rp 250.000</option>
                    <option  <?php if($r->price==='500000'){echo "selected";} ?> value="500000">Rp 500.000</option>
                    <option <?php if($r->price==='750000'){echo "selected";} ?> value="750000">Rp 750.000</option>
                    <option  <?php if($r->price==='1000000'){echo "selected";} ?> value="1000000">Rp 1.000.000</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="submit" value="submit" class="btn btn-primary"/>
              </div>
            </form>
             </div>
             <!-- /.box-body -->
             <?php  } ?>
          </div>
           <!-- /.box -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
 <?php  $this->load->view('layout_admin/footer');?>