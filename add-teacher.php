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
include 'inc/tfunction.php';
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
                        <a href="add-student.php"><i class="fas fa-user"></i>Thêm học sinh</a>
                        <span class="disabled">thêm giáo viên</span>
                    </div>
                </div>
            </div>

            <div class="addUser">
                <div class="gap-40"></div>
                <div class="reg-body user-content">
                    <?php if (isset($error_m)) : ?>
                        <span class="errort"> <?php echo $error_m; ?></span>
                    <?php endif ?>
                    <h4 style="text-align: center; margin-bottom: 25px;">Đăng ký giáo viên</h4>
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
                            <label for="lecturer">Giảng viên <span>*</span></label>
                            <input type="text" class="form-control custom" placeholder="lecturer / dept" name="lecturer" />
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
                            <label for="session">Id<span>*</span></label>
                            <input type="text" class="form-control custom" placeholder="Id" name="idno" />
                        </div>
                        <?php if (isset($error_id)) : ?>
                            <span class="error"><?php echo $error_id; ?></span>
                        <?php endif ?>
                        <div class="form-group">
                            <label for="address">Địa chỉ <span>*</span></label>
                            <textarea name="address" id="address" class="form-control custom" placeholder="Địa chỉ"></textarea>
                        </div>
                        <div class="submit">
                            <input type="submit" value="Đăng ký" class="btn change" name="submit">
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