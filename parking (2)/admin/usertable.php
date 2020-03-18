<?php include('header.php'); 

if(isset($_POST['submit'])){
 
 
      


      if(isset($_POST['edit'])){
           
             $where_condition = array(  
                     'id' => $_POST["edit"]
                 );  
               
                  // All key names are collumn name of db table collumns.
                    $update_data = array(  
                       
                 
                       'User_no'  =>    mysqli_real_escape_string($data->con, $_POST['User No']),
                       'Location'  =>     mysqli_real_escape_string($data->con, $_POST['Location']),
                       'Vehicle'  =>   mysqli_real_escape_string($data->con, $_POST['Vehicle'])
                       
                       
                       
                      );
               
       
              if($data->update("user", $update_data, $where_condition))  
              {  
               
                   header("location:chatbot.php?updated=1");  
              }



        }else{

              $insert_data = array(
                       'User_no'  =>  mysqli_real_escape_string($data->con, $_POST['User No']),
                       'Location'  =>     mysqli_real_escape_string($data->con, $_POST['Location']),
                       'Vehicle' =>  mysqli_real_escape_string($data->con,$_POST['Vehicle'])
                         
                   
                  );


           if($data->insert("user",$insert_data))
          {
            $success_message='inserted';
          }

        }

   
} // isset post end

 if(isset($_GET['edit'])){  // display input box values
       
        $where=array(
        'id' => $_GET["edit"]
        );
        $post=$data->select_where("user",$where);
                     
       $User_no =$post->User_No;
       $Location =  $post->Location;
       $Vehicle = $post->Vehicle;
       
   }  

    if(isset($_GET["delete"]))  
        {  
          $where = array(  
               'd_id'     =>     $_GET["delete"]  
          );  
          if($data->del("user", $where))  
          {  
               //header("location:add_event.php?deleted=1");  
          }  
    }
?>

<?php include('sidebar.php'); ?>

 <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> USER TABLE</h3>
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> User Table</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>User No</th>
                    <th>Location</th>
                    <th>Vehicle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /col-md-12 -->
          
        </div>
       
      </section>
    </section>
  

<?php include('footer.php'); ?>

