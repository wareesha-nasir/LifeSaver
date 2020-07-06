<?php
include('connect.php');

if(isset($_POST['submit'])){
    if(isset($_POST['term']) === true){
        
    }else{
        $termerror='<div class="alert alert-danger alert dismissible fade show" role="alert">
        <strong>Please agree with our terms and condition</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
        </div>';
    }
}


?>