<?php
include('connect.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
</style>
</head>
<body>
    <nav class="navbar navbar-default navbar-expand-lg navbar-light bg-light"
    >
        <a class="navbar-brand" href="#" style="color: white;">Hidden brand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01"  >
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
            <li class="nav-item ">
              <a class="nav-link" href="index.php" style="color: white;">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="donate.php" style="color: white;" >donate</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signin.php" style="color: white;">Signin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="data.php" style="color: white;">Donar</a>
              </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid red-background size" style="background-image: linear-gradient(315deg, #f55656 0%, #f11c39 74%);">
	<div class="row" >
		<div class="col-md-6 offset-md-3">
			<h1 class="textheading" style="padding-top:5%; text-align:center; ">DONORS</h1>
            <hr class="white-bar" style="background-color: white; width:40%; height:3px">
		</div>
	</div>
</div>
<!--<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Are you delete this record?</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <form target="" method="post">
                <br>
                <input type="hidden" name="delId" value="">
                <button type="submit" name="delete" class="btn btn-danger">Yes</button>

                <button type="button" class="btn btn-info" data-dismiss="alert">
                <span aria-hidden="true">Oops! No </span>
                </button>      
            </form>
     </div>
<br><div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Message</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>-->
<div class="container" style="padding: 60px 0;">
	<div class="row data">
    <?php
    $sql="SELECT * from donar";
    $result=mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            if($row['save_life_date']=='0'){
echo'<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
                <span class="name" >'.$row['name'].'</span>
                <span>'.$row['city'].'</span>
                <span >'.$row['gender'].'</span>
                <span>'.$row['blood_group'].'</span>
                <span>'.$row['Email'].'</span>
                <span>'.$row['phoneno'].'</span>
               ';
            }else{ 
                echo'<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
                <span class="name">'.$row['name'].'</span>
                <span >'.$row['city'].'</span>
                <span >'.$row['gender'].'</span>
                <span >'.$row['blood_group'].'</span>
                <h4 class="name text-center">DONATED</h4>';


            }
        }

    }else{
        $error='<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data not found</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    ?>	


	</div>
</div>

</body>