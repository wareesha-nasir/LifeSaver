<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <link rel="styesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <div class="container-fluid nav-confluid">
            <input type="checkbox" name="" id="check">
        <!-- brandname -->
            <div class="logo-container">
                <h3 class="logo">TECHNOFY</h3>
            </div>
        <!-- options-->
            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="index.php">HOME</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="donate.php">DONATE</a>
         </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="data.php">DONOR</a>
                        </li>
                        <li class="nav-link" style="--i: .65s">
                            <a href="#"><?php if(isset($_SESSION['name'])) echo $_SESSION['name']?></a>   
                        </li>
                       
                        <li class="nav-link" style="--i: .65s">
                            <a href="#">LOGOUT</a>   
                        </li>
                        
      
                    </ul>
                </div>

                <!--<div class="log-sign" style="--i: 1.8s">
                    <a href="registeration.php" class="btn transparent btn-nav">Log in</a>
                    <a href="registeration.php" class="btn solid btn-nav">Sign up</a>
                </div>-->
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="overlay"></div>
        </section>
    </main>
        
        <!-- /.container -->
</body>
</html>