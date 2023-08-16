<?php
session_start();
require_once('header.php');

?>

<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <?php if (isset($_SESSION['updated_msg'])) : ?>
                <h5 class="text-success"><?=$_SESSION['updated_msg'];?></h5>
            <?php endif; unset($_SESSION['updated_msg']);?>

            <?php if (isset($_SESSION['updated_error_msg'])) : ?>
                <h5 class="text-danger"><?=$_SESSION['updated_error_msg'];?></h5>
            <?php endif; unset($_SESSION['updated_error_msg']);?>

            <h5 class="card-title">Change Name & Email</h5>
        </div>
        <div class="card-body">
            <div class="example-container">
                <div class="example-content">
                    <form action="profile_setting_post.php" method="POST">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="<?php if(isset($_SESSION['login_name'])) : echo $_SESSION['login_name']; endif?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="<?php if(isset($_SESSION['login_email'])) : echo $_SESSION['login_email']; endif?>">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="update_name_email">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Profile Photo Upload</h5>
        </div>
        <div class="card-body">
            <div class="example-container">
                <div class="example-content">
                    <form>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Password Update</h5>
        </div>
        <div class="card-body">
            <div class="example-container">
                <div class="example-content">
                    <form action="profile_setting_post.php" method="POST">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password">
                                <?php if (isset($_SESSION['pass_error'])) : ?>
                                    <h5 class="text-danger"><?=$_SESSION['pass_error'];?></h5>
                                <?php endif; unset($_SESSION['pass_error']);?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="confirm_password">
                                <?php if (isset($_SESSION['confirm_pass_error'])) : ?>
                                    <h5 class="text-danger"><?=$_SESSION['confirm_pass_error'];?></h5>
                                <?php endif; unset($_SESSION['confirm_pass_error']);?>
                                <?php if (isset($_SESSION['match_pass_error'])) : ?>
                                    <h5 class="text-danger"><?=$_SESSION['match_pass_error'];?></h5>
                                <?php endif; unset($_SESSION['match_pass_error']);?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="password_update">Password Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
require_once('footer.php');
?>