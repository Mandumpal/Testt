<?php include('header.php'); 


if(isset($_POST['submit'])){
 


      if(isset($_POST['edit'])){
           
             $where_condition = array(  
                     'id' => $_POST["edit"]
                 );  
               
                  // All key names are collumn name of db table collumns.
                    $update_data = array(  
                       
                 
                       'User_no'  =>    mysqli_real_escape_string($data_obj->con, $_POST['User_no']),
                       'Name'  =>     mysqli_real_escape_string($data_obj->con, $_POST['Name']),
                       'Phone_no'  =>     mysqli_real_escape_string($data_obj->con, $_POST['Phone_no']),
                       'User_name'  =>   mysqli_real_escape_string($data_obj->con, $_POST['UserName']),
                       'Password'  =>   mysqli_real_escape_string($data_obj->con, $_POST['Password'])
                       
                       
                       
                      );
               
       
              if($data_obj->update("user_registration", $update_data, $where_condition))  
              {  
               
                   header("location:chatbot.php?updated=1");  
              }



        }else{

              $insert_data = array(
                       'Vehicle_no'  =>  mysqli_real_escape_string($data_obj->con, $_POST['Vehicle_no']),
                       'Vehicle_name'  =>     mysqli_real_escape_string($data_obj->con, $_POST['Vehicle_name']),
                       'Image'  =>     mysqli_real_escape_string($data_obj->con, $_FILES['Image']['tmp_name'])
                         
                   
                  );


           if($data_obj->insert("vehicle_details",$insert_data))
          {

            $success_message='inserted';
          }

        }

   
} // isset post end

 if(isset($_GET['edit'])){  // display input box values
       
        $where=array(
        'id' => $_GET["edit"]
        );
        $post=$data_obj->select_where("user_registration",$where);
                     
       $User_no =$post->User_no;
       $Name =  $post->Name;
       $Phone_no =  $post->Phone_no;
       $User_name = $post->User_name;
       $Password = $post->Password;
       
   }  

    if(isset($_GET["delete"]))  
        {  
          $where = array(  
               'd_id'     =>     $_GET["delete"]  
          );  
          if($data_obj->del("user_registration", $where))  
          {  
               //header("location:add_event.php?deleted=1");  
          }  
    }
?>



<?php include('sidebar.php'); ?>
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Vehicles Details</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Vehicles Details</h4>
              <form class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                <div class="form-gr oup">
                  <label class="col-sm-2 col-sm-2 control-label">Vehicle_no</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Vehicle_no">
                  </div>
                </div><br><br><br>
                <div class="form-gr oup">
                  <label class="col-sm-2 col-sm-2 control-label">Vehicle_name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Vehicle_name">
                  </div>
                </div><br><br><br>
                <div class="form-gr oup">
                  <label class="col-sm-2 col-sm-2 control-label">Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="Image">
                  </div>
                </div>

                <input type="submit" class="btn btn-theme" value="vehicleform" name="submit">
               
                
               
                
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

