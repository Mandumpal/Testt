<?php include('header.php'); 


if(isset($_POST['add'])){
 
 $insert_data=array(
	'location' => mysqli_real_escape_string($data->con,$_POST['location']),
	'slot_no' => mysqli_real_escape_string($data->con,$_POST['slot_no']),
	'area' => mysqli_real_escape_string($data->con,$_POST['area']),
	'city' => mysqli_real_escape_string($data->con,$_POST['city']),
	'district' => mysqli_real_escape_string($data->con,$_POST['district'])
);
	
		if($data->insert("location",$insert_data))
		{
		header("location:location.php");
		}
	
      


   
} // isset post end


?>



<?php include('sidebar.php'); ?>
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Parking Management Registration</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Security Registration</h4>
              <form class="form-horizontal style-form" method="post">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Location</label>
                  <div class="col-sm-10">
                    <input type="text" name="location" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">No of slots</label>
                  <div class="col-sm-10">
                    <input type="text" name="slot_no" class="form-control">
                    
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">area in sq.feet</label>
                  <div class="col-sm-10">
                    <input type="text" name="area"class="form-control ">
                  </div>
                </div>
               <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">city</label>
                  <div class="col-sm-10">
                    <input type="text" name="city"class="form-control ">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">district</label>
                  <div class="col-sm-10">
                    <input type="text" name="district"class="form-control ">
                  </div>
                </div>
                <input  type="submit" name="add"class="btn btn-theme" value="add">
               
                
               
                
              </form>
            </div>
          </div>
        </div>
          <!-- col-lg-12-->
        </div>
        
        
        
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
<?php include('footer.php'); ?>

