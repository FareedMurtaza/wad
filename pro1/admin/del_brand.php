<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
if(isset($_GET['del_br'])){
    $del_id = $_GET['del_br'];
    echo $del_id;
    /*
    $del_b = "delete from brands where brand_id='$del_id'";
    $run_del = mysqli_query($con,$del_b);
    if($run_del){
        header('location: index.php?view_brands');
    }*/
}