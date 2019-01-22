<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
if(isset($_POST['insert_cat']))
{
    $pro_cat = $_POST['cat_title'];
    $insert_product = "insert into categories (cat_title) VALUES ('$pro_cat');";
    $insert_pro = mysqli_query($con, $insert_product);
    if($insert_pro){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}
?>
<h1 class="text-center my-4"><i class="fas fa-band-aid"></i> <span class="d-none d-sm-inline"> Add New </span> Category </h1>
<form action="insert_category.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-4 mt-auto">
            <label for="admin_username" class="float-md-right"> <span class="d-sm-none d-md-inline"> Category: </span></label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <div class="input-group">
                <input type="text" class="form-control" id="cat_title" name="cat_title" placeholder="Enter Category">
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-4 mt-auto"></div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <button type="submit" name="insert_cat" class="btn btn-primary btn-block">Add Category</button>
        </div>
    </div>
</form>

