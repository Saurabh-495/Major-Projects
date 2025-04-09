<?php

function adminLogin(){
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        echo "
        <script>window.location.href='./index.php';
        </script>
        ";
    }
}

function redirect($url){
    echo "
    <script>window.location.href='$url';
    </script>
    ";

}


function alert($type, $message)
{
    $bs_class = $type == "success"? "alert-success" : "alert-danger";
    echo"<div class='alert $bs_class custom-alert alert-dismissible fade show custom-alert shadow-none' role='alert'>
                            <strong class=''></strong>$message
                            <button type='button' class='btn-close shadow-none' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
}

