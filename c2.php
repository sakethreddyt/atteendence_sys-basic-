<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<body>
<div class="row">
          <div class="col">
            <div class="card mt-5">
              <div class="card-body">
              <div class="card-header">
                <h2 class="display-6 text-center">Attendance Record</h2>
              </div>  
              <table class="table table-bordered text-center">
                  <tr class="bg-dark text-white">
                    <td> Registration number </td>
                    <td> Name </td>
                    <td> Total classes Attended</td>
                    <td> Total Classes </td>
                    <td>Attendance Percentage</td>
                  </tr>
                  <tr>
                  <?php
                   $conn = mysqli_connect('localhost','root','','test');
                   if($conn->connect_error){
                       echo "$conn->connect_error";
                       die("Connection Failed : ". $conn->connect_error);
                   }
                   $var=$_POST["rn"];
                   $query = "select * from registration";
                   $result = mysqli_query($conn,$query);
                   $flag=1;
                  while( $row = mysqli_fetch_array($result))
                    {
                  if($row[0]==$var)
                  {
                    $flag=0;
                    ?>
            
                   <td><?php echo $row['Regnum'];?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['T_Present']; ?></td>
                    <td><?php echo $row['T_Classes']; ?></td>
                    <td><?php echo $row['Percentage']; ?></td>
                   
                    <?php
                    }
                 }
                 if($flag==1)
                 {?>
                 <td></td>
                 <td></td>
                  <td><?php echo "No record Found"?></td>
                  

                 <?php
                 }
                 ?> 
                </tr>
                </table>
                <br>
                <center><button style="width:100px; heigth:70px;font-size:18px;"><a  href="home.html">Home</a></button></center>
              </div>
            </div>
          </div>
        </div>
      </div>
                </body>
                </html>