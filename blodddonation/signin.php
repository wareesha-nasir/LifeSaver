<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    
<style>
    body{
        padding: 0;
        margin: 0;
    }
	.size{
		min-height: 0px;
		padding: 60px 0 60px 0;

	}
	h1{
		color: white;
        text-align: center;
	}
	.form-group{
       
        font-family: 'Roboto',sans-serif;
	}
	h3{
		color: #ffffff;
		text-align: center;
	}
	.red-bar{
		width: 25%;
        background-color: red;
	}
	.form-container{
        width: 50%;
        height: 50%;
        text-align: left;
        background-image: linear-gradient(315deg, #e26060 0%, #e23b51 74%);
        margin-left: 22%;
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
</style>
</head>
<body>
    <div class="container-fluid red-background size" style="background-image:linear-gradient(315deg, #eb5858 0%, #e23b51 74%); ;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">SignIn</h1>
                <hr class="white-bar">
            </div>
        </div>
    </div>
    <div class="conatiner size ">
        <div class="row">
            <div class="col-md-6 offset-md-3 form-container">
            <h3>SignIn</h3>
            <hr class="red-bar">
            
            <!-- Erorr Messages -->
    
                <form action="" method="post" >
                    
                    <div class="form-group">
                        <label for="email">Email</label><br>
                        <input type="text" name="email_phone" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" placeholder="Password" required class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger btn-lg center-aligned" type="submit" name="SignIn">SignIn</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>

    
</body>
</html>