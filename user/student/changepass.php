<?php
session_start();
if (!isset($_SESSION["student"])) {
?>
	<script type="text/javascript">
		window.location = "login.php";
	</script>
<?php
}
include 'inc/header.php';
include 'inc/connection.php';
?>
<!--dashboard area-->
<div class="dashboard-content">
	<div class="dashboard-header">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="left">
						<p><span>Bảng điều khiển</span>User panel</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="right text-right">
						<a href="dashboard.php"><i class="fas fa-home"></i>home</a>
						<span class="disabled">đổi mật khẩu</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form action="" class="pass-content" method="post">

						<b>Mật khẩu hiện tại:</b>
						<input type="password" class="form-control mt-10" name="cpassword" placeholder="Mật khẩu hiện tại">
						<br>
						<b>Mật khẩu mới:</b>
						<input type="password" class="form-control mt-10" name="npassword" placeholder="Mật khẩu mới">
						<br>
						<b>Xác nhận mật khẩu mới:</b>
						<input type="password" class="form-control mt-10" name="conpass" placeholder="Xác nhận mật khẩu mới">
						<br>
						<input type="submit" name="submit" class="btn" value="Xác nhận">
					</form>
					<?php
					if (isset($_POST["submit"])) {

						$cpass    = $_POST['cpassword'];
						$npass    = $_POST['npassword'];
						$conpass  = $_POST['conpass'];
						$res = mysqli_query($link, "select password from std_registration where username='$_SESSION[student]'");
						while ($row = mysqli_fetch_array($res)) {
							$pass   = $row['password'];
						}
						if ($cpass != $pass) {
					?>
							<div class="alert alert-warning">
								<strong style="color:#333">Invalid!</strong> <span style="color: red;font-weight: bold; ">Sai password</span>
							</div>
							<?php
						} else {
							if ($npass == $conpass) {
								mysqli_query($link, "update std_registration set password='$npass' where username='$_SESSION[student]'");

							?>
								<div class="alert alert-success">
									<strong style="color:#333">Success!</strong> <span style="color: green;font-weight: bold; ">Mật khẩu đã được thay đổi</span>
								</div>
							<?php
							} else {
							?>
								<div class="alert alert-warning">
									<strong style="color:#333">Không trùng khớp!</strong> <span style="color: red;font-weight: bold; ">Mật khẩu của bạn</span>
								</div>
					<?php
							}
						}
					}
					?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php
include 'inc/footer.php';
?>