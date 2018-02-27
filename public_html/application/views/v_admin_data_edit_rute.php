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
              <?php foreach ($tb_rute as $r) {
               
              ?>
              <!-- form start -->
            <form  action=<?php echo base_url("crud/update_rute"); ?> method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Depart at</label>
                    <input type="hidden" class="form-control" name="id" value=<?php echo $r->id;?>  />
                  <input type="text" class="form-control" name="depart_at" value=<?php echo $r->depart_at;?> />
                </div>
                 <div class="form-group">
                  <label>Rute From</label>
                  <input type="text" class="form-control" name="rute_from"  value=<?php echo $r->rute_from;?> />
                </div>
                  <div class="form-group">
                  <label >Rute To</label>
                  <input type="text" class="form-control" name="rute_to" value=<?php echo $r->rute_to;?> />
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <select class="form-control" name="price">
                    <option <?php if($r->price==='250000'){echo "selected";} ?> value="250000">Rp 250.000</option>
                    <option  <?php if($r->price==='500000'){echo "selected";} ?> value="500000">Rp 500.000</option>
                    <option <?php if($r->price==='750000'){echo "selected";} ?> value="750000">Rp 750.000</option>
                    <option  <?php if($r->price==='1000000'){echo "selected";} ?> value="1000000">Rp 1.000.000</option>
                  </select>
                </div>
                <div class="form-group">
                  <label >No. of Passengers</label>
                  <input type="text" class="form-control" name="passengers"/>
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