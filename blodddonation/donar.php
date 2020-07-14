<?php
include('connect.php');

if(isset($_POST['submit'])){
    if(isset($_POST['term']) === true){
        if(isset($_POST['name'])&&!empty($_POST['name'])){
            if(preg_match('/^[A-Za-z\s]+$/',$_POST['name'])){
                $name=$_POST['name'];
            }
            else{$nameerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
                <strong>Only lower and upper case and space are allowed</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times</span>
                </button>
                </div>';
      }
        }
        else{
            $nameerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
            <strong>fill the name field</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times</span>
            </button>
            </div>';
        }
        if(isset($_POST['gender'])&&!empty($_POST['gender'])){
           
                $gender=$_POST['gender'];
            
      }
        
        else{
            $gendererror='<div class="alert alert-danger alert dismissible fade show" role="alert">
            <strong>fill the gender field</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times</span>
            </button>
            </div>';
        }
        if(isset($_POST['day'])&&!empty($_POST['day'])){
           
            $gender=$_POST['day'];
        
  }
    
    else{
        $dayerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
        <strong>Please enter the valid day</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
        </div>';
    }
    if(isset($_POST['month'])&&!empty($_POST['month'])){
           
        $gender=$_POST['month'];
    
}

else{
    $montherror='<div class="alert alert-danger alert dismissible fade show" role="alert">
    <strong>Please select the valid month</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times</span>
    </button>
    </div>';
}
if(isset($_POST['year'])&&!empty($_POST['year'])){
           
    $gender=$_POST['year'];

}

else{
$yearerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
<strong>Please select the valid year</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times</span>
</button>
</div>';
}
    }
    else{
        $termerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
        <strong>Please agree our terms and conditions</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
        </div>';
    }
}


?>