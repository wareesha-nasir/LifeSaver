<?php
include('connect.php');
//include('add.php');
if(isset($_POST['SignIn'])){
    //email check
    if(isset($_POST['email'])&&!empty($_POST['email'])){
           
        $e=$_POST['email'];
    
}

else{
    $eerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
    <strong>fill the email field</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times</span>
    </button>
    </div>';
}
if(isset($_POST['password'])&&!empty($_POST['password'])){
           
    $p=$_POST['password'];
    $p=md5($p);

}

else{
$perror='<div class="alert alert-danger alert dismissible fade show" role="alert">
<strong>fill the password field</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times</span>
</button>
</div>';
}
if(isset($e) && isset($p)){
    $sql="SELECT * from donar where Email='$e' AND passwords='$p'";
    $result=mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $_SESSION['user_id']=$row['id'];
            $_SESSION['name']=$row['name'];
            $_SESSION['email']=$row['Email'];
            $_SESSION['user_id']=$row['id'];
           
            header('Location:index.php');
        }
    }
    else{
        $serror='<div class="alert alert-danger alert dismissible fade show" role="alert">
<strong>Invalid password or email</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times</span>
</button>
</div>';
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link rel="stylesheet" href="donate.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
<style>
    body{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
	.size{
    min-height: 0px;
    padding: 60px 0 40px 0;
    margin-top: 5%;
}
.form-container{
    background-image:linear-gradient(315deg, #be0c0c 0%, #e71d35 74%);
    border: .5px solid #eee;
    border-radius: 5px;
    padding: 20px 10px 20px 30px;
    -webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
color: white;
}
.form-group{
    text-align: left;
}
h1{
    color: white;
    font-family: 'Roboto',sans-serif;
}
h3{
    color: #f7efef;
    text-align: center;
}
.red-bar{
    width: 25%;
    background-color: #eee;
}
</style>
</head>
<body>
<div class="container size">
           <div class="row">
            <div class="col-md-6 offset-md-3 form-container">
        
                        <h3>SignIn</h3>
                        <hr class=red-bar>
                       <?php  if(isset($serror)) echo $serror;?>
            <!-- Erorr Messages -->
    
                <form action="" method="post" novalidate="">
                    
                    <div class="form-group">
                        <label for="email">Email</label><br>
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                        <?php
            if(isset($eerror)) echo $eerror;?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" placeholder="Password" required class="form-control">
                    <?php if(isset($perror)) echo $perror;
            ?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger btn-lg center-aligned" type="submit" name="SignIn">SignIn</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>