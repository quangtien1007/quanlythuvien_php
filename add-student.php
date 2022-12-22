<?php
session_start();
if (!isset($_SESSION["username"])) {
?>
    <script type="text/javascript">
        window.location = "login.php";
    </script>
<?php
}
include 'inc/header.php';
include 'inc/connection.php';
include 'inc/function.php';
?>
<!--dashboard area-->
<div class="dashboard-content">
    <div class="dashboard-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left">
                        <p><span>bảng điều khiển</span>Control panel</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right text-right">
                        <a href="dashboard.php"><i class="fas fa-home"></i>home</a>
                        <a href="add-teacher.php"><i class="fas fa-user"></i>thêm giáo viên</a>
                        <span class="disabled">thêm học sinh</span>
                    </div>
                </div>
            </div>
            <div class="addUser">
                <div class="gap-40"></div>
                <div class="reg-body user-content">
                    <?php if (isset($s_msg)) : ?>
                        <span class="success"> <?php echo $s_msg; ?></span>
                    <?php endif ?>
                    <?php if (isset($error_m)) : ?>
                        <span class="error"> <?php echo $error_m; ?></span>
                    <?php endif ?>
                    <h4 style="text-align: center; margin-bottom: 25px;">Đăng ký học sinh</h4>
                    <form action="" class="form-inline" method="post">
                        <div class="form-group">
                            <label for="name" class="text-right">Tên <span>*</span></label>
                            <input type="text" class="form-control custom" placeholder="Tên" name="name" />
                        </div>
                        <div class="form-group">
                            <label for="username">Username <span>*</span></label>
                            <input type="text" class="form-control custom" placeholder="Username" name="username" />
                        </div>
                        <?php if (isset($error_ua)) : ?>
                            <span class="error"> <?php echo $error_ua; ?></span>
                        <?php endif ?>
                        <?php if (isset($error_uname)) : ?>
                            <span class="error"> <?php echo $error_uname; ?></span>
                        <?php endif ?>
                        <div class="form-group">
                            <label for="password">Password <span>*</span></label>
                            <input type="password" class="form-control custom" placeholder="Password" name="password" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span>*</span></label>
                            <input type="text" class="form-control custom" placeholder="Email" name="email" />
                        </div>
                        <?php if (isset($e_msg)) : ?>
                            <span class="error"><?php echo $e_msg; ?> </span>
                        <?php endif ?>
                        <?php if (isset($error_email)) : ?>
                            <span class="error"><?php echo $error_email; ?> </span>
                        <?php endif ?>
                        <div class="form-group">
                            <label for="phone">Số điện thoại<span>*</span></label>
                            <input type="text" class="form-control custom" placeholder="Số điện thoại" name="phone" />
                        </div>
                        <?php if (isset($error_phone)) : ?>
                            <span class="error"><?php echo $error_phone; ?></span>
                        <?php endif ?>
                        <div class="form-group">
                            <label for="sem">Chọn học kỳ<span>*</span></label>
                            <select class="form-control custom" name="sem">
                                <option>1th</option>
                                <option>2nd</option>
                                <option>3rd</option>
                                <option>4th</option>
                                <option>5th</option>
                                <option>6th</option>
                                <option>7th</option>
                                <option>8th</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dept">Department <span>*</span></label>
                            <select class="form-control custom" name="dept">
                                <option>CSE</option>
                                <option>EEE</option>
                                <option>ECE</option>
                                <option>BBA</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="session">Năm học <span>*</span></label>
                            <input type="text" class="form-control custom" placeholder="14/15" name="session" />
                        </div>
                        <div class="form-group">
                            <label for="regno">Số đăng ký <span>*</span></label>
                            <input type="text" class="form-control custom" placeholder="Registration No" name="regno" />
                        </div>
                        <?php if (isset($error_reg)) : ?>
                            <span class="error"><?php echo $error_reg; ?></span>
                        <?php endif ?>
                        <div class="form-group">
                            <label for="address">Địa chỉ <span>*</span></label>
                            <textarea name="address" id="address" class="form-control custom" placeholder="Your address"></textarea>
                        </div>
                        <div class="submit">
                            <input type="submit" value="Thêm" name="submit" class="btn change text-center">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<div class="gap-40"></div>
<?php
include 'inc/footer.php';
?>