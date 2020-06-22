<?php 

include ("Dataconnect.php");

//adding new interns point starts

 if (isset($_POST['submit'])){

  $a= $_POST['username'];
  $b= $_POST['point'];


    $insert= mysqli_query($connect,"insert into intern(username,point,date) 
      values('$a','$b',now())")or die('could not insert'.mysqli_error($connect));

            if($insert) { 
                 $_SESSION['success'] = "intern point successfully added";
        }

         else { $_SESSION['error'] = "Database error: Could not add intern"; }

}

 $sql = mysqli_query($connect,"SELECT * FROM intern" ) or die("could Not select Register".mysqli_error($connect));

 $count = 0;
 if(mysqli_num_rows($sql)>$count){
 while($row=mysqli_fetch_assoc($sql))

{
   $id[] = $row["id"];
   $username[] = $row["username"];
   $point[] =$row["point"];

   $count++;

}
}
$sn=1;






?>




<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A tool to send airtime to interns with one click">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <link rel="icon" href="logo.jpg" type="image/jpg">
	<title>HNG INTERNSHIP</title>
</head>
<body>
     <nav class="navbar navbar-light" style="background-color: #00aeff">
        <a class="navbar-brand" href="#" id="text">
          <img src="logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="HNG logo" loading="lazy">
         <span style="color: white;"> HNG Internship </span><a style="background-color: red; color: white;" href="index.php">Dashboard</a> 
        </a>
      </nav>

<div class="container-fluid pt-3">
	 <?php if(isset($_SESSION['success'])) {?> <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> <?php echo $_SESSION['success']; ?>
  </div><?php }?>

  <div class="container-fluid pt-3">
   <?php if(isset($_SESSION['success1'])) {?> <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> <?php echo $_SESSION['success1']; ?>
  </div><?php }?>


	<div class="row">
		<div class="col-lg-5 col-md-5 col-xm-12">

 <h2>List of interns and points</h2>
            
  <table class="table" style="background-color: #00aeff; color: white;">
    <thead>
      <tr>
        <th>Username</th>
        <th>Point</th>

      </tr>
    </thead>
    <tbody>
    	
      <tr>
        <td>Mavisvictor</td>
        <td>3</td>

      </tr>

       <?php for($d = 0; $d < $count; $d++){ ?>
      <tr>
        <td><?php echo $username[$d] ?></td>
        <td><?php echo $point[$d] ?></td>
      </tr>
             <?php } ?>
    </tbody>
  </table>

		</div>

		<div class="col-lg-7 col-md-5 col-xm-12" style="background-color: white; border: 2px solid #f9f9f9; border-radius: 25px;">



		<h4 class="text-center">Add Interns Points</h4>

		<form action="" method="post" enctype="multipart/form-data">

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity"><strong> Username </strong></label>
      <input type="text" class="form-control" name="username" id="inputCity" placeholder="Enter interns Username" required="" >
    </div>

    <div class="form-group col-md-4">
      <label for="inputState"><strong> Point </strong></label>
       <input type="number" class="form-control" id="inputZip" name="point" placeholder="Enter Point " required="">
    </div>

  </div>


  <input type="submit" name="submit" value="ADD" class="btn btn-success">

</form>







		</div>


	</div>
</div>

</body>
</html>