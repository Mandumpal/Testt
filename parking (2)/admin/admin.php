<?php include('header.php');
if(isset($_POST['submit'])){
 
 
      


      if(isset($_POST['edit'])){
           
             $where_condition = array(  
                     'id' => $_POST["edit"]
                 );  
               
                  // All key names are collumn name of db table collumns.
                    $update_data = array(  
                       
                 
                       'Name'  =>     mysqli_real_escape_string($data->con, $_POST['Name']),
                       'Phone_no'  =>   mysqli_real_escape_string($data->con, $_POST['Phone Number']),
                       'Email_id'  =>   mysqli_real_escape_string($data->con, $_POST['Email ID']),
                       'User_name' =>   mysqli_real_escape_string($data->con,$_POST['User Name']),
                       'Password'  =>   mysqli_real_escape_string($data->con, $_POST['Password'])
                       
                       
                       
                      );
               
       
              if($data->update("admin_registration", $update_data, $where_condition))  
              {  
               
                   header("location:chatbot.php?updated=1");  
              }



        }else{

              $insert_data = array(
                 
                       // 'Name'  =>     mysqli_real_escape_string($data->con, $_POST['Name']),
                       // 'Phone_no' =>  mysqli_real_escape_string($data->con,$_POST['Phone Number']),
                       // 'Email_id'  =>   mysqli_real_escape_string($data->con, $_POST['Email ID']),
                       'user_name'  =>   mysqli_real_escape_string($data_obj->con, $_POST['user_name']),
                       'password'  =>   mysqli_real_escape_string($data_obj->con, $_POST['password'])
                       print_r($insert_data);
                       exit();
                         
                   
                  );


           if($data->insert("admin",$insert_data))
          {
            $success_message='inserted';
          }

        }

   
} // isset post end

 if(isset($_GET['edit'])){  // display input box values
       
        $where=array(
        'id' => $_GET["edit"]
        );
        $post=$data->select_where("admin_registration",$where);
                     
       $Name =  $post->Name;
       $Phone_no = $post->Phone_Number;
       $Email_id = $post->Email_ID;
       $User_name = $post->User_name;
       $Password = $post->Password;
       
   }  

    if(isset($_GET["delete"]))  
        {  
          $where = array(  
               'd_id'     =>     $_GET["delete"]  
          );  
          if($data->del("admin_registration", $where))  
          {  
               //header("location:add_event.php?deleted=1");  
          }  
    }
   ?>

<?php include('sidebar.php'); ?>

<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Admin Registration</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Admin Registration</h4>
              <form class="form-horizontal style-form" method="post">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                    <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Phone Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control round-form">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">User Name</label>
                  <div class="col-sm-10">
                    <input class="form-control"  name="user_name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email ID</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="" name="password">
                  </div>
                </div>
                <button type="submit" class="btn btn-theme">Sign in</button>
               
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
        <!-- INLINE FORM ELELEMNTS -->
       
       
      </section>
      <!-- /wrapper -->
    </section>

<?php include('footer.php'); ?>

