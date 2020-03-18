<?php include('header.php'); 
if(isset($_POST['submit'])){
 
 
      


      if(isset($_POST['edit'])){
           
             $where_condition = array(  
                     'id' => $_POST["edit"]
                 );  
               
                  // All key names are collumn name of db table collumns.
                    $update_data = array(  
                       
                 
  'Location_no'  =>    mysqli_real_escape_string($data->con, $_POST['Location No']),
                  'District'  =>     mysqli_real_escape_string($data->con, $_POST['District']),  
    'City'  =>   mysqli_real_escape_string($data->con, $_POST['City']),
    'Capacity'  =>   mysqli_real_escape_string($data->con, $_POST['Capacity']),
    'Plot_no'  =>   mysqli_real_escape_string($data->con, $_POST['Plot No']),
    'Total_area'  =>   mysqli_real_escape_string($data->con, $_POST['Total Area']),


       
                       
                      );
               
       
              if($data->update("location", $update_data, $where_condition))  
              {  
               
                   header("location:chatbot.php?updated=1");  
              }



        }else{

              $insert_data = array(

 'Location_no'  =>    mysqli_real_escape_string($data->con, $_POST['Location No']),
                  'District'  =>     mysqli_real_escape_string($data->con, $_POST['District']),  
    'City'  =>   mysqli_real_escape_string($data->con, $_POST['City']),
    'Capacity'  =>   mysqli_real_escape_string($data->con, $_POST['Capacity']),
    'Plot_no'  =>   mysqli_real_escape_string($data->con, $_POST['Plot No']),
    'Total_area'  =>   mysqli_real_escape_string($data->con, $_POST['Total Area']),


       
                          );


           if($data->insert("location",$insert_data))
          {
            $success_message='inserted';
          }

        }

   
} // isset post end

 if(isset($_GET['edit'])){  // display input box values
       
        $where=array(
        'id' => $_GET["edit"]
        );
        $post=$data->select_where("location",$where);
                     
       $Location_no =$post->Location_No;
       $City =  $post->City;
       $Capacity = $post->Capacity;
       $Plot_no = $post->Plot_No;
       $Total_area = $post->Total_Area;

   }  

    if(isset($_GET["delete"]))  
        {  
          $where = array(  
               'd_id'     =>     $_GET["delete"]  
          );  
          if($data->del("location", $where))  
          {  
               //header("location:add_event.php?deleted=1");  
          }  
    }
?>

<?php include('sidebar.php'); ?>

 <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> LOCATION TABLE</h3>
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Location Table</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>Location No</th>
                    <th>District</th>
                    <th>City</th>
                    <th>Capacity</th>
                    <td>PlotNo</td>
                    <td>Total Area</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
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

