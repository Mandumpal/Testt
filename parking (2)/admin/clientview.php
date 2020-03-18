<?php include('header.php'); 

if(isset($_POST['submit'])){
 
 
      


      if(isset($_POST['edit'])){
           
             $where_condition = array(  
                     'id' => $_POST["edit"]
                 );  
               
                  // All key names are collumn name of db table collumns.
                    $update_data = array(  
                       
                 
                       'Sl_no'  =>    mysqli_real_escape_string($data_obj->con, $_POST['SLNo']),
                       'Category'  =>     mysqli_real_escape_string($data_obj->con, $_POST['Category']),
                       'Area'  =>   mysqli_real_escape_string($data_obj->con, $_POST['Area'])
                       
                       
                       
                      );
               
       
              if($data_obj->update("admin", $update_data, $where_condition))  
              {  
               
                   header("location:chatbot.php?updated=1");  
              }



        }else{

              $insert_data = array(
                       'Sl_no'  =>  mysqli_real_escape_string($data_obj->con, $_POST['SLNo']),
                      'Category'  =>     mysqli_real_escape_string($data_obj->con, $_POST['Category']),
                       'Area' =>  mysqli_real_escape_string($data_obj->con,$_POST['Area'])
                         
                   
                  );


           if($data_obj->insert("admin",$insert_data))
          {
            $success_message='inserted';
          }

        }

   
} // isset post end

 if(isset($_GET['edit'])){  // display input box values
       
        $where=array(
        'id' => $_GET["edit"]
        );
        $post=$data_obj->select_where("admin",$where);
                     
       $Sl_no =$post->SLNo;
       $Category =  $post->Category;
       $Area = $post->Area;
       
   }  

    if(isset($_GET["delete"]))  
        {  
          $where = array(  
               'Location_Id'     =>     $_GET["delete"]  
          );  
          if($data_obj->del("parking_manager_registration", $where))  
          {  
               //header("location:add_event.php?deleted=1");  
          }  
    }
?>

<?php include('sidebar.php'); ?>

 <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> CLIENT TABLE</h3>
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i>Client Table</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    
                    <th>Location Id</th>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>Password</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
 $loc_data =$data_obj->select("parking_manager_registration");
       foreach ($loc_data as  $fields) {
        
                  ?>
                  <tr>
                    <td><?php echo $fields['Location_Id']; ?></td>

                    <td><?php echo $fields['Name']; ?></td>
                    <td><?php echo $fields['User_name']; ?></td>
                    <td><?php echo $fields['Password']; ?></td>

                   <form method="get">
<td><button class="btn btn-success">Edit</button></td>
                    <td><button class="btn btn-danger" type="submit" name="delete" value="<?php echo $fields['Location_Id']; ?>">Delete</button></td></form>

                  </tr>
                 <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /col-md-12 -->
          
        </div>
       
      </section>
    </section>
  

<?php include('footer.php'); ?>

