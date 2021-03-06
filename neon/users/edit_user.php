<?php
session_start();
if(!isset($_SESSION['welcome'])) {
    header('location:/Creative-IT/neon/login/login.php');
}
require '../db.php';
$id = $_GET['id'];
$select_users = "SELECT * FROM users WHERE id=$id";
$select_users_result = mysqli_query($con,$select_users);
$after_assoc_user = mysqli_fetch_assoc($select_users_result);
require '../include/header.php';
require '../dashboard_includes/header.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
<nav class="breadcrumb sl-breadcrumb">
<a class="breadcrumb-item" href="../admin.php">Neon</a>
<a class="breadcrumb-item" href="../users/show.php">Users</a>
<span class="breadcrumb-item active">Edit</span>
</nav>

<div class="sl-pagebody">
 <div class="row m-auto">
            <div class="col-lg-8 m-auto mt-5">
                <div class="card mb-3 shadow">
                    <div class="row g-0">
                        <div class="col-md-4 col-sm-12">
                        <img src="../img/bg.jpg" class="img-fluid rounded-start images" style="width: 600px;height:400px" alt="...">
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="card-body">
                                <h5 class="title">Update User </h5>
                                <hr>
                                <form action="update.php" method="POST" enctype="multipart/form-data">
                                    <!-- name input felid -->
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" name="name" value="<?= $after_assoc_user ['name'] ?>" class="form-control" placeholder="Username">
                                    </div>
                                    <!-- name error message -->
                                    <?php 
                                        if(isset($_SESSION['name_error'])) {
                                            ?>
                                                <span style="color:tomato"><?= $_SESSION['name_error'] ?></span>
                                            <?php
                                        }unset($_SESSION['name_error']);
                                    ?>
                                    <!-- email input felid -->
                                    <div class="input-group mt-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                        <input type="email" name="email" value="<?= $after_assoc_user ['email'] ?>" class="form-control" placeholder="Email">
                                    </div>
                                    <!-- name error message -->
                                    <?php 
                                        if(isset($_SESSION['email_error'])) {
                                            ?>
                                                <span style="color:tomato"><?= $_SESSION['email_error'] ?></span>
                                            <?php
                                        }unset($_SESSION['email_error']);
                                    ?>
                                    <!-- password input felid -->
                                    <div class="input-group mt-3 position-relative">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="password" id="pass" class="form-control" placeholder="Password">
                                        <!-- <i class="fa fa-eye position-absolute" id="click"></i> -->
                                    </div>
                                    <!-- password error message -->
                                    <?php 
                                        if(isset($_SESSION['password_error'])) {
                                            ?>
                                                <span style="color:tomato;"><?= $_SESSION['password_error'] ?></span>
                                            <?php
                                        }unset($_SESSION['password_error']);
                                    ?>
                                    <!-- image input felid -->
                                    <div class="input-group mt-3">
                                        <input type="file" name="profile_image" class="form-control">
                                    </div>
                                    <!-- button -->
                                    <div class="input-group mt-3">
                                        <input type="hidden" class="button" value="<?= $after_assoc_user ['id'] ?>" name="id" >
                                        <input type="submit" class="btn btn-success" value="Update" name="submit" >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## --> 
<?php 
require '../include/footer.php';
require '../dashboard_includes/header.php';
?>