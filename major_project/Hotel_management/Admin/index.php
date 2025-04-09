<?php
require('./include/config.php');
 require('./include/essential.php');

session_start();

    if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        redirect('./dashboard.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login panel</title>
    
    <?php require('include/links.php') ?>
    <style>
        .login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }

        
    </style>
</head>

<body class="bg-light">

    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form action="" method="POST">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <form action="#" autocomplete="off">
                <div class="p-4">
                    <div class="mb-3">
                        <input type="text" required name="admin_name" placeholder="Admin Name" class="form-control text-center shadow-none" />
                    </div>
                    <div class="mb-3">
                        <input type="password" required name="admin_pass" placeholder="Password" class="form-control text-center shadow-none" />
                    </div>
                    <button type="submit" name="login" class="btn text-white custom-bg shadow none">LOGIN</button>
                </div>
            </form>
        </form>
    </div>

    <?php
    // prepared statements

    if (isset($_POST['login'])) {
        // print_r($_POST);
        $frm_data = filteration($_POST);
        // echo "<h1>$frm_data[admin_name]</h1>";
        // echo "<h1>$frm_data[admin_pass]</h1>";
        // print_r($frm_data);

        $query = "SELECT * FROM `admin_panel`  WHERE `admin_name` = ? AND `admin_pass` = ?";
        $values = [$frm_data['admin_name'], $frm_data['admin_pass']];
        // $datatypes = "ss";

        $res = select($query, $values, "ss");
        if ($res->num_rows == 1) {
            // alert('success','Successfully ! Login');
            // echo "got user";
            $row = mysqli_fetch_assoc($res);
            // session_start();
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminId'] = $row['sr_no'];  // db table
            // header('Location: dashboard.php'); 
            // js use karnge
            redirect("./dashboard.php");
        } else {
            alert('Error!','Login Error- Invalid crediantials');
        }
    }
    ?>

    <?php require('./include/scripts.php') ?>
</body>

</html>